<?php	

    //import css
    
    //import database information
	$addValidate = true;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$conn = openConnection();
		if (validate($conn) == true)
		{
			addToDB($conn);
			$conn->close();
		}
	}

    function addToDB($conn)
    {
		$sql = 'INSERT INTO Users (username, password, email) VALUES($_POST["userName"],$_POST["password"],$_POST["email"])';
		if ($conn->query($sql) === TRUE) 
		{
			echo "New User added.";
		}
		else
		{
			echo "failed to add User.";
		}
    }

	function validate($conn)
	{
		$sql = "SELECT username, password, email FROM Users";//interchange names with correct values
		$result = $conn->query($sql);
		foreach($result->fetch_assoc() as $value)
		{			
			if($value["email"] == $_POST["email"])
			{
				echo "This email is already in use.";
				
				return false;
			}
			elseif($value["username"] == $_POST["userName"])
			{
				echo "This username is in use.";
				return false;
			}
			return true;
		}
	}

	function openConnection()
	{
		$servername = "localhost";
		$username = "username";
		$password = "password";
		
		
		$conn = new mysqli($servername, $username, $password);//Create 
		if ($conn->connect_error)//check
		{
		  die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}
  
?>




<html>
<head><title>Recipe Search - Register</title></head>
    
    	<body>
    	<h1>Register</h1>
    	<form action="Register.php" method="post">
    		<p>

        	"User name:"<br>
        	<input type="text" name="userName"><br>
        	"Email"<br>
			<?php
			if($_POST["password"] != $_POST["passwordCheck"])
			{
				echo 'Your email is already in use.<br>';
			} 
			$addValidate = false;
			?>
        	<input type="text" name="email"><br>
        	"Password"<br>
        	<input type="text" name="password"><br>
        	"Password again"<br>
			<?php
			if($_POST["password"] != $_POST["passwordCheck"])
			{
				echo 'Your passwords do not match.<br>';
			} 
			$addValidate = false;
			?>
        	<input type="text" name="passwordCheck"><br>
        	<input type="submit">
    		</p>
     
    	</form>

</body>
</html>