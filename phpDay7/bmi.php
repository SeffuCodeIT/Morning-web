<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bmi</title>
</head>
<body>
<form action="bmi.php" method="POST">
    <input type="number" name="x" placeholder="weight"><br>
    <input type="text" name="y" placeholder="height"><br>
    <button>BMI</button><br>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/4/19
 * Time: 9:41 PM
 */
    if (isset($_POST['x'])){
        $num1 = $_POST['x'];
        $num2 = $_POST['y'];
        $bmi = $num1/($num2)**2;
        echo "Your BMI is"." ".$bmi;
        echo "<br>";
        if ($bmi<18){
            echo "Under weight";
        }elseif ($bmi<30){
            echo "Extremely healthy weight";
        }elseif ($bmi<35){
            echo "Obess Class1";
        }elseif ($bmi<40){
            echo "Severely Obess";
        }elseif ($bmi<50){
            echo "Mobidly Obess";
         }else{
            echo "Super Obessity";
        }
    }

?>
</body>
</html>