<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    //Display all users
    public function index()
    {   
        $users = User::all();
        return view('users.index', compact('users'));
    }   

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //validate the request data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string',
            'birthdate' => 'nullable|date',
     ]);
    

    //saving the user to the database
    $user = new User();
    $user->name = $request->fullname;   
    $user->email = $request->email; 
    $user->password = bcrypt($request->password);
    $user->birthdate = $request->birthdate ?? null; // Set birthdate to null if not provided
    $user->save();

    return redirect()->route('user.index')->with('success', 'User created successfully.');
    }  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
    

