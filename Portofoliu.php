<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
    <title>Alexander Bake Shop</title>
    <link rel="stylesheet" media="screen and (min-width: 641px)" type="text/css" href="alexander.css">
    <link rel="stylesheet" media="screen and (max-width: 640px)" type="text/css" href="mobile.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' type='image/x-icon' href="Images/favicon.ico" />
</head>

<body>
    <div class="header">
        <ul>
            <li><a href="index.php#poveste">Povestea Noastra</a></li>
            <li><a href="index.php#preparate">Preparate</a></li>
            <li><a href="index.php#special">Oferte</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li><a href="Comenzi.php">Comanda acum</a></li>
        </ul> 
    </div>
    
    <div class="header1"> 
       <ul>
          <?php  
              if(isset($_SESSION['username'])){       
                    echo "<li><a href = '#'>Welcome $_SESSION[name]</a></li>";
                    echo '<li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
                    
              }else{
                    echo  '<li><a href="Creare_cont.php">Sign up</a></li>';
                    echo  '<li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';}
          ?> 
      </ul>
    </div>
    
    <div class="photo title">
    <img class="logo" src="Images/Logo_main.png">
</div>
</body>
</html>