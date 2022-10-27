

<div class="container">

    <h2>Welcome to Food Menu Generator</h2>
    <h4>You Can Fill the Data of Your Food</h4><hr>


    <form action="" method='POST'>

    <p>Food Name</p>
    <input type="text" id="name" oninput="funcName()" name='foodName' placeholder='food name'><br>
    <p id="pName"></p>
    <script>
        function funcName() {
            var name = document.getElementById("name").value;
            document.getElementById("pName").innerHTML = "Preview Food Name: " + name;
        }
    </script>
    
    <p>Food Description</p>
    <input type="text" id="desc" oninput="funcDesc()" name='foodDesc' placeholder='food description'><br>
    <p id="pDesc"></p>
    <script>
        function funcDesc() {
            var desc = document.getElementById("desc").value;
            document.getElementById("pDesc").innerHTML = "Preview Food Desc: " + desc;
        }
    </script>

    <p>Food Price</p>
    <input type="text" id="price" oninput="funcPrice()" name='price' placeholder='price'><br>
    <p id="pPrice"></p>
    <script>
        function funcPrice() {
            var price = document.getElementById("price").value;
            document.getElementById("pPrice").innerHTML = "Preview Food Price: " + price;
        }
    </script>

    <p>Main Compotition</p>
    <input type="text" id="comp" oninput="funcComp()" name='compo' placeholder='main composition'><br>
    <p id="pComp"></p>
    <script>
        function funcComp() {
            var comp = document.getElementById("comp").value;
            document.getElementById("pComp").innerHTML = "Preview Compotition: " + comp;
        }
    </script>

    <p>Food Image</p>
    <input type="file" name='pict'><hr>
    <a class="btn btn-primary" href="{{ url('/result') }}"  role="button">Create Now</a>

    </form>
  
    

</div>