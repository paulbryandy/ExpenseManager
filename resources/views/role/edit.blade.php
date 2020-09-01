@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Role</h1>
</div>

<form method="post" action="{{route('role.update' ,$role->id)}}">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$role->title}}" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$role->description}}" class="form-control" id="description">
    </div>
    
    <button type="submit" class="btn btn-success float-right py-2">Update Role</button>
    <a class="btn btn-secondary float-right py-2 mx-2" href="{{route('role.index')}}" role="button">Back</a>
    
</form>
@endsection