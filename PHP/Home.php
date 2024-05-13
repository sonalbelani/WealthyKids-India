<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wealthy Kids</title>
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
</head>


<body>

  <section id="title">
    <nav class="navbar navbar-expand-sm">
      <a class="navbar-brand" href="#"><img class="d-inline-block mr-1" src="images/logo.png" alt="Logo" height="40" width="50" />
        <span class="logo"><b>Wealthy</b><br /><i>kids</i></span>
      </a>
      <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li </ul>
          <li class="nav-item">
            <button class="btn btn-sm" onclick="location.href = './index.php';">Login</button><button class="btn btn-sm" onclick="location.href = './register.php';">Register</button>           
          </li </ul>
      </div>
    </nav>
  </section>

  <section id="donate">
    <div class="container-fluid">
      <div class="big-heading">
        <h1>Dhanwan Shishu</h1>
        <h3>Make your child future finanically stable</h3>
         <button class="btn btn-lg" onclick="location.href = './index.php';">View Plans</button>
      </div>
    </div>
  </section>

  <section id="about">
    <div>
      <h2 class="second-heading">Wealthy Kids helps you to know the required saving/investment schemes and choose the one which is best for your child</h2>
      <div class="row feature-box">
        <div class="col-lg-4">
          <span class="fas fa-donate fa-4x"></span>
          <h3 class="feature-title"><a href="./childplan.php">Child Investment Plans</a></h3>
          <p> </p>
        </div>
        <div class="col-lg-4">
          <span class="fas fa-users fa-4x"></span>
          <h3 class="feature-title"><a href="./future.php">Child Future Plans</a></h3>
          <p> </p>
        </div>
        <div class="col-lg-4">
          <span class="fas fa-hand-holding-heart fa-4x"></span>
          <h3 class="feature-title"><a href="./education.php">Child Education Plans</a></h3>
          <p> </p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
<p class="copyright" style="text-align:center;font-size:20px;"><img src="phone.jpg" style="width:20px;height:30px; margin:5px; align: center; ">  
Toll Free Number: <a href="tel: 1800 266 7575  ">1800 266 7575</a> or <a href="tel: 1800 22 7575  ">1800 22 7575</a> 

 </p>
    <p class="copyright">© Copyright 2021 Wealthy Kids</p>
  </section>

</body>

</html>

