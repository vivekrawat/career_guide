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

    h1{
    	padding:20px;
    	font-size: 4em;	
    } 
    h2{
        padding:10px;
    	font-size: 3em;	
    }
    .container{width:90%;
	
	}
  h3{
    color:rgb(30,40,150);
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
   <p><b>In the present time, it is found that students are more confused regarding the career option to choose after class 12 commerce streams, as there are plenty of courses to opt for. One need to choose a career option that provides good scope in future and at the same time develops an interest to pursue it among students. Selecting a career option is one of the major decisions in a student’s life thus it must be made wisely after proper attention and understanding of the field. Here is the list of 12 best Career options after 12th commerce.</b></p>
</div>
</center>
<br>
<br>
<div class="container">
  <h3><b>Bachelor of Commerce (B.Com)</b></h3>
  <hr>

<p>This is the most popular course that maximum students pursue after completing their 12th commerce. It is a general degree course that continues for a period of 3 years. The level of difficulty under these courses is not very high, students can easily get admission under this course from any college. Under this, students get to study subjects like Economics, Marketing, Corporate Accounting, Law, Business Environment etc.Job opportunities exists right after the programme. Jobs for B.Com graduates exists in India as well as in abroad.

After completion of B.Com, you can apply in any organization for the post of accountant. Every company requires accountant to keep track the profit and loss of their company. One must have knowledge in areas like Basic Principles of Accountancy, Cost Accounting and Management Accounting to be an accountant. Other than accountant, there are many career options in this field.</p><br>
following is the list of top colleges for B.com:
<ul><li><a href="http://www.srcc.edu/"target="_blank">SHRI RAM COLLEGE OF COMMERCE</a></li>
<li><a href="http://lsr.edu.in/"target="_blank">LADY SHRI RAM COLLEGE FOR WOMEN</a></li>
<li><a href="https://iifamultimedia.i"target="_blank">IIFA MULTIMEDIA BANGLORE</a></li>
<li><a href="http://www.loyolacollege.edu/"target="_blank">LOYOLA COLLEGE CHENNAI</a></li>
<li><a href="xaviers.edu/main/"target="_blank">St. Xavier's College</a></li>
<li><a href="https://christuniversity.in//"target="_blank">CHRIST UNIVERSITY BANGLORE</a></li>
<li><a href="http://www.hinducollege.ac.in/"target="_blank">HINDU COLEGE UNIVERSITY OF DELHI</a></li>
<li><a href="https://collegedunia.com/college/18892-st-josephs-college-of-commerce-sjcc-bangalore"target="_blank">ST JOSEPH'S COLLEGE OF COMMERCE BANGLORE </a></li></ul>

</li><br><br>


<h3><b>Bachelor of Economics</b></h3>
  <hr>
<p>This is another important and fruitful option available to students after class 12th commerce. Under this course, students get exposure to numerous economic concepts, analytical methods, and studies. All those students having interest in economics may take this course. It is best for those who want to gain specialization in this field. The duration of the course is for 3 years. Students get to study subjects like Agricultural Economics, Macro Economics, Indian Economics, International Trade, etc. The skills developed through studying economics are incredibly versatile and can be employed in a wide range of industries – by the time the course ends an economics graduate will be very comfortable with dealing with numbers as well as experienced in using innovative techniques to overcome problems.

They will have developed an analytical mind alongside a strong economic awareness of the world, skills which can be transferred to numerous industries. A lot of professionals in banking and accountancy hold economics degrees. For any career related to finance, an economics degree is a good foundation to build on.

Roles in data analysis such as an actuary, or an investment analyst, are typical careers for an economics graduate.

For those who want a job directly related to economics, further study is recommended. Fortunately, there are an array of master’s and PhD opportunities and these courses give students a chance to specialise further and conduct detailed research in areas of interest. An economics graduate will have some unique and highly sought after skills and in most cases, employment prospects are good.

</p>
following is the list of top colleges for doing bachelor fo economics
<ul><li><a href="http://lsr.edu.in/"target="_blank">LADY SHRI RAM COLLEGE FOR WOMEN</a></li>
<li><a href="http://www.loyolacollege.edu/"target="_blank">LOYOLA COLLEGE CHENNAI</a></li>
<li><a href="xaviers.edu/main/"target="_blank">St. Xavier's College</a></li>
<li><a href="https://christuniversity.in//"target="_blank">CHRIST UNIVERSITY BANGLORE</a></li>

<li><a href="www.mirandahouse.ac.i"target="_blank">MIRANDA HOUSE</a></li>
<li><a href="www.presidencycollegechennai.ac"target="_blank">PRISIDENCY COLLEGE CHENNAI</a></li>
<li><a href="https://www.mcc.edu.in/"target="_blank">MADRAS CHRISTIAN COLLEGE</a></li>
<li><a href="http://www.hinducollege.ac.in/"target="_blank">HINDU COLEGE UNIVERSITY OF DELHI</a></li>
<li><a href="http://www.hansrajcollege.ac.in/"target="_blank">HANS RAJ COLLEGE NEW DELHI</a></li>


</ul><br><br>
</li>



<h3><b>Bachelor of Business Administration (BBA)</b></h3>
<hr>
<p>BBA is yet another popular option amongst students after their 12th commerce. The course last for 3 years where students gain knowledge about business and its administration. Students are exposed to numerous business aspects and methodologies. This is best for those who are business minded and further want to take their business to higher levels.<br> Better Job Opportunities can be the prime reason for doing BBA. There exist many sectors in which the students get placed. This presents lucrative career options in the world of business and corporate management. It gives an edge over other students due to the practical knowledge a student gets which is a good way to have the option of great career Growth.<br>
Larger Perspective of Business World is another advantage of the course. Students acquire management skills at very early stage .It helps student learn the knowledge of business world and act as a leader to take decisions in business world.<br>
In today's competitive world where everybody wishes to become an entrepreneur, this course helps you think more precisely on different aspects of running a business. It helps in building tactical skills.
Greater challenges are faced during the course and you get 3 year's time period to learn the concepts comprehensively. The course helps develop a holistic approach towards management.<br>
Better pay packages at early stage of life. Person becomes financial independent just after schooling which gives confidence and lets the person develop strategic planning.
It's a short term course as compared to MBA so investment is less compare to MBA and return is high.<br>
During the course of BBA, students study the concepts of marketing, sales, human resource, finance etc. It not only gives bookish knowledge but also provides practical knowledge through projects and practical's.<br>
If a student wishes to do MBA after his BBA degree then there are many advantages as he already had the knowledge of what will be covered in the MBA course, he can grasp things very easily and will have clear idea when choosing specializations.</p>
following is the list of the top colleges for BBA:
<li><a href="http://commerce.nmims.edu/"target="_blank">Anil Surendra Modi School of Commerce - Narsee Monjee Institute of management</a></li>
<li><a href="https://christuniversity.in//"target="_blank">CHRIST UNIVERSITY BANGLORE</a></li>
<li><a href="www.presidencycollegechennai.ac"target="_blank">PRISIDENCY COLLEGE CHENNAI</a></li>
<li><a href="http://www.loyolacollege.edu/">LOYOLA COLLEGE CHENNAI</a></li>
<li><a href="http://www.mountcarmelcollegeblr.co.in/"target="_blank">Mount Carmel College</a></li>
<li><a href="https://kjsac.somaiya.edu/kjsac/"target="_blank">K J Somaiya College of Arts and Commerce (KJSCAC)></a></li>
<li><a href="http://www.amity.edu/asb/Course_Offered.asp"target="_blank">AMITY SCHOOL OF Business</a></li>
<li><a href="https://www.sicsr.ac.in/home/"target="_blank">Symbiosis Institute of Computer Studies and Research</a></li>
<li><a href="http://www.jdbimanagement.org.in/"target="_blank">Department of Management, J.D Birla Institute</a></li>
<li><a href="http://www.srmuniv.ac.in/"target="_blank">SRM Institute of Science and Technology, Chennai - Kattankulathur Campus 17  
SRM Institute of Science and Technology, Chennai - Kattankulathur Campus</a></li>
<li><a href="http://www.ethirajcollege.edu.in/"target="_blank">Ethiraj College for Women (Ethiraj)</a></li>
</ul></li>







</li><br><br>
<h3><b>Bachelor of Laws (LLB)</b></h3>
<hr>
<p>

An LLB, or Bachelor of Laws, is the professional law degree awarded after completing undergraduate education. In most countries, holding an LLB with additional accreditation, allows for the practice of law. LLB programs give students a solid understanding of law, as well as the critical, analytical and strategic thinking skills necessary for the field of law.

Some examples of LLB programs are in law sectors such as business law, European law, international law, and criminal law. Some universities also allow students to develop their own specialized LLB programs specific to their professional interests. LLB programs can usually be completed in 3 or 4 years.<br>

The variety of different LLB programs can be overwhelming - don't let it stop you! Start your search by looking at the most popular LLB and Bachelor of Law programs listed below.</p>
<h4><b>LLB Law</b></h4>
This two-year course is for you if you already have an undergraduate degree in a non-law subject. The course provides you with the opportunity to learn about the law, both in the traditional sense of ‘thinking like a lawyer’ and in the broader sense of law as a social institution.<br>

<h4><b>Bachelor of Laws (Honours) (LLBHons)</b></h4>
The ANU Bachelor of Laws (Honours) is an acknowledged world-class undergraduate degree. With Honours ‘built-in’ from the start of the degree, the ANU LLBHons places an emphasis on developing versatile skills in independent research, analysis and critical thinking, providing you with a competitive edge on graduation, and a solid foundation for postgraduate study.<br>
<h4><b>LLB (Hons) Law with Investigative Journalism</b></h4>
The LLB (Hons) Law with Investigative Journalism with Foundation Year is a 3-year law degree. It is aimed at students who wish to pursue a career in the legal or wider commercial sector and who have an interest in the British media; investigative journalism; and the relationship between the media, law and democracy.<br>
following is the list of top colleges for LLB:
<ul><li><a href="https://www.nls.ac.in/"target="_blank">NATIONAL LAW SCHOOL OF INDIA UNIVERSITY - [NLSIU], BANGALORE</a></li>
<li><a href="lawfaculty.du.ac."target="_blank">FACULTY OF LAW, UNIVERSITY OF DELHI, NEW DELHI</a></li>
<li><a href="https://collegedunia.com/llb-colleges"target="_blank">other top colleges</a></li>


</ul>
</li>



<br><br><h3><b>Chartered Accountancy (CA)</b></h3>
<hr>
<p>is a professional level course which is administered by a professional body The Institute of Chartered Accountants of India. The level of difficulty under this course is much higher as compared to other bachelor courses. After clearing this course a student becomes a professional known as CA which might fetch them higher returns. Students need to study subjects like Taxation, Law, Auditing, Costing etc. The course is divided into different levels. Students need to clear all in order to be called as CA.Chartered Accountants are individuals that earn surprising well in private as well as government sectors. They are professionally trained to minimize losses and multiply gains in a company. The main task of CA is to handle the tax work and help businesses and individuals reduce their tax liability. They have the capability to earn on project basis too. The US Bureau of Labor Statistics has reported according to a survey conducted by them that financial managers are able to work directly for saving institutions as well as commercial banking.

Other duties of a Chartered Accountant involve analysis and research, which further they utilize reports and financial funding.

 

Chartered Accountant can also work independently for own personal clients. Down the line with optimum experience, Chartered Accountants can train other financial aspirants. They can collaborate with the training companies and give lectures and educate other students who wish to make their mark in the financial sector.</p><br>
following is the entrance exam for the CA:
<ul><li><a href="http://icaiexam.icai.org/index1.php"target="_blank">ICAI</a></li></ul>

</li>




<br><br>
<h3><b>Company Secretary (CS)</b></h3>
<hr>
<p>The students who have interest in Law and theoretical subjects can opt for CS as a career option after class 12 commerce. It is also considered as a professional level course which is conducted by The Institute of Company Secretaries of India(ICSI). This course involves different levels like that of CA. By undergoing this course, students understand the functioning and legal compliance relating to companies.the prospects of a company secretary in today’s day and age are limitless if you know how to play to your strengths. There are job opportunities available in the public and private sector domain. You may start off with the position of a junior secretarial officer, but if you play your cards right, you can aspire to become the managing director or even a part of the board of directors of a company. You could also serve as the financial advisor to a big company.

Your expected salary would be between Rs 3 lakh and Rs 16 lakh per annum, depending on your designation and job profile.</p></li>







<br><br>
<h3><b>Cost and Management Accountant (CMA)</b></h3>
<hr>
<p>Cost management in accounting is a form of management accounting that is designed to help business owners predict how much business expenses. The purpose of this form of accounting is to avoid going over budget so that businesses can hold onto as much of their revenues as possible. If you would like to work in management accounting and you are trying to learn more about cost management and planning budgets, read on and find out what you need to know about cost management plans within the over-all business model.<br>
Cost accounting will help businesses determine the costs of products, projects, processes to ensure that financial reports and statements are as accurate as possible. It also helps executives and authorized members of management make the most informed decisions when they are financial planning or deciding on the best long-term moves for the organization.

To see the big picture, the accounting professionals will record the cost of inventory, manufacturing, goods sold, and overhead operations. After this is reported, the expert in cost accounting and management will then analyze the cost behavior so that they are able to see the cost-volume-profit relationships and how it relates to the existing budget, according to Accounting Coach.<br>
Cost accounting was originally created to help manufacturing businesses assess the cost to manufacture products, store them, ship them, and stay profitable. While it was first involved in the manufacturing sector, it now has become an integral part of budget planning within the service industry. The main reason why this approach to accounting helps businesses thrive is because it shows the company where it is earning and losing money.

After evaluating how efficient the company is in using their budget, they can decide if pricing needs to be adjusted to account for high expenditures. In the end, cost management accountants will give data and analysis reports to management that will be used by managers to make decisions that will lead to long-term profits. This is done by using job costing, process costing, direct costing, and activity costing techniques to interpret costs.
</p></li>



<br><br>
<h3><b>Certified Financial Planner (CFP)</b></h3>
<hr>
<p>
Certified Financial Planning is among the fastest growing careers in the world. In India, the international CFP certification is awarded by the Financial Planning Standards Board of India(FPSB India). The CFP certification is rated as a Gold Standard and gets its holder acceptance and recognition across a diverse range of Financial organizations in 22 countries around the world. There are currently over 1,00,000 CFPCM Charters worldwide and around 1200 + CFPs in India. As per current industry estimates, the requirement for financial advisers will be around 50000 in the coming years.<br>

Demand for CFP Certification<br>

CFP Certification: Mandated by the Finance Industry and Regulatory Bodies.<br>

An increasing number of multinational banks such as ICICI Bank, Standard Chartered Bank, American Express Bank and others have made it mandatory for their Relationship Managers to acquire the CFP certification in order to raise current service standards to optimum level. Regulatory bodies like SEBI, IRDA, PFRDA etc. are also gradually educating and encouraging consumers to consult CFPs for their financial needs. Along with this, Charter Members of FPSB India have resolved that they will give first preference to CFPCM Charters during recruitment<br>

CFP Certification: Demand from the consumers<br>

With the spread of the internet, consumers now have access to a wealth of information about financial products. As a result, the consumer is evolving with respect to understanding the benefits and working of these products and services. Unqualified advisors will find it difficult to handle such finance-savvy consumers. Only professionals with appropriate knowledge and skill credentials will be able to serve such customers satisfactorily i.e. Certified Financial Planners.
</p>
</li>
<br><br>
<h3><b>Journalism and Mass Communication</b></h3>
<hr>
<p>Courses are often directed toward recent high school graduates as a way to become familiar with a certain subject. However, some courses focus on returning students or those seeking advancement at work. Courses typically take a few weeks or months to complete.<br>

What is a course in journalism and mass communication? Courses like this often focus on either gathering or dispensing information. Students might learn techniques for research and interviews to gather useful information. Other courses may focus on how to take that information and present it in an understandable way in written, video or audio form. Real-world experience is often included before completion of the course.<br>

In a journalism and mass communication course, you may learn how to retain focus for long periods of time, how to effectively communicate to large groups and how to intuit when a situation might become newsworthy. These skills can help you handle stress and other problems in your daily life.<br>

The cost of a particular course will vary depending on the subject, location and length. Other factors include the school itself and the cost of books or supplies necessary to complete the course.<br>

Completing this course may put you on the track for a career in journalism. Your knowledge of how to gather or present information to mass audiences is useful in news outlets and government positions. If you want to focus on writing, you could be hired by a newspaper or online news outlet. If you want to focus on video, you could look into jobs as a reporter or as part of a journalistic support crew.<br>

Even though physical newspapers are less popular in some countries, journalism still takes place in many forms and is taught at many schools. Search for your program below and contact directly the admission office of the school of your choice by filling in the lead form.</p></li>
<br><br>
<h3><b>Hotel Management Courses</b></h3>
<hr>
<p>The hotel industry is a crucial part of the hospitality industry with a huge growth potential in the near future.The demand for hotel management professionals is already huge and is expected to grow more with the increasing number of hotels being set up in India and all over the world. Apart from its glamour, a career in hotel management has become lucrative and exciting, attracting more and more students to opt for it.

Hotel management jobs include multiple skills like food and beverage service, front office operation,sales and marketing, accounting etc. Many government colleges and private institutes in India offer certificate, diploma or degree courses in hotel management</p>
</li>
<br><br><h3><b>Bachelor of Statistics</b></h3>
<hr>
<p>Bachelor of Science in Statistics or B.Sc. Statistics is a 3-year undergraduate course in statistics, probability and permutations. An integral factor for being eligible for this course is that the candidate must havecompleted 10+2and passed HSC Examination with subjects like Physics, Chemistry and Mathematics with a minimum of 50% marks, from a recognised school in India.<br>

B.Sc Statistics course is often clubbed with Computer Science and Mathematics and hence students may find this course being available as B.Sc. in CSM; Computer, Statistics and Mathematics. Admission to the program is based on marks scored in 10+2 and/or personal interview by colleges.<br>

The average annual tuition fee for the course ranges between INR 1.5 Lacs to 2.5 Lacs.<br>

B.Sc. Statistics is a course through which students find job opportunities in sectors like actuarial sciences, banking, financial services, accounting and financing, academic institutions etc. Within these, professionals can find job profiles like that of a Financial Analyst, Data Analyst, Financial Accountant, Lecturer/ Professor etc.<br>

A fresh graduate of this course can expect an average salary of INR 1.5 Lacs INR to 2.5 Lacs depending on the job profile and a particular company. But, the salary would only increase with experience and more important positions within the company/organization..</p>
following is the list of top colleges for doing bachelor oif statistics:
<ul><li><a href="http://www.loyolacollege.edu/"target="_blank">LOYOLA COLLEGE CHENNAI</a></li>
<li><a href="xaviers.edu/main/"target="_blank">St. Xavier's College</a></li>
<li><a href="https://christuniversity.in//"target="_blank">CHRIST UNIVERSITY BANGLORE</a></li>
<li><a href="http://www.mountcarmelcollegeblr.co.in/"target="_blank">Mount Carmel College</a></li>

</ul>
</li>
<br><br>
<h3><b>Diploma in Digital Marketing</b></h3>
<hr>
<p>Digital Marketing is one of the best career options after 12th commerce, today! Digital marketing is different from traditional marketing where one can promote brand, services or products sitting on a chair through the digital mediums. In the today’s scenario, it is one of the fastest growing fields in which thousands of multiple career opportunities are creating every second. Statistics show that digital marketing managers are getting 16% higher incentives in comparison to others and many of market researchers have claimed that by the end of 2020 it will generate more than 20 lakh job opportunities. today there are several online courses availaible for doing diploma in digital marketing one of them include<br>
<a href="http://www.theleftbank.edu.au/digital-marketing-courses/diploma-of-business/"target="_blank">the left bank</a></p></li>
</ul></div>

<?php 
readfile('comp/footer.html');
?>
</body>
</html>
target="_blank"