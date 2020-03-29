
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ..\login.php");
    exit;
}

if (!isset($_REQUEST['button'])){
  echo "Pääsy kielletty.";
  exit;
  }
  
  require 'connect.php';

if ($_REQUEST['button'] == "save"){
    
   $owner_id = $_SESSION['id'];
   $question = $_POST['question'];
   $answer_1 = $_POST['answer_1'];
   $answer_2 = $_POST['answer_2'];       
   $answer_3 = $_POST['answer_3'];
   $answer_4 = $_POST['answer_4'];
   $correct = $_POST['correct'];  

   $insertSQL = "INSERT INTO trivial (question, answer_1, answer_2, answer_3, answer_4, correct, owner_id) VALUES ('$question', '$answer_1', '$answer_2', '$answer_3', '$answer_4', '$correct', '$owner_id')";
   
$result = $con->query($insertSQL);

if ($con === TRUE) {
   echo "Kysymys lisätty.";
} else {
   echo "Virhe: " . $insertSQL . "<br>" . $con->error;
  }
}

/*
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
       
       echo "<li><span>$id</span><span>$question</span><span>$answer_1</span><span>$answer_2</span>"
               . "<span>$answer_3</span><span>$answer_4</span><span>$correct</span><span>$owner_id"
               . "</span><a href=\"..\changeQuestions.php?id=$id&button=change\">Muuta</a>"
               . "<a href=\"questionFunctions.php?id=$id&button=delete\">Poista</a></li>";
       }        
    echo "</ul>";
  */

if ($_REQUEST['button'] == 'delete'){
    $id = $_GET['id'];    
    $query = "DELETE FROM trivial WHERE id = '$id'";
    $result = $con->query($query);
    if ($result === TRUE) {
      echo "Kysymys poistettu.";
      } 
    else {
      echo "Virhe: " . $query . "<br>" . $con->error;
      }
    }
    
    elseif ($_REQUEST['button'] == 'update'){
       
       $id = trim(strip_tags($_POST['id']));        
       $question = $_POST["question"];
       $answer_1 = $_POST["answer_1"];
       $answer_2 = $_POST["answer_2"];       
       $answer_3 = $_POST["answer_3"];
       $answer_4 = $_POST["answer_4"];
       $correct = $_POST["correct"];
       
        
       $updateSQL = ("UPDATE trivial SET question='$question',answer_1='$answer_1',answer_2='$answer_2',answer_3='$answer_3',answer_4='$answer_4',correct='$correct'WHERE id='$id'");
			
        $result = $con->query($updateSQL);
        if ($result === TRUE) {
        echo "Kysymyksen tiedot muutettu.";
        } else {
            echo "Virhe: " . $updateSQL . "<br>" . $con->error;
         }
    }
    
    header("location: ..\addQuestions.php");
    ?>

<!--
<form method="post" action="../addQuestions.php">
 <input type="submit" value="Takaisin">    
</form> 