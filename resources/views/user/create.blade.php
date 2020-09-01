@extends('layouts.dashboard')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
    </div>

    <form method="post" action="{{route('user.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label class="mr-sm-2" for="RoleOptions">Role</label>
            <select class="custom-select mr-sm-2" name="description" id="RoleOptions">
                <option value="Administrator">Administrator</option>
                <option selected value="User">User</option>
            </select>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary float-right py-2">Add User</button>
        <a class="btn btn-secondary float-right py-2 mx-2" href="{{route('user.index')}}" role="button">Back</a>
        
    </form>
    
@endsection