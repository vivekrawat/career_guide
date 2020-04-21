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
	<title>Maths JOB OPPORTUNITIES</title>
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
  <h1><b>JOB OPPORTUNITIES</b></h1>
  <div class="container">
   <p><b>There are multiple options for Maths students for their JOB opportunities. However, that depends on your marks, skills, country where you want to join and also financial preferences.

Good news is that there’s immense scope for maths students all over the globe.</b></p>
</div><br><br>
</center>
<div class="container">
<ul><h3><b>NDA (National Defence Academy)</b></h3>
  <hr>
<p>The National Defence Academy (NDA) is the Joint Services academy of the Indian Armed Forces, where cadets of the three services, the Army, the Navy and the Air Force train together before they go on to respective service academies for further pre-commissioning training. The NDA is located at Khadakwasla near Pune, Maharashtra. It is the first tri-service academy in the world.<br>

NDA alumni have led and fought in every major conflict in which the Indian Armed Forces has been called to action since the academy was established. The alumni include 3 Param Vir Chakra recipients and 12 Ashoka Chakra recipients. National Defence Academy has produced 27 service Chiefs Of Staff till date. Current Chiefs Of Staff of the Army, the Navy and the Air Force are all NDA alumni<br><br>

The NDA campus is located about 17 km south-west of Pune city, north-west of Khadakwasla Lake. It spans 7,015 acres (28.39 km2) of the 8,022 acres (32.46 km2) donated by the Government of the former Bombay State. The site was chosen for being on a lake shore, the suitability of the neighbouring hilly terrain, proximity to the Arabian Sea and other military establishments, an operational air base nearby at Lohegaon as well as the salubrious climate. The existence of an old combined-forces training centre and a disused mock landing ship, HMS Angostura, on the north bank of the Khadakwasla lake which had been used to train troops for amphibious landings, lent additional leverage for the selection of the site. Aptly, NDA is also located in the hunting grounds of the legendary Shivaji, with the Sinhagad Fort as a panoramic backdrop.<br><br>

<h4>ADMISSIONS:-</h4><br>
Applicants to the NDA are selected via a written exam conducted by the UPSC, followed by extensive interviews by the SSB covering general aptitude, psychological testing, team skills as well as physical and social skills, along with medical tests. Incoming classes are accepted twice a year for semesters starting in July and January. About 4,50,000 applicants sit for each written exam. Typically, about 6,300 of these are invited to interview. Only unmarried male candidates are eligible for NDA & NA Examination. The minimum age should be 16 and half years and maximum age should be 19 and half years. Applicants to join the Air Force also go through a Pilot Aptitude Battery Test. About 320 cadets are accepted to the academy each semester. About 70 cadets are accepted for the Air Force, 42 for the Navy and 208 for the Army.

Cadets who are accepted and successfully complete the program are sent to their respective training academies for one year of training before granting of commission: army cadets go to Indian Military Academy(IMA) at Dehradun, Air Force cadets to Air Force Academy(AFA) at Dundigal, Hyderabad, and naval cadets to Indian Naval Academy(INA), Ezhimala, Kerala


</p><br>
<h5><b>More Information</b></h5>
<ul><li><a href="http://www.upsc.gov.in/" target="_blank">UPSC (Union Public Service Commision)</a></li>
<li><a href="https://nda.nic.in/" target="_blank">National Defence Academy</a></li>
<li><a href="https://en.wikipedia.org/wiki/National_Defence_Academy_(India)" target="_blank">More to Know</a></li>
</ul>
<br><br><h3><b>TES (Technical Entry Scheme)</b></h3>
  <hr>
