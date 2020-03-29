<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
        include 'functions/connect.php';
 ?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Tietopeli</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
            
             <!--The video->
            <video autoplay muted loop id="myVideo">
            <source src="img/star_ride.mp4" type="video/mp4">
            </video>
            -->
             
        <div id="content_top">
        <!-- add navbar -->
          <ul class="topnav">
             <li><a href="index.php">Alku</a></li>
             <li><a href="#about">Ohje</a></li>
             <li><a href="trivial.php">Peli</a></li>
             <li><a class="active" href="addQuestions.php">Omat kysymykset</a></li>
             <li><a href="scores.php">Tuloksia</a></li>
             <li class="right"><a href="login/logout.php">Poistu</a></li>
           </ul>
        </div>

        <script src="script/validateRadio.js"></script>
             
        <!-- Overlay content -->
        <div id="content_mid">
         
        <h2>Lisää kysymyksiä ja vastauksia</h2>
        
        <form action="functions/questionFunctions.php" onsubmit="return validateRadio()" method="POST" id="addQuestionArea" autocomplete="off"> 
                    
            <div id="addQuestion">
                <label for="questionText">
                    <textarea cols="40" rows="4" name="question" placeholder="Kysymys..." required></textarea><br><br>
            </div>

            <!-- TODO tähän kannattaisi lisätä Javascriptiä, jotta vastaukset voitaisiin lisätä yhdellä kentällä. 
            Niitä voisi olla enemmän kuin neljä.
            -->

                <input type="text" name="answer_1" placeholder="1. Vastaus..." required>
                Oikea<input type="radio" name="correct" value="1" /><br><br>

                <input type="text" name="answer_2" placeholder="2. Vastaus..." required>
                Oikea<input type="radio" name="correct" value="2" /><br><br>

                <input type="text"  name="answer_3" placeholder="3. Vastaus..." required>
                Oikea<input type="radio" name="correct" value="3" /><br><br>

                <input type="text" name="answer_4" placeholder="4. Vastaus..." required>
                Oikea<input type="radio" name="correct" value="4" /><br><br>
        
        <input type="submit" name="button" value="save"></input>                   
        </form>

         <p>Kysymykset:</p>
         <?php
         /////////echo all
            $query = "SELECT * FROM trivial";
            $result = $con->query($query);
            if (!$result) {
              echo "Virhe: $query<br>".$con->error;
              }
            echo "<ul>";  
            while($row = $result->fetch_assoc()){
               $id = $row["id"];
               $question = $row['question'];
               $answer_1 = $row['answer_1'];
               $answer_2 = $row['answer_2'];       
               $answer_3 = $row['answer_3'];
               $answer_4 = $row['answer_4'];
               $correct = $row['correct'];
               $owner_id = $row['owner_id'];

               echo "<li><span>$question </span><span>$answer_1 </span><span>$answer_2 </span>"
                       . "<span>$answer_3 </span><span>$answer_4 </span><span>$correct </span><span>$owner_id "
                       . "</span><a href=\"changeQuestions.php?id=$id&button=change\"> Muuta </a>"
                       . "<a href=\"functions\questionFunctions.php?id=$id&button=delete\"> Poista </a></li>";
               }        
            echo "</ul>";
        ?>
        </div>
        
    </body>
</html>