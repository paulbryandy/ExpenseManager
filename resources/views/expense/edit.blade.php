@extends('layouts.dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Expense</h1>
</div>

<form method="post" action="{{route('expense.update' ,$expense->id)}}">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" name="category" value="{{$expense->category}}" class="form-control" id="category">
    </div>
    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" name="amount" value="{{$expense->amount}}" class="form-control" id="amount">
    </div>
    <div class="form-group">
        <label for="entry_date">Entry Date</label>
        <input type="text" name="entry_date" value="{{$expense->entry_date}}" class="form-control" id="entry_date">
    </div>
    
    <button type="submit" class="btn btn-success float-right py-2">Update expense</button>
    <a class="btn btn-secondary float-right py-2 mx-2" href="{{route('expense.index')}}" role="button">Back</a>
    
</form>

@endsection