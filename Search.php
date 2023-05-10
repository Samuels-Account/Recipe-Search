<?php
$recipeName = array();
$description = array();


function sqlStuff($recipeName,$description,$num)
{
  $servername = "localhost";
    $username = "cg6cmf7_herb";
    $password = "cuEXMVERHayi8UY";
    $conn = new mysqli($servername, $username, $password);//Create 
    $conn->query("USE cg6cmf7_RecipeSearch");
    if ($conn->connect_error)//check
    {
        $conn->close();
        return false;
    }
    $sql = "SELECT RecipeName, Desctiption,  FROM Recipes WHERE RecipeID = '$num';";
    $result = $conn->query($sql);
    while($value = $result->fetch_assoc())
    {	
      array_push($recipeName, $value["RecpieName"]);
      array_push($description, $value["Description"]);
    }
    $conn->close();
}


function design($recipeName, $description)
{
    echo "<dt><h3>$recipeName</h3></dt>";//name from database

        echo "<dd>$description</dd>";//the desription of the recipe.
    
    echo "<br>";
}
function allOutputs($recipeName,$description)//produces the output from the database. 20 different recipes
{

    for($x = 0; $x <= 20; $x++)
    {
      sqlStuff($recipeName,$description,$x);
        design($recipeName[$x], $description[$x]);
    }
}
?>

<html>
<head><title>Recipe Search - Search</title></head>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="bar.js"></script>


</head>
<body>
      <div class="hero">
      <div class="sidebar" id="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#">About Us</a>
          <a href="#">My Profile</a>
          <a href="#">Search</a>
          <a href="#">Contact Us</a>
          <a href="#">FAQ</a>
      </div>
      <nav>
          <img src="Images/RECIPESEARCH icon.png" class="logo" style="width:290px;height:45px;">
          <ul>
              <li><a href="#" class="aboutus">ABOUT</a></li>
              <li><a href="#" class="contactus">CONTACT US</a></li>
              <button type="button" class="login btn btn-success">Login</button>
              <img src="Images/search-icon.png" alt="" width="40" height="40" class="search-icon">
              <button class="sidebar-toggle" onclick="openNav()">&#9776;</button>
              <a href="#menu" id="toggle"><span></span></a>
          </ul>
      </nav>

      <form>
    <h1>
        Search for your Recipes
    </h1>
        <?php allOutputs($recipeName,$ingredients); ?>
    </form>
          
      <div class="footer" style="background-color: #f0f0f0;">  
        <div class="footer_menu">
          <div class="col_1">
            <ul>
              <img src="Images/RECIPESEARCH icon-fotor-bg-remover-2023042417244.png" alt="" style="width:290px;height:45px;">
            </ul>
            <p class="footerdescription">We believe that cooking should be a fun and creative activity, and we're <br> committed to providing our users with the resources and support they need <br> to unleash their culinary creativity.</p>
          </div>
          <div class="col_2">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
          <div class="col_3">
            <ul>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <p></p>
        </div>
      </div>

</html>
