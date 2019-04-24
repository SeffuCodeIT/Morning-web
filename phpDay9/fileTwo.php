<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/11/19
 * Time: 10:01 AM
 */
if(isset($_POST['x'])){
    $jina = $_POST['x'];
    $nambari = $_POST['y'];
    $salo = $_POST['z'];
    $conn = mysqli_connect("localhost","root","","employees");
    if(!$conn){
        echo "Database not found";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `details`(`id`, `name`, `phone`, `salary`) VALUES (null,'$jina','$nambari','$salo')");
        if (!$insert){
            echo "Employee not saved";
        }else{
            echo "Employee Saved successfully";
            header("location:fileOne.php");
        }

    }
}
?>
