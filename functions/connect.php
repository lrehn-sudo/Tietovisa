<?php

//include("../../phpConfig/localDbConfig.php");
//include("/../phpConfig/remoteDbConfig.php");


$hostName = "localhost"; 
$userName = "root"; 
$dbPassword ="";
$dbName = "tietovisa";


$con =  mysqli_connect($hostName, 
        $userName, 
        $dbPassword,
        $dbName) 
        or die("Yhteyden muodostaminen epäonnistui: <br>");
$con->set_charset("utf8");
?>

