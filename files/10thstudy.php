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
	<title>10th passed HIGHER STUDIES</title>
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
      background: url(https://www.todayonline.com/sites/default/files/styles/new_app_article_detail/public/photos/43_images/file6zk3m6b1rlky18iq2fy_0.jpg?itok=jvFAu8rO) no-repeat center; 
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
  <div class="container">
   <p><b>There are multiple options for 10th passed students for their intermediate. However, that depends on your marks, entrance tests, course type where you want to pursue and also financial preferences.

</b></p>
</div><br><br>
</center>
<div class="container">
<ul><h3><b>INTERMEDIATE(11th,12th)</b></h3>
  <hr>
<p>The pre-university course or pre-degree course, popularly abbreviated to PUC or PDC, is an intermediate course (which is known as 10+2) of two years' duration, conducted by state education institutions or boards in India. This pre-university course is also known as the Plus-two or Intermediate course. A person desiring admission to an Indian university must pass this course, which can be considered as a degree bridge course to prepare students for university education.

Admission to this course is based on marks obtained for the Secondary School Leaving Certificate, awarded after successful completion of five years of primary school, followed by five years of secondary school. The Indian education system follows a 10+2+3 (4 or 5) pattern, so that a bachelor's degree requires a minimum of 10 years of school, plus two years of PUC, plus either three, four or five years at university. Colleges offering a pre-university course are known as PU Colleges or Junior colleges in India.<br><br>
General Courses (Science and Humanities) along with Languages (English, Telugu, Hindi, Sanskrit, French, Arabic) It is a two years course.
<h4>Courses offered in Intermediate</h4>
<ul>
  <li>MPC - Maths, Physics, Chemistry</li>
  <li>BiPC - Biology(Botany, Zoology), Physics, Chemistry</li>
  <li>CEC - Civics, Economics, Commerce</li>
  <li>MEC - Maths, Economics, Commerce</li>
  <li>HEC - History, Economics, Civics/Commerce</li>
  <li>MBPC - Maths, Biology, Physics, Chemistry</li>
</ul>
</p><br>
<h5><b>Following are the entrance exams for persuing INTEMEDIATE in INDIA:</b></h5>
<ul><li><a href="http://cbse.nic.in/" target="_blank">CBSE (Centeral Board of Secondary Education)</a></li>
<li><a href="https://upmsp.edu.in/" target="_blank">UP state</a></li>
<li><a href="https://en.wikipedia.org/wiki/Boards_of_Education_in_India" target="_blank">State Boards in INDIA</a></li>
</ul>
<br><br><h3><b>POLYTECHNIC</b></h3>
  <hr>
<p>After doing this course, you can become a Junior Engineer. 

The Diploma in Engineering or Diploma in Technical Education are programs focused on practical and skills-oriented training. It is a technical degree that only covers the essentials when ranked with an undergraduate engineering degree. It aims to provide students with industry or job related engineering knowledge, scientific skills, computing & analysis, mathematical techniques, a sound knowledge of English to communicate in the field and ability to apply problem solving techniques.

Its duration is 2–3 years. Many countries in the world recognize it as equivalent to Pre-Engineering or Bridging course when considered for continuing studies in engineering related bachelors or associate degree programs. After successful completion of Diploma in Engineering course, students can either continue further Engineering studies in undergraduate level or get employment as technicians, technologists, supervisors, superintendents, foremen, machinist, workshop technicians, draughtsman, station technicians (energy, thermal, aeronautical), automobile technicians, maintenance & service technicians, equipment mechanics and technicians, CAD/CAM programmer, agricultural overseers, instrument technicians, junior instructors, manufacturing, tool and die designers, electricians...etc.</p>

<h4>Courses offered in Polytechnic</h4>
<ul>
  <li>Diploma in Civil Engineering</li>
  <li>Diploma in Electrical Engineering</li>
  <li>Diploma in Mechanical Engineering</li>
  <li>Diploma in Electronics and Communication Engineering</li>
  <li>Diploma in Computer Engineering</li>
  <li>Diploma in Garment Technology</li>
  <li>Diploma in Home Science</li>
  <li>Diploma in Agriculture</li>
</ul>
<br>
<h5><b>Following are the entrances for persuing Polytechnic courses in india:</b></h5>
<ul><li><a href="https://www.gpmumbai.ac.in" target="_blank">Gov Polytechnic Mumbai</a></li>
<li><a href="http://www.sanskriti.edu.in/university-polytechnic.php" target="_blank">Sanskriti University</a></li>
<li><a href="http://recruitmentresult.com/top-polytechnic-colleges-in-india/" target="_blank">More Colleges</a></li>
</ul></li>
<br><br>
<h3><b> Short-term Courses</b></h3>
  <hr>
<p>They are called the job oriented courses that are useful to get a job after short span of time. Usually 6-12 months courses.



<h4>Courses</h4>
<ul>
  <li>Diploma in 2D and 3D Animation</li>
  <li>Diploma in Computer Applications</li>
  <li>Certificate Course in Graphic Designing</li>
  <li>Certificate Programme in MS-Office</li>
  <li>Certificate Course in Web Designing</li>
  <li>Certificate Course in Programming Language (JAVA, C++, PHP, SQL)</li>
  <li>Certification Course in SEO (Search Engine Optimization)</li>
</ul>


</p>

<br><br>
<h3><b>Paramedical - Allied Healthcare Course</b></h3>
<br>
<p>A paramedic is a healthcare professional who responds to medical emergencies outside of a hospital. Paramedics mainly work as part of emergency medical services (EMS), most often in ambulances. The scope of practice of a paramedic varies among countries, but generally includes autonomous decision making around the emergency care of patients.

In common usage, the term 'paramedic' refers to any ambulance personnel. In some countries, there is an official distinction among ambulance personnel between paramedics and emergency medical technicians, in which paramedics have additional qualifications and are accountable to a professional regulatory body<br>


The scope of the role varies widely across the world, having originally developed as a paraprofession in the United States during the 1970s. There are different models of care for EMS providers which significantly influence the scope of practice of paramedics in an area. In the Anglo-American model, paramedics are autonomous decision-makers. In some countries such as the United Kingdom and South Africa, the paramedic role has developed into an autonomous health profession. In the Franco-German model, ambulance care is led by physicians. In some versions of this model, such as France, there is no direct equivalent to a paramedic. Ambulance staff have either the more advanced qualifications of a physician or less advanced training in first aid. In other versions of the Franco-German model, such as Germany, paramedics do exist. Their role is to support a physician in the field, in a role more akin to a hospital nurse, rather than operating with clinical autonomy.
<h4>Duration</h4>
 It is about Healthcare workers who provide clinical services for patients under the supervision of a Physician. They are two year courses.

<h4>Courses offered</h4>
<ul>
  <li>DMLT- Diploma in Medical Laboratory Technology</li>
  <li>DHFM - Diploma in Hospital Food Service Management</li>
  <li>DOT - Diploma in Opthalmic Technology</li>
</ul>

</p>

<h4>Institutions</h4>
<ul><li><a href="https://www.aiims.edu/en.html" target="_blank">AIIMS</a></li>
<li><a href="http://http://www.du.ac.in/index.html" target="_blank">DU (Delhi university)</a> </li>
<li><a href="https://www.jnu.ac.in/main/" target="_blank">JNU (Jawahar Lal university)</a></li>
<li> <a href="https://www.shiksha.com/bba/articles/top-10-bba-colleges-in-india-blogId-77" target="_blank">More Colleges</a></li>
</ul></li>
<br><br>
<h3><b>ITI Industrial training Institute</b></h3>
  <hr>
<p>Industrial Training Institutes and Industrial Training Centers are post-secondary schools in India constituted under Directorate General of Employment & Training (DGET), Ministry of Skill Development and Entrepreneurship, Union Government to provide training in various trades..<br><br>

The course duration of B Pharm is 2 years. 
Engineering and Non Engineering Trades:<br><br>

Building Maintenance<br>
Electronics Mechanic<br>
Excavator Operator (Mining)<br>
Mechanic Repair & Maintenance of Two Wheeler's<br>
Mechanic Auto Electrical and Electronics<br>
Sanitary Hardware fitter<br>
Architectural Assistant<br>
Carpenter<br>
Domestic Painter<br>
Foundry man Technician<br>
Gold Smith<br>
Industrial Painter<br>
Interior Decoration and Designing<br>
Marine Engine Fitter<br>
Mason (Building Constructor)<br>
Mechanic Repair & Maintenance of Heavy Vehicles<br>
Mechanic Repair & Maintenance of Light Vehicles<br>
Mechanic Diesel Engine<br>
Mechanic (Tractor)<br>
Mechanic Communication Equipment Maintenance<br>
Mechanic Lens or Prism Grinding<br>
Physiotherapy Technician<br>
Plastic Processing Operator<br>
Plumber<br>
Pump Operator-cum-Mechanic<br>
Rubber Technician<br>
Sheet Metal Worker<br>
Stone Mining Machine Operator<br>
Stone Processing Machines Operator<br>
Welder (Gas and Electric)<br>
Attendant Operator (Chemical Plant)<br>
Draughtsman (Civil)<br>
Draughtsman (Mechanical)<br>
Electricians<br>
Electroplater<br>
Fitter<br>
Instrument Mechanic<br>
Instrument Mechanic (Chemical Plant)<br>
Information Communication Technology System Maintenance<br>
Laboratory Assistant (Chemical Plant)<br>
Lift and Escalator Mechanic<br>
Machinist<br>
Machinist (Grinder)<br>
Maintenance Mechanic (Chemical Plant)<br>
Marine Fitter<br>
Mechanic Mining Machinery<br>
Mechanic Agricultural Machinery<br>
Mechanic Computer Hardware<br>
Mechanic Consumer Electronics Appliances<br>
Mechanic-cum-Operator Electronics Communication System<br>
Mechanic Industrial Electronics<br>
Mechanic Machine Tools Maintenance<br>
Mechanic Mechatronics<br>
Mechanic Medical Electronics<br>
Mechanic Motor Vehicle<br>
Mechanic (Refrigeration and Air-Conditioner)<br>
Mechanic (Radio & TV)<br>
Operator Advanced Machine Tools<br>
Painter General<br>
Radiology Technician<br>
Spinning Technician<br>
Surveyor<br>
Textile Mechatronics<br>
Textile Wet Processing Technician<br>
Tool & Die Maker (Dies &Moulds)<br>
Tool & Die Maker (Press Tools, Jigs & Fixtures)<br>
Turner<br>
Vessel Navigator<br>
Weaving Technician<br>
Wire man<br>
Cabin or Room Attendant<br>
Computer Aided Embroidery And Designing<br>
Corporate House Keeping<br>


</p>
<h5>Colleges which provide this course</h5>
<ul><li><a href="http://www.vppup.in/">Uttar Pradesh ITI</a></li>
<li><a href="http://bceceboard.bihar.gov.in/">Bihar ITI</a></li>
<li><a href="https://targetstudy.com/iti/"> ITI sites of different STATES</a></li>
</ul>
</li><br><br>


 

</li>
</ul>
</div>







<?php 
readfile('comp/footer.html');
?>
</body>
</html>
