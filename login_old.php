
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
        <div id="content_mid">
         
        <h2>Luo käyttäjätili</h2>
        
        <form action="login.php" method="POST" id="addIdArea"> 
                    
                    <div>
                        <label for="firstName">Etunimi:</label><br>
                        <input type="text" id="firstName" name=firstName" placeholder="Etunimi..." required><br><br>
                    </div>
                    
                    <div>
                        <label for="lastName">Sukunimi:</label><br>
                        <input type="text" id="lastName" name="lastName" placeholder="Sukunimi..." required><br><br>
                    </div>
                    
                    <div>
                        <label for="nickName">Nimimerkki:</label><br>
                        <input type="text" id="nickName" name="nickName" placeholder="Nimimerkki / Alias..." required><br><br>
                    </div>
                    
                    <div>
                        <label for="email">Sähköposti</label><br>
                        <input type="text" id="email" name="email" placeholder="email..." required><br><br>
                    </div>
            
                    <div>
                        <label for="password">Salasana</label><br>
                        <input type="password" placeholder="Salasana" id="password" required>
                        <input type="password" placeholder="Toista salasana" id="confirm_password" required><br><br>
                    </div>
        
                    <input type="submit" id="submitID"></input>                   
                </form>

        </div>
        
        <script src="script/checkPasswordsMatch.js"></script>
        
        <?php
        // put your code here
        ?>
        
    </body>
</html>