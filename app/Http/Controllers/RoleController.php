<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\AddRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(AddRoleRequest $request)
    {   
        Role::create($request->all());
        return redirect(route('role.index'))->with('message','Role Added Successfully!');
    }

    public function edit(Role $role)
    {   
        return view('role.edit',compact('role'));
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update([
            'title' => $request->title,
            'description' => $request->description,
            ]);
        return redirect(route('role.index'))->with('message', 'Role Updated!');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->back()->with('message','Role Deleted!');
    }
}
