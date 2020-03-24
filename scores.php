
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
        
        <!--Video-->
            <video autoplay muted loop id="myVideo">
            <source src="img/fireworks.mp4" type="video/mp4">
            </video>
            
        <div id="content_top">
        <!-- add navbar -->
          <ul class="topnav">
             <li><a href="index.php">Alku</a></li>
             <li><a href="login.php">Kirjaudu</a></li>
             <li><a href="trivial.php">Peli</a></li>
             <li><a href="addQuestions.php">Omat kysymykset</a></li>
             <li><a class="active" href="scores.php">Tuloksia</a></li>
             <li class="right"><a href="#about">Ohje</a></li>
           </ul>
        </div>

        <div id="audioControls">
            <!-- The audio -->
            <audio loop autoplay controls>
            <source src="sound/Ove_Earth.ogg" type="audio/mpeg">                    
            </audio>
         </div> 
            
        <!-- Overlay content -->
        <div id="content_scores">

          <?php
          echo "Hello Scores!";
        // hae ja näytä parhaat tulokset
        ?>
                    
        </div>            
        
    </body>
</html>