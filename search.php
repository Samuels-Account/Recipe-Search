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

    for($x = 0; $x <= 20; $x++)
    {
      sqlStuff($sql,$recipeName,$description,$x);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
    <div class="hero">
        <div class="sidebar" id="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="about_us.html">About Us</a>
            <a href="profile.html">My Profile</a>
            <a href="#">Search</a>
            <a href="contact_us.html">Contact Us</a>
        </div>

        <nav>
            <a href="homepage.html"> <img src="RECIPESEARCH icon.png" class="logo" style="width:290px;height:45px;" > </a> 
            <ul>
                <li><a href="about_us.html" class="aboutus">ABOUT</a></li>
                <li><a href="contact_us.html" class="contactus">CONTACT US</a></li>
                <button type="button" class="login btn btn-success mx-auto" href="login.html">Login</button>
                <a href="search.html"><img src="search-icon.png" alt="" width="40" height="40" class="search-icon"></a>
                <button class="sidebar-toggle" onclick="openNav()">&#9776;</button>
                <a href="#menu" id="toggle"><span></span></a>
            </ul>
        </nav>

        <div class="aboutuscontent">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="input-group mb-3">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <input id="tag-input" type="text" class="form-control" name="searchbar" placeholder="Search by name..."><input type="submit"id="search-button" class="btn btn-success">                  
                        </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<style>
form{
    width: 40em;
}
</style>



        <form action="RecipeDetails.php" method="post">
    <div>
        <?php allOutputs($sql,$recipeName,$description); ?>
    </div>
    </form>

















        <div class="footer" style="background-color: #f0f0f0;">
            <div class="footer_menu">
                <div class="col_1">
                    <ul>
                        <img src="RECIPESEARCH icon-fotor-bg-remover-2023042417244.png" alt=""
                            style="width:290px;height:45px;">
                    </ul>
                    <p class="footerdescription">We believe that cooking should be a fun and creative activity, and
                        we're <br> committed to providing our users with the resources and support they need <br> to
                        unleash their culinary creativity.</p>
                </div>
                <div class="col_2">
                    <ul>
                        <li><a href="about_us.html">About Us</a></li>
                        <li><a href="contact_us.html">Contact Us</a></li>
                        
                    </ul>
                </div>
                <div class="col_3">
                    
                </div>
                <p></p>
            </div>
        </div>


        <script>

            const wrapper = document.querySelector('.wrapper');
            const indicators = [...document.querySelectorAll('.indicators button')];

            let currentTestimonial = 0; // Default 0

            indicators.forEach((item, i) => {
                item.addEventListener('click', () => {
                    indicators[currentTestimonial].classList.remove('active');
                    wrapper.style.marginLeft = `-${100 * i}%`;
                    item.classList.add('active');
                    currentTestimonial = i;
                })
            })


            function openNav() {
                document.getElementById("sidebar").style.width = "250px";
                document.getElementById("hero").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("sidebar").style.width = "0";
                document.getElementById("hero").style.marginLeft = "0";
            }


            // Get DOM elements
            const tagInput = document.getElementById('tag-input');
            const searchButton = document.getElementById('search-button');
            const tagContainer = document.getElementById('tag-container');
            const clearButton = document.getElementById('clear-button');

            // Add click event listener to search button
            searchButton.addEventListener('click', function () {
                // Get search query from input
                const searchQuery = tagInput.value.trim();
                if (searchQuery !== '') {
                    // Perform search
                    // ...
                }
            });

            // Add keypress event listener to tag input
            tagInput.addEventListener('keypress', function (event) {
                if (event.key === 'Enter') {
                    // Prevent form submission
                    event.preventDefault();
                    // Get tag value from input
                    const tagValue = tagInput.value.trim();
                    if (tagValue !== '') {
                        // Create tag element
                        const tagElement = document.createElement('div');
                        tagElement.classList.add('btn', 'btn-outline-primary', 'me-2', 'mb-2');
                        tagElement.textContent = tagValue;
                        // Add tag element to tag container
                        tagContainer.appendChild(tagElement);
                        // Clear tag input
                        tagInput.value = '';
                    }
                }
            });

            // Add click event listener to clear button
            clearButton.addEventListener('click', function () {
                // Remove all tag elements from tag container
                tagContainer.innerHTML = '';
            });
        </script>
</body>
