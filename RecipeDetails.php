<?php
    
    //import css
    
    //import database information
    
    //parsed information from previous page will allow us to obtain data
    //from database
    $recipe = $_POST["//the paragraph(s) explaining how to make the food"];
    $recipeName = $_POST["//the name from the previos page"]
    //hard to continue this as I would need the data from the paragraph. The scraped data
    //am I storing the data as a list? is the list formed here or in a seperate file. If done
    //on a seperate file then what will be parsed. When will the program activate.
    
    ?>





<html>
    <head><title>Recipe Search - Details</title></head>  
    <body>
    <h1><?php $recipeName ?></h1>
    <h2>Ingredients</h2>
        <ul>
        //php method that runs through the ingredients and puts it into a
        //list via 
        <li>          
        </li>
        </ul>
        <h2>Method</h2>
        <p><?php $recipe ?></p>
        <h2>Reviews</h2>
        <ul>
        //php method that runs through all of the reviews for the recipe 
    <li></li>
</ul>


 
</body>
</html>