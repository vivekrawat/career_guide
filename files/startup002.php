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
	<title>12th pass</title>
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
      padding: 6%;
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
    h3,h4{
      color:rgb(30,40,150);
    } 
    h2{
        padding:10px;
    	font-size: 3em;	
    }
.containet
{
  width: 90%;
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
 
 <div class="container">
  <center>
  <h1><b>STARTUP INDIA</b></h1>
 
<br>
<br>

   
   <p><b>Startup India is a flagship initiative of the Government of India, intended to build a strong eco-system for nurturing innovation and Startups in the country that will drive sustainable economic growth and generate large scale employment opportunities. The Government through this initiative aims to empower Startups to grow through innovation and design.</b></p>
 </center>
 </div>

<div class="container">
<h3><b>Overview of Startup India Action plan</b></h3>
<hr>
In order to meet the objectives of the initiative, Government of India Action Plan that addresses all aspects of the Startup ecosystem has been announced. With this Action Plan the Government hopes to accelerate spreading of the Startup movement:
<ul><li>
From digital/ technology sector to a wide array of sectors including agriculture, manufacturing, social sector, healthcare, education, etc.; and</li>
<li>From existing tier 1 cities to tier 2 and tier 3 cities including semi-urban and rural areas.</li>
<li>sThe Action Plan is divided across the following areas:

<ul><li>Simplification and Handholding</li>
<li>Funding Support and Incentives</li>
<li>Industry-Academia Partnership and Incubation</li></ul></li></ul>
<h3><b>Highlights of the action plan</b></h3>
<hr>
<ul><li>





<h3><b>Simplification and Handholding</b></h3>


<ul><li><h4>Compliance Regime based on Self-Certification</h4> - Startups shall be allowed to self-certify compliance (through the Startup mobile app) with 9 labour and environment laws. In case of the labour laws, no inspections will be conducted for a period of 3 years. Startups may be inspected on receipt of credible and verifiable complaint of violation, filed in writing and approved by at least one level senior to the inspecting officer. In case of environment laws, Startups which fall under the ‘white category’ (as defined by the Central Pollution Control Board (CPCB)) would be able to self-certify compliance and only random checks would be carried out in such cases.</li>

<li><h4>Startup India Hub</h4> - To create a single point of contact for the entire Startup ecosystem and enable knowledge exchange and access to funding.
Rolling-out of Mobile App and Portal - To serve as the single platform for Startups for interacting with Government and Regulatory Institutions for all business needs and information exchange among various stakeholders</li>

<li><h4>Legal Support and Fast-tracking Patent Examination at Lower Costs</h4> - Under this scheme, the Central Government shall bear the entire fees of the facilitators for any number of patents, trademarks or designs that a Startup may file, and the Startups shall bear the cost of only the statutory fees payable. Rebate on filing of application: Startups shall be provided an 80% rebate in filing of patents vis-a-vis other companies. The scheme is being launched initially on a pilot basis for 1 year; based on the experience gained, further steps shall be taken.</li>

<li><h4>Relaxed Norms of Public Procurement for Startups</h4> - In order to promote Startups, Government shall exempt Startups (in the manufacturing sector) from the criteria of “prior experience/ turnover” without any relaxation in quality standards or technical parameters. The Startups will also have to demonstrate requisite capability to execute the project as per the requirements and should have their own manufacturing facility in India.</li>

<li><h4>Faster Exit for Startups</h4> - Startups may be wound up within a period of 90 days from making of an application for winding up on a fast track basis, as per the recently tabled Insolvency and Bankruptcy Bill 2015, which has provisions for voluntary closure of businesses. This process will respect the concept of limited liability.</li></ul>
</li>
<li>
<h3><b>Funding Support and Incentives</b></h3>

<ul><li><h4>Providing Funding Support through a Fund of Funds with a Corpus of INR 10,000 crore </h4>- In order to provide funding support to Startups, Government will set up a fund with an initial corpus of INR 2,500 crore and a total corpus of INR 10,000 crore over a period 4 years (i.e. INR 2,500 crore per year) . The Fund will be in the nature of Fund of Funds, which means that it will not invest directly into Startups, but shall participate in the capital of SEBI registered Venture Funds.</li>

<li><h4>Credit Guarantee Fund for Startups</h4> - Credit guarantee mechanism through National Credit Guarantee Trust Company (NCGTC)/ SIDBI is being envisaged with a budgetary Corpus of INR 500 crore per year for the next four years.</li>

<li><h4>Tax Exemption on Capital Gains </h4>- With this objective, exemption shall be given to persons who have capital gains during the year, if they have invested such capital gains in the Fund of Funds recognized by the Government. In addition, existing capital gain tax exemption for investment in newly formed manufacturing MSMEs by individuals shall be extended to all Startups.
Tax Exemption to Startups for 3 years - The profits of Startup initiatives are exempted from income-tax for a period of 3 years. The exemption shall be available subject to non-distribution of dividend by the Startup.</li>

<li><h4>Tax Exemption on Investments above Fair Market Value</h4> - Under The Income Tax Act, 1961, where a Startup (company) receives any consideration for issue of shares which exceeds the Fair Market Value (FMV) of such shares, such excess consideration is taxable in the hands of recipient as Income from Other Sources. Investment by venture capital funds in Startups is exempted from operations of this provision. The same shall be extended to investment made by incubators in the Startups.</li></ul>
</li>
<li>

<h3><b>Industry-Academia Partnership and Incubation</b></h3>

<ul><li><h4>Organizing Startup Fests for Showcasing Innovation and Providing a Collaboration Platform</h4> - To bolster the Startup ecosystem in India, the Government is proposing to introduce Startup fests at national and international stages.</li>

<li><h4>Launch of Atal Innovation Mission (AIM) with Self-Employment and Talent Utilization (SETU) Program </h4>- The Atal Innovation Mission will establish sector specific incubators and 500 'Tinkering Labs' to promote entrepreneurship, provide pre-incubation training and a seed fund for high-growth startups. Three innovation awards will be given per state and union territory, along with three national awards, as well as a Grand Innovation Challenge Award for finding ultra-low cost solutions for India.</li>

<li><h4>Harnessing Private Sector Expertise for Incubator Setup </h4>- To ensure professional management of Government sponsored / funded incubators, Government will create a policy and framework for setting-up of incubators across the country in public private partnership.</li>

<li><h4>Building Innovation Centres at National Institutes</h4> - In order to augment the incubation and R&D efforts in the country, the Government will set up/ scale up 31 centres (to provide facilities for over 1,200 new Startups) of innovation and entrepreneurship at national institutes</li>

<li><h4>Setting up of 7 New Research Parks Modeled on the Research Park Setup at IIT Madras </h4>- The Government shall set up 7 new Research Parks in institutes with an initial investment of INR 100 crore each. The Research Parks shall be modeled based on the Research Park setup at IIT Madras.</li>

<li><h4>Promoting Startups in the Biotechnology Sector </h4>- 5 new Bio-clusters, 50 new Bio-Incubators, 150 technology transfer offices and 20 Bio-Connect offices will be set up in research institutes and universities across India. BIRAC AcE Fund in partnership with National and Global Equity Funds (Bharat Fund, India Aspiration Fund amongst others) will provide financial assistance to young Biotech Startups.</li>

<li><h4>Launching of Innovation Focused Programs for Students</h4> - An innovation core program targeted at school kids aims to source 10 lakh innovations from five lakh schools, out of which the the best 100 would be shortlisted and showcased at an Annual Festival of Innovations, to be held in Rashtrapati Bhavan. A Grand Challenge program called NIDHI (National Initiative for Developing and Harnessing Innovations) shall be instituted through Innovation and Entrepreneurship Development Centres (IEDCs) to support and award INR 10 lakhs to 20 student innovations. Uchhattar Avishkar Yojana, a joint MHRD-DST scheme has earmarked Rs. 250 crore annually to foster "very high quality" research amongst IIT students.</li>

<li><h4>Annual Incubator Grand Challenge</h4> - The government will identify and select ten incubators, evaluated on pre-defined Key Performance Indicators (KPIs) as having the the potential to become world class, and give them Rs.10 crore each as financial assistance to ramp up their infrastructure.</li>
</ul></li></ul>


<form>
          <label><h4><b>Email Id</b></h4></label>
          <input type="email" name="email" tabindex="1" placeholder="email" id="Name" class="form-control" required>
          <label><h4><b>Comment</b></h4></label>
          <textarea rows="4" cols="165" name="Comment" tabindex="2" placeholder="Comment" id="Comment" class="form-control" required></textarea>
          <br>
          <center><button class="btn btn-success" onclick="">Comment</button></center>
     </form>


    </div>
   <br>
   </center>
   <?php 
readfile('comp/footer.html');
?>
</body>
</html>