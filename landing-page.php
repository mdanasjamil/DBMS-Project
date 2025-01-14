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
    <title>JamiaCryptoWebsite</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS style sheet -->
    <link rel="stylesheet" href="landing-page.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/499f9a6e08.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--------------------------------------------- Nav Bar -------------------------------------------->

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <img src="images/Logo.jpeg" alt="" class="navbar-brand logo">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a href="landing-page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/phpfiles/portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="/phpfiles/prices.php">Crypto Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="cta" href="/phpfiles/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="cont">

        <div class="profile-wrapper">
            <div class="profile-info">
                <h2>Welcome Username</h2>
                <h5>Student Id:</h5>
                <h5>Roll No:</h5>
                <h5>Email Address:</h5>
                <h5>Department:</h5>
                <h5>Contact Number:</h5>
            </div>
            <div class="user-buttons">
                <button class="d-grid gap-2 col-6 btn btn-outline-success btn-lg"><a href="#">Portfolio</a></button>
            </div>

            <h3>How To Get Started</h3>
            <p>After creating an account or logging in, you will be redirected to this homepage.</p>
            <p>Now Click on the portfolio button to go to your trading page.</p>
            <p>There you will see details like Available JamiaCoin, total investment, returns etc.</p>
            <h4>Buying Coins</h4>
            <p>Click on the buy button</p>
            <p>Choose the coin you want to buy</p>
            <p>Enter Your investment value</p>
            <p>Enter the price of the coin and click on Buy</p>
            <h4>Selling Coins</h4>
            <p>Click on the sell button</p>
            <p>Choose the coin you want to Sell</p>
            <p>Enter the amount and click sell</p>
            <h4>Transferring Coins</h4>
            <p>Click on the transfer button</p>
            <p>Choose the coin you want to Transfer</p>
            <p>Enter the UserId of the recipient</p>
            <p>Enter the amount and click Transfer</p>

            <h2>Thats all you need to know to use our website. Happy Trading!!!</h2>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>