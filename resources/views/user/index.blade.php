@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Role</h1>
    <h1 class="h3 mb-0 text-gray-800">User Management > Role</h1>
</div>
<x-alert />

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Created at</th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->description}}</td>
            <td>{{$user->created_at}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{route('user.edit',$user->id)}}" user="button">Edit</a>
                <button class="btn btn-outline-danger" onclick="event.preventDefault();if(confirm('Are you sure you want to delete this user?')){document.getElementById('form-delete-{{$user->id}}').submit()}">Delete</button>
                <form style="display:none" id="{{'form-delete-'.$user->id}}" method="post" action="{{route('user.destroy',$user->id)}}">
                @csrf
                @method('delete')
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a class="btn btn-primary float-right mx-4" href="{{route('user.create')}}" role="button">Add User</a>

@endsection