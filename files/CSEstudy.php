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
	<title>CSE HIGHER STUDIES</title>
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
      background: url(https://cdn.pixabay.com/photo/2017/06/04/20/23/binary-2372130_960_720.jpg) no-repeat center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      color: white;
      clear: left;
      padding: 8%;
    }
    footer {
    padding: 2%;
    color: white;
    clear: left;
    background-color: black;
    }
    a {
    	color:black;
    }

    h1{
    	padding:20px;
    	font-size: 4em;	
    } 
    h2{
        padding:10px;
    	font-size: 3em;	
    }
    h3,h4{
    	color:rgb(30,40,150);
    }
hr{
	color: black;
}
.container
{
  width:90%;
	
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
  <h1><b>HIGHER STUDIES</b></h1>
  <div class="container-fluid">
   <p><b>There are multiple options for CSE students for their Master graduation. However, that depends on your marks, entrance tests, college options, course type, country where you want to pursue and also financial preferences.

Good news is that there’s immense scope for CSE students all over the globe.</b></p>
</div><br><br>
</center>
<div class="container-fluid">
<ul><h3><b>M.Tech/M.E (Master of Technology/Master of Engineering)</b></h3>
  <hr>
<p>ENGINEERING is one of the best courses in the world. In India, Master of Engineering (ME) or Master of Technology (MTech) or Master of Science in Engineering (M.Sc.Eng.) degree is a postgraduate program in engineering field. This is generally a 2-year programs (2 or more years in case of M.Sc.Eng. degree) after completing a 4-year undergraduate program in engineering resulting in the award of a Bachelor of Engineering or Bachelor of Technology degree.

Master of Science in Engineering (M.Sc.Eng.) degree in India is usually structured as an engineering research degree, lesser than Ph.D. and considered to be parallel to M.Phil. degree in humanities and science.<br><br>
<h4>Admission procedure</h4>
 Admission to most postgraduate courses in IITs is granted through various written entrance examinations: GATE (for M.Tech.), JAM (for M.Sc.) and CEED (for M.Des.). The admission for Ph.D. program is based primarily on a personal interview, though candidates may also have to appear for written tests. The IITs are also well known for their special reservation policy, which is significantly different from the one applied in other educational institutions of India.<br><br>
 <h4>ELIGIBILITY</h4>
  Minimum 60% marks at Higher & Senior Secondary level(10th & 12th)<br>
B. Tech /BE in Chemical/ Mechanical/ Electrical/ Civil/ Industrial Safety/ Petroleum Engineering/ Geo Science Engineering/ Fire Safety Engineering/ Electronics/ Geo Informatics with minimum /Computer Science /Informational Technology 60% marks<br><br>
<h4>Branches (trades) offered in M.TECH</h4>
Aerospace Engineering<br>
Chemical Engineering<br>
Civil Engineering<br>
Computer Science Engineering<br>
Petroleum Geo science<br>
Electrical Engineering<br>
Mechanical Engineering<br>
Metallurgical Engineering<br>
Information Technology<br>
Electronics Engineering<br>



</p><br>
<h5><b>Following are the entrance exams for persuing M.tech in INDIA:</b></h5>
<ul><li><a href="http://gate.iitg.ac.in/" target="_blank">GATE (Graduate Aptitude Test in Engineering</a></li>
<li><a href="https://upsee.nic.in/publicinfo/public/home.aspx" target="_blank">UPTU/AKTU(APJ Abdul Kalam Technical University)</a></li>
<li><a href="http://www.bits-pilani.ac.in/admissionsOverview" target="_blank">BIRLA INSTITUTE OF TECHNOLOGY AND SCIENCES PILANI</a></li>
<li><a href="http://www.vit.ac.in/" target="_blank">VELLORE INSTITUTE OF TECHNILOGY</a></li>
<li> <a href="https://engineering.careers360.com/colleges/list-of-engineering-colleges-in-india" target="_blank"> AND MANY MORE</a></li>
</ul>
<br><br><h3><b>M.Tech cum PhD</b></h3>
  <hr>
<p>It is 2+3 year full-time residential Post Graduate Programme in Engineering (Integrated MTech-PhD Programme) for motivated and talented candidates to work in the frontier and trans-disciplinary areas of Engineering and also pursue research. It has vast scope in technical area in future. 1. Institute assistantships will be available to eligible Dual (MTech+PhD) degree programme students as per prevailing (MHRD, GOI) norms, as applicable from time to time. The present rates of assistantships are as below:<br>

1st & 2nd Year : Rs.16,000/- p.m. <br>

3rd to 5th Year : Rs.18,000/- p.m.<br>

<h4>ELIGIBILITY</h4> 

</p>
<br>
<h5><b>Following are the entrances for persuing ARCHITECTURE courses in india:</b></h5>
<ul><li><a href="http://gate.iitg.ac.in/" target="_blank">GATE (Graduate Aptitude Test in Engineering</a></li>
<li><a href="https://upsee.nic.in/publicinfo/public/home.aspx" target="_blank">UPTU/AKTU(APJ Abdul Kalam Technical University)</a></li>
<li><a href="http://www.bits-pilani.ac.in/admissionsOverview" target="_blank">BIRLA INSTITUTE OF TECHNOLOGY AND SCIENCES PILANI</a></li>
</ul></li>
<br><br>
</div>
   	

   
<?php 
readfile('comp/footer.html');
?>
</body>
</html>
