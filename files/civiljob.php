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
	<title>Civil job</title>
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
      background: url(https://s3.ap-south-1.amazonaws.com/atg-storage-s3/assets/Frontend/images/article_image/atg-world-article-01290000002018418462615.jpg) no-repeat center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      color: white;
      clear: left;
      padding: 6%;
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
	color:white;
	
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
  <h1><b>JOB OPPORTUNITIES</b></h1>
  <div class="container">
   <p><b>Engineering Graduates, who pursing final year or recently completed engineering degree holders get your discipline wise suitable Engineer Government jobs - latest recruitment / vacancy details here. Engineering Graduates recruiting Government of India owned Public Sector Undertakings Companies / Organizations List: BHEL, BEL, Coal India, HPCL, EIL, BPCL, Mazagon Dock, MECON, NACL, NLC, NMDC, SAIL, NTPC, IOCL, ONGC, Power Grid, Railtel, RITES, UCI etc.<br></b></p>
</div>
</center>
<div class="container">

<br><br>
<h3><b>GOVERENMENT JOBS THROUGH GATE</b></h3>
<hr>
<P>There are a lot of job opportunities for Civil Engineers within the public sector.

    The Public Sector Undertakings (PSUs) shall be addressed first. Some of them are </p>
<br>
  <b>Following are the Government Opportunities in India:</b>
  <br>
  <br>
<ul>
    <li><h4><b>National Thermal Power Corporation Limited(NTPC)</b></h4>
        <h5><b>Selection Process:</b>GATE, Online Aptitude Test, GD, PI</h5>
        <h5><b>Pay Scale:</b>24,900 - 50,500</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="https://www.ntpc.co.in/">NTPC</a>
    </li>
    <li><h4><b>Oil and Natural Gas Corporation(ONGC)</b></h4>
        <h5><b>Selection Process:</b>GATE, PI</h5>
        <h5><b>Pay Scale:</b>24,900 - 50,500</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="https://www.ongcindia.com/wps/wcm/connect/en/home/">ONGC</a>
    </li>
    <li><h4><b>Steel Authority of India Limited (SAIL)</b></h4>
        <h5><b>Selection Process:</b>Examination test / Skill test, Trade test</h5>
        <h5><b>Pay Scale:</b>20,600 - 46,500</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="https://www.sail.co.in/">SAIL</a>
    </li>
     <li><h4><b>Bharat Heavy Electricals Limited(BHEL)</b></h4>
        <h5><b>Selection Process:</b>GATE, PI</h5>
        <h5><b>Pay Scale:</b>20,600 - 46,500 (DT) & 24,900 - 50,500 (AT)</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="http://www.bhel.com/">BHEL</a>
    </li>
    <li><h4><b>Indian Oil Corporation Limited (IOCL)</b></h4>
        <h5><b>Selection Process:</b>GATE, GD & GT, PI</h5>
        <h5><b>Pay Scale:</b>24,900 - 50,500</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="https://www.iocl.com/">IOCL</a>
    </li>
    <li><h4><b>Gas Authority of India Limited. (GAIL)</b></h4>
        <h5><b>Selection Process:</b>GD, PI	</h5>
        <h5><b>Pay Scale:</b>24,900 - 50,500/-</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="http://gailonline.com/hindi/home.html">GAIL</a>
    </li>
    <li><h4><b>Bharat Petroleum Corporation Limited (BPCL)</b></h4>
        <h5><b>Selection Process:</b>GATE, GD, PI, Medical Fitness</h5>
        <h5><b>Pay Scale:</b>24,900 - 50,500/-</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="https://www.bharatpetroleum.com/">BPCL</a>
    </li>
    <li><h4><b>Hindustan Petroleum Corporation Limited (HPCL)</b></h4>
        <h5><b>Selection Process:</b>GATE, GD, PI, Medical Fitness</h5>
        <h5><b>Pay Scale:</b>24,900 - 50,500/-</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="http://www.hindustanpetroleum.com/">HPCL</a>
    </li>
    <li><h4><b>Hindustan Aeronautics Limited (HAL)</b></h4>
        <h5><b>Selection Process:</b>GATE, GD, PI, Medical Fitness</h5>
        <h5><b>Pay Scale:</b>16400-40500/</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="https://hal-india.co.in/">HAL</a>
    </li>
    <li><h4><b>Engineers India Limited (EIL)</b></h4>
        <h5><b>Selection Process:</b>Open Competition, PI</h5>
        <h5><b>Pay Scale:</b>20,600 - 46,500/</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="http://www.engineersindia.com/">EIL</a>
    </li>
    <li><h4><b>Indian Space Research Organization (ISRO)</b></h4>
        <h5><b>Selection Process:</b>Open Competition, PI</h5>
        <h5><b>Pay Scale:</b>20,600 - 46,500/</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="https://www.isro.gov.in/">ISRO</a>
    </li>
    <li><h4><b>National Fertilizers Ltd</b></h4>
        <h5><b>Selection Process:</b>Open Competition, PI</h5>
        <h5><b>Pay Scale:</b>20,600 - 86,500/</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="http://www.nationalfertilizers.com/">NFL</a>
    </li>
    <li><h4><b>Indian Ordnance Factories Service (IOFS)</b></h4>
        <h5><b>Selection Process:</b>Open Competition, PI</h5>
        <h5><b>Pay Scale:</b>/24,600 - 86,500/</b></h5>
        <h5><b>OFFICIAL WEBSITE:</b></h5><a href="http://ofbindia.gov.in/index.php?wh=iofs_list&lang=en">IOFS</a>
    </li>
</ul>
<br><br><h2><b>OTHER GOVERENMENT OPPORTUNITIES</b></h2><br>

<h3><b>INDIAN RAILWAYS</b></h3>
<hr>
<p>Civil Engineers in particular have a prominent role in building a New India and have in the past, helped transform the country into a modern economic powerhouse. Civil engineers along with architects are instrumental in conceptualising, designing and completing large infrastructure projects. Their scope of work in India Railways is as large as our desire to transform the nation. Any aspiring civil engineer feels at ease in the Indian Railways family as railways is a critical infrastructure of any modern industrial economy.

Let me share with you a few examples of some of the challenging projects that are being undertaken by Indian Railways which depicts the opportunity, skill, scale and strength of civil engineers working in Indian Railways.<p>
<p><b>Indian Railway Services for CIVIL Engineers like:</b></p>
<ul>
    <li><h5><i>Anji Bridge</i></h5>
    </li>
    <li><h5><i>Sumber Tunnel of USBRL Project</i></h5>
    </li>
    <li><h5><i>The World’s Tallest Railway Girder Bridge</i></h5>
    </li>
    <li><h5><i>Synopsis on Chenab Bridge</i></h5>
    </li>
    <li><h5><i>Bridge No 39</i></h5>
    </li>
</ul>
<h3><b>BANKING</b></h3>
<hr>
<p>	
Vaibhav Bhutra
Verified Career Expert Career Counselor/ Director at Educomp Vidyamandir Classes
Surat


Dear Friend,

Many times this happens with us that we want to do something and accidantely get into something else, the same could be because of lack of information or lack of interest.

I was a investment banker before i decided to get into education and i am really enjoying currently so there is nothing which can not be done if you want to persue

Now since you wanted to get into Banking you could join or appear certain exams and join banking sector

1) Bank PO : Bank PO is the exams conducted by Various Public sector Banks which is considered to be the entry level job in banks, once you are able to clear Bank PO you would be called for next level of selection process, once you get into the bank you can make your path in Banking sector.

