@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Expense Categories</h1>
    <h1 class="h3 mb-0 text-gray-800">Expense Management > Expense Categories</h1>
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
    @foreach($categories as $category)
        <tr>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->created_at}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{route('category.edit',$category->id)}}" role="button">Edit</a>
                <button class="btn btn-outline-danger" onclick="event.preventDefault();if(confirm('Are you sure you want to delete this category?')){document.getElementById('form-delete-{{$category->id}}').submit()}">Delete</button>
                <form style="display:none" id="{{'form-delete-'.$category->id}}" method="post" action="{{route('category.destroy',$category->id)}}">
                @csrf
                @method('delete')
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a class="btn btn-primary float-right mx-4" href="{{route('category.create')}}" role="button">Add Category</a>

@endsection