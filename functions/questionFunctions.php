<?php

if ($_REQUEST['button'] == 'tallenna'){ 
    
   //$id = $row["id"];
   $question = $row["question"];
   $answer_1 = $row["answer_1"];
   $answer_2 = $row["answer_2"];       
   $answer_3 = $row["answer_3"];
   $answer_4 = $row["answer_4"];
   $correct = $row["correct"];
   $owner_id = $row["owner_id"];  

   $insertSQL = "INSERT INTO trivial (question, answer_1, answer_2, answer_3, answer_4, correct, owner_id) VALUES"
    . "('$question', '$answer_1', '$answer_2',  '$answer_3', '$answer_4', '$correct', '$owner_id')";

$result = $con->query($insertSQL);

if ($con === TRUE) {
   echo "Kysymys lisätty.";
} else {
   echo "Virhe: " . $insertSQL . "<br>" . $con->error;
  }
}

/////////echo all

$query = "SELECT * FROM tietovisa";
    $result = $con->query($query);
    if (!$result) {
      echo "Virhe: $query<br>".$con->error;
      }
    echo "<ul>";  
    while($row = $result->fetch_assoc()){
       $id = $row["id"];
       $question = $row["question"];
       $answer_1 = $row["answer_1"];
       $answer_2 = $row["answer_2"];       
       $answer_3 = $row["answer_3"];
       $answer_4 = $row["answer_4"];
       $correct = $row["correct"];
       $owner_id = $row["owner_id"];
       
       echo "<li><span>$id</span><span>$question</span><span>$answer_1</span><span>$answer_2</span>"
               . "<span>$answer_3</span><span>$answer_4</span><span>$correct</span><span>$owner_id"
               . "</span><a href=\"changeQuestions.php?id=$id&button=change\">Muuta</a>"
               . "<a href=\"changeQuestions.php?id=$id&button=delete\">Poista</a></li>";
       }        
    echo "</ul>";
    
if ($_REQUEST['button'] == 'tallenna'){ 
    
   //$id = $row["id"];
   $question = $row["question"];
   $answer_1 = $row["answer_1"];
   $answer_2 = $row["answer_2"];       
   $answer_3 = $row["answer_3"];
   $answer_4 = $row["answer_4"];
   $correct = $row["correct"];
   $owner_id = $row["owner_id"];  

   $insertSQL = "INSERT INTO trivial (question, answer_1, answer_2, answer_3, answer_4, correct, owner_id) VALUES"
    . "('$question', '$answer_1', '$answer_2',  '$answer_3', '$answer_4', '$correct', '$owner_id')";

$result = $con->query($insertSQL);

if ($con === TRUE) {
   echo "Kysymys lisätty.";
} else {
   echo "Virhe: " . $insertSQL . "<br>" . $con->error;
  }
}

elseif ($_REQUEST['button'] == 'delete'){
    $id = $_GET['question_id'];    
    $query = "DELETE FROM trivial WHERE question_id = '$question_id'";
    $result = $con->query($query);
    if ($result === TRUE) {
      echo "Kysymys poistettu.";
      } 
    else {
      echo "Virhe: " . $query . "<br>" . $con->error;
      }
    }
    
    elseif ($_REQUEST['button'] == 'change'){
        
       // echo "POSTIT ";
       // print_r($_POST);
        
       $id = $row["id"];
       $question = $row["question"];
       $answer_1 = $row["answer_1"];
       $answer_2 = $row["answer_2"];       
       $answer_3 = $row["answer_3"];
       $answer_4 = $row["answer_4"];
       $correct = $row["correct"];
       $owner_id = $row["owner_id"];
        /////////////////////////////////////////////////////////////////////////////HERE_HERE
        $updateSQL = ("UPDATE tietovisa SET question='$question',answer_1='$answer_1',answer_2='$answer_2',answer_3='$answer_3',answer_4='$answer_4',correct='$correct',owner_id='$owner_id'WHERE id='$id'");
			
        $result = $con->query($updateSQL);
        if ($result === TRUE) {
        echo "Kysymyksen tiedot muutettu.";
        } else {
            echo "Virhe: " . $updateSQL . "<br>" . $con->error;
         }
        }