
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
                           
             <!--The video-->
            <video autoplay muted loop id="myVideo">
            <source src="img/star_ride.mp4" type="video/mp4">
            </video>
            
        <div id="content_top">
        <!-- add navbar -->
          <ul class="topnav">
             <li><a href="index.php">Alku</a></li>
             <li><a class="active" href="login.php">Kirjaudu</a></li>
             <li><a href="trivial.php">Peli</a></li>
             <li><a href="addQuestions.php">Omat kysymykset</a></li>
             <li><a href="scores.php">Tuloksia</a></li>
             <li class="right"><a href="#about">Ohje</a></
           </ul>
        </div>

        <!-- Overlay content -->
        <div id="content_addQuestions">
         
        <h2>Luo käyttäjätili</h2>
        
        <form action="login.php" method="POST" id="addIdArea"> 
                    
                    <div id="firstName">
                        <label for="firstName"></label>
                        <input type="text" id="firstName" name=firstName" placeholder="Etunimi..."><br><br>
                    </div>
                    
                    <div id="lastName">
                        <label for="lastName"></label>
                        <input type="text" id="lastName" name="lastName" placeholder="Sukunimi..."><br><br>
                    </div>
                    
                    <div id="nickName">
                        <label for="nickName"></label>
                        <input type="text" id="nickName" name="nickName" placeholder="Nimimerkki/Alias..."><br><br>
                    </div>
                    
                    <div id="email">
                        <label for="email"></label>
                        <input type="text" id="answerText" name="email" placeholder="email..."><br><br>
                    </div>

                <input type="submit" id="submitID"></input>                   
                </form>

        </div>        

        <?php
        // put your code here
        ?>
        
    </body>
</html>