<p>TES stand for Technical Entry Scheme, as the name suggest, it is a technical entry to get into Indian army as an officer. TES is more or less like UES and TGC entries of Indian army, but in case of UES and TGC candidates apply for it after doing their engineering from outside; TES is an opportunity for the aspirants to join the technical branch of Indian army after 10+2 but as per the vacancies candidates can join other fields also like infantry, artillery etc.<br><br>
<h4>Elegibility Criteria</h4>
Age: 16½ years and above 19½ years<br>
Education: candidates who have passed 10+2 Examination or its equivalent with a minimum aggregate of 70% marks in Physics, Chemistry and Mathematics.<br><br>
<h4>Types of Commision</h4>
On successful completion of 4 years of the course cadets will be granted Permanent Commission in the Army in the rank of Lt.
On successful completion of total 04 years training, the candidates will be commissioned in the rank of Lt. They will be granted seniority on overall order of merit of the three technical institutes combined i.e. CME, MCTE, MCEME and in case the date of commissioning coincides with that of IMA, Dehradun, they will be placed en-block junior to IMA (NDA / ACC / DE Course ) but above TGC / UES course.<br><br>
<h4>Training of TES</h4>
Total training will be 5 years, <br>
Details as under:<br>
Basic Military Training : 1 year (Officer Training Academy Gaya).
Technical Training:<br>
Phase-I (Pre Commission Training): 3 Years (CME Pune, MCTE Mhow and MCEME Secunderabad)<br>
Phase-II (Post Commission Training): 1 year at CME Pune, MCTE Mhow and MCEME Secunderabad.<br>
Award of Degree: The candidates will be awarded Engineering degree after successful completion of training.<br>
In case they fail to qualify in the following year examination, the same will result in loss of seniority to them and they will forfeit seniority to the extent of delay in passing Engineering degree examination. If they fail to qualify even within three years of their commissioning, their commission will be terminated.<br><br>
<h4>Selection Procedure</h4>
1. Short listed candidates will be called for Services Selection Board (SSB) interview at Bhopal, Bangalore or Allahabad.<br>
2. Duration of SSB interviews is five days excluding day of arrival. During their stay at SSB, Candidates are put through psychological Test, Group test and Interviews.<br>
3. Candidates will be put through stage – I of the selection procedure on the first day. Only successful candidates shall be retained for balance of the testing. Candidates who fail to qualify in stage – I, will be returned on the first day itself, Stage I are psychologically originated test including intelligence test.<br>
4. Successful candidates at the SSB will be required to undergo medical test lasting 3 to 5 days less Sundays and gazetted holidays.
Candidates recommended by the SSB and declared medically fit, will be appointed for training in the order of merit, depending on the number of vacancies available.<br>
5. The finally selected candidates will execute all the Bonds/Certificates as prescribed for the Cadets of NDA entry under Al 53/78.
Candidates appering for SSB interview for the first time for a particular type of commission shall be entitled for AC III tier to and fro railway fare or bus fare including reservation cum sleeper charges within the Indian limits.<br>6.  Candidates who apply again for the same type of commission will not entitled to travelling allowance on any subsequent occasion

</p><br>
<h5><b>Explore more:</b></h5>
<ul><li><a href="https://joinindianarmy.nic.in/" target="_blank"> Join Indian Army</a></li>
<li><a href="https://indianarmy.nic.in/index.aspx" target="_blank">Indian Army</a></li>
</ul></li>
<br><br>
<h3><b>Technical Entry in NAVY</b></h3>
  <hr>
<p>The Indian Navy (IN; IAST: Bhāratīya Nau Senā) is the naval branch of the Indian Armed Forces. The President of India is the Supreme Commander of the Indian Navy. The Chief of Naval Staff, a four-star Admiral, commands the navy.

The Indian Navy traces its origins back to the East India Company's Marine which was founded in 1612 to protect British merchant shipping in the region. In 1793, the East India Company established its rule over eastern part of the Indian subcontinent i.e. Bengal, but it was not until 1830 that the colonial navy was titled as His Majesty's Indian Navy. When India became a republic in 1950, the Royal Indian Navy as it had been named since 1934 was renamed to Indian Navy.

