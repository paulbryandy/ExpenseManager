<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(AddUserRequest $request)
    {
        User::create($request->all());
        return redirect(route('user.index'))->with('message','User Added Successfully!');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            ]);
        return redirect(route('user.index'))->with('message', 'Role Updated!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('message','User Deleted!');
    }
}
