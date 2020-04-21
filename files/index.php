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
    <title>Career plans</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">

<style>
  body{
    background: url(http://sinhvu.com/wp-content/uploads/2017/12/web-design-2906159.jpg);
    background-size: cover;
    font-family: lato;
    background-repeat: no-repeat;
}
html{
  height: 100%;
}
#content
{
  text-align: center;
  padding: 14%;
}

h1{
  color: rgba(255,255,255,.8);
  font-weight: 700;
  font-size: 6em;
}
h2{
  color: rgba(255,255,255,.6);
  font-weight: 700;
  font-size: 4em;
}
h5{
  color: white;
    font-size: 2em; 
}
hr{
  color:white;
  width: 400px;
}
.cla{
      background-color:rgba(0,0,0,.7);
      padding:15px;
}

</style>
</head>
<body>
   <nav class="navbar navbar-default">
  <div class="container">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="career.php">Career Guide</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="About.php">About <span class="sr-only">(current)</span></a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?logout='1' " >Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<center>
  <br><br><br>
<h2><b> 
 	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
</b></h2>
    </center>

  

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                <div id="content">
                <h1>Career Plans</h1>
                <h5>"Plan your future here"</h5>
                <hr> 
                
                </div>  
                </center>
            </div>
        </div>
    </div>
    <div class="container" >
		<div class="row">
	    	<a href="startup.php"><div class="col-lg-3 col-sm-6 cla"><h5><b>START UP</b></h5></div></a>
	    	<a href="b.tech.php"><div class="col-lg-3 col-sm-6 cla"><h5><b>B.TECH</b></h5></div></a>
	    	<a href="12.php"><div class="col-lg-3 col-sm-6 cla"><h5><b>12th PASS</b></h5></div></a>
	    	<a href="10thpass.php"><div class="col-lg-3 col-sm-6 cla"><h5><b>10th PASS</b></h5></div></a>
	    </div>
	</div>
   <script type="text/javascript" scr="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html> 