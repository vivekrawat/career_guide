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
	<title>CSE Job opportunities</title>
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
table,tr{
  width:100%; 
  height:40px;
 padding:18px;

}
.p001{
background-color: rgba(0,0,0,.5);

}
.p002{
background-color: rgba(0,0,0,.3);

}
.p003{
background-color: rgba(0,0,0,.2);

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
  <div class="container-fluid">
   <p><b>There are multiple options for CSE students for their Job opportunities. However, that depends on your marks, interview, skills, tallents, country where you want to continue.

Good news is that there’s immense scope for CSE undergraduates  all over the globe.</b></p>
</div><br><br>
</center>
<div class="container-fluid">
<ul><h3><b>PSU (Public sector Unit)</b></h3>
  <hr>
<p>The public sector (also called the state sector) is the part of the economy composed of both public services and public enterprises.

Public services include public goods and governmental services such as the military, police, infrastructure (public roads, bridges, tunnels, water supply, sewers, electrical grids, telecommunications, etc.), public transit, public education, along with health care and those working for the government itself, such as elected officials. The public sector might provide services that a non-payer cannot be excluded from (such as street lighting), services which benefit all of society rather than just the individual who uses the service.[1] Public enterprises, or state-owned enterprises, are self-financing commercial enterprises that are under public ownership which provide various private goods and services for sale and usually operate on a commercial basis.

Organizations that are not part of the public sector are either a part of the private sector or voluntary sector. The private sector is composed of the business sector, which is intended to earn a profit for the owners of the enterprise. The voluntary, civic or social sector concerns a diverse array of non-profit organizations emphasizing civil society.<br><br>

Public Sector Undertaking (PSU) or Public Sector Enterprise are the companies that are owned by the union government of India or one of the states/territorial governments or both. The majority of company shares are held by the government. PSUs are sub-divided into the following categories on the basis of net worth and annual turnover-<br><br>



1.Maharatna<br>
2.Navratna<br>
3.Miniratna Category 1<br>
4.Miniratna Category 2<br>

<table border="3" width="50%" align="center" style="text-align:center">
  <tr class="p001"><th><center>Maharatna</center></th><th><center>Navratna</center></th><th><center>Miniratna Catagory 1</center></th><th><center>Miniratna Catagory 2</center></th></tr>
  <tr class="p002"><td>BHEL</td> <td>BEL</td> <td>AAI</td> <td>EdCIL</td></tr>
  <tr class="p003"><td>CIL</td> <td>BPCL</td> <td>BDL</td> <td>MECON LIMITED</td></tr>
  <tr class="p002"><td>GAIL</td> <td>HAL</td> <td>BSNL</td> <td>NSICL</td></tr>
  <tr class="p003"><td>IOCL</td> <td>HPCL</td> <td>CCIL</td> <td>MECL</td></tr>
  <tr class="p002"><td>NTPC</td> <td>MTNL</td> <td>GSL</td> <td>BPCL</td></tr>
</table><BR>


</p><br>


<h5><b>Following are websites to Explore more in INDIA:</b></h5>
<ul><li><a href="https://dpe.gov.in/" target="_blank">Department of Public Enterprises</a></li>
<li><a href="http://gate.iitm.ac.in/" target="_blank">GATE (Graduate Aptitude Test in Engineering</a></li>
<li><a href="http://www.bhel.com/" target="_blank">BHEL (Bharat Heavy Electronics Limited)</a></li>
<li><a href="https://www.ntpc.co.in/en/careers" target="_blank">NTPC (National Thermal Power Corporation)</a></li>
<li><a href="http://www.gailonline.com/CR-ApplyingGail.html/" target="_blank">GAIL (Gas Authority of India limited)</a></li>
<li> <a href="https://en.wikipedia.org/wiki/List_of_public_sector_undertakings_in_India" target="_blank"> AND MANY MORE</a></li>
</ul>
<br><br><h3><b>ISRO (Indian Space And Research Organisation</b></h3>
  <hr>
<p>The Indian Space Research Organisation (ISRO, /ˈɪsroʊ/) is the space agency of the Government of India headquartered in the city of Bangalore. Its vision is to "harness space technology for national development while pursuing space science research and planetary exploration."[5]

Formed in 1969, ISRO superseded the erstwhile Indian National Committee for Space Research (INCOSPAR) established in 1962 by the efforts of independent India's first Prime Minister, Jawaharlal Nehru, and his close aide and scientist Vikram Sarabhai. The establishment of ISRO thus institutionalized space activities in India.[6] It is managed by the Department of Space, which reports to the Prime Minister of India.

ISRO built India's first satellite, Aryabhata, which was launched by the Soviet Union on 19 April 1975.[7] It was named after the Mathematician Aryabhata. In 1980, Rohini became the first satellite to be placed in orbit by an Indian-made launch vehicle, SLV-3. ISRO subsequently developed two other rockets: the Polar Satellite Launch Vehicle (PSLV) for launching satellites into polar orbits and the Geosynchronous Satellite Launch Vehicle (GSLV) for placing satellites into geostationary orbits. These rockets have launched numerous communications satellites and earth observation satellites. Satellite navigation systems like GAGAN and IRNSS have been deployed. In January 2014, ISRO used an indigenous cryogenic engine in a GSLV-D5 launch of the GSAT-14</p>
<br>
<h5><b>Explore more:</b></h5>
<ul><li><a href="https://www.isro.gov.in/" target="_blank">ISRO</a></li>
<li><a href="https://www.isro.gov.in/careers" target="_blank">Career @ ISRO</a></li>
</ul></li>
<br><br>
<h3><b>DRDO (Defence Research And Development Organisation)</b></h3>
  <hr>
<p>The Defence Research and Development Organisation (DRDO) is an agency of the Republic of India, charged with the military's research and development, headquartered in New Delhi, India. It was formed in 1958 by the merger of the Technical Development Establishment and the Directorate of Technical Development and Production with the Defence Science Organisation. It is under the administrative control of the Ministry of Defence, Government of India.

With a network of 52 laboratories, which are engaged in developing defence technologies covering various fields, like aeronautics, armaments, electronics, land combat engineering, life sciences, materials, missiles, and naval systems, DRDO is India's largest and most diverse research organisation. The organisation includes around 5,000 scientists belonging to the Defence Research & Development Service (DRDS) and about 25,000 other scientific, technical and supporting personnel.
</p>
<ul><li><a href="https://www.drdo.gov.in/drdo/English/index.jsp?pg=homebody.jsp" target="_blank">DRDO</a></li>
<li><a href="https://www.drdo.gov.in/drdo/English/index.jsp?pg=drdo-career.jsp" target="_blank">Career @ DRDO</a> </li>
</ul>

<br><br>
<h3><b>CDS (Combined Defence Services)</b></h3>
<br>
<p>The "Combined Defence Services" (CDS) Examination is conducted twice a year by the Union Public Service Commission for recruitment into the Indian Military Academy, Officers Training Academy, Indian Naval Academy and Indian Air Force Academy. The Notification for the examination is usually released in the months of October and June, and the examinations are conducted in February and November respectively. Only unmarried graduates are eligible to sit for the exam. Successful candidates are admitted into the respective Academies after an interview conducted by the Services Selection Board (SSB).<br>
  Those Candidates qualified in the written exam. Then they are shortlisted for an interview by a Services Selection Board which evaluates a candidate's suitability for a career in the Indian Armed Forces. The SSB interview lasts for approximately a week, during this process a candidate undergoes various physical and psychological tests to ascertain whether or not he is officer material. Apart from SSB interview, Air Force academy candidates (only those who have applied for flying branch) are tested for PABT. After these tests, candidates undergo medical examination before finally admitted into the above-mentioned academies, and after successful completion of training, they are inducted into the armed forces.<br><br>

Armed forces offer very exciting career to young men and women in several fields. Career in the force is also an adventure in itself. To ensure that appropriate candidates are chosen, a comprehensive selection process is adopted by the armed forces through Service Selection Board (SSB) interview. This system of selection is based on the “trait theory” of leadership which assumes that every leader must have some specific and pre-determined leadership traits. It also presumes that such traits can be acquired by a candidate with the passage of time meaning thereby that a person once rejected in an SSB interview is likely to succeed if he acquires some of the traits with the passage of time. The present system of selection, although is long and takes four to five days, is thus based on an objective assessment of each candidate in which the qualities like initiative, alertness, judgement, courage, physical fitness endurance, cooperation, group planning, decisiveness, knowledge, etc. are judged. In addition, psychological and mental robustness of the candidate vis-a-vis requirements of the Armed Forces is judged and finally an overall assessment of the personality of a candidate is made by way of an exhaustive personal interviews.

</p>
<ul><li><a href="http://www.upsc.gov.in/" target="_blank">UPSC</a></li>
<li><a href="http://www.upsc.gov.in/examinations/Combined%20Defence%20Services%20Examination%20%28I%29%2C%202018">Apply @ CDSE</a> </li>
</ul></li>
<br><br>
<h3><b>INFOSYS Technologies</b></h3>
  <hr>
<p>Infosys Limited (formerly Infosys Technologies Limited) is an Indian multinational corporation that provides business consulting, information technology and outsourcing services. It has its headquarters in Bengaluru, Karnataka, India.

Infosys is the second-largest Indian IT company by 2017 revenues and 596th largest public company in the world in terms of revenue. On June 29, 2018 its market capitalisation was $42.23 billion. The credit rating of the company is A- (rating by Standard & Poor's)..<br><br>

Infosys was established by 7 engineers in Pune, India with an initial capital of $250 in 1981. It was registered as Infosys Consultants Private Limited on 2 July 1981. In 1983, it relocated its office to Bengaluru, Karnataka, India.

Name change: The company changed its name to Infosys Technologies Private Limited in April 1992 and to Infosys Technologies Limited when it became a public limited company in June 1992. It was later renamed to Infosys Limited in June 2011.

Share listing: An initial public offer (IPO) in February 1993 with an offer price of ₹95 (equivalent to ₹490 or US$6.80 in 2017) per share against book value of ₹20 (equivalent to ₹100 or US$1.40 in 2017) per share. The Infosys IPO was under subscribed but it was "bailed out" by US investment bank Morgan Stanley which picked up 13% of equity at the offer price. Its shares were listed in stock exchanges in June 1993 with trading opening at ₹145 (equivalent to ₹750 or US$10 in 2017) per share.

Its shares were listed on NASDAQ in 1999 through ADR route. The share price surged to ₹8,100 (equivalent to ₹25,000 or US$350 in 2017) by 1999 making it the costliest share on the market at the time. At that time, Infosys was among the 20 biggest companies by market capitalization on the NASDAQ. The ADR listing was shifted from NASDAQ to NYSE Euronext to give its European investors better access to its stock
  




</p>
<h5>Colleges which provide this course</h5>
<ul><li><a href="https://www.infosys.com/" target="_blank">INFOSYS</a></li>
<li><a href="https://www.infosys.com/careers/">Career @ INFOSYS</a></li>
</ul>
</li><br><br>
<h3><b>IBM (International Business Machine)</b></h3>
<hr>
<p>International Business Machines Corporation (IBM) is an American multinational information technology company headquartered in Armonk, New York, United States, with operations in over 170 countries. The company began in 1911 as the Computing-Tabulating-Recording Company (CTR) and was renamed "International Business Machines" in 1924.

IBM manufactures and markets computer hardware, middleware and software, and provides hosting and consulting services in areas ranging from mainframe computers to nanotechnology. IBM is also a major research organization, holding the record for most U.S. patents generated by a business (as of 2018) for 25 consecutive years.[5] Inventions by IBM include the automated teller machine (ATM), the floppy disk, the hard disk drive, the magnetic stripe card, the relational database, the SQL programming language, the UPC barcode, and dynamic random-access memory (DRAM). The IBM mainframe, exemplified by the System/360, was the dominant computing platform during the 1960s and 1970s.<br>

IBM has continually shifted its business mix by commoditizing markets focusing on higher-value, more profitable markets. This includes spinning off printer manufacturer Lexmark in 1991 and selling off its personal computer (ThinkPad/ThinkCentre) and x86-based server businesses to Lenovo (2005 and 2014, respectively), and acquiring companies such as PwC Consulting (2002), SPSS (2009), and The Weather Company (2016). Also in 2014, IBM announced that it would go "fabless", continuing to design semiconductors, but offloading manufacturing to GlobalFoundries.<br>

Nicknamed Big Blue, IBM is one of 30 companies included in the Dow Jones Industrial Average and one of the world's largest employers, with (as of 2017) over 380,000 employees. Known as "IBMers", IBM employees have been awarded five Nobel Prizes, six Turing Awards, ten National Medals of Technology and five National Medals of Science.
 </p>
<h5>Explore more</h5>
<ul>
  <li><a href="https://www.ibm.com/in-en/" target="_blank">IBM INDIA </a></li>
  <li><a href="http://www-03.ibm.com/employment/in/index.shtml" target="_blank">Career @ IBM </a></li>
</ul></li><br><br>
<h3><b> MICROSOFT</b></h3>
<hr>
<p>Microsoft Corporation (abbreviated as MS) is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses, supports and sells computer software, consumer electronics, personal computers, and related services. Its best known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers. As of 2016, it is the world's largest software maker by revenue, and one of the world's most valuable companies. The word "Microsoft" is a portmanteau of "microcomputer" and "software".

Microsoft was founded by Bill Gates and Paul Allen on April 4, 1975, to develop and sell BASIC interpreters for the Altair 8800. It rose to dominate the personal computer operating system market with MS-DOS in the mid-1980s, followed by Microsoft Windows. The company's 1986 initial public offering (IPO), and subsequent rise in its share price, created three billionaires and an estimated 12,000 millionaires among Microsoft employees. Since the 1990s, it has increasingly diversified from the operating system market and has made a number of corporate acquisitions, their largest being the acquisition of LinkedIn for $26.2 billion in December 2016, followed by their acquisition of Skype Technologies for $8.5 billion in May 2011.

As of 2015, Microsoft is market-dominant in the IBM PC-compatible operating system market and the office software suite market, although it has lost the majority of the overall operating system market to Android. The company also produces a wide range of other consumer and enterprise software for desktops and servers, including Internet search (with Bing), the digital services market (through MSN), mixed reality (HoloLens), cloud computing (Azure) and software development (Visual Studio).<BR>


</p>
<h5>Explore more</h5>
<ul><li><a href="https://www.microsoft.com/en-us" target="_blank"> Microsoft </a></li>
<li><a href="https://careers.microsoft.com/us/en" target="_blank">Career @ MICROSOFT</a></li>
</ul>
<br><br>



<h3><b>ORACLE</b></h3>
<hr>
<p>Oracle Corporation is an American multinational computer technology corporation headquartered in Redwood Shores, California. The company specializes primarily in developing and marketing database software and technology, cloud engineered systems, and enterprise software products — particularly its own brands of database management systems. In 2014, Oracle was the second-largest software maker by revenue, after Microsoft.

The company also develops and builds tools for database development and systems of middle-tier software, enterprise resource planning (ERP) software, customer relationship management (CRM) software, and supply chain management (SCM) software.<BR>

Larry Ellison co-founded Oracle Corporation in 1977 with Bob Miner and Ed Oates under the name Software Development Laboratories (SDL). Ellison took inspiration[6] from the 1970 paper written by Edgar F. Codd on relational database management systems (RDBMS) named "A Relational Model of Data for Large Shared Data Banks." He heard about the IBM System R database from an article in the IBM Research Journal provided by Oates. Ellison wanted to make Oracle's product compatible with System R, but failed to do so as IBM kept the error codes for their DBMS a secret. SDL changed its name to Relational Software, Inc (RSI) in 1979, then again to Oracle Systems Corporation in 1982, to align itself more closely with its flagship product Oracle Database. At this stage Bob Miner served as the company's senior programmer. On March 12, 1986, the company had its initial public offering. In 1995, Oracle Systems Corporation changed its name to Oracle Corporation, officially named Oracle, but sometimes referred to as Oracle Corporation, the name of the holding company. Part of Oracle Corporation's early success arose from using the C programming language to implement its products. This eased porting to different operating systems (most of which support C).


</p>
<h5>Explore more</h5>
<ul><li><a href="https://www.oracle.com/in/index.html" target="_blank">ORACLE Corporation</a></li>
<li><a href="https://www.oracle.com/in/corporate/careers/" target="_blank">Career @ ORACLE </a></li>
</ul>
<br><br>



<h3><b>WIPRO</b></h3>
<hr>
<p>Wipro Limited (Western India Palm Refined Oils Limited[3] or more recently, Western India Products Limited[4]) is an Indian information technology services corporation headquartered in Bengaluru, India.[5]

In 2013, Wipro demerged its non-IT businesses into separate companies.<BR>
The company was incorporated on 29 December 1945 in Amalner, Maharashtra by Mohamed Premji as 'Western India Vegetable Products Limited', later abbreviated to 'Wipro'. It was initially set up as a manufacturer of vegetable and refined oils in Amalner, Maharashtra, India under the trade names of Kisan, Sunflower, and Camel.

In 1966, after Mohamed Premji’s death, his son Azim Premji returned home from Stanford University and took over Wipro as its chairman at the age of 21.

During the 1970s and 1980s, the company shifted its focus to new business opportunities in the IT and computing industry, which was at a nascent stage in India at the time. On 7 June 1977, the name of the company changed from Western India Vegetable Products Limited, to Wipro Products Limited.

The year 1980 marked the arrival of Wipro in the IT domain. In 1982, the name was changed from Wipro Products Limited to Wipro Limited. Meanwhile, Wipro continued to expand in the consumer products domain with the launch of "Ralak" a Tulsi based family soap and "Wipro Jasmine", a toilet soap. In 1988 Premji took a loan of 1 million dollars from Sonkar and Sons to set up the project. Later the entire loan amount was waived


</p>
<h5>Explore more</h5>
<ul><li><a href="https://www.wipro.com/en-IN/" target="_blank"> WIPRO</a></li>
<li><a href="https://careers.wipro.com/" target="_blank">Career @ WIPRO</a></li>
</ul>
<br><br>



<h3><b>DELL</b></h3>
<hr>
<p>Dell is an American multinational computer technology company based in Round Rock, Texas, United States, that develops, sells, repairs, and supports computers and related products and services. Named after its founder, Michael Dell, the company is one of the largest technological corporations in the world, employing more than 103,300 people in the U.S. and around the world.

Dell sells personal computers (PCs), servers, data storage devices, network switches, software, computer peripherals, HDTVs, cameras, printers, MP3 players, and electronics built by other manufacturers. The company is well known for its innovations in supply chain management and electronic commerce, particularly its direct-sales model and its "build-to-order" or "configure to order" approach to manufacturing—delivering individual PCs configured to customer specifications. Dell was a pure hardware vendor for much of its existence, but with the acquisition in 2009 of Perot Systems, Dell entered the market for IT services. The company has since made additional acquisitions in storage and networking systems, with the aim of expanding their portfolio from offering computers only to delivering complete solutions for enterprise customers.

Dell was listed at number 51 in the Fortune 500 list, until 2014. After going private in 2013, the newly confidential nature of its financial information prevents the company from being ranked by Fortune. In 2015, it was the third largest PC vendor in the world after Lenovo and HP. Dell is currently the #1 shipper of PC monitors in the world. Dell is the sixth largest company in Texas by total revenue, according to Fortune magazine. It is the second largest non-oil company in Texas – behind AT&T – and the largest company in the Greater Austin area. It was a publicly traded company (NASDAQ: DELL), as well as a component of the NASDAQ-100 and S&P 500, until it was taken private in a leveraged buyout which closed on October 30, 2013.<BR>


</p>
<h5>Explore more</h5>
<ul><li><a href="https://www.dell.com/en-in" target="_blank"> DELL India</a></li>
<li><a href="https://www.dell.com/learn/in/en/incorp1/viewall/careers" target="_blank">Career @ DELL</a></li>
</ul>
<br><br>


<h3><b>HAWLETT-PACKERD INDIA</b></h3>
<hr>
<p>

  The Hewlett-Packard Company (commonly referred to as HP) or shortened to Hewlett-Packard  was an American multinational information technology company headquartered in Palo Alto, California. It developed and provided a wide variety of hardware components as well as software and related services to consumers, small- and medium-sized businesses (SMBs) and large enterprises, including customers in the government, health and education sectors.

The company was founded in a one-car garage in Palo Alto by Bill Hewlett and David Packard, and initially produced a line of electronic test equipment. HP was the world's leading PC manufacturer from 2007 to Q2 2013, after which Lenovo came to rank ahead of HP. It specialized in developing and manufacturing computing, data storage, and networking hardware, designing software and delivering services. Major product lines included personal computing devices, enterprise and industry standard servers, related storage devices, networking products, software and a diverse range of printers and other imaging products. HP marketed its products to households, small- to medium-sized businesses and enterprises directly as well as via online distribution, consumer-electronics and office-supply retailers, software partners and major technology vendors. HP also had services and consulting business around its products and partner products.

Hewlett-Packard company events included the spin-off of its electronic and bio-analytical measurement instruments part of its business as Agilent Technologies in 1999, its merger with Compaq in 2002, and the acquisition of EDS in 2008, which led to combined revenues of $118.4 billion in 2008 and a Fortune 500 ranking of 9 in 2009. In November 2009, HP announced the acquisition of 3Com, with the deal closing on April 12, 2010. On April 28, 2010, HP announced the buyout of Palm, Inc. for $1.2 billion. On September 2, 2010, HP won its bidding war for 3PAR with a $33 a share offer ($2.07 billion), which Dell declined to match
<BR>


</p>
<h5>Explore more</h5>
<ul><li><a href="https://www8.hp.com/in/en/home.html" target="_blank"> Hawlett Packered India</a></li>
<li><a href="https://www.hpe.com/in/en/about/jobs.html" target="_blank">Career @ Hawlett-Packered India</a></li>
</ul>
<br><br>


 <h3><b>TCS (Tata Consultancy Services)</b></h3>
<hr>
<p>Tata Consultancy Services Limited (TCS) is an Indian multinational information technology (IT) service, consulting company headquartered in Mumbai, Maharashtra. It is part of the Tata Group and operates in 46 countries.

TCS is one of the largest Indian companies by market capitalization. TCS is now placed among the most valuable IT services brands worldwide. In 2015, TCS is ranked 64th overall in the Forbes World's Most Innovative Companies ranking, making it both the highest-ranked IT services company and the top Indian company. It is the world's 2nd largest IT services provider. As of 2017, it is ranked 10th on the Fortune India 500 list. In April 2018, TCS became the first Indian IT company to breach $100 billion market capitalization, and second Indian company ever (after Reliance Industries achieved it in 2007) after its m-cap stood at Rs 6,79,332.81 crore ($102.6 billion) in Bombay Stock Exchange.

In 2016-2017, Parent company Tata Sons owned 70% of TCS; and more then 70% of Tata Sons' dividends were generated by TCS. In March 2018, Tata Sons decided to sell stocks of TCS worth $1.25 billion in a bulk deal<BR>


</p>
<h5>Explore more</h5>
<ul><li><a href="https://www.tcs.com/" target="_blank"> TCS </a></li>
<li><a href="https://www.tcs.com/careers?country=IN&lang=EN" target="_blank">Career @ TCS</a></li>
</ul>
<br><br>




</li>
</ul>
</div>




 
<?php 
readfile('comp/footer.html');
?>
</body>
</html>
