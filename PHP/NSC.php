<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?><?php

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
<style>
    h1{
      margin-left:50px;
         text-align: center;
          color:rgb(199, 60, 21);
          font-family:verdana;
    }
    h2{
         margin-left:150px;
         text-align: left;
          color:blueviolet;
          font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
     p {
        font-family: 'Copperplate';
         text-align: justify;
         font-size: 30px;
         margin-left:150px;
        margin-right:150px;
      }
    </style>
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
            <button class="btn btn-sm" onclick="location.href = './logout.php';">Logout</button>          
          </li </ul>
      </div>
    </nav>
</section>
    <h1> NATIONAL SAVINGS CERTIFICATE</h1>
    <p> The NSC scheme is available at all NSC post offices and the Indian Government promotes the NSC scheme.The main aim of the scheme is for individuals to make small or medium savings, and tax benefits are provided for these savings. Since the scheme is encouraged by the Indian Government, the risks of investing in the scheme are low.</p>
    <img src="img3a.webp" alt="error" style="float:left; padding-right:50px; padding-left:50px;" width="600" height="350"><br>
    <h2> *WHAT IS NSC SCHEME?</h2>
    <p>
        National Savings Certificates, popularly known as NSC, is an Indian Government savings bond, primarily used for small savings and income tax saving investments in India. It is part of the postal savings system of India Post.

        These can be purchased from any Post Office in India by an adult (either in his/her own name or on behalf of a minor), a minor, a trust, and two adults jointly

    </p>
    <h2> *NSC ACCOUNT ELIGIBILITY FOR MINORS:-</h2>
    <p font-size: 30px><b>
        </b>
        The eligibility criteria for investors to purchase the NSC are mentioned below:<br><br>

        *The individual must be an Indian citizen.<br><br>
        *There is no age limit for individuals in order to purchase a certificate.<br><br>
        *Non-resident Indians cannot invest in NSC.<br><br>
        *Investments can be made with another adult or individuals can buy an NSC on behalf of a minor.<br><br>
        *Under NSC VIII Issue, HUFs and Trusts are not eligible to invest in the scheme.<br>
<br></p>
<img src="img1a.jpg" alt="error" style="float:right; padding-left:50px; padding-left:50px;" width="400" height="300"><br>
<h2> *DOCUMENTS REQUIRED FOR NSC SCHEME</h2>
<p> 
    Given below are the documents that must be submitted in order to purchase an NSC:<br><br>

*The NSC application form must be submitted.<br><br>
*Investors must submit an original identification proof such as Passport, Permanent Account Number (PAN) Card, Voter ID, Driving licence, Senior Citizen ID, or Government ID for verification.<br><br>
*The investor must submit a photograph.<br><br>
*Investors must submit an address proof such as Passport, telephone bill, electricity bill, bank statement along with a cheque as well as a Certificate or an ID card that has been issued by the Post Office.<br><br>
<h2>Tax benefits provided by the NSC</h2>
<p>
    Given below are the NSC tax benefits that individuals can avail by investing in the NSC:<br><br>

*Under Section 80C of the Income Tax Act, 1961, tax benefits of up to Rs.1.5 lakh can be availed by investing towards the NSC.<br><br>
*The interest that is generated on a yearly basis by investing in the NSC is considered as a new investment for tax benefits.<br><br>
*Tax Deducted at Source (TDS) is not applicable under the National Savings Certificate. However, as per the marginal income tax rates, the tax must be paid for the interest that is earned.<br>
    <br>
<img src="img2a.jpg" alt="error" style="float:left; padding-right:50px; padding-left:10px;" width="300" height=150"><br>
<h2> Who should invest in NSC scheme?</h2><br><br>
<p>
    NSC scheme has advantages like:<br>

*A fixed income at regular interval like monthly, quarterly basis or yearly<br>
*A guaranteed interest rate.<br>
*A low risk.<br>
*A save tax.<br>
<h2> *Who is eligible to open a PPF account for the minor?</h2>
<p>
    Any parent or legal guardian can open a Public Provident Fund account on behalf of a minor, provided that they are resident citizens of India. However, only one parent can open a PPF account in the name of the minor children.<br>
</p>

</p>

</p>
    </p>
 <section id="contact" >
 <p class="copyright" style="text-align:center;font-size:20px;"><img src="phone.jpg" style="width:20px;height:30px; margin:10px; align: center; ">  
Toll Free Number: <a href="tel: 1800 266 7575  ">1800 266 7575</a> or <a href="tel: 1800 22 7575  ">1800 22 7575</a> 

 </p>
    <p class="copyright"style="text-align:center;font-size:20px;">© Copyright 2021 Wealthy Kids</p>
  </section>
</body>
</html>