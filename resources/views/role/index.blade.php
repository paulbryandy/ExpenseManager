@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Roles</h1>
    <h1 class="h3 mb-0 text-gray-800">User Management > Roles</h1>
</div>
<x-alert />
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Display Name</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
        <tr>
            <td>{{$role->title}}</td>
            <td>{{$role->description}}</td>
            <td>{{$role->created_at}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{route('role.edit',$role->id)}}" role="button">Edit</a>
                <button class="btn btn-outline-danger" onclick="event.preventDefault();if(confirm('Are you sure you want to delete this role?')){document.getElementById('form-delete-{{$role->id}}').submit()}">Delete</button>
                <form style="display:none" id="{{'form-delete-'.$role->id}}" method="post" action="{{route('role.destroy',$role->id)}}">
                @csrf
                @method('delete')
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

    <a class="btn btn-primary float-right mx-4" href="{{route('role.create')}}" role="button">Add Role</a>


@endsection