<!DOCTYPE html>
<!--
Juz&Laz(c) presents:
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Tietopeli</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        
        <?php
        // put your code here
        ?>
             
        <!-- The video --> 
        <video autoplay loop muted id="myVideo">
            <source src="img/falling_stars.mp4" type="video/mp4">
        </video>
        
        <div id="content_top">
        <!-- add navbar -->
            <ul class="topnav">
             <li><a class="active" href="index.php">Alku</a></li>
             <li><a href="login.php">Kirjaudu</a></li>
             <li><a href="trivial.php">Peli</a></li>
             <li><a href="addQuestions.php">Omat kysymykset</a></li>
             <li><a href="scores.php">Tuloksia</a></li>
             <li><a class="right" href="#about">Ohje</a></li>
            </ul><br><br>
        </div>
        
        <!-- Overlay content -->
        <div id="content_Index">
            
        <h2>Tietopeli</h2>
        <p>Testaa tietosi leikkimielisessä kilpailussa</p>
        <button id="myBtn" onclick="Trivial.php"> Aloita</button><br>
        
        </div>
    </body>
</html>
