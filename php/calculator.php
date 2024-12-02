<?php


$no1=$_POST["txtno1"];
$no2=$_POST["txtno2"];
$no3=$_POST["txtno3"];
$no4="";

switch($no3)
{
 case'+';
 $no4=$no1+$no2;
 echo"Addition=".$no4;
 break;

 case'-';
 $no4=$no1-$no2;
 echo"Subtraction=".$no4;
 break;

 case'*';
 $no4=$no1*$no2;
 echo"Multiplication=".$no4;
 break;

 case'/';
 $no4=$no1/$no2;
 echo"Division=".$no4;
 break;

 default:
 echo"Wrong Input.";

}

?>