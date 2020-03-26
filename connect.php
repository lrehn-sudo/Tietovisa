<?php

include("phpconfig/../../localDbConfig.php");
//include("phpconfig/../../remoteDbConfig.php");

$con =  mysqli_connect($hostName, 
        $userName, 
        $dbPassword,
        $dbName) 
        or die("Yhteyden muodostaminen epäonnistui: <br>");
?>

