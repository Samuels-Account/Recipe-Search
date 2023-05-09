<?php
$recipeName = array("also","dummy","data","crazy");
$ingredients = array("this","is","not","real");

function design($recipeName, $ingredients)
{
    echo '<dt>$recipeName</dt>';
    foreach($ingredients as $value)//somethings wrong
    {
        echo'<dd>$value</dd>';
    }
    echo '<br>';
}
function allOutputs($recipeName,$ingredients)
{
    for($x = 0; $x <= 3; $x++)
    {
        design($recipeName[$x], $ingredients[$x]);//something wrong
    }
}



?>





<html>
<head><title>Recipe Search - Search</title></head>

<body>
<form>
<?php allOutputs($recipeName,$ingredients); ?>
</form>
<dl>

</dl>

</body>
</html>