<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'users' => $users
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
           'username' => 'required',
            'email'   => 'required|email'
        ]);

        $user = User::create([
           'username' => $request->input('username'),
            'email'   => $request->input('email')
        ]);

        return response()->json([
           'message' => 'User created successfully',
            'user'   => $user
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required',
            'email'   => 'required|email'
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json([
            'message' => 'User successfully updated'
        ]);
    }


    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return response()->json([
            'message' => 'User successfully deleted',
        ]);
    }
}
