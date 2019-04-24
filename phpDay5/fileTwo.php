<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/31/19
 * Time: 6:35 PM
 */
//This is an associative array
$wanafunzi = array("John"=>"1","2"=>"Viv","3"=>"Seffu","4"=>"Claire","5"=>"Andy");
echo "John is number ".$wanafunzi['John']."in their class.";
echo "<br>";
echo "The student at position two is ".$wanafunzi['2'];

foreach ($wanafunzi as $funguo=>$dhamana_yake){
    echo "keys = ",$funguo.", Values = ".$dhamana_yake;
    echo  "<br>";
}











?>