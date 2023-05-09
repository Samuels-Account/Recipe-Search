<?php
    
    //import css
    
    //import database information
    
    //parsed information from previous page will allow us to obtain data
    //from database
    $recipe = $_POST["//the paragraph(s) explaining how to make the food"];
    $recipeName = $_POST["//the name from the previos page"];// the name from the previous page that will allow us what to identify what we need from the database

    function obtain()//validates if the connection works and obtains the necessary values from the database
    {
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $conn = new mysqli($servername, $username, $password);//Create 
        if ($conn->connect_error)//check
        {
            $conn->close();//end
            return false;
        }
        $recipe =  "";//sql code to obtain the necessary values
        $ingredients = ""; //maybe a list or string split method my be necessary
        $conn->close();//closes connection
    }
        obtain();
    ?>

<html>
    <head><title>Recipe Search - Details</title></head>//title displayed in the web browser

    <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="homepage.js"></script>

</head>
<body>//proceeding code is for thenavigation bar
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
          
      <h1><?php $recipeName ?></h1>//the name of the recipe
    <h2>Ingredients</h2>//ingredients listed out
        <ul>
        //php method that runs through the ingredients and puts it into a
        //list via 
        <li>          
        </li>
        </ul>
        <h2>Method</h2>
        <p><?php $recipe ?></p>//recipe from the database
        <h2>Reviews</h2>
        <ul>
        //php method that runs through all of the reviews for the recipe 
    <li></li>
    </ul>

      <div class="footer" style="background-color: #f0f0f0;">//proceeding code is for the footer of the page
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
