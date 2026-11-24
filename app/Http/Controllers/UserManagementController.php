
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    // Display all users
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    // Show the create user form
    public function create()
    {
        return view('users.create');
    }

    // Save a new user
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

        // Only save birthdate if the database has this column
        // $user->birthdate = $validatedData['birthdate'] ?? null;

        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }

    // Display a specific user
    public function show(string $id)
    {
        //
    }

    // Show the edit form
    public function edit(string $id)
    {
        //
    }

    // Update user information
    public function update(Request $request, string $id)
    {
        //
    }

    // Delete a user
    public function destroy(string $id)
    {
        //
    }
}
