<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betting</title>
</head>
<body>
<form action="betting.php" method="GET">
    <input type="number" name="x" placeholder="number">
    <button>check</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/4/19
 * Time: 10:31 PM
 */

if (isset($_GET['x'])) {
    $x = $_GET['x'];
    switch ($x) {
        case "1":
            echo "won ksh 1,000,000!";
            break;
        case "2":
            echo "lose!";
            break;
        case "3":
            echo "won a car!";
            break;
        case "4":
            echo "lose!";
            break;
        case "5":
            echo "won a house!";
            break;
        default:
            echo "Enter number between 1 and 5!";
    }
}

?>
</body>
</html>