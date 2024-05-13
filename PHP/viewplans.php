
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
</head> <style>

  .grid-container {
    display: grid;
    row-gap: 20px;
    padding: 120px;
   grid-template-rows: 100px 100px 100px 100px 100px ;
       background-color: #ADD8E6;//#C2CAD0

  }
  .grid-container > div {
    border: 1px solid black;
    background-color: white ;
    border-radius: 25px;

  }
  .button {
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 30px 15px;
  transition-duration: 0.4s;
  cursor: pointer;
  float: right;
  border-radius: 25px;
}
.button1 {
  background-color: #e93b81;
  color:   white;
  border: 1px solid #e93b81 ;

}

.button1:hover {
  background-color: 		#FF69B4;
  color:   white;
}
.button2 {
  background-color:#e93b81;
  color:  white ;
  border: 1px solid #e93b81;

}

.button2:hover {
  background-color: 		#FF69B4;
  color:   white;
}
.button3 {
  background-color: #e93b81;
  color:   white;
  border: 1px solid #e93b81;

}

.button3:hover {
  background-color: 		#FF69B4;
  color:   white;
}
.button4 {
  background-color: #e93b81;
  color:  white;
  border: 1px solid #e93b81 ;

}

.button4:hover {
  background-color: 		#FF69B4;
  color:   white;
}
.button5 {
  background-color: #e93b81;
  color:   white;
  border: 1px solid  white;

}

.button5:hover {
  background-color: 		#FF69B4;
  color:  white;
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
    <div class="grid-container">
  <div>
  <button class="button button1">Details</button>
  <table>
  <tr>
    <td><img src="ssy.jpg" style="width:70px;height:70px; margin: 15px; margin-top: 10px; "></td>
    <td><p style="color: #005792; margin:px; margin-left: px; font-size:;padding-bottom: px;padding-top: 20px;">
      <b>Sukanya Samriddhi Yojana</b></p>
    </td>
    <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 15px;
  padding-bottom: px;text-align: center;padding-top: 5px;
  font-size:100%;">Interest Rate<br><b> 7.60%</b></br> </p>  </td>
  <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 40px;
padding-top: 5px;text-align: center;
font-size:100%;">Min. Investment Amount<br><b> Rs.250 per annum</b></br> </p>  </td>
<td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 40px;
padding-bottom: px;text-align: center;padding-top: 5px;
font-size:100%;">Maturity Period<br><b> 21 years</b></br> </p>  </td>
  </tr>
</table>

</div>
  <div><button class="button button2">Details</button>
    <table>
    <tr>
      <td><img src="ppf.jpg" style="width:70px;height:70px; margin: 15px; margin-top: 10px; "></td>
      <td><p style="color: #005792; margin:px; margin-left: px;padding-top: 20px; font-size:100%;padding-bottom: px;padding-top: 20px;">
        <b>Pubilc Provident Fund</b></p>
      </td>
      <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 55px;padding-top: 5px;
    padding-bottom: px;text-align: center;
    font-size:100%;">Interest Rate<br><b> 7.1%</b></br> </p>  </td>
    <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 40px;padding-top: 5px;
  padding-bottom: px;text-align: center;
  font-size:100%;">Min. Investment Amount<br><b> Rs.500 per annum</b></br> </p>  </td>
  <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 40px;padding-top: 5px;
  padding-bottom: px;text-align: center;
  font-size:100%;">Maturity Period<br><b> 15 years</b></br> </p>  </td>
    </tr>
  </table>





  </div>
  <div><button class="button button3">Details</button>
    <table>
    <tr>
      <td><img src="nsc.jpg" style="width:70px;height:70px; margin: 15px; margin-top: 10px; "></td>
      <td><p style="color: #005792; margin:px; margin-left: px; font-size:100%;padding-bottom: px;padding-top: 20px;">
        <b>National Savings Certificate</b></p>
      </td>
      <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 15px;padding-top: 5px;
    padding-bottom: px;text-align: center;
    font-size:100%;">Interest Rate<br><b> 6.8%</b></br> </p>  </td>
    <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 30px;padding-top: 5px;
    padding-bottom: px;text-align: center;
    font-size:100%;">Min. Investment Amount<br><b> Rs.1000 per annum</b></br> </p>  </td>
    <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 30px;padding-top: 5px;
    padding-bottom: px;text-align: center;
    font-size:100%;">Maturity Period<br><b> 5 years</b></br> </p>  </td>
    </tr>
    </table></div>
 <div><button class="button button4">Details</button>
    <table>
    <tr>
      <td><img src="kvp.jpg" style="width:70px;height:70px; margin: 15px; margin-top: 10px; "></td>
      <td><p style="color: #005792; margin:px; margin-left: px; font-size:100%;padding-bottom: px;padding-top: 20px;">
        <b>Kisan Vikas Patra</b></p>
      </td>      <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 110px;padding-top: 5px;
    padding-bottom: px;text-align: center;
    font-size:100%;">Interest Rate<br><b> 6.9%</b></br> </p>  </td>
    <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 30px;padding-top: 5px;
    padding-bottom: px;text-align: center;
    font-size:100%;">Min. Investment Amount<br><b> Rs.1000 per annum</b></br> </p>  </td>
    <td><p style="color: #005792; margin:px; margin-top: 0px;padding-left: 30px;padding-top: 5px;
    padding-bottom: px;text-align: center;
    font-size:100%;">Maturity Period<br><b> 10.333 years</b></br> </p>  </td>
    </tr>
    </table></div>


  
</div>
 <section id="contact">
 <p class="copyright">For Helpline Call </p>
    <p class="copyright">© Copyright 2021 Wealthy Kids</p>
  </section>


  </body>
</html>
