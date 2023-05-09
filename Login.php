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
            $conn->close();
            return true;
        }
        $conn->close();
        return false;
    }
}

?>



<html>
<head>   
    <title>Recipe Search - Login</title>
</head>
<body>
 
<form action="Login.php" method="post">
    <p><b>Please enter your Username:</b><br>
    <input type="text" name="username"><br>
    <b>Please enter your Password:</b><br>
    <input type="text" name="password"><br>
    <input type="submit"></p>   
</form>

    
</body>
</html>