<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
if(validate() == true)
{
    header("Location: Search.php");
    die();
}
else
{
    echo 'Username or Password doesn\'t match.' ;
}

}



//database connection
function validate()
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
    $u5ername = $_POST["username"];
    $sql = "SELECT * FROM Users WHERE UserName='$u5ername';";
    $result = $conn->query($sql);
   // if($result == false)
   // {
   //     return false;       
    //}
    while($value = $result->fetch_assoc())
    {			
        if($value["Password"] == $_POST["password"])
        {
            $conn->close();
            return true;
        }
        $conn->close();
    }
    return false;
}

?>

<html>

<style>
form
{
  margin-left: 30em;
  margin-top: 5em;
  margin-bottom: 16em;
}
</style>




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



      <form action="Login.php" method="post">
        <h1>Login</h1>
    <p><b>Please enter your Username:</b><br>
    <input type="text" name="username"><br>
    <b>Please enter your Password:</b><br>
    <input type="text" name="password"><br>
    <input type="submit"></p>   
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





<head>   
    <title>Recipe Search - Login</title>
</head>
</html>
