@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Expenses</h1>
    <h1 class="h3 mb-0 text-gray-800">Expense Management > Expenses</h1>
</div>

<x-alert />
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Category Expense</th>
            <th scope="col">Amount</th>
            <th scope="col">Entry Date</th>
            <th scope="col">Created at</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($expenses as $expense)
        <tr>
            <td>{{$expense->category}}</td>
            <td>{{$expense->amount}}</td>
            <td>{{$expense->entry_date}}</td>
            <td>{{$expense->created_at}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{route('expense.edit',$expense->id)}}" role="button">Edit</a>
                <button class="btn btn-outline-danger" onclick="event.preventDefault();if(confirm('Are you sure you want to delete this expense?')){document.getElementById('form-delete-{{$expense->id}}').submit()}">Delete</button>
                <form style="display:none" id="{{'form-delete-'.$expense->id}}" method="post" action="{{route('expense.destroy',$expense->id)}}">
                @csrf
                @method('delete')
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a class="btn btn-primary float-right mx-4" href="{{route('expense.create')}}" role="button">Add Expense</a>

@endsection