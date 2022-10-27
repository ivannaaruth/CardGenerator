@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Welcome to Food Menu Generator</h2>
    <h4>You Can Fill the Data of Your Food</h4><hr>


<form action="/fooddetail" method='POST'>
   <input type="text" name='foodName' placeholder='food name'>
   <input type="text" name='foodDesc' placeholder='food description'>
   <input type="text" name='price' placeholder='price'>
   <input type="text" name='compo' placeholder='main composition'>
   <input type="file" name='pict'><hr>

    <a class="btn btn-primary" href="" role="button">Create Now</a>
</form>
</div>


@endsection