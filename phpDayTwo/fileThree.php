<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/30/19
 * Time: 10:13 AM
 */
//write a php logic to calculate
//the are of any circle
//volume of a cylinder
//BMI of a person
$r = 14;
$pie = 22/7;
$answer = $pie*$r**2;
echo "Area of circle is"."  ".$answer;
echo "<br>";
//circle ending
$r = 30;
$pie = 22/7;
$Height = 30;
$answer = $pie*$r**2*$Height;
echo "Volume of a cylinder is"."  " .$answer;
echo "<br>";
//Volume Ending
$weight = 100;
$height = 176;
$BMI =$weight/$Height**2;
echo "Your BMI is"."  ".$BMI;




?>