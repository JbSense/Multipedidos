<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::create([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return response()->json(['status' => 200]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');

        User::where('id', $id)->update([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return response()->json(['status' => 200]);
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();

        return response()->json(['status' => 200]);
    }

    public function getUser($id)
    {
        return response()->json(['data' => User::where('id', $id)->first()]);
    }

    public function getAllUsers() {
        return response()->json(['data' => User::all()]);
    }
}
