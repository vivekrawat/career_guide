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
      background: url(http://sinhvu.com/wp-content/uploads/2017/12/web-design-2906159.jpg) no-repeat center; 
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
				</center>
			</div>
		</div>
	</div>
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
<p>Do summer internship or training. Find any good company, not necessary that would be the biggest. Even small organization helps you to boost up you knowledge and skills.
</p><br>
<h5><b>Some Company provides Internshipwhich have best working environment and Exposure</b></h5>
<br>

<h4>TATA CMC (Chandigarh):</h4>They also offer a popular Construction Management program for students. This 3 months specialized program has good prospects as construction projects in India and abroad are very much active. Plus, it does add more weightage to your resume.


<h4>DLF India:</h4> DLF is certainly one of the big daddies in the private sector. To pursue your internship here, you must first prepare few important documents before starting your internship.
Larsen and Turbo Construction Company: L&T offers training and internship programs to undergraduate students in Civil, Mechanical, Electrical, Instrumentation, and Electronics stream. Students currently pursuing 3rd or 4th year are preferred by their HR.


<h4>Adarsh Construction Company:</h4> This twenty eight years old Indian origin company has a dedicated line of mentors who offer an on-site exposure to civin engineering students students. Reaching out to them is quite easy, simply share your resume along with a cover letter to aadarsh.const@gmail.com


<h4>Bygging India Limited:</h4> Bygging India Ltd is a fully integrated construction organisation that was established in 1983. It is popular for hiring students from Civil and Electrical Engineering backgrounds.
IRCON International Ltd: Formerly known Indian Railway Construction Company Limited, IRCON is an engineering and construction company specialized in transport infrastructure. The duration of summer internship here is usually less than 12 weeks. Since it is a wholly (100%) owned entity of the Ministry of Railways, no fees are charged from the trainees.



<h4>Jaypee Group (Jaiprakash Associates Ltd):</h4> Founded by one of the most eminent engineers of early times, Jaypee Group has been expanding it’s founder’s vision to build the nation for tomorrow. The company offers internships to Civil Engineering students across its multiple active sites. One of the most popular sites where interns are trained is Jaypee Greens Sports City located in Greater Noida. After completion of internship, students are required to create an internship report on their learnings and exposure during the internship tenure.


<h4>Essar Group:</h4>The Essar Group offers unique Short Term Internships program called as “Next Moves Stint” which invite applications from candidates across the Group. The internship period ranges between 1-3 months.


<h4>Hindustan Construction Company (HCC):</h4> Hindustan Construction Company is a prestigious Indian infrastructure company that offers internships once a year (during Summers). Surging ahead with its presence across multiple sectors and involvement in revolutionary projects, HCC offers internship opportunities in Civil, Electrical, Mechanical, and Instrumentation domains.
Punj Lloyd: Punj Lloyd is an engineering and construction company group of India that provides integrated design, procurement and project management services for energy and infrastructure sector projects. The company is also known for converting 30% of its well-performing interns into full-time job-offers.
<br>
<br>

<ul><h3><b>Blogs/Sites</b></h3></ul> 
<hr>
    <p>Read some blogs and get the basic knowledge from the they will help to explore more and do some research work.</p>
      <br>  
      <h5><b>Some websites having blogs</b></h5>
         <br>
    <h4>1. Civilax.com</h4>
          Civilax.comAbout Blog Civilax.com is designed for Civil Engineering Professionals, Undergraduates to update them selves with latest versions of civil engineering software, E-books, software training videos & Manuals. 
          Frequency about 42 posts per week. 
           <a href="https://civilax.com/">Website civilax.com</a>
           

           <h4>2. The Constructor</h4>
The Constructor About Blog The Constructor is a valuable informational resource for civil engineers, related professionals, and students. Information, Articles and Guides are categorized into sections. Practical Guide deals with testing methods and practical applications at site.
Frequency about 4 posts per week. 
<a href="https://theconstructor.org/">Website theconstructor.org</a>


<h4>3. Engineering News-Record</h4>
Engineering News-Record 
New York, NY
About Blog ENR is a stand-by construction magazine that has been around since 1874. Always offering the latest construction industry data, analysis, news and commentary, it’s a must for all construction professionals—from contractors to suppliers to regulators.
Frequency about 34 posts per week. 
Also in Construction Blogs 
<a href="https://enr.com/">Website enr.com</a> 


<h4>4. ASCE News (American Society of Civil Engineers)</h4>
ASCE News (American Society of Civil Engineers)
Reston, VA
About Blog ASCE is dedicated to the advancement of the individual civil engineer and the advancement of the science and profession of civil engineering through education. ASCE represents more than 150,000 civil engineers worldwide dedicated to designing & building infrastructure that protects the public health, safety, & welfare.
Frequency about 6 posts per week. 
<a href="https://news.asce.org/">Website news.asce.org </a>


<h4>5. engineeringcivil.com | Civil Engineering Portal</h4>
engineeringcivil.com | Civil Engineering PortalAbout Blog The biggest civil engineering portal on the internet. This site is made for educational purpose so as to help the fellow civil engineering students and to spread the knowledge about the latest civil engineering projects and softwares. 
Frequency about 3 posts per month. 
<a href="https://engineeringcivil.com/">Website engineeringcivil.com</a>


<h4>6. CivilDigital</h4>
CivilDigitalAbout Blog Website for Civil Engineers and Students. CivilDigital.com civil forum, engineers forum, civil doubts, civil engineering notes, civil engineering ppts, civil engineering seminars, structural engineering ppts, interview questons, multiple choice, objective, GATE preparation, IES coaching.
Frequency about 3 posts per month. 
<a href="https://civildigital.com/">Website civildigital.com</a>

    
    <ul><h3><b>BASIC SOFTWARES FOR CIVIL</b></h3></ul>
      <hr>

      <h4>AutoCAD</h4>
        AutoCAD is a 2-D and 3-D computer-aided drafting software application used in architecture, construction, and manufacturing to assist in the preparation of blueprints and other engineering plans. Professionals who use AutoCAD are often referred to as drafters.


         <h5><b> somewebsites</b></h5>


          AutoCAD Tips, Tutorial and Best practices: <a href="https://cad-notes.com/">cad-notes.com</a>
          <br>

          Section wise and organised set of AutoCAD tutorials: <a href="https://MyCADsite.com/">MyCADsite.com</a>
          <br>

          AutoCAD tutorial, tips and forum: <a href="https://cadtutor.net/">cadtutor.net</a>
          <br>

          AutoCAD video tutorial course with quizzes:<a href="https://thesourcecad.com/"> thesourcecad.com</a>
          <br>



           <h4>Staad pro</h4>

           STAAD. STAAD or (STAAD.Pro) is a structural analysis and design software application originally developed by Research Engineers International in 1997. In late 2005, Research Engineers International was bought by Bentley Systems. ... It supports over 90 international steel, concrete and timber design codes.

             <h5><b> For Free Tutorials</b></h5>


               1.Basics.<br>

                  <a href="https://www.youtube.com/playlist?list=PLRm334WTwCCXpTLS9cuwgm4nXzDXm-6Ye"> COMPLETE STAAD PRO LECTURE SERIES </a>
                  <br>
               2.Advanced.<br>

                  <a href="https://www.youtube.com/playlist?list=PLRm334WTwCCXpTLS9cuwgm4nXzDXm-6Ye"> Staad Pro v8i - Advanced Topics, Earthquake Analysis of Buil</a>
                  <br>



                    <ul><h3><b>SOME POINTS FOR BETTER CAREER</b></h3> 
                      <hr>
                  <p>1. Maintain decent CGPA 7 + (Marks cannot quantify your knowledge but this will be a key factor during your resume shortlisting.)</p>

                   <p>2. Learn AutoCAD, Staad pro. (Learn them well) . Revit/ETABS are optional</p>

                    <p>3. ENHANCE YOUR KNOWLEDGE (Through ASCE Journals, nptel videos and many other useful videos related to civil engineering on YouTube etc)</p>

                   <p>4. Participate in Paper presentations and Workshops (Preferably IIT's and NIT's). Attend their technical fests. You get to learn a lot. (Try to get a merit certificate there). Believe me it's not that tough.</p>

                 <p>5. Select a good topic for final year project. Try something new. (Avoid traditional concrete testing projects if possible).</p>

                  <p>6. Internships : I agree it is during summer holidays after 2nd /3rd year but make sure you learn something during that time as well.</p>







                   <p>7. You can do some certification courses while you are in engineering itself. they are very useful. (Eg: LEED Certification)</p>

                   <p>8. Try being associated with Indian Society for Technical Education (ISTE) and Institution of Engineers (India) IEI.</p>

                   <p>9. Along with studies, you need to take part in extracurricular activities like NCC,NSS etc.</p>

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