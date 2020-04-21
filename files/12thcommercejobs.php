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
	<title>Commerce JOB OPPORTUNITIES</title>
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
      background: url(https://images.unsplash.com/photo-1530518260653-e61ca2209eb4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=611c700f505f6bba7f08ff71d606ccda&auto=format&fit=crop&w=2022&q=80) no-repeat center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      color: white;
      clear: left;
      padding: 7%;
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
   <p><b>There are multiple options for Commerce students for their JOB opportunities. However, that depends on your marks, skills, country where you want to join and also financial preferences.

Good news is that there’s immense scope for maths students all over the globe.</b></p>
</div><br><br>
</center>
<div class="container">
<ul>
<br><br><h3><b>Chartered Accountant</b></h3>
  <hr>
<p>Chartered accountants were the first accountants to form a professional accounting body, initially established in Scotland in 1854. The Edinburgh Society of Accountants (1854), the Glasgow Institute of Accountants and Actuaries (1854) and the Aberdeen Society of Accountants (1867) were each granted a royal charter almost from their inception. The title is an internationally recognised professional designation; the certified public accountant designation is generally equivalent to it.<br>

Chartered accountants work in all fields of business and finance, including auditing, taxation, financial and general management. Some are engaged in public practice work, others work in the private sector and some are employed by government bodies. <br>

Chartered accountants' institutes require members to undertake a minimum level of continuing professional development to stay professionally competitive. They facilitate special interest groups (for instance, entertainment and media, or insolvency and restructuring) which lead in their fields. They provide support to members by offering advisory services, technical helplines and technical libraries. They also offer opportunities for professional networking, career and business development.<br>

</p><br>
<h5><b>Explore more:</b></h5>
<ul><li><a href="https://www.sarkariresult.com/" target="_blank">For Jobs</a></li>
</ul></li>
<br><br>
<h3><b>Cost Accountant</b></h3>
<p>Cost accounting is the process of recording, classifying, analyzing, summarizing, and allocating costs associated with a process, and then developing various courses of action to control the costs. Its goal is to advise the management on how to optimize business practices and processes based on cost efficiency and capability. Cost accounting provides the detailed cost information that management needs to control current operations and plan for the future.

Since managers are making decisions only for their own organization, there is no need for the information to be comparable to similar information from other organizations. Instead, information must be relevant for a particular environment. Cost accounting information is commonly used in financial accounting information, but its primary function is for use by managers to facilitate making decisions.</p>

<h5><b>Explore more</b></h5>
<ul><li><a href="https://www.sarkariresult.com/" target="_blank"> For jobs </a></li></ul>



<br><br>
<h3><b>AIRMEN Group X only</b></h3>
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
</div>







<?php 
readfile('comp/footer.html');
?>
</body>
</html>
