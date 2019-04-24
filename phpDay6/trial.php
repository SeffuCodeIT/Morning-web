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
<form action="trial.php" method="GET">
    <input type="number" name="x" placeholder="radius">
    <button>Volume</button>
</form>
<?php
/**
* Created by PhpStorm.
* User: emobilis
* Date: 2/5/19
* Time: 5:44 AM
*/
    if (isset($_GET['x'])){
        $r = $_GET['x'];
        $answer = 4/3*3.142*$r**2;
        echo "your volume is"."$answer";
    }

?>
</body>
</html>