The primary objective of the navy is to safeguard the nation's maritime borders, and in conjunction with other Armed Forces of the union, act to deter or defeat any threats or aggression against the territory, people or maritime interests of India, both in war and peace. Through joint exercises, goodwill visits and humanitarian missions, including disaster relief, Indian Navy promotes bilateral relations between nations.<br><br>

<h4>Elegibility Criteria</h4>
Who have applied for JEE main exam             <br>
Education: candidates who have passed 10+2 Examination or its equivalent with a minimum aggregate of 70% marks in Physics, Chemistry and Mathematics and 50% marks in English (either in class 10th or 12th).<br><br>

</p>
<ul><li><a href="https://www.joinindiannavy.gov.in/en" target="_blank">Join Indian Navy</a></li>
<li><a href="https://www.joinindiannavy.gov.in/files/event_attachments/10+2.pdf" target="_blank">Advertisment 2018</a> </li>
</ul>

<br><br>
<h3><b>AIRMEN Group X Y</b></h3>
<br>
<p>The Indian Air Force (IAF; IAST: Bhāratīya Vāyu Senā) is the air arm of the Indian armed forces. Its complement of personnel and aircraft assets ranks fourth amongst the airforces of the world. Its primary mission is to secure Indian airspace and to conduct aerial warfare during armed conflict. It was officially established on 8 October 1932 as an auxiliary air force of the British Empire which honored India's aviation service during World War II with the prefix Royal. After India gained independence from the United Kingdom in 1947, the name Royal Indian Air Force was kept and served in the name of Dominion of India. With the government's transition to a Republic in 1950, the prefix Royal was removed after only three years.

Since 1950 the IAF has been involved in four wars with neighboring Pakistan and one with the People's Republic of China. Other major operations undertaken by the IAF include Operation Vijay, Operation Meghdoot, Operation Cactus and Operation Poomalai. The IAF's mission expands beyond engagement with hostile forces, with the IAF participating in United Nations peacekeeping missions.

The President of India holds the rank of Supreme Commander of the IAF. As of 1 July 2017, 139,576 personnel are in service with the Indian Air Force. The Chief of Air Staff, an air chief marshal, is a four-star officer and is responsible for the bulk of operational command of the Air Force. There is never more than one serving ACM at any given time in the IAF. The rank of Marshal of the Air Force has been conferred by the President of India on one occasion in history, to Arjan Singh. On 26 January 2002 Singh became the first and so far, only five-star rank officer of the IAF

</p>
<ul><li><a href="https://airmenselection.cdac.in/CASB/" target="_blank">AIRMEN SELECTION BOARD</a></li>
<li><a href="https://airmenselection.cdac.in/CASB/eligibilityCriteria.html" target="_blank">Eligibility Criteria</a> </li>
<li><a href="https://airmenselection.cdac.in/CASB/trades_task.html" target="_blank">Trades and Tasks</a></li>
</ul></li>
<br><br>
<h3><b>SSC (Staff Selection Commission)</b></h3>
  <hr>
<p>Staff Selection Commission (SSC) is an organization under Government of India to recruit staff for various posts in the various Ministries and Departments of the Government of India and in Subordinate Offices

This commission is an attached office of the Department of Personnel and Training (DoPT) which consists of Chairman, two Members and a Secretary-cum-Controller of Examinations. His post is equivalent to the level of Additional Secretary to the Government of India.

The Estimates committee in the Parliament recommended the setting up of a Service Selection Commission in its 47th report (1967–68) for conducting examinations to recruit lower categories of posts. Later, in the Department of Personnel and Administrative Reforms, on 4 November 1975 Government of India constituted a commission called Subordinate Service Commission. On 26 September 1977, Subordinate Services Commission was renamed as Staff Selection Commission. The functions of Staff Selection Commission were redefined by The Government of India through Ministry of Personnel, Public Grievances and Pensions on 21 May 1999. Then the new constitution and functions of Staff Selection Commission came into effect from 1 June 1999. Every year SSC conducts the SSC Combined Graduate Level Examination for recruiting non-gazetted officers to various government jobs.<br><br>
<h4>Exams conducted by SSC</h4>
SSC currently functions as an autonomous body that is mainly engaged in conducting competitive exams for recruitment to various posts in the SSC departments, organizations. In the previous years, SSC has conducted various exams as given below<br><br>

