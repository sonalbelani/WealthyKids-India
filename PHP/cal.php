<?php
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="style1.css">
</head>
   
    <body>
          
                    <div>
<div id="container">
  <div id="calculator">
  <div class="box">
    <img src="invest.jpg" alt="invest"style="width: 50%; float:right;margin-top:100px;">
  </div>
    <!-- Form-->
                        <div="compound-interest ">
    <h3>Compound Interest</h3>
    <p class="lead"></p>
    <form id="ciForm">
      <div class="form-group">
        <label for="principalCompound">Principal</label><br>
        <input type="text" class="form-control" id="principalCompound" placeholder="Enter amount ">
      </div>
      <div class="form-group">
        <label for="interestCompound">Interest Rate</label><br>
        <input type="text" class="form-control" id="interestCompound" placeholder="Example: 12%">
      </div>
      <div class="form-group">
        <label for="timesCompounded">Times Compounded per Year</label><br>
        <input type="text" class="form-control" id="timesCompounded" placeholder="Example: 4 (means compounded quarterly)">
      </div>
      <div class="form-group">
        <label for="termCompound">Term of Loan</label><br>
        <input type="text" class="form-control" id="termCompound" placeholder="Example: 2 (must be in terms of years)">
      </div>
      <button type="submit" class="btn btn-primary" id="btnCompound" onclick="compoundInterest()">Calculate</button>
    </form>
    <div>
      <p class="lead mt-3" id="ciOutput-01"></p>
      <p class="lead mb-3" id="ciOutput-02"></p>
    </div>
    <div class="text-center">
      <input class="btn btn-secondary btn-lg" type="button" value="Reset" onClick="document.getElementById('ciForm').reset()">
    </div>
  </div>
</div>
<script type="text/javascript">
var principal = 0;
var interestRate = 0;
var timesCompounded = 0;
var termOfLoan = 0;
var amount = 0;

function compoundInterest() {
  event.preventDefault();
  var principal = parseFloat(document.getElementById("principalCompound").value);
  var interestRate = parseFloat(document.getElementById("interestCompound").value);
  interestRate = interestRate / 100;
  var timesCompounded = parseFloat(document.getElementById("timesCompounded").value);
  var termOfLoan = parseFloat(document.getElementById("termCompound").value);
  var a = interestRate / timesCompounded;
  var b = 1 + a;
  var c = timesCompounded * termOfLoan;
  var d = Math.pow(b, c);
  var amount = (principal * d).toFixed(2);
  document.getElementById("ciOutput-01").innerHTML = "Interest: $" + (amount - principal).toFixed(2);
  document.getElementById("ciOutput-02").innerHTML = "Total plus interest: $" + amount;
}
</script>
          
    </body>
    
  
</html>