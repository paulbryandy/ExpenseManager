@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update User</h1>
</div>

<form method="post" action="{{route('user.update' ,$user->id)}}">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" value="{{$user->email}}" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label class="mr-sm-2" for="RoleOptions">Role</label>
        <select class="custom-select mr-sm-2" name="description" id="RoleOptions">
            <option value="Administrator">Administrator</option>
            <option selected value="User">User</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-success float-right py-2">Update User</button>
    <a class="btn btn-secondary float-right py-2 mx-2" href="{{route('user.index')}}" role="button">Back</a>
    
</form>

@endsection