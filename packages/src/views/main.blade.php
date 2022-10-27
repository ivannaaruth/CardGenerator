

<div class="container">

    <h2>Welcome to Food Menu Generator</h2>
    <h4>You Can Fill the Data of Your Food</h4><hr>


   <form action="" method='POST'>
   <input type="text" name='foodName' placeholder='food name'><br>
   <input type="text" name='foodDesc' placeholder='food description'><br>
   <input type="text" name='price' placeholder='price'><br>
   <input type="text" name='compo' placeholder='main composition'><br>
   <input type="file" name='pict'><hr>
   <a class="btn btn-primary" href="{{ url('/result') }}"  role="button">Create Now</a>


    </form>
  
    

</div>