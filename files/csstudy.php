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
	<title>studies</title>
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
.container{width:90%;
	
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
   <p><b>All big organizations have realized that they can enhance their business substantially only if they take to high-end , namely, research and cutting edge solutions along with low-end development work. In addition to this, several non-Indian organizations whose emphasis is on research and development, have opened R&D labs in India for high-end work.</b><br>
</div><br><br>
</center>
<div class="container">

<br><br><h3><b>M.TECH (Masters In Technology)</b></h3>
<hr>
<p>Plan Out Your Further Studies by Specializing ie. M.Tech: Pursuing your further studies is another option to choose after completing your B.Tech studies.<br> M.Tech is the next step that allows you to select your field of expertise and excel in it. Specialization in a particular field is provided to the students which later on will provide an edge during job interviews.<br> To pursue M.Tech studies in the top engineering institutes such as IITs. NITs and CFTIs, the undergraduate students will have to attempt and qualify Graduate Aptitude Test in Engineering (GATE). The examination of GATE is held annually for admissions into the M.Tech courses offered by the top engineering institutes of India. Ofcourse, thre are private universities as well as some states that offer post-graduation through their own engineering entrance exams.<br>M. Tech Computer Science and Engineering at Indo Global College imparts a breadth of advanced knowledge in various areas of computer science. The program aims at preparing the students to take up the application, research and development activities in the core and emerging areas of computer science with focus on Artificial Intelligence (AI) and AI related applications in a distributed computing environment. The program includes advanced level courses in Networking, Computer Architecture, Databases, and Algorithms, Distributed Computing and Computational Intelligence.

M. Tech Computer Science and Engineering provides a strong basis in computer science to those who are looking for a career in this industry. The purpose of this program is to generate the professionals capable of supporting R&D activities in critical areas like secured, monitoring, automated, surveillance systems, medical diagnostics and intelligent monitoring etc.  Apart from the courses, students also choose the electives as per their interest.  The course duration is 2 years which consists of 4 semesters.</p>
<br>
following are the entrances for doing M.TECH in india:
<ul><li><a href="http://gate.iitm.ac.in/"><b>GATE (Graduate Aptitude Test Engineering)</b></a><br>The Graduate Aptitude Test in Engineering (GATE) is an examination that primarily tests the comprehensive understanding of various undergraduate subjects in engineering and science. GATE is conducted jointly by the Indian Institute of Science and seven Indian Institutes of Technologies at Roorkee, Delhi, Guwahati, Kanpur, Kharagpur, Chennai (Madras) and Mumbai (maharashtra) on behalf of the National Coordination Board – GATE, Department of Higher Education, Ministry of Human Resources Development (MHRD), Government of India.

The GATE score of a candidate reflects the relative performance level of a candidate. The score is used for admissions to various post-graduate education programs (e.g. Master of Engineering, Master of Technology, Doctor of Philosophy) in Indian higher education institutes, with financial assistance provided by MHRD and other government agencies. Recently, GATE scores are also being used by several Indian public sector undertakings (i.e., government-owned companies) for recruiting graduate engineers in entry-level positions. It is one of the most competitive examinations in India. GATE is also recognized by various institutes outside India, such as Nanyang Technological University in Singapore.<br>
    Some Of the best colleges admitting through gate are<br>
    <ol><b>IISC BANGALORE </b><br>Best research institute in India. Inter-departmental courses are allowed here. Since, bachelors are not there in Engineering, Masters students are not required to do any teaching assistantship. But they get stipend from MHRD.<br>
        <a href="https://www.iisc.ac.in/">IISC BANGALORE</a><br>
        <br>
        <br>
    <b>IIT BOMBAY</b><br>IIT Bombay offers a wide variety of courses of study in engineering, pure sciences, design, management and humanities with a primary focus on engineering. The university is a member of "Links to Asia by Organizing Traineeship and Student Exchange" (LAOTSE), an international network of leading universities in Europe and Asia exchanging students and senior scholars.

The Institute conducts educational programmes leading to the degree of Bachelor of Technology (B. Tech.), Dual Degree (B.Tech. and M.Tech. in 5 years), Master of Science (MSc.), Master of Technology (MTech.), Bachelor of Design (B.Des), Master of Design (MDes.), Master of Management (MMgmt.), Master of Philosophy (MPhil.) and Doctor of Philosophy (PhD.) in various areas.

Every year, IIT Bombay awards degrees, BTech, MTech, Dual Degree (BTech and MTech), M.Mgmt, MSc and PhD to more than 1,000 students. The undergraduate students at IIT Bombay are selected through the Joint Entrance Examination of the IITs. The graduate students are selected through GATE (Graduate Aptitude Test in Engineering) conducted by IIT's and IISc on behalf of MHRD [Ministry of Human Resource Development]. At a given time, the campus is home to more than 6,000 people: students, professors, and non academic staff.

In 2015 the National Virtual Academy for Indian Agriculture launched a free online agriculture course in collaboration with ICRISAT Hyderabad and IIT Bombay.[26] From July 2016, IIT Bombay is planning to offer a four-year undergraduate programme in economics.<br>

        <a href="http://www.iitb.ac.in/">IIT BOMBAY</a></ol>
        <br>
        <br>
<li><a href="http://jam.iitb.ac.in/">IIT JAM (Joint Admission Test for M.Sc)</a></li>
<li><a href="https://www.upes.ac.in/upes-programs/mtech/mtech.aspx?utm_source=adwords_s&utm_medium=cpc&utm_campaign=m.tech2019&gclid=Cj0KCQjwuuHdBRCvARIsAELQRQHT-_qBJiHcQX5C8wRybalYfOBnQd954qN0QfUAPhvrlgtSP7uoieQaAkb0EALw_wcB">UPES MEET (UPES M.Tech Engineering Entrance Test)</a></li>
<li><a href="https://www.annauniv.edu/">TANCET (Tamil Nadu Common Entrance Test)</a></li>
<li><a href="http://www.wbut.ac.in/">WBUT PGET (West Bengal University of Technology Post Graduate Entrance Test)</a></li>
</ul></li>
<br><br>
<h3><b>MBA (Master of Business Administration)</b></h3>
<p>Have you ever felt that engineering was never your true call?<br> It is never too late to switch over to what you feel is the right path for you. Alternately you could be one of those people who feel that management knowledge will equip you better  in your chosen career path.<br> If management and business has ever been interesting then you should consider pursuing MBA. Master’s in Business Administration (MBA) is also a largely pursued course in India and has a lot of scope. Fields such as HR, Marketing, Digital Marketing, International Relations, Sales and more are some of the well-known and preferred specializations.<br> CAT (Common Admission Test) is the entrance exam that the students will have to qualify for admissions into IIMs and other leading institutes. Other examinations are XAT (Xavier's), NMAT, SNAP, CMAT, TISS, IRMA and more. Have been existing for many years and an "MBA"  tries to bridge the gap between the two by helping students to be professionals who are adept in understanding the concepts of both computer science and management principles. Many computer science engineers who search for lucrative career opportunities in the field of finance, “MBA in IT” remains their top career choice.<br>An MBA in Information technology combines both business subjects and information technology systems and their policies. In most cases B-school students pursuing MBA are taught management principles and their applications in a workplace in the first year while the second year of the MBA course focuses on subjects. Some of the commonly found topics in the first year of the course are “Economics”, “Organizational Behavior”, “International Business” and “Principles of Management”. The second year of the course often includes subjects like “Information Security”, “Telecommunications” and “Management Software Development”.

</p>
<ul><li><a href="https://iimcat.ac.in/per/g01/pub/756/ASM/WebPortal/1/index.html?756@@1@@1">CAT (Common Admission Test)</a></li>
<a href="http://www.nmat.org.in/">NMAT (Narsee Monjee Institute of Management Studies)</a> </li>
<li>students can also apply for MBA by  giving various state entrance exams </li></ul>
</li>
<br><br>
<li>
<h3><b>STUDY ABROAD</b></h3>
<p> It is no secret that facilities provided by the foreign Universities are better than those that are available here. If your wish is to explore and experience an entirely new culture while studying then going abroad is the best option for you. Along with studies, you can also check the various fellowships in research and development category available abroad. There are many scholarships provided for full or half funding of the education too. Apply for all available scholarships. For admission abroad, you will be required to have qualified some examinations like GRE, TOEFL and more.</p>
<ul><li><a href="https://www.ets.org/gre">GRE (Graduate Record Examinations)</a><br>The Graduate Record Examinations (GRE) General Test is a standardized test that graduate schools use to evaluate candidates. Over one thousand graduate programs around the world require applicants to submit GRE scores in order to be considered for admission. In addition, the GRE is often used to help determine whether a student is awarded graduate fellowships or graduate research or teaching positions. Statistics show that a combination of GRE score and undergraduate grade point average is generally a better predictor of first-year graduate school grades than is undergraduate grade point average alone.</li>
<li><a href="https://www.mba.com/exams/gmat?utm_source=GMACDomain&utm_medium=Redirect&utm_campaign=GMAT_domain&a=1">GMAT (Graduate Management Admission Test)</a><br>Over five thousand business and graduate management programs at more than 1800 schools around the world factor an applicant’s score on the Graduate Management Admission Test into the admissions process. Statistics demonstrate that GMAT scores are generally better indicators of first-year grades in these programs than are undergraduate grade point averages. Admissions officers at leading business schools worldwide recognize the GMAT as the most effective predictor of success. </li>
<li><a href="https://www.ets.org/toefl">TOEFL: Test of English as a Foreign Language</a><br>The TOEFL iBT® test is given in English and administered via the internet. There are 4 sections (reading, listening, speaking, and writing) which take a total of about 4 ½ hours to complete, including check-in. </li>
</ul></li>
<br><br>

 

</li>
</ul>
</div>







<?php 
readfile('comp/footer.html');
?>
</body>
</html>
