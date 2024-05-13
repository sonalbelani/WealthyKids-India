<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div id="container">
  <h1>Investment Calculator</h1>
  <div id="calculator">
<div class="box">
    <img src="invest.jpg" alt="invest"style="width: 50%; float:right;margin-top:100px;">
  </div>
    <!-- Form-->
    <form>
      <p>How much are you investing?</p>
      Rs<input id="investamt" type="text" placeholder="Investment Amount">
      <p>How many years will you be investing?</p>
      <select id="investyr">   
            <option disabled selected value="0">How many years?</option>
            <option value="1">1 year</option>
            <option value="2">2 years</option>
            <option value="3">3 years</option>
            <option value="4">4 years</option>
            <option value="5">5 years</option>
            <option value="6">6 years</option>
            <option value="7">7 years</option>
            <option value="8">8 years</option>
            <option value="9">9 years</option>
            <option value="10">10 years</option>
           <option value="11">11 years</option>
            <option value="12">12 years</option>
            <option value="13">13 years</option>
           <option value="14">14 years</option>
           <option value="15">15 years</option>
     </select>
    </form>
    <p>What is the interest rate?</p>
    <input id="intrate" type="text" placeholder="Interest rate">%
    </br>
    </br>
    <button type="button" id="calculate">Calculate!</button>
   
 </div>
 </br>
<div id="investyield">
    <sup>Rs</sup><span id="yield">0.00</span>
    <small id="yieldamount">Future Value</small>
  </div
</div>
<script type="text/javascript">
function calculateInvestment() {
  var investAmt = document.getElementById("investamt").value;
  var investYr = document.getElementById("investyr").value;
  var interestRate = document.getElementById("intrate").value;

  //validate input
  if (investAmt === "" || investYr == 0 || interestRate === "") {
    alert("Please enter values");
    return;
  }

  //check to see if this input is empty or less than or equal to 1
  if (interestRate === "" || interestRate <= 1) {
    interestRate = 1;
    document.getElementById("yieldamount").style.display = "block";
  } else {
    document.getElementById("yieldamount").style.display = "block";
  }

  //calculate tip
  var total = [investAmt * (interestRate / 100) * investYr];

  var grandTotal = parseFloat(total) + parseFloat(investAmt);

  //round to two decimal places
  grandTotal = Math.round(grandTotal * 100) / 100;

  //next line allows us to always have two digits after decimal point
  grandTotal = grandTotal.toFixed(2);

  //display the tip
  document.getElementById("investyield").style.display = "block";
  document.getElementById("yield").innerHTML = grandTotal;
}

//hide the tip amount on load
document.getElementById("investyield").style.display = "none";
document.getElementById("yieldamount").style.display = "none";

//click to call function
document.getElementById("calculate").onclick = function() {
  calculateInvestment();
};
</script>
</body>

</html>
  