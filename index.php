<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Tietopeli</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>
    <body>
        
        <?php
        // put your code here
        ?>
             
        <!-- The video --> 
        <video autoplay loop muted id="myVideo">
            <source src="img/falling_stars.mp4" type="video/mp4">
        </video>
        
        <div id="content_top">
        <!-- add navbar -->
            <ul class="topnav">
             <li><a class="active" href="index.php">Alku</a></li>
             <li><a href="#about">Ohje</a></li>
             <li><a href="trivial.php">Peli</a></li>
             <li><a href="addQuestions.php">Omat kysymykset</a></li>
             <li><a href="scores.php">Tuloksia</a></li>
             
             <li class="right"><a href="login\logout.php">Poistu</a></li>
            </ul><br><br>
        </div>
        
       
        
        <!-- Overlay content -->
        <div id="content_mid">
            
        <h1 class="glow">Tietopeli</h1>
        
        <div class="page-header">
        <h3>Hei <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Tervetuloa!</h3>
        </div><br>
        <a href="trivial.php" class="btn btn-primary">Aloita peli</a><br><br>
        <p>
            <a href="login/reset-password.php" class="btn btn-link">Resetoi salasana</a>
            <a href="login/logout.php" class="btn btn-link">Kirjaudu ulos</a>
        </p>
        </div>
    </body>
</html>
