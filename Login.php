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
function validate()//will determine if the value from the user can be used by checking the database
{
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $conn = new mysqli($servername, $username, $password);//Create 
    if ($conn->connect_error)//check
    {
        $conn->close();
        return false;
    }

    $sql = "SELECT username, password, email FROM Users";//interchange names with correct values
    $result = $conn->query($sql);
    foreach($result->fetch_assoc() as $value)
    {			
        if($value["password"] == $_POST["password"] && $value["username"] == $_POST["userName"])
        {
            echo "User Found.";
            $conn->close();//closes the connection
            return true;
        }
        $conn->close();//closes the connection
        return false;
    }
}

?>

<html>

<style>// the formatting of the UI
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
    <head> //the title that will appear in the nav bar of the browser
    <title>Recipe Search - Login</title>
</head>


</head>
<body>//proceeding code is the side bar for the page
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
    <p><b>Please enter your Username:</b><br>//user enters name
    <input type="text" name="username"><br>
    <b>Please enter your Password:</b><br>//user enters password
    <input type="text" name="password"><br>
    <input type="submit"></p>   
       </form>

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
