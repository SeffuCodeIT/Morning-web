<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/31/19
 * Time: 7:02 PM
 */
//sorting arrays



//array sort functions include:
    //sort : Sorting arrays in ascending order
        //rsort : Sorting arrays in descending order
//asort : Sorting associative arrays
    //asort : Sorting associative arrays in ascending order according to the value
//ksort : Sorting associative arrays in ascending order according to the keys
//arsort : Sorting associative arrays in descending order according to the value
//arsort : Sorting associative arrays in descending order according to the vkey


$nambari = array(12,34,2,34,23,56,7,78,33,45,67,89);
sort($nambari);
$arrlength = count($nambari);
for($x = 0; $x<$arrlength;$x++){
    echo $nambari[$x]."<br>";
}








?>

