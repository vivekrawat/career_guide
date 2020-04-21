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
	<title>B.Tech</title>
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
      background: url(http://ingenieriaei.com.mx/wp-content/uploads/2017/03/engineer2.jpg) no-repeat center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      color: white;
      clear: left;
      padding: 5%;
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
  <h1><b>B.Tech</b></h1>
  <div class="container">
   <p><b>The Bachelor of Technology (Latin Baccalaureus Technologiae, commonly abbreviated as B.Tech.; with Honours as B.Tech. (Hons.); or BTech) is an undergraduate academic degree conferred after completion of a three-year, a four-year, or even a five-year (such as in Nigeria) program of studies at an accredited university or accredited university-level institution. B.Tech. is considered as skill-oriented course.</b></p>
</div>
<br>
<br>

   <div class="container">
		<div class="row">
	    	<div class="col-lg-4"><div class="jumbotron"><a href=IT.php><img width="93" height="64" src="https://static.thenounproject.com/png/227791-200.png"><br><h5><b>IT</b></h5></a></div></div>   
	    	<div class="col-lg-4"><div class="jumbotron"><a href=cs.php><img width="93" height="64" src="https://image.flaticon.com/icons/png/512/90/90603.png"><br><h5><b>CS</b></h5></a></div></div>
	    	<div class="col-lg-4"><div class="jumbotron"><a href=Civil.php><img width="93" height="64" src="https://cdn4.iconfinder.com/data/icons/construction-civil-engineering-earthworks-worker/216/construction-machine-worker-01-007-512.png"><br><h5><b>CE</b></h5></a></div></div>
        
    	</div>
      <br>
      <div class="row">
        <div class="col-lg-4" ><div class="jumbotron"><a href=en.php><img width="93" height="64" src="https://cdn0.iconfinder.com/data/icons/mobile-development-svg-icons/60/Electricity_supply_network-512.png"><br><h5><b>EN</b></h5></a></div></div>
        <div class="col-lg-4"><div class="jumbotron"><a href=EC.php><img width="93" height="64" src="https://etechcomponents.com/wp-content/uploads/2018/03/129845a1b240997fbfde84e2fed33cb2.png"><br><h5><b>EC</b></h5></a></div></div>
        <div class="col-lg-4"><div class="jumbotron"><a href=me.php><img width="93" height="64" src="https://static.thenounproject.com/png/75483-200.png"><br><h5><b>ME</b></h5></a></div></div>

    </div>
  
   </center>
   <?php 
readfile('comp/footer.html');
?>
</body>
</html>