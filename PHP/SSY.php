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
body {
  background-color: white;
}
header {
background-image :  linear-gradient(to left, WHITE,#87CEFA);
  padding-top: 60px;
  text-align: left;
  font-size: px;
  color: #00008B;
  height:150px;
padding-left:30px;
margin-left:px;
margin-right: -px;
}
 .grid-container1 {
    display: grid;
 grid-template-columns: 850px 200px 500px 200px;
grid-template-rows: 200px;
  row-gap:20px;
 column-gap:100px;
   padding:40px;     
  }
  .grid-container1 > div {
    border: 1px solid #888888;
    background-color: #F0F8FF ;
    border-radius: 2px;
  box-shadow: 2px 2px 2px 2px #888888;
  }
.div1 {
  width: 720px;
  height: 310px;
  border: 
padding:20px;
text-align:justify;
font-size:20px;
margin-left: 160px;

}

.div2 {
  width: 200px;
  height: 300px;  
  padding:10px;
  border: 
}
.div3 {
 background-color: #F0F8FF ;
  width: 850px;
  height: 1200px;  

 padding-top: 300px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
 margin:110px;
margin-left:200px;
padding:10px;
 border:1px solid #888888;
box-shadow: 2px 2px 2px 2px #888888;
text-align:justify;

}
.hii {
margin-top:-60px;
 background-color: #F0F8FF;
  width: 850px;
  height: px;  
margin-left: 150px;

 padding-top: 20px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
 margin:110px;
margin-left:200px;
padding:10px;
 border:1px solid #888888;
box-shadow: 2px 2px 2px 2px #888888;
text-align:justify;

}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
margin-left:200px;
color:#005792;
}



</style>
</head>

<body>
 <section id="title" style="background-color:white;">
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
<div>
<header>
  <h2><b>Sukanya Samriddhi Yojana</b></h2>
<h6>Gift your daughter a secure future</h6>
<img src="parent.jpg" style="width:250px;height:158px; float:right;margin-top:-132px; padding-bottom: 10px;opacity: 0.9 ;margin-right:px;  ">

</header>
<div class="grid-container1">
  <div class="div1">

<p style="margin:10px;">The Sukanya Samriddhi Yojana is designed to provide a bright and secure future for your girl child.This scheme was launched by Prime Minister Narendra Modi on 22 January 2015 as a part of the Beti Bachao, Beti Padhao campaign. The scheme currently provides an interest rate of 7.6% and
Investing in this scheme allows parents or legal guardians to ensure financial security for a girl child aging ten years or below. Under the Sukanya Samriddhi Yojana, an account in the name of the girl can be opened across any of the private and public sector banks for 21 years. The tenure of investment under SSY is 21 years, starting from the account's opening date.

</p>
</div>
 <div class="div2">
<h5 style="color:#005792" ><b><u>Get to know about more schemes</u></b></h5>
<hr>
<p onclick="location.href = './PPY.php';">Pubilc Provident Fund </p>
<hr>
<p  onclick="location.href = './NSC.php';">National Savings Certificate </p>
<hr>
<p>Kisan Vikas Patra</p>

</div>
</div>
 <div class="div3" style="  padding-top: -150px;
  padding-right: 20px;
  padding-bottom: 0px;
  padding-left: 20px;">
<section id="benefit">
<h3 style="color:#005792;font-size:30px;"><b><u>Benefits of SSY account</b></u></h3><br>
<h6 style="color:#005792; font-size:28px;">1. High Interest Rate</h6>  
<p style="font-size:110%;">Sukanya Samriddhi Account provides a higher rate of interest than other Savings Plans that offer financial security for the girl child. Each financial year, the government declares the applicable interest rate for that year, while the interest on your investments is compounded yearly. By maturity, 
the assets under your Sukanya Samriddhi Yojana account will increase manifold – thanks to the power of compounding.</p>

<h6 style="color:#005792; font-size:28px;">2.Tax Benefit-</h6>  
<p style="font-size:110%;">If you have an account under SSY then you are eligible to avail of tax benefits on deposits. Let's take a look at the tax benefits provided by Sukanya Samriddhi Yojana.

a) Since an SSY account is a type of investment, it is eligible for deductions provided u/s 80C of the Income Tax Act. You can avail of a deduction of up to Rs 1,50,000.
b) The compound interest that is accumulated in your deposit account is also exempt from tax.
c) The withdrawals are also tax-free. Thus, once your account matures you can withdraw the amount without deduction.

Thus, all these tax benefits make Sukanya Samriddhi Yojana an E-E-E instrument. That is, Exempt-Exempt-Exempt.</p>  
<h6 style="color:#005792; font-size:28px;">3. Guaranteed Maturity Benefits </h6>  
<p style="font-size:110%;"> Upon maturity, your account balance under the Sukanya Samriddhi Yojana, including the accumulated interest, will be paid directly to the girl child (or policyholder). Thus, the scheme essentially helps your daughter becomes financially independent and empowered once she is mature enough to make life decisions on her own. Another benefit of investing under Sukanya Samriddhi Yojana is that your accumulated 
savings continue to accrue compounding interest even after maturity until it is finally closed by the account holder.</p> 
<h6 style="color:#005792; font-size:28px;">4. Flexible Investment-</h6> 
<p style="font-size:110%;"> One can make a minimum deposit of Rs. 250 in a year and a maximum deposit of Rs. 1.5 lakh in a year.
 This ensures people with different financial standing can invest in the scheme.</p>
