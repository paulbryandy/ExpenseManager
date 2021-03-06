@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
</div>

<form method="post" action="{{route('category.store')}}">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Description">
    </div>
    
    <button type="submit" class="btn btn-primary float-right py-2">Add category</button>
    <a class="btn btn-secondary float-right py-2 mx-2" href="{{route('category.index')}}" role="button">Back</a>
</form>


@endsection