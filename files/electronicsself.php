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
	<title>Self study for civil</title>
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
      background: url(https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8b209b87443cca9d7d140ec0dd49fe21&auto=format&fit=crop&w=1350&q=80) no-repeat center; 
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
.container{width:90%;
	
	}
  .containe
  {
    width: 70;
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
   <h1><b>Self-Learning</b></h1>
  <div class="container">
   <p><b>Self Learning is the process of acquiring new, or modifying existing, knowledge, behaviors, skills, values, or preferences.</b></p>
</div>
<br>
<br>
</center>
<div class="container">
<ul><h3><b>INTERNSHIP AND TRAINING</b></h3></ul>
  <hr>
<p>Do summer internship or training. Find any good company, not necessary that would be the biggest. Even small organization helps you to boost up you knowledge and skills.With more and more companies using internships as a way to screen talent, engineering students will have an added advantage if they do an internship.

Rather than looking at internships as a short time opportunity, students can use that in a productive way and look to convert it into a full-time job.

But how should I get past the internship and go about securing a full-time offer from the same company?

This is one of the generic questions that most of the mechanical engineering students have. Since they are going for internships in their core mechanical industries, they really don’t want to stop their learning at that point.

So, if you are a mechanical engineer who wants more than an internship, here are some insights for you to make the most of your internship and convert it into a full-time opportunity.
</p><br>
<h5><b>Some Company provides Internshipwhich have best working environment and Exposure</b></h5>
<br>

<h4>L&T - hazira</h4>


<h4>Voltamp - vadodara</h4> 

<h4>
Essar - hazira</h4>

<h4>GETCO - patan</h4>
<h4>Tunwal - Gandhinagar (dealing with E-vehicle)</h4>


<h4>Sun edison - Ahmedabad</h4> 

<h4>T&R - vadodara</h4>

<h4>schnider electrics </h4> 











<br>
<br>

<ul><h3><b>programming languages</b></h3></ul> 
<hr>
<h4>C</h4>
<p>
  C is a general-purpose, imperative computer programming language, supporting structured programming, lexical variable scope and recursion, while a static type system prevents many unintended operations. By design, C provides constructs that map efficiently to typical machine instructions, and therefore it has found lasting use in applications that had formerly been coded in assembly language, including operating systems, as well as various application software for computers ranging from supercomputers to embedded systems.

C was originally developed by Dennis Ritchie between 1969 and 1973 at Bell Labs, and used to re-implement the Unix operating system.It has since become one of the most widely used programming languages of all time, C compilers from various vendors available for the majority of existing computer architectures and operating systems. C has been standardized by the American National Standards Institute (ANSI) since 1989 (see ANSI C) and subsequently by the International Organization for Standardization (ISO).

C is an imperative procedural language. It was designed to be compiled using a relatively straightforward compiler, to provide low-level access to memory, to provide language constructs that map efficiently to machine instructions, and to require minimal run-time support. Despite its low-level capabilities, the language was designed to encourage cross-platform programming. A standards-compliant C program that is written with portability in mind can be compiled for a very wide variety of computer platforms and operating systems with few changes to its source code. The language has become available on a very wide range of platforms, from embedded microcontrollers to supercomputers.
</p>
<h5>links of where you can learn c</h5>
<ul><li><a href="www.izito.co.in/Find">www.izito.co.in/Find</a></li>
<li><a href="www.zapmeta.co.in/Search/Now">www.zapmeta.co.in/Search/Now</a></li>
<li><a href="https://www.learn-c.org/">https://www.learn-c.org/</a></li>
<li><a href="https://www.learn-c.org/en/Hello%2C_World%21">https://www.learn-c.org/en/Hello%2C_World%21</a></li>
<li><a href="https://www.programiz.com/c-programming">https://www.programiz.com/c-programming</a></li>
<li><a href="https://www.lynda.com/C-tutorials/Learning-C/718661-2.html">https://www.lynda.com/C-tutorials/Learning-C/718661-2.html</a></li>
</ul>

    <h4>c++</h4>
    <p>C++  is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation.

It was designed with a bias toward system programming and embedded, resource-constrained and large systems, with performance, efficiency and flexibility of use as its design highlights. C++ has also been found useful in many other contexts, with key strengths being software infrastructure and resource-constrained applications, including desktop applications, servers (e.g. e-commerce, Web search or SQL servers), and performance-critical applications (e.g. telephone switches or space probes). C++ is a compiled language, with implementations of it available on many platforms. Many vendors provide C++ compilers, including the Free Software Foundation, Microsoft, Intel, and IBM.

C++ is standardized by the International Organization for Standardization (ISO), with the latest standard version ratified and published by ISO in December 2017 as ISO/IEC 14882:2017 (informally known as C++17). The C++ programming language was initially standardized in 1998 as ISO/IEC 14882:1998, which was then amended by the C++03, C++11 and C++14 standards. The current C++17 standard supersedes these with new features and an enlarged standard library. Before the initial standardization in 1998, C++ was developed by Bjarne Stroustrup at Bell Labs since 1979, as an extension of the C language as he wanted an efficient and flexible language similar to C, which also provided high-level features for program organization.[9] C++20 is the next planned standard thereafter.</p>
<h5>links of where you can learn c++</h5>
<ul>
<li><a href="www.pluralsight.com/">www.pluralsight.com/</a></li>
<li><a href="www.udemy.com/C++/Online-Learning">www.udemy.com/C++/Online-Learning</a></li>
<li><a href="https://www.learncpp.com/">https://www.learncpp.com/</a></li>
<li><a href="https://www.learn-cpp.org/">https://www.learn-cpp.org/</a></li>
<li><a href="https://www.udemy.com/free-learn-c-tutorial-beginners/">https://www.udemy.com/free-learn-c-tutorial-beginners/</a></li>
<li><a href="https://www.programiz.com/cpp-programming">https://www.programiz.com/cpp-programming</a></li>
</ul>

     



    
   
                    <br>
                    <hr>
                    <form>
           <label><h4><b>Email Id</b></h4></label>
          <input type="email" name="email" tabindex="1" placeholder="email" id="Name" class="form-control" required>
          <label><h4><b>Comment</b></h4></label>
          <textarea rows="4" cols="165" name="Comment" tabindex="2" placeholder="Comment" id="Comment" class="form-control" required></textarea>
          <br>
          <center><button class="btn btn-success" onclick="">Comment</button></center>
     </form>
</div>
<?php 
readfile('comp/footer.html');
?>
</body>
</html>