<h6 style="color:#005792; font-size:28px;">5. Benefit of Compounding- </h6> 
<p  style="font-size:110%;"> Sukanya Samriddhi Yojana (SSY) is a great long-term investment scheme as it provides the benefit of annual compounding. So, even small investments will give great returns over the long term.</p>
<h6 style="color:#005792; font-size:28px;">6. Convenient Transfer-</h6> 
<p style="font-size:110%;">SSY account can be freely transferred from one part of the country to another (bank/post office) in case of transfer of parent/guardian operating the Sukanya Samriddhi Account.</p>
</section>
</div>
<div>

<h3 style="color:#005792; font-size:28px;margin:px; margin-left:200px;text-align:justify;margin-top:-60px;">Key Features of Sukanya Samriddhi Yojana (SSY)</h3>

<table style="width:850px; text-align:left; padding: 10px;">
<colgroup>
    <col span="1" style="background-color: hsl(199, 100%,88%)">
    <col span="2" style="background-color: hsl(199, 100%,94%)">
  </colgroup>
  <tr>
    <th>Features</th>
    <th>Details</th>    
  </tr>
  <tr>
    <td>DEPOSIT LIMIT</td>
    <td>- Minimum Deposit: <span style="color:blue">Rs 250</span>(Initial Deposit), Further deposits in multiples of 50<br>
- Maximum Deposit: <span style="color:blue">Rs 1,50,000</span></td>
  </tr>
  <tr>
    <td>ACCOUNT HOLDER</td>
    <td>- If the girl child is below the age of  <span style="color:blue">10 years</span>, then the account will be handled by the parent/guardian of the girl.<br>
- A Girl can take control of the a/c once she turns 18</td>
   
  </tr>
 <tr>
    <td>MATURITY</td>
    <td><span style="color:blue">21 years</span>after opening the account. You have to <span style="color:blue">deposit</span> for at least <span style="color:blue">15 years</span></td>
   
  </tr>
 <tr>
    <td>DOCUMENTS REQUIRED</td>
    <td>- <span style="color:blue">Birth Certificate</span> of the girl child<br>
- Form-1<br>
- PAN/AADHAR of the Parent/Guardian</td>
   
  </tr>
 <tr>
    <td>DEPOSITS</td>
    <td>Deposits can be made through the following:<br>
- <span style="color:blue"> online transfer/NEFT</span> <br>
- <span style="color:blue">demand draft</span> <br>
- <span style="color:blue"> cash</span><br>
-<span style="color:blue">cheque</span>  </td>
   
  </tr>
</table>
</div>

</div>
<div class="hii" style:"padding-top: -150px;
  padding-right: 20px;
  padding-bottom: 0px;
  padding-left: 20px;">
<h3 style= "color:#005792;"><b><u>How to Open Sukanya Samriddhi Yojana?</b></u></h3>
<p>You can open a Sukanya Samriddhi Account by visiting any of the following<br><br>

- Banks<br>
- Post office<br><br>

Here are the steps you can follow to open your Sukanya Samriddhi Account<br>

1. Visit your Bank or nearest post office.<br>
<br>
2. Fill the application form of Sukanya Samriddhi Yojana. This is known as FORM SSA-1. 
You will be provided with this form by the bank or the post office you visit.
<br><br>
3. You can also <b><a href="https://rbidocs.rbi.org.in/rdocs/content/pdfs/494SSAC110315_A3.pdf" download>DOWNLOAD </a></b>the form and fill it beforehand.
<br><br>
4. After filling this form, you need to submit the necessary documents. These include:
a) Birth certificate of the girl child for which you want to open the account
b) Identity Proof of the parent/guardian: AADHAR card, PAN card, Voter ID, etc
c) Address Proof: License, Telephone bill, etc.<br>
<br>
5. Pay your first deposit. You must deposit a minimum amount of Rs 250. You can deposit up to Rs 1.5 lakhs<br>
<br>
6. After submitting all the documents, the bank will take some days to process your application.<br>
<br>
7. After verification, your SSY account will be opened. You will be issued a passbook<br></p>
</div>

<img src="INVESTS.jpg" style="width:950px;height:250px; margin-left: px;margin-top: px;>
</div>
<div class = "a">
 <section id="contact" >
 <p class="copyright" ><img src="phone.jpg" style="width:20px;height:30px; margin:10px; align: center; ">  
Toll Free Number: <a href="tel: 1800 266 7575  ">1800 266 7575</a> or <a href="tel: 1800 22 7575  ">1800 22 7575</a> 
    <p class="copyright">© Copyright 2021 Wealthy Kids</p>
  </section>
</div>
</body>
</html>

