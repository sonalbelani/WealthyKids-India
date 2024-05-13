<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
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
<style>
h3 {
  color: Darkblue;
  font-family: verdana;
  text-align: left;
  margin-left: 50px;
}
p {
  font-family: Sans-serif ;
  font-size: 130%;
  margin-right:300px;
  margin-left:50px;
  text-align: justify;
}

.dropbtn:hover, .dropbtn:focus {
  background-color:  #e93b81;
}
.dropbtn {
  background-color:#e93b81 ;
  color: white;
  margin: 4px;
 border-radius: 3px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:  #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}



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
         <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Calculator</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="Calculator.php">Simple Interest calculator</a>
    <a href="cal.php">Compound Interest calculator</a>
    
  </div>
</div> 
          <li class="nav-item">
            <button class="btn btn-sm" onclick="location.href = './logout.php';">Logout</button>          
          </li </ul>
       
      </div>
    </nav>
</section>
<h3 >Sukanya Samriddhi Yojana (SSY)</h3>
 <p>
      Sukanya Samriddhi Yojana (SSY) is a government offered investment scheme for the girl child.
      The main objective of the SSY scheme is to encourage parents to invest in a long-term plan for their daughters’ higher 
      education and marriage.The SSY Scheme was launched in January 2015, in order to promote the welfare of girl child.
      The parents or guardians of the girl child below the age of 10 years can open the SSY account on the behalf of the girl 
     child and can operate the account.<br>
     To open an SSY account, a minimum initial deposit of Rs 250 is required and after that, the investments are to be done in the multiples of 150 rupees, 
     which brings the annual investment to 1.5 lakhs. The process continues for the next 15 years, after which the amount matures and it is ready to be withdrawn
     This means, if you invest 1.5 lakhs on a yearly basis for 15 years, you will have 43.5 lakhs compounded in your account as per
      the current interest rate of 7.60 per cent. The age eligibility is below 10 years of age, which is accurate as only when invested in those years, 
   will the money mature right when the girls are ready to enter college.<br><br>
   Illustration<br>
 Say, you have a one-year-old girl child and you plan to invest in an SSY account. If you plan to invest Rs.20,000 per financial 
 year in the year 2021, the maturity amount you can earn will be Rs.8,49,000 in the year 2034. 
 This maturity amount is arrived at keeping in mind the applicable interest rate of 7.6% p.a. for Q2 FY22.
</p>
<h3 >Public provident Fund (PPF)</h3>
<p>
 Opening a PPF for your children is an excellent idea, but you also need to be consistent for your child to reap the benefit.
A PPF account can be opened in one's own name as well as in the name of a minor. However, a maximum of Rs 1.5 lakh can be put into them (parent plus minor account) in one year. 
The principal invested in PPF qualifies for deduction under Section 80C of the Income Tax Act, 1961 up to a maximum limit of
 Rs 1.5 lakh in a financial year. Investment made in self and kid's account will both count towards tax benefits.<br>
Further, PPF has a long tenure of 15 years, thus the impact of compounding is huge, especially in the later years. In addition to one's own account, open an account in kid's name and keep contributing into both of them. 
When the child becomes a major and starts earning, he or she can continue it in their own name. 
The biggest advantage is that the lock-in period (of minor's account) will no longer be 15 years as it was already opened by the 
parents long back. The child can, however, extend the account in block of 5 years indefinitely, invest to save tax, and reap tax-free proceeds.<br>
 let's look at an example. Suppose you open a PPF account for your 10-year-old 
daughter. You start with a ₹500 monthly contribution, and then she continues with the same amount until she turns 60. If the average return is 7%, she will accumulate a corpus of ₹27,86,658. The investment tenure, in this case, will be 50 years.
But suppose her first contribution towards PPF is after joining her first job at 22. Instead of ₹500, she contributes ₹1,000 monthly (double the amount). She will accumulate ₹23,72,635 once she turns 60 at an average 7% interest. The investment tenure, in this case, will be 38 years. 
She will still have a smaller corpus despite contributing a higher amount due to the investment tenure.
</p>
<h3>National Savings Certificate (NSC)</h3>
<p>
NSC or National Savings Certificate is the best and a proven method of saving for your child’s education. 
National saving certificates can be bought for a period of 5 years and the same can be reinvested on maturity.
The minimum investment amount for this scheme is INR 100 and there is no maximum investment amount. The interest rate of NSC changes every year.
The investments that are made of Rs 1 Lakh per annum also qualify for the IT rebate under the section 80C of Income Tax Act.
</p>
<h3>Balika Saridhhi Yojana</h3>
<p>Balika Samridhi Yojana was introduced by the Indian Government in 1997 under the policies for Women and Child Development to facilitate the girl child. This scheme is intended to increase the status of the girl child in India. It provides financial support to encourage girls to attend schools. Girls born after the 15th of August 1997 to families living below the poverty line are eligible for this scheme.
     A maximum of two daughters in a family can benefit from this scheme.
    The scheme will pay annual scholarships into the girl’s account, starting at Rs.300 (when the girl is in Class 1) and reaching Rs.1, 000 when the girl is in Class 10.
    The girl will receive the money when she is 18 years old, provided she is not yet married.

<h3>LIC New Children's Money Back Plan</h3>
<p>LIC's New Children’s Money Back Plan is a insurance cum investment plan which can be used for securing the financial needs of a child as they turn 25 years old.  It was launched on 2nd March , 2015.<br><br>
 Key Benefits of LIC New Children's Money Back Plan<br>
> Designed to cater to educational, marriage and other needs of growing children <br>
> Offers cover on the life of child during the policy term<br>
> Can be bought by parent or grandparent for a child aged 0 to 12 years<br><br>
Working of LIC’s New Children’s Money Back Plan<br>
Let us consider the example of Mr and Mrs Gupta, parents of 1 year old Akash, to understand how this plan works. The couple work as managers and are well off, but they opt for the plan to ensure that the financial needs of Akash are met in the future. They opt for a basic sum assured equivalent to Rs 15 lakh, paying a premium of Rs 25,000 per year for the same (approximately). He pays this amount regularly, ensuring that the policy doesn’t lapse. As part of the benefits, he receives 20% or 3 lakhs when Akash reaches the age of 18 years. He gets additional survival benefits of Rs 3 lakhs each when Akash turns 20 and 22 years. When Akash reaches the age of 25 years, he will get a sum equivalent to the pending 40% of the sum assured, i.e., Rs 6 lakhs plus any additional benefits which have been accrued.
In the case of untimely demise of Akash during the policy period, a death benefit will be paid to the parents, if the death occurs after the risk period has commenced. In the case of demise before commencement of risk period, the premiums paid will be returned.<br><br>

Premium Payment for LIC’s New Children’s Money Back Plan<br>
Members who have opted for this policy are expected to pay the premium for the full policy term, with an option to pay it either monthly, quarterly, half-yearly or yearly. There is no cap on the amount they pay as premium, with this decided by the sum assured opted by an individual.<br>

<section id="contact">
    <i class="fab fa-twitter foot-icon"></i>
    <i class="fab fa-facebook-f foot-icon"></i>
    <i class="fab fa-instagram foot-icon"></i>
    <i class="fas fa-envelope foot-icon"></i>
  </section>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

 
</body>

</html>

