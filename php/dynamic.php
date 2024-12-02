<?php

$a=$_GET["page"];
switch($a)
{
    case'about';
    echo"About Us:";
    echo"We Are Team of passionate developers";

    break;

    case 'contact';
    echo"Contact Us";
    echo"Contactexample@gmail.com";
    break;

    default:
    echo"Invalid Parameter";
}
?>
