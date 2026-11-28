<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->paginate(15);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,teacher,student',
            'is_active' => 'required|in:1,0',
            'birthdate' => 'nullable|date',
        ]);

        User::create([
            'name' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
            'is_active' => $validatedData['is_active'] === '1',
            'birthdate' => $validatedData['birthdate'] ?? null,
        ]);

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return redirect()->route('users.edit', $user->id);
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));  
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);  

        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|in:admin,teacher,student',
            'is_active' => 'required|in:1,0',
            'birthdate' => 'nullable|date',
        ]);

        $user->name = $validatedData['fullname'];
        $user->email = $validatedData['email'];

        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        if (array_key_exists('role', $validatedData) && $validatedData['role'] !== null) {
            $user->role = $validatedData['role'];
        }

        $user->is_active = $validatedData['is_active'] === '1';

        if (array_key_exists('birthdate', $validatedData)) {
            $user->birthdate = $validatedData['birthdate'];
        }

        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if ($user->is(auth()->user())) {
            return redirect()
                ->route('users.index')
                ->with('error', 'You cannot delete the account you are currently using.');
        }

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
