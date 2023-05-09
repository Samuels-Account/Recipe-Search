<?php
$recipeName = array("also","dummy","data","crazy");
$ingredients = array("this","is","not","real");
//ingredients needs to be a list of lists.

function design($recipeName, $ingredients)
{
    echo "<dt>$recipeName</dt>";
    foreach($ingredients as $value)
    {
        echo"<dd>$value</dd>";
    }
    echo '<br>';
}
function allOutputs($recipeName,$ingredients)
{
    for($x = 0; $x <= 3; $x++)
    {
        design($recipeName[$x], $ingredients[$x]);
    }
}
?>

<html>
<head><title>Recipe Search - Search</title></head>

<body>
<form>
    <h1>
        Search for your Recipes
    </h1>
<?php allOutputs($recipeName,$ingredients); ?>
</form>
<dl>

</dl>

</body>
</html>
