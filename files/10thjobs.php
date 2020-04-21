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
	<title>10th JOB OPPORTUNITIES</title>
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
  <h1><b>JOB OPPORTUNITIES</b></h1>
  <div class="container">
   <p><b>There are multiple options for 10th passed students for their JOB opportunities. However, that depends on your marks, skills.

Good news is that there’s immense scope for 10th passed students all over the globe.</b></p>
</div><br><br>
</center>
<div class="container">
<ul><h3><b>Defence Examinations:</b></h3>
  <hr>
<p>The Indian Armed Forces (Hindi (in IAST): Bhāratīya Saśastra Senāeṃ) are the military forces of the Republic of India. It consists of three professional uniformed services: the Indian Army, Indian Navy, and Indian Air Force. Additionally, the Indian Armed Forces are supported by the Indian Coast Guard and paramilitary organisations (Assam Rifles, and Special Frontier Force) and various inter-service commands and institutions such as the Strategic Forces Command, the Andaman and Nicobar Command and the Integrated Defence Staff. The President of India is the Supreme Commander of the Indian Armed Forces. The Indian Armed Forces are under the management of the Ministry of Defence (MoD) of the Government of India. With strength of over 1.4 million active personnel, it is the world's 2nd largest military force and has the world's largest volunteer army.[18] It is important to note that the Central Armed Police Forces, which are commonly and incorrectly referred to as 'Paramilitary Forces', are headed by officers from the Indian Police Service and are under the control of the Ministry of Home Affairs, not the Ministry of Defence.

The Indian armed forces have been engaged in a number of major military operations, including: the Indo-Pakistani wars of 1947, 1965 and 1971, the Portuguese-Indian War, the Sino-Indian War, the 1967 Chola incident, the 1987 Sino-Indian skirmish, the Kargil War, and the Siachen conflict among others. India honours its armed forces and military personnel annually on Armed Forces Flag Day, 7 December. Since 1962, the IAF has maintained close military relations with Russia, including cooperative development of programmes such as the Fifth Generation Fighter Aircraft (FGFA) and the Multirole Transport Aircraft (MTA). Armed with the nuclear triad, the Indian armed forces are steadily undergoing modernisation, with investments in areas such as futuristic soldier systems and missile defence systems.

<h4>sectors</h4>
<ul>
  <li>Indian Army</li>
  <li>Indian Air Force</li>
  <li>Indian Navy</li>
</ul>

</p><br>
<h5><b>More Information</b></h5>
<ul><li><a href="http://www.upsc.gov.in/" target="_blank">UPSC (Union Public Service Commision)</a></li>
<li><a href="https://en.wikipedia.org/wiki/National_Defence_Academy_(India)" target="_blank">More to Know</a></li>
</ul>
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
</div>









   
    	

   
<?php 
readfile('comp/footer.html');
?>
</body>
</html>