2) Post Graduate Programs: You may Consider doing a Post Graduation in Finance or Banking which would help you get into the banking industry and also would induct you in Middle Level management unlike Bank PO. The Only Difference here is that you have to invest 2 years for you MBA, PGBM program

3) Technical Jobs : You can also look to apply for Technical jobs which are normally available in Banks website, the advantage could be that you would get to use your knowledge of Civil Engineering, Since bank do need civil engineers for the maintenance and new projects.

As i Said earlier there might be a situation where you would be questioned why you moving to banking, so be mentally ready for such question, but my advice would be follow you instinct
</p>
<h3><b>Civil Engineers can also serve their by getting into Indian Navy</b></h3>
<hr>
<ul>
    <li><h4><i>UES:</i></h4><h5>This is a University Entry Scheme exam and only final year students are eligible to apply.CDS: Union Public Service Commission (UPSC) conducts Combined Defense Services (CDS) examination twice a year for the recruitment of officers into Indian Military Academy, Officers Training Academy, Indian Naval Academy and Indian Air Force Academy.</h5>
    </li>
    <li><h4><i>CDS:</i></h4><h5>Union Public Service Commission (UPSC) conducts Combined Defense Services (CDS) examination twice a year for the recruitment of officers into Indian Military Academy, Officers Training Academy, Indian Naval Academy and Indian Air Force Academy.TES: This is Technical Entry Scheme (TES) and only B.Tech applicants can apply.</h5>
    </li>
    <li><h4><i>TES:</i></h4><h5>This is Technical Entry Scheme (TES) and only B.Tech applicants can apply.GDOC: B.Tech students can apply for this exam, which is Ground Duty Officers Course exam.</h5>
    </li>
    <li><h4><i>GDOC:</i></h4><h5>B.Tech students can apply for this exam, which is Ground Duty Officers Course exam.</h5>
    </li>
