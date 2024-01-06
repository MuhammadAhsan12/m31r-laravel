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
        return view('admin.users.usersList');
    }

    public function userData()
    {
        $user = User::all();
        return $user;
    }

    public function view($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json($user, 200);
        } else {
            return response()->json(['message' => 'user not found'], 404);
        }
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
            'status' => 'required|in:active,inactive',
        ]);
        if ($request->has('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }

        $user = User::create($userData);

        return response()->json(['message' => 'User added successfully', 'user' => $user]);
    }

    public function editUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'role' => 'required|in:user,admin',
            'status' => 'required|in:active,inactive',
        ]);
        if ($request->input('password') != "") {
            $validatedData['password'] = Hash::make($request->input('password'));
        }
        $row = User::find($request->id);
        if ($row) {
            $row->update($validatedData);
            return response()->json(['message' => 'User updated successfully']);
        }
        else{
            return response()->json(['message' => 'error occured']);
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['message' => 'user deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'user not found'], 404);
        }
    }
}