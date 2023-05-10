<?php







function sqlStuff($sql,$recipeName,$description,$num)
{
  echo $sql;
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
    $sql = "SELECT * FROM Recipes WHERE RecipeID = $num;";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $postvalue = $_POST["searchbar"];
      
      $sql = "SELECT * FROM Recipes WHERE RecipeID = $num AND RecipeName LIKE '%{$postvalue}%';";
    }
    


    $result = $conn->query($sql);
    while($value = $result->fetch_assoc())
    {	
      $recipeName = $value["RecipeName"];
    }
    
    //fix
    $result = $conn->query($sql);
    while($value = $result->fetch_assoc())
    {	 
      $description = $value["Description"];
    }
    
    $conn->close();
    echo "<h3>$recipeName</h3>";//name from database
    echo "$description <br>";//the desription of the recipe.
    echo "<input type=\"submit\" id='recipe' name='transfer' value=\"$recipeName\">";
    echo "<br>";
}


function allOutputs($sql,$recipeName,$description)//produces the output from the database. 20 different recipes
{

    for($x = 1; $x <= 20; $x++)
    {
      sqlStuff($sql,$recipeName,$description,$x);
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
  <script src="homepage.js"></script>


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


      <h1>
        Search for your Recipes
      </h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h4>Search: <input type="text" name="searchbar">  <input type="submit"></h4>
    </form>







    <form action="RecipeDetails.php" method="post">
    <div>
        <?php allOutputs($sql,$recipeName,$description); ?>
    </div>
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
