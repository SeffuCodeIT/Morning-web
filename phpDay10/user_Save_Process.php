-<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:49 AM
 */
if (isset($_POST['x'])){
    $name = $_POST['x'];
    $email = $_POST['y'];

    $password = $_POST['z'];
    $encpassword = md5($password);

    $conn = mysqli_connect("localhost","root","","safari");
    if (!$conn){
        echo "failed to connect";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$encpassword')");
        if (!$insert){
            echo "failed to save1";
        }else{
            echo "$name saved succesfully";
            echo "<a href='user_Save.php'>Add user</a>";
        }
    }
}

?>