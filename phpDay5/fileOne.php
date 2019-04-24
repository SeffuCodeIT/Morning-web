<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/31/19
 * Time: 6:00 PM
 */
//This is an index array
$majina = array("Daisy","Twity","Stacy","Joy","Alison","Mwas");
echo $majina[5].",".$majina[4].",".$majina[3];
echo "<br>";
echo "My name is"."$majina[0]".","."My twin sister is called".",".$majina[2];
echo "<br>";
echo count($majina);
echo "<br>";
$arrlength = count($majina);
for ($x = 0; $x < $arrlength; $x++){
    echo $majina[$x]."<br>";
}







?>