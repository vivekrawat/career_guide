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
	<title>Civil Engineering</title>
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
      background: url(http://sinhvu.com/wp-content/uploads/2017/12/web-design-2906159.jpg) no-repeat center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      color: white;
      clear: left;
      padding: 7%;
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
  <h1><b>Civil Engineering</b></h1>
  <div class="container">
   <p><b>Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including works such as roads, bridges, canals, dams, airports, sewerage systems, pipelines, and railways etc.</b></p>
</div>
<br>
<br>

   <div class="container">
		<div class="row">
	    	<div class="col-lg-4 col-sm-6"><div class="jumbotron"><a href=civiljob.php><img width="93" height="64" src="https://cdn4.iconfinder.com/data/icons/media-advertising-gray/64/JOB_SEARCH-512.png"><br><h5><b>JOB</b></h5></a></div></div>
        <div class="col-lg-4 col-sm-6"><div class="jumbotron"><a href=cestudy.php><img width="93" height="64" src="https://www.iimeorg.com/wp-content/uploads/2018/01/vehqmucvygawwyudsugy.png"><br><h5><b>Higher Studies</b></h5></a></div></div>
        <div class="col-lg-4 col-sm-6 "><div class="jumbotron"><a href=civilself.php><img width="93" height="64" src="https://cdn0.iconfinder.com/data/icons/e-learning-vol-2-2/512/self_study_education_learning_smart-512.png"><br><h5><b>Self-learning</b></h5></a></div></div>
    	</div>
    </div>
   
   </center>
   <?php 
readfile('comp/footer.html');
?>
</body>
</html>