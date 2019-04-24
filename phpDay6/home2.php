<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="home2.php" method="POST">
    <input type="number" name="x" placeholder="first number">
    <input type="number" name="y" placeholder="second number">
    <button name="z">Calculate</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 5:26 AM
 */
    if (isset($_POST['x'])){
        $num1 = $_POST['x'];
        $num2 = $_POST['y'];
        $jibu =($num1+$num2);
        echo "your answer is"." "."$jibu";

    }

?>
</body>
</html>