SSC Combined Graduate Level Examination (SSC CGL)<br>
SSC Combined Higher Secondary Level Exam (SSC CHSL)<br>
Junior Engineer<br>
Hindi Translator<br>
SSC GD Constable<br>
SSC Multitasking<br>
Scientific Assistant Post<br>
Selection Post<br>
Central Police Organization<br>
Stenographer<br>


</p>
<h5>Explore More</h5>
<ul><li><a href="https://ssc.nic.in/" target="_blank">Staff Selection Commission</a></li>
<li><a href="http://ssconline.nic.in/" target="_blank">Apply Online</a></li>
<li><a href="http://sscold2.nic.in/" target="_blank"> SSC old Site</a></li>
</ul>
</li><br><br>
<h3><b>INDIAN RAILWAYS</b></h3>
<hr>
<p>Indian Railways (IR) is India's national railway system operated by the Ministry of Railways. It manages the fourth-largest railway network in the world by size, with 121,407 kilometres (75,439 mi) of total track over a 67,368-kilometre (41,861 mi) route. Forty nine percent of the routes are electrified with 25 KV AC electric traction while thirty three percent of them are double or multi-tracked.

IR runs more than 20,000 passenger trains daily, on both long-distance and suburban routes, from 7,349 stations across India.[3] The trains have a five-digit numbering system. Mail or express trains, the most common types, run at an average speed of 50.6 kilometres per hour (31.4 mph). In the freight segment, IR runs more than 9,200 trains daily. The average speed of freight trains is around 24 kilometres per hour (15 mph).

As of March 2017, IR's rolling stock consisted of 277,987 freight wagons, 70,937 passenger coaches and 11,452 locomotives. IR owns locomotive and coach-production facilities at several locations in India. The world's eighth-largest employer, it had 1.308 million employees as of March 2017<br><br>

The courses offered by drama schools focus on practical courses, rather than theoretical classes. Their aim is to train students as professional actors for stage (theatre or musical theatre) and camera-based work (film and television shows). Students are required to be enthusiastic and motivated in order to meet the demands of the program. At the beginning of the final year (usually the third), most drama schools stage a series of performances throughout the academic year to which agents and casting directors are invited. This helps to build the future of the graduates and serves as a showcase of what the students can do.
 </p>
<h5>Explore more</h5>
<ul>
  <li><a href="http://www.indianrailways.gov.in/" target="_blank">Indian Railways</a></li>
  <li><a href="<li><a href="http://www.rrbcdg.gov.in/" target="_blank">Railways recruitment Board</a></li>
  <li><a href="https://www.irctc.co.in/nget/train-search" target="_blank">Next Generation Ticketing</a></li>
  <li> <a href="http://www.indianrail.gov.in/enquiry/StaticPages/StaticEnquiry.jsp?StaticPage=index.html" target="_blank">National Train Enquiry System</a></li>
</ul></li><br><br>
</li>


 

</li>
</ul>
<hr>
<form action="insert.php" method="post">
          <label><h4><b>Email Id</b></h4></label>
          <input type="email" name="email" tabindex="1" placeholder="email" id="Name" class="form-control" required>
          <label><h4><b>Comment</b></h4></label>
          <textarea rows="4" cols="165" name="Comment" tabindex="2" placeholder="Comment" id="Comment" class="form-control" required></textarea>
          <br>
          <center><button class="btn btn-success" value="submit">Comment</button></center>
     </form>

</div>







<?php 
readfile('comp/footer.html');
?>
</body>
</html>
