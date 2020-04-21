<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>12th pass</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src='https://fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<style>
     header
     { 
      background: url(https://images.indianexpress.com/2017/06/exam759.jpg) no-repeat center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      color: white;
      clear: left;
      padding: 6%;
    }
    footer {
    padding: 2%;
    color: white;
    clear: left;
    background-color: black;
    }

    h1{
    	padding:20px;
    	font-size: 4em;	
    } 
    
    h2{
        padding:10px;
    	font-size: 3em;	
    }
hr{
	color:white;
	width: 130px;
}
.containet
{
  width: 90%;
}
.jumbotron
    	{
    		background-color: #DAD4FF;
    		padding: 10px;
    	}

    </style>
</head>
<body>
	<header>
  <?php
   include("comp/header.html");
   ?>
</header>
<center>
  <h1><b>12th Pass</b></h1>
  <div class="container">
   <p><b>In India, board examinations refer to the public examinations that occur at the end of the 10th to 11th grade education (SSLC), or at the end of the 12th to 13th grade education (HSC). The scores achieved in these exams are considered very important for getting into universities, professional courses or training programmes, and even possibly in finding employment. After 13 std board examination are available</b></p>
   <h3><b>Following are streams which are there in 12th</b></h3>
</div>
<br>
<br>

   <div class="container">
		<div class="row">
	    	<div class="col-lg-4"><div class="jumbotron"><a href=Math.php><img width="93" height="64" src=https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/calculator-512.png><br><h5><b>Math</b></h5></a></div></div>
    
	    	<div class="col-lg-4"><div class="jumbotron"><a href=bio.php><img width="93" height="64" src="https://cdn3.iconfinder.com/data/icons/education-5-2/256/Biology-512.png"><br><h5><b>Bio</b></h5></a></div></div>
	    	<div class="col-lg-4"><div class="jumbotron"><a href=Commercemain.php><img width="93" height="64" src=https://banner2.kisspng.com/20180412/bsq/kisspng-e-commerce-computer-icons-trade-computer-software-ecommerce-5acfc0dd09a990.0350910915235647650396.jpg><br><h5><b>Commerce</b></h5></a></div></div>
    	</div>
    </div>
  
   </center>
   <?php 
readfile('comp/footer.html');
?>
</body>
</html>