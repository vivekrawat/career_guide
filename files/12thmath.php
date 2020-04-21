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
	<title>Maths HIGHER STUDIES</title>
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
      background: url(https://media.edutopia.org/styles/responsive_2880px_16x9/s3/masters/d7_images/cover_media/posamentier-169hero-motivatingmath-shutterstock.jpg) no-repeat center; 
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
   <p><b>There are multiple options for Maths students for their under graduation. However, that depends on your marks, entrance tests, college options, course type, country where you want to pursue and also financial preferences.

Good news is that there’s immense scope for maths students all over the globe.</b></p>
</div><br><br>
</center>
<div class="container">
<ul><h3><b>B.Tech/B.E (Bachelor of Technology/Bachelor of Engineering)</b></h3>
  <hr>
<p>ENGINEERING is one of the best courses in the world. Now a days in INDIA about 60% maths students are persuing engineering.
  The person with passionate in technology can join this course.

  Engineering is the use of science and math to design or make things. People who do engineering are called engineers. They learn engineering at a college or university. Engineers usually design or build things. Some engineers also use their skills to solve technical problems. There are different types of engineers that design everything from computers and buildings to watches and websites. People have been engineering things for thousands of years.
  We are blessed with too many world class colleges and universities. We have IITs,  NITs, state level institutions and Private colleges to shape our future.



The admission is based on the marks scored in 12th science and entrance examination. If We want to get into a private/Government Medical College, we must have scored good scores in those exams.

Further, don’t think that just doing ENGINEERING would suffice. To gain value and knowledge, one must also be willing to do PG (Post Graduation) course also, which again is highly competitive!

And after becoming a Engineer, it won’t be just about building a lucrative career and money! You should be ready to serve, ready to sacrifice many personal pleasures etc. The course duration is four years.<br><br>
<h4><b>Branches (trades) offered in B.TECH</b></h4>

</p><br>
<h5><b>Following are the entrance exams for persuing ENGINEERING in INDIA:</b></h5>
<ul><li><a href="https://jeemain.nic.in/webinfo/Public/Home.aspx" target="_blank">JEE main (JOINT ENTRANCE EXAMINATION)</a></li>
<li><a href="https://www.jeeadv.ac.in/"target="_blank">JEE Advance</a></li>
<li><a href="https://upsee.nic.in/publicinfo/public/home.aspx"target="_blank">UPTU/AKTU(APJ Abdul Kalam Technical University)</a></li>
<li><a href="http://www.bits-pilani.ac.in/admissionsOverview">BIRLA INSTITUTE OF TECHNOLOGY AND SCIENCES PILANI</a></li>
<li><a href="http://www.vit.ac.in/"target="_blank">VELLORE INSTITUTE OF TECHNILOGY</a></li>
<li> <a href="https://engineering.careers360.com/colleges/list-of-engineering-colleges-in-india"target="_blank"> AND MANY MORE</a></li>
</ul>
<br><br><h3><b>ARCHITECTURE</b></h3>
  <hr>
<p>After doing this course, you can become a Architect. 

Like engineering, in order to succeed and have a good career in this field, you one must be willing to do PG course also. The duration of the course is 5 years.

Compared to an ENGINEER, an ARCHITECT will have a bit more time to relax! The schedule won’t be as hectic as an Engineer. But this again depends on various factors like the ‘popularity’ you achieve, your work rate, skills etc. A popular architect will have more appointments and thus have a busy time</p>
<br>
<h5><b>Following are the entrances for persuing ARCHITECTURE courses in india:</b></h5>
<ul><li><a href="https://jeemain.nic.in/webinfo/Public/Home.aspx"target="_blank">JEE main (Paper 2 ARCHITECTURE)</a></li>
<li><a href="https://www.jeeadv.ac.in/"target="_blank">JEE Advance (Architecture)</a></li>
<li><a href="https://www.comedk.org/engineeringarchitecture-counselling-2/"target="_blank">COMEDK (Architecture)</a></li>
<li><a href="http://www.nata.in/"target="_blank">NATA(National Aptitude Test in Architecture)</a></li>
</ul></li>
<br><br>
<h3><b>B.Sc(Bachelor of Science)</b></h3>
  <hr>
<p>A Bachelor of Science  B.Sc., BSc, or B.Sc; is an undergraduate academic degree awarded for completed courses that generally last three to five years, or a person holding such a degree.

Whether a student of a particular subject is awarded a Bachelor of Science degree or a Bachelor of Arts degree can vary between universities. For example, an economics degree may be given as a Bachelor of Arts (BA) by one university but as a BS by another, and some universities offer the choice of either. Some liberal arts colleges in the United States offer only the BA, even in the natural sciences, while some universities offer only the BS even in non-science fields
The first university to admit a student to the degree of Bachelor of Science was the University of London in 1860. Prior to this, science subjects were included in the BA bracket, notably in the cases of mathematics, physics, physiology and botany.

Not only in India, it has also earned a good name abroad also. The course duration is three years
Many universities conduct their entrance test to take admissions.

Some prestigious universities are mentioned below:-
</p>
<ul><li><a href="https://http://www.bhu.ac.in/"target="_blank"target="_blank">BHU (Banaras Hindu University)</a></li>
<li><a href="http://http://www.du.ac.in/index.html"target="_blank"target="_blank">DU (Delhi University)</a> </li>
<li><a href="https://www.jnu.ac.in/main/"target="_blank"target="_blank">JNU(Jawhar Lal Nehru University) </a></li></ul>

<br><br>
<h3><b>BBA( Bachelor of Business Administration)</b></h3>
<br>
<p>The degree is designed to give a broad knowledge of the functional aspects of a company and their interconnection, while also allowing specialization in a particular area. B.B.A. programs thus expose students to a variety of "core subjects" and generally allow students to specialize in a specific academic area.<br>

The degree also develops the student's practical, managerial and communication skills, and business decision-making capability. Many programs incorporate training and practical experience, in the form of case projects, presentations, internships, industrial visits, and interaction with experts from the industry.<br>

General educational requirements emphasize humanities and social sciences (history, economics, and literature). Coverage of mathematics is generally business related, and is often limited to "Quantitative Applications for Business" or, alternatively, courses in Calculus for business or Calculus 101, and business- or general-statistics.<br>


Business is the activity of making one's living or making money by producing or buying and selling products (goods and services).Simply put, it is "any activity or enterprise entered into for profit. It does not mean it is a company, a corporation, partnership, or have any such formal organization, but it can range from a street peddler to General Motors." The term is also often used colloquially (but not by lawyers or public officials) to refer to a company, but this article will not deal with that sense of the word.<br><br>

Anyone carrying on an activity that earns them a profit is doing business or running a business, and perhaps this is why there is a misconception that business and company is the same thing.
A business name structure does not separate the business entity from the owner, which means that the owner of the business is responsible and liable for all debts incurred by the business. If the business acquires debts, the creditors can go after the owner's personal possessions. A business structure does not allow for corporate tax rates. The proprietor is personally taxed on all income from the business.<br>
A company on the other hand, is a separate legal entity and provides for limited liability as well as corporate tax rates. A company structure is more complicated and expensive to set up, but offers more protection and benefits for the owner

</p>
<ul><li><a href="https://http://www.bhu.ac.in/"target="_blank">BHU(Banaras Hindu university)</a></li>
<li><a href="http://http://www.du.ac.in/index.html"target="_blank">DU (Delhi university)</a> </li>
<li><a href="https://www.jnu.ac.in/main/"target="_blank">JNU (Jawahar Lal university)</a></li>
<li> <a href="https://www.shiksha.com/bba/articles/top-10-bba-colleges-in-india-blogId-77"target="_blank">More Colleges</a></li>
</ul></li>
<br><br>
<h3><b>ITI Industrial training Institute</b></h3>
  <hr> <p>Industrial Training Institutes and Industrial Training Centers are post-secondary schools in India constituted under Directorate General of Employment & Training (DGET), Ministry of Skill Development and Entrepreneurship, Union Government to provide training in various trades..<br><br>

The course duration of B Pharm is 2 years. 
Engineering and Non Engineering Trades:<br><br>

 <li>Building Maintenance<br>
 <li>Electronics Mechanic<br>
 <li>Excavator Operator (Mining)<br>
 <li>Mechanic Repair & Maintenance of Two Wheeler's<br>
<li> Mechanic Auto Electrical and Electronics<br>
<li> Sanitary Hardware fitter<br>
<li> Architectural Assistant<br>
<li> Carpenter<br>
<li> Domestic Painter<br>
<li> Foundry man Technician<br>
<li> Gold Smith<br>
 <li>Industrial Painter<br>
<li> Interior Decoration and Designing<br>
<li> Marine Engine Fitter<br>
<li> Mason (Building Constructor)<br>
<li> Mechanic Repair & Maintenance of Heavy Vehicles<br>
<li> Mechanic Repair & Maintenance of Light Vehicles<br>
<li> Mechanic Diesel Engine<br>
<li> Mechanic (Tractor)<br>
<li> Mechanic Communication Equipment Maintenance<br>
 <li>Mechanic Lens or Prism Grinding<br>
 <li>Physiotherapy Technician<br>
 <li>Plastic Processing Operator<br>
 <li>Plumber<br>
 <li>Pump Operator-cum-Mechanic<br>
 <li>Rubber Technician<br>
 <li>Sheet Metal Worker<br>
 <li>Stone Mining Machine Operator<br>
 <li>Stone Processing Machines Operator<br>
 <li>Welder (Gas and Electric)<br>
 <li>Attendant Operator (Chemical Plant)<br>
 <li>Draughtsman (Civil)<br>
 <li>Draughtsman (Mechanical)<br>
 <li>Electricians<br>
 <li>Electroplater<br>
 <li>Fitter<br>
 <li>Instrument Mechanic<br>
 <li>Instrument Mechanic (Chemical Plant)<br>
 <li>Information Communication Technology System Maintenance<br>
 <li>Laboratory Assistant (Chemical Plant)<br>
 <li>Lift and Escalator Mechanic<br>
 <li>Machinist<br>
 <li>Machinist (Grinder)<br>
 <li>Maintenance Mechanic (Chemical Plant)<br>
 <li>Marine Fitter<br>
 <li>Mechanic Mining Machinery<br>
 <li>Mechanic Agricultural Machinery<br>
 <li>Mechanic Computer Hardware<br>
 <li>Mechanic Consumer Electronics Appliances<br>
 <li>Mechanic-cum-Operator Electronics Communication System<br>
 <li>Mechanic Industrial Electronics<br>
 <li>Mechanic Machine Tools Maintenance<br>
 <li>Mechanic Mechatronics<br>
 <li>Mechanic Medical Electronics<br>
 <li>Mechanic Motor Vehicle<br>
 <li>Mechanic (Refrigeration and Air-Conditioner)<br>
 <li>Mechanic (Radio & TV)<br> 
 <li>Operator Advanced Machine Tools<br>
 <li>Painter General<br>
 <li>Radiology Technician<br>
 <li>Spinning Technician<br>
 <li>Surveyor<br>
 <li>Textile Mechatronics<br>
 <li>Textile Wet Processing Technician<br>
 <li>Tool & Die Maker (Dies &Moulds)<br>
 <li>Tool & Die Maker (Press Tools, Jigs & Fixtures)<br>
 <li>Turner<br>
 <li>Vessel Navigator<br>
<li> Weaving Technician<br>
<li> Wire man<br>
<li> Cabin or Room Attendant<br>
<li> Computer Aided Embroidery And Designing<br>
<li> Corporate House Keeping<br>


</p>
<h5><b>Colleges which provide this course</b></h5>
<ul><li><a href="http://www.vppup.in/"target="_blank">Uttar Pradesh ITI</a></li>
<li><a href="http://bceceboard.bihar.gov.in/"target="_blank">Bihar ITI</a></li>
<li><a href="https://targetstudy.com/iti/"target="_blank"> ITI sites of different STATES</a></li>
</ul>
</li><br><br>
<h3><b>ACTING</b></h3>
<hr>
<p>A drama school, stage school or theatre school is an undergraduate and/or graduate school or department at a college or university; or a free-standing institution (such as the Drama section at the Juilliard School); which specializes in the pre-professional training in drama and theatre arts, such as acting, design and technical theatre, arts administration, and related subjects. If the drama school is part of a degree-granting institution, undergraduates typically take a Bachelor of Arts, Bachelor of Fine Arts, or, occasionally, Bachelor of Science or Bachelor of Design. Graduate students may take a Master of Arts, Master of Science, Master of Fine Arts, Doctor of Arts, Doctor of Fine Arts, or Doctor of Philosophy degree.<br><br>



Entry to drama school is usually through a competitive audition process. Some schools make this a two-stage process. Places on an acting course are limited (usually well below 100) so those who fare best at the audition are selected. Most academies state that applicants must be over 18 years of age. Auditions usually involve the performance of monologues and group workshops, and may also include a singing activity. This varies from academy to academy. If this is the case for an acting degree, the school looks more at how an applicant can put character into the song rather than how well they can sing. For a musical theatre degree, the emphasis is on showing one's talent as a singer. Most colleges offer callback auditions, often in several stages, in which students being considered for entry onto a course are brought back to audition again, demonstrating their talents further. It is also possible to get into a drama school by previous grades. Some auditioners may be under 18.<br><br<

The courses offered by drama schools focus on practical courses, rather than theoretical classes. Their aim is to train students as professional actors for stage (theatre or musical theatre) and camera-based work (film and television shows). Students are required to be enthusiastic and motivated in order to meet the demands of the program. At the beginning of the final year (usually the third), most drama schools stage a series of performances throughout the academic year to which agents and casting directors are invited. This helps to build the future of the graduates and serves as a showcase of what the students can do.
 </p>
<h5>Some best colleges of DRAMA</h5>
<ul>
  <li><a href="https://nsd.gov.in/delhi/"target="_blank">NSD (National School of Drama)</a></li>
  <li><a href="http://www.theiceinstitute.com/"target="_blank">Institute of creative excellence</a></li>
  <li> <a href="https://www.shiksha.com/mass-communication-media/film-tv/articles/top-10-acting-schools-in-india-blogId-8822"target="_blank">More colleges</a></li>
</ul></li><br><br>
<h3><b>COREOGRAPHY AND DIRECTION</b></h3>
<hr>
<p>Choreography is the art or practice of designing sequences of movements of physical bodies (or their depictions) in which motion, form, or both are specified. Choreography may also refer to the design itself. A choreographer is one who creates choreographies by practicing the art of choreography, a process known as choreographing. Choreography is used in a variety of fields, including musical theater, cheerleading, cinematography, gymnastics, fashion shows, ice skating, marching band, show choir, theatre, synchronized swimming, cardistry, video game production and animated art. In the performing arts, choreography applies to human movement and form. In dance, choreography is also known as dance choreography or dance composition.<BR>


</p>
<h5> Best Schools for COREGRAPHY</h5>
<ul><li><a href="http://sangeetnatak.gov.in/sna/"target="_blank">Sangeet Natak Academy, New Delhi</a></li>
<li><a href="http://www.theiceinstitute.com/"target="_blank">Institute of creative excellence</a></li>
<li><a href="https://www.sarvgyan.com/courses/choreography"target="_blank">More colleges</a></li>
</ul>
<br><br>

 

</li>
</ul>
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
