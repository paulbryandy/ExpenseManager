@extends('layouts.dashboard')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Expenses</h1>
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
@foreach($expenses as $expense)
<p>{{$expense->category}}</p>
@endforeach

@endsection
