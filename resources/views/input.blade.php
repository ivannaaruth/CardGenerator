@extends('layouts.app')

@section('content')

<div class="container">
<h2>You Can Fill the Data of Your Food</h2><hr>


<form action="/fooddetail" method='POST'>
   <h4>Food 1</h4>
   <input type="text" name='foodName' placeholder='food name'>
   <input type="text" name='foodDesc' placeholder='food description'>
   <input type="text" name='price' placeholder='price'>
   <input type="text" name='compo' placeholder='main composition'>
   <input type="file" name='pict'>

   <input type="submit" class="btn btn-primary" name='submit'>


</form>

</div>


@endsection