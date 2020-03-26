
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
         
         <div class="gameDiv" id="gameBackground">
         
            <!-- The video -->
            <video autoplay muted loop id="myVideo">
            <source src="img/earth.mp4" type="video/mp4">
            </video>
             
             <div class="mainBox">
                 
                 <p id="timeLeft"> Aikaa jäljellä: </p>
                 
                 <form method="POST"action="index.php">
                    <input  type="submit" value="Lopeta" id="endGame"> 
                </form>
                 
                 <div id="audioControls">
                    <!-- The audio -->
                    
                    <audio loop autoplay controls>
                        <source src="sound/crystal_cave.mp3" type="audio/mpeg">
                   
                    </audio>
                  </div> 
                 
                 <div id="questionArea"><p><?php echo "question";?></p>
                 </div>
                 
                <button class="btnQuestion" id="btnTriv_1" onclick="checkAnswer(1);"> <?php echo "answer_1";?> </button>
                <button class="btnQuestion" id="btnTriv_2" onclick="checkAnswer(2);"> <?php echo "answer_2";?> </button>
                <button class="btnQuestion" id="btnTriv_3" onclick="checkAnswer(3);"> <?php echo "answer_3";?> </button>
                <button class="btnQuestion" id="btnTriv_4" onclick="checkAnswer(4);"> <?php echo "answer_4";?> </button>                   
             
             </div>
                     
        <?php
        // put your code here
        ?>
    </body>
</html>