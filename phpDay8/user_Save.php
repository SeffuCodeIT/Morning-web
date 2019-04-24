<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label{
            color: #fc0018;
            font-size: 1em;
        }
    </style>
</head>
<body>
<form action="user_Save.php" method="POST">
    <input type="text" name="x" placeholder="name" required><label for="">*</label><br>
    <input type="email" name="y" placeholder="email" required><label for="">kuwqa serious msee</label><br>
    <input type="password" name="z" placeholder="password" required><label for="">haiyaa</label><br>
    <button name="btnsubmit">Submit</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 8:05 AM
 */
if (isset($_POST['x'])){
    $name = $_POST['x'];
    $email = $_POST['y'];
    $password = $_POST['z'];
    $connect = mysqli_connect("localhost","root","","morningClass");
    if (!$connect){
        echo "Connection timeout!";
    }else{
        $insert = mysqli_query($connect,"INSERT INTO `Studis`(`id`, `name`, `email`, `password`) VALUES (null,'$name','$email','$password')");
        if ($insert){
            echo "User saved successfully!";
        }else{
            echo "Saving failed";
        }
    }
}
$connect= mysqli_connect("localhost","root","","morningClass");
if (!$connect){
    echo "were sorry";
}else{
    $insert = mysqli_query($connect,"INSERT INTO `Studis`(`id`, `name`, `email`, `password`) VALUES (null,$name,$email,$password)");
    if ($insert){
        echo "user saved";
    }else{
        echo "Not saved";
    }
}

?>
</body>
</html>