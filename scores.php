<!--
Juz&Laz(c) presents:
-->

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Tulokset</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        
        <!--Video-->
            <video autoplay muted loop id="myVideo">
            <source src="img/fireworks.mp4" type="video/mp4">
            </video>
            
        <div id="content_top">
        <!-- add navbar -->
          <ul class="topnav">
             <li><a href="index.php">Alku</a></li>
             <li><a href="#">Ohje</a></li>
             <li><a href="trivial.php">Peli</a></li>
             <li><a href="addQuestions.php">Omat kysymykset</a></li>
             <li><a class="active" href="scores.php">Tuloksia</a></li>
             <li class="right"><a href="login/logout.php">Poistu</a></li>
           </ul>
        </div>

        <div id="audioControls">
            <!-- The audio -->
            <audio loop autoplay controls>
            <source src="sound/Ove_Earth.ogg" type="audio/mpeg">                    
            </audio>
         </div> 
            
        <!-- Overlay content -->
        <div id="content_mid">

          <?php
          echo "Hello Scores!";
        // hae ja näytä parhaat tulokset
        ?>
                    
        </div>            
        
    </body>
</html>