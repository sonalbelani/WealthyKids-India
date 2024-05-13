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

<style>
    h1{
      margin-left:50px;
         text-align: center;
          color:mediumvioletred;
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
            <button class="btn btn-sm" onclick="location.href = './logout.php';">Logout</button>          
          </li </ul>
      </div>
    </nav>
</section>
    <h1> PUBLIC PROVIDENT FUND</h1>
    <p> Started by the National Savings Organization with the idea of promoting small savings and investments among the people, the Public Provident Fund (PPF) was started in 1968 as an investment option offering decent returns and certain income tax benefits under the Section 80C of the Income Tax Act.</p>
    <img src="img1.png" alt="error" style="float:left; padding-right:50px; padding-left:50px;" width="600" height="350"><br>
    <h2> *WHAT IS PPF SCHEME?</h2>
    <p>
         Considered one of the most ideal savings avenues for several investors, PPF investments help in tax-saving.Any individual can open a PPF account and invest money in it. Additionally, not only adults but minors can also get their PPF account opened. However, the minor himself cannot open the account. In such cases, the account must be operated by the guardian until the minor turns 18.

    </p>
    <h2> *PPF ACCOUNT ELIGIBILITY FOR MINORS:-</h2>
    <p font-size: 30px><b>
        </b>
The following conditions should be met in order to be eligible for opening a PPF account for a minor-<br><br>
•	Individuals who are Indian residents can open their account under the Public Provident Fund and avail tax-free returns.<br><br>
•	Only one of the guardians can open the account.<br><br>
•	Individual operating the PPF account on behalf of the minor should be a natural or legal guardian. <br><br>
•	PPF account cannot be operated by the grandparents of the minor child unless they are legal guardians after the death of the parents.A nominee must be registered while opening the PPF account.<br><br>
•	The individual can contribute a minimum of Rs. 500 and a maximum of Rs. 1.5 lakh to the PPF account of the minor, in a financial year (Please note that Rs. 1.50 lakh is the maximum total contribution that can be made by a individual in a financial year cumulatively in his as well as the minor’s account).
<br></p>
<img src="image123.png" alt="error" style="float:right; padding-left:50px; padding-left:50px;" width="400" height="300"><br>
<h2> *HOW TO OPEN PPF ACCOUNT FOR MINORS?</h2>
<p> 
    The Public Provident Fund account can be opened with a post office or a designated bank brand authorized to open the PPF accounts.
<h2>Documents Required</h2>
<p>The parents/guardian of the minor child should provide the following documents- <br><br>
•	Details of the guardian and minor in the account opening form.<br>
•	Account opening KYC documents of the guardian (along with the photograph).<br>
•	Age proof (Aadhaar card or Birth certificate) of the minor child.<br>
•	A cheque for initial contribution to the PPF account of Rs. 500 and above.<br>
<img src="img3.jpg" alt="error" style="float:left; padding-right:50px; padding-left:10px;" width="200" height=150"><br>
<h2> Things to be Considered before Opening the PPF Account of a Minor</h2>
<p>
    •	An individual can open a PPF account in the name of his/her minor with a minimum initial amount of Rs.100. However, the minimum annual contribution should be Rs.500 and the maximum amount can be Rs.1.5 lakh.<br><br>
•	If the amount invested in the minor’s PPF account is from the income of the parent/guardian, then that amount can be included in under Section 80C of the Income Tax and will be eligible for tax benefits.<br><br>
•	It is mandatory to submit an application for the transfer of account from the guardian to the minor as soon as the minor reached 18 years of age. In such cases, the application must be submitted along with the required documents and the signature of the depositor who has now become a major. This application shall also be attested by the guardian who opened the account.<br><br>
•	A depositor can also seek to close the minor’s PPF account under certain specific conditions. However, such closure is allowed only after the completion of five years, and on the grounds that the withdrawn amount will be used for the medical purpose of the account holder.<br><br>

•	Additionally, the minor’s PPF account can be closed prematurely if the amount is used for the purpose of the minor’s higher education.<br><br>
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