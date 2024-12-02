<?php

$no = $_GET["no"];
echo"Number Given is = ".$no;

$fact=1;

for($i=$no; $i>=1; $i--)
{
    $fact = $fact * $i;
}
echo"<br>factorial of ".$no." is = ".$fact;
?>
