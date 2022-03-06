<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="images/favicon.ico.jpeg">
    <link rel="stylesheet" href="../styles.css">
    <script src="xx.js"></script>
</head>

<body style="background-color:rgb(230, 254, 255);">
<center>
<header class="headerofpage" style="position:relative; margin-right:20px;margin-top:15px;">
        <img src="../images/cover.png" alt="" class="logo">
        <nav>
            <ul class="navbar">
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="./webscraping/index.php">Crypto Prices</a></li>
                <li><a href="">Wallet</a></li>
            </ul>
        </nav>
        <a href="logout.php" class="cta">Logout</a>
    </header>
<br>
    <h2> Welcome 
    <?php
    echo $_SESSION['studentname'];
    ?>
    </h2></center>
    <div class="container my-4">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Are you sure  <?php
    echo $_SESSION['studentname'];
    ?> ??</h4>
  <hr>
  <p class="mb-0"><a href="./login.php" style="color:blue">Click here to logout</a></p>
</div>
</div>
</body>
</html>