</ul>
<br><br><h3><b>ENGINEERING SERVICES EXAMINATION</b></h3>
<hr>
<p>Every Single Year Union Public Service Commission (UPSC) conducts Engineering Services Examination, which is the most prestigious examination, held in India. This is also considered as one of the toughest examinations in India and in the world as well.</p>
<br>
<h4><b>The details of this examination are:</b></h4>
<ul>
    <li><h3><b>Eligibility: </b></h3><p>The candidate should be the citizen of India, Nepal or Bhutan. Applicants from other countries such as Pakistan, Myanmar, Kenya, Zaire, Ethiopia, Uganda, Malawi, Tanzania, Zambia or Vietnam are also eligible to apply but they should have Indian Citizenship.</p>
    </li>
    <li><h3><b>Qualification Required:</b></h3><p>Full-Time Engineering Bachelor’s Degree</p>
    </li>
    <h3><b>Civil Engineers are shortlisted for this exam for various services listed below:</b></h3>
    <ul>
        <li><p><b>Border Roads Engineering Service (Border Roads Organisation)</b></p>
        </li>
        <li><p><b>Border Roads Engineering Service (Border Roads Organisation)</b></p>
        </li>
        <li><p><b>Indian Supply Service (Directorate General of Supply and Disposals)</b></p>
        </li>
        <li><p><b>Central Engineering Service (Ministry of Road Transport & Highways)</b></p>
        </li>
        <li><p><b>Indian Railway Stores Service</b></p>
        </li>
        <li><p><b>Central Electrical & Mechanical Engineering Service (Central Public Works Department)</b></p>
        </li>
        <li><p><b>Central Power Engineering Service (Central Electricity Authority)</b></p>
        </li>
        <li><p><b>Indian Ordinance Factories Service (IOFS)</b></p>
        </li>
        <li><p><b>Indian Railway Service of Mechanical Engineers</b></p>
        </li>
        <li><p><b>Central Water Engineering Service (Central Water Commission)</b></p>
        </li>
        <li><p><b>Corps of Electrical and Mechanical Engineers (Indian Army)</b></p>
        </li>
        <li><p><b>Indian Railway Stores Service</b></p>
        </li>
        <li><p><b>Indian Naval Stores Service (Indian Navy)</b></p>
        </li>
        <li><p><b>Indian Naval Armament Service (Directorate of Naval Armament)</b></p>
        </li>
        <li><p><b>Indian Inspection Service (Directorate General of Supply and Disposals)</b></p>
        </li>
    </ul>
</ul>
<br><br><h3>Govt Jobs in Railways</h3>
<hr>
<p>They can also try in Railways through Railway Recruitment examination. Generally JE and SSE group C posts are filled through open competitive examinations. In order to become a Railway JE, one should have the Diploma in Engineering certificate and to become an SSE, he/she must be an engineer. Here you can read more about RRB Junior Engineer Salary, post, eligibility and similarly you can follow the link for Railway Senior Section Engineer Salary, posting departments and eligibility.</p><br>
<br><br><h3><b>Staff Selection Commision</b></h3>
<hr>
<p>Recently Staff Selection commision has published the “SSC CGL notification 2018” for the recruitment of young graduates from open market. This is one of the high paying jobs in government sector. As SSC recruits graduates for the Class-II, III & IV posts Officer/Official in various ministries & departments. The SSC CGL Salary in hand of Class-II post is around 40k to 50k depending on the group level. Which is a good pay for any fresher? Another thing is that you need not to face any personal interview for this job. So it would be very easier to get the safe, secure and high paying job in little efforts.</p><br>

</li>
</ul>
</div>







<?php 
readfile('comp/footer.html');
?>
</body>
</html>
