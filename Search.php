<?php
$recipeName = array("also","dummy","data","crazy");//dummy data that represents the imput from the database
$ingredients = array("this","is","not","real");//same as above
//ingredients needs to be a list of arrays/lists.

function design($recipeName, $ingredients)
{
    echo "<dt><h3>$recipeName</h3></dt>";//name from database
    foreach($ingredients as $value)
    {
        echo "<dd>$value</dd>";//one of the incredients from thedatabase
    }
    echo "<br>";
}
function allOutputs($recipeName,$ingredients)//produces the output from the database. 20 different recipes
{
    for($x = 0; $x <= 20; $x++)
    {
        design($recipeName[$x], $ingredients[$x]);
    }
}
?>

<html>
<head><title>Recipe Search - Search</title></head>//the title that will appear in the nav bar of the web browser in use


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="bar.js"></script>


</head>
<body>//proceeding code is the code relevant for the nav bar to work
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
        <?php allOutputs($recipeName,$ingredients); ?>//where the output will be displayed
    </form>
          
      <div class="footer" style="background-color: #f0f0f0;"> // the proceeding code is the code that makes up the footer of this web page.
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
