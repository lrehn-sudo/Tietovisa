<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require 'functions\connect.php';

$id = $_GET['id']; 

$query = "SELECT id, question, answer_1, answer_2, answer_3, answer_4, correct, owner_id  FROM trivial WHERE id = $id";
    $result = $con->query($query);
    if (!$result) {
      echo "Virhe: $query<br>".$con->error;
      }
    
    while($row = $result->fetch_assoc()){
       $id = $row["id"];
       $question = $row['question'];
       $answer_1 = $row['answer_1'];
       $answer_2 = $row['answer_2'];       
       $answer_3 = $row['answer_3'];
       $answer_4 = $row['answer_4'];
       $correct = $row['correct'];
       $owner_id = $row['owner_id'];
    }
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Muuta kysymyksiä</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>    
         
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
        
        <!--The video->
        <video autoplay muted loop id="myVideo">
        <source src="img/star_ride.mp4" type="video/mp4">
        </video>
        -->
        <script src="script/validateRadio.js"></script>

            <!-- Overlay content -->
        <div id="content_mid">
  
        <h1>Muuta kysymyksiä ja vastauksia</h1>
        
        <form action="functions/questionFunctions.php" onsubmit="return validateRadio()" method="POST" autocomplete="off"> 
                    
            <textarea cols="40" rows="4" id="question" name="question" placeholder="Kysymys..."> <?php echo $question;?> </textarea><br><br> <!--textarea has no value-->

            <input type="text" id="answer_1" name="answer_1" placeholder="1. Vastaus..." value="<?php echo $answer_1;?>">
            Oikea<input type="radio" name="correct" value="1" /><br><br>

            <input type="text" id="answer_2" name="answer_2" placeholder="2. Vastaus..." value="<?php echo $answer_2;?>">
            Oikea<input type="radio" name="correct" value="2" /><br><br>

            <input type="text" id="answer_3" name="answer_3" placeholder="3. Vastaus..." value="<?php echo $answer_3;?>">
            Oikea<input type="radio" name="correct" value="3" /><br><br>

            <input type="text" id="answer_4" name="answer_4" placeholder="4. Vastaus..." value="<?php echo $answer_4;?>">
            Oikea<input type="radio" name="correct" value="4" /><br><br>
            <input name="id" type="hidden" value="<?php echo $id;?>">        
            <input type="submit" name="button" value="update"></input>                   
        </form>

         <p>Kysymykset:</p>

        </div>        

    </body>
</html>
