@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Caterogy</h1>
</div>

<form method="post" action="{{route('category.update' ,$category->id)}}">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$category->title}}" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$category->description}}" class="form-control" id="description">
    </div>
    
    <button type="submit" class="btn btn-success float-right py-2">Update Category</button>
    <a class="btn btn-secondary float-right py-2 mx-2" href="{{route('category.index')}}" role="button">Back</a>
    
</form>

@endsection