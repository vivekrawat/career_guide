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
      background: url(https://ocw.mit.edu/courses/mechanical-engineering/dhp_2.jpg) no-repeat center; 
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
<h4>CESC Limited:</h4>The Calcutta Electric Supply Corporation or CESC is the Kolkata-based flagship company of the RP-Sanjiv Goenka Group, born from the erstwhile RPG Group, under the chairmanship of businessman Sanjiv Goenka. It is an Indian electricity generation and the sole distribution company serving 567 square kilometres (219 sq mi) of area administered by the Kolkata municipal corporation, in the city of Kolkata, as well as parts of Howrah, Hooghly, 24 Parganas (North) and 24 Parganas (South) districts in the state of West Bengal. It serves 3.0 million consumers approximately, which includes domestic, industrial and commercial users.
<h4>NHPC:</h4>NHPC Limited (erstwhile National Hydroelectric Power Corporation) (BSE: 533098, NSE: NHPC) is an Indian Hydropower generation company that was incorporated in the year 1975 with an authorised capital of Rs. 2000 million and with an objective to plan, promote and organise an integrated and efficient development of hydroelectric power in all aspects. Later on NHPC expanded its objects to include other sources of energy like Solar, Geothermal, Tidal, Wind etc.
<h4>TATA Steel:</h4>ata Steel Limited formerly Tata Iron and Steel Company Limited (TISCO) is an Indian multinational steel-making company headquartered in Mumbai, Maharashtra, India, and a subsidiary of the Tata Group.

It is one of the top steel producing companies globally with annual crude steel deliveries of 27.5 million tonnes (in FY17), and the second largest steel company in India (measured by domestic production) with an annual capacity of 13 million tonnes after SAIL.[3]

Tata Steel has manufacturing operations in 26 countries, including Australia, China, India, the Netherlands, Singapore, Thailand and the United Kingdom, and employs around 80,500 people.[2] Its largest plant located in Jamshedpur, Jharkhand. In 2007 Tata Steel acquired the UK-based steel maker Corus.[4]
[2] It was ranked 486th in the 2014 Fortune Global 500 ranking of the world's biggest corporations.[5] It was the seventh most valuable Indian brand of 2013 as per Brand Finance.
<br>
<br>

<ul><h3><b>Blogs/Sites</b></h3></ul> 
<hr>
    <p>Read some blogs and get the basic knowledge from the they will help to explore more and do some research work.</p>
      <br>  
      <h5><b>Some websites having blogs</b></h5>
         <br>
    <h4>1.  Reddit - The Mechanical Engineering Hang Out</h4>
          About Blog The gathering place for mechanical engineers to discuss current technology, methods, jobs, and anything else related to mechanical engineering.
Frequency about 28 posts per week.  
           <a href="https://www.feedspot.com/infiniterss.php?q=site:https%3A%2F%2Fwww.reddit.com%2Fr%2FMechanicalEngineering%2F.rss%3Fformat%3Dxml">Reddit - The Mechanical Engineering Hang Out</a>
           

           <h4>2. Mechanical Engineering World</h4>
About Blog Mechanical Engineering World blog is all about Mechanical Basic Concepts, Mechanical Project and Seminar, Mechanical Amazing Facts, Engineering E-books ,New trends and Tech news.
Frequencyhttps://www.feedspot.com/infiniterss.php?q=site:http%3A%2F%2Ffeeds.feedburner.com%2Fmechenggnet about 15 posts per week. 
<a href="https://www.feedspot.com/infiniterss.php?q=site:http%3A%2F%2Ffeeds.feedburner.com%2Fmechenggnet">Website Mechanical Engineering World</a>


<h4>3. Engineers Journal - Mechanical Engineering</h4>
Ireland
About Blog The Engineering Journal is a service whether , achievement, job oppurtinire.
Frequency about 1 post per week. 
<a href="https://www.feedspot.com/infiniterss.php?q=site:http%3A%2F%2Fwww.engineersjournal.ie%2Fcategory%2Fmech%2Ffeed">Website  Engineers Journal - Mechanical Engineering</a> 


<h4>4. Mechanical Inventions - Mechanical Engineering</h4>
About Blog Basic Mechanical engineering discusses fluid mechanics, thermodynamics, automobile, power plants, renewable energy, welding, casting, patterns and many more engineering topics
Frequency about 2 posts per month. 
<a href="https://www.feedspot.com/infiniterss.php?q=site:https%3A%2F%2Fbasicmechanicalengineering.com%2Ffeed">Website Mechanical Inventions - Mechanical Engineering
</a>


<h4>5.CNCzone.com - The Largest Machinist Community on the net! engineeringcivil.com | Civil Engineering Portal</h4>
About Blog Worlds largest machinist, CNC , wood router, metal working , wood working , cad , lathe machine and manufacturing forum.
Frequency about 84 posts per week. 

<a href="https://www.feedspot.com/infiniterss.php?q=site:http%3A%2F%2Fwww.cnczone.com%2Fforums%2Fexternal.php%3Ftype%3DRSS2">Website CNCzone.com - The Largest Machinist Community on the net!</a>




    
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



           <h4>Pro-E/Creo</h4>

           Creo, CATIA, NX these softwares are among the few that have been widely used in many of the manufacturing/design organisations.

They have strong capabilities of designing parts, sheet metals, surfaces etc. along with the ability to assemble the parts and produce engineering drawings using the 3D model that's designed. There are many more functions that can be done using these softwares.

Once you design then there are certain industrial design standards that needs to be followed to design a quality products that will eventually produce a good quality product, which is very essential to boost quality control.

There are many more articles that can give you more in-depth knowledge about these sofwares be sure to go through them. Getting a hang on designing on one software can help in understanding the basics of how the other parametric softwares are used. Most of them have similar functions, named differently at the most.


             


                    <ul><h3><b>SOME POINTS FOR BETTER CAREER</b></h3> 
                      <hr>
                  <p>1. Maintain decent CGPA 7 + (Marks cannot quantify your knowledge but this will be a key factor during your resume shortlisting.)</p>

                   <p>2. Learn AutoCAD, Pro-E/CreoStaad pro. (Learn them well) . Revit/ETABS are optional</p>

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