
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
             <li><a href="login.php">Kirjaudu</a></li>
             <li><a href="trivial.php">Peli</a></li>
             <li><a class="active" href="addQuestions.php">Omat kysymykset</a></li>
             <li><a href="scores.php">Tuloksia</a></li>
             <li class="right"><a href="#about">Ohje</a></li>
           </ul>
        </div>

        <script src="script/validateRadio.js"></script>
             
        <!-- Overlay content -->
        <div id="content_addQuestions">
         
        <h2>Lisää kysymyksiä ja vastauksia</h2>
        
        <form action="addQuestions.php" onsubmit="return validateRadio()" method="POST" id="addQuestionArea" autocomplete="off"> 
                    
            <div id="addQuestion">
                <label for="questionText">
                    <textarea name="Text1" cols="40" rows="4" id="questionText" name="questionText" placeholder="Kysymys..." required></textarea><br><br>
            </div>

            <!-- TODO tähän kannattaisi lisätä Javascriptiä, jotta vastaukset voitaisiin lisätä yhdellä kentällä. 
            Niitä voisi olla enemmän kuin neljä.
            -->

            <div id="addAnswer_1">
                <label for="answerText_1"></label>
                <input type="text" id="answerText" name="answerText_1" placeholder="1. Vastaus..." required>
                Oikea<input type="radio" name="questionTrue" value="1" /><br><br>
            </div>

            <div id="addAnswer_2">
                <label for="answerText_2"></label>
                <input type="text" id="answerText" name="answerText_2" placeholder="2. Vastaus..." required>
                Oikea<input type="radio" name="questionTrue" value="2" /><br><br>
            </div>

            <div id="addAnswer_3">
                <label for="answerText_3"></label>
                <input type="text" id="answerText" name="answerText_3" placeholder="3. Vastaus..." required>
                Oikea<input type="radio" name="questionTrue" value="3" /><br><br>
            </div>

            <div id="addAnswer_4">
                <label for="answerText_4"></label>
                <input type="text" id="answerText" name="answerText_4" placeholder="4. Vastaus..." required>
                Oikea<input type="radio" name="questionTrue" value="4" /><br><br>
            </div>

        <input type="submit" id="submitQuestion"></input>                   
        </form>

         <p>Kysymykset:</p>

        </div>
        
        <?php
        include 'functions/connect.php';
        ?>
        
    </body>
</html>