<?php
// variable
$title = "learn php";
$num = 45;
$float = 4.34;
$bool = true;
$bool2 = false;
$nothing = NULL;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . "Home page"?></title> 
</head>
<body>
    <?php 
    echo "<h1>welcome to $title</h1>";
    echo $num;
    echo "<br>";
    echo $float
    ?>
</body>
</html>
