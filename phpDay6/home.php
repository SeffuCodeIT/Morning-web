<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<form action="home.php" method="GET">
    Width:<input type="number" placeholder="Width" name="width" required><br>
    Height:<input type="number" placeholder="Height" name="height" required><br>
    <button name="area">Area</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 5:56 AM
 */
    if (isset($_GET['width'])){
        $num1 = $_GET['width'];
        $num2 = $_GET['height'];
        $jibu = $num1*$num2;
        echo "your area is"." ".$jibu;
    }


?>
</body>
</html>














