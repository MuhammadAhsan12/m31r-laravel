<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function listView()
    {
        $user = User::all();
        return view('admin.users.usersList')->with('userData', $user);
    }

    public function addUserView()
    {
        return view('admin.users.addUser');
    }

    public function addUser()
    {
        return view('admin.users.addUser');
    }

    public function view(User $user)
    {
        return view('admin.users.viewUser', compact('user'));
    }

    public function viewEdit(User $user)
    {
        return view('admin.users.editUser', compact('user'));
    }

    public function registerUser(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'role' => 'required|in:user,admin',
        ]);
        if ($request->has('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }

        $user = User::create($userData);

        return response()->json(['message' => 'User added successfully', 'user' => $user]);
    }

    public function editUser(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:user,admin',
        ]);

        if ($request->has('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        }

        $user->update($validatedData);

        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}