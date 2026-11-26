<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::all();

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
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:8',
            'birthdate' => 'nullable|date',
        ]);

        $user = new User();

        $user->name = $validatedData['fullname'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);

        $user->save();

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
            'email' => 'required|string|email|max:50|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role' => 'nullable|in:admin,teacher,student',
            'is_active' => 'nullable|boolean',
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

        if (array_key_exists('is_active', $validatedData) && $validatedData['is_active'] !== null) {
            $user->is_active = (bool) $validatedData['is_active'];
        }

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
        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
