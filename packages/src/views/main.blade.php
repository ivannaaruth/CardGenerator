<html lang="en">
<head>
    <title>Menu Maker</title>
    <link rel="stylesheet" href="preview.css">
</head>
<body>

<div class="container">

    <h2>Welcome to Food Menu Generator</h2>
    <h4>You Can Fill the Data of Your Food</h4><hr>

    <form action="" method='POST'>

    <label>Food Name</label><br>
    <input type="text" id="name" oninput="funcName()" name='foodName' placeholder='food name'><br>
    
    <label>Food Description</label><br>
    <input type="text" id="desc" oninput="funcDesc()" name='foodDesc' placeholder='food description'><br>

    <label>Food Price</label><br>
    <input type="text" id="price" oninput="funcPrice()" name='price' placeholder='price'><br>

    <label>Main Compotition</label><br>
    <input type="text" id="comp" oninput="funcComp()" name='compo' placeholder='main composition'><br>

    <label>Food Image</label><br>
    <input type="file" id="img" accept="image/*" onchange="loadFile(event)" name='pict'><br>
    
    <a class="btn btn-primary" href="{{ url('/result') }}"  role="button">Create Now</a>

    </form>

    <div class="overlap-group">
    <p id="pName"></p>
    <script>
        function funcName() {
            var name = document.getElementById("name").value;
            document.getElementById("pName").innerHTML = "Preview Food Name: " + name;
        }
    </script>

    <p id="pDesc"></p>
    <script>
        function funcDesc() {
            var desc = document.getElementById("desc").value;
            document.getElementById("pDesc").innerHTML = "Preview Food Desc: " + desc;
        }
    </script>

    <p id="pPrice"></p>
    <script>
        function funcPrice() {
            var price = document.getElementById("price").value;
            document.getElementById("pPrice").innerHTML = "Preview Food Price: " + price;
        }
    </script>

    <p id="pComp"></p>
        <script>
        function funcComp() {
            var comp = document.getElementById("comp").value;
            document.getElementById("pComp").innerHTML = "Preview Compotition: " + comp;
        }
        </script>
    
    <img id="pImg"/>
    <script>
        var loadFile = function(event){
            var img = document.getElementById('pImg');
            img.src = URL.createObjectURL(event.target.files[0]);
            img.onload = function() {
            URL.revokeObjectURL(img.src) // free memory
            }
        }
    </script>

    </div>

</body>
</html>