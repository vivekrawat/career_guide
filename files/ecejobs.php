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
      background: url(https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8b209b87443cca9d7d140ec0dd49fe21&auto=format&fit=crop&w=1350&q=80) no-repeat center; 
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
  <h1><b>jobs</b></h1>
  <div class="container">
   <p><b>There are Plenty of Career Options in ECE after B.Tech. Electronics Graduates can go for any one sector. There are many sectors which provides them opportunity to enhance their skills.</b></p>
</div><br><br>
</center>
<div class="container">
<ul><h3><b>Networking Sector:</b></h3>
  <hr>
<p><br><br>Electronics Engineers can go in Networking sectors Job. Some big companies like Cisco and other provides this Opportunity. They can get some handsome amount of wages too.The basis of how a company uses and implements computer networking technology arises from various industry factors. From how computer networking companies market their products and services, to how the regulation of said product occurs, is part of this overview. If your business were to use these services, it's important to know how these factors affect pricing, construction and dissemination of networking technology.<br>

The governing of the computer networking technology industry is somewhat transitional and this is on purpose. With technology there needs to be some flexibility for the rapid advancement of new ideas and inventions. The marketplace for computer networking services is somewhat more staid and the transitions from one technology to another take more time to institute. 


</p><br>
<h5>list of networking sector companies</h5>
<ul>
<li>Cisco</li>
<li>Juniper</li>
<li>Aruba</li>
<li>Arista networks</li>
<li>Hp</li>
<li>Dell</li>
<li>IBM</li>
<li>AT&T</li>
<li>microland limited</li>
<li>mindtree</li></ul>



<br><br><h3><b>IT Sector</b></h3>
  





  <hr>








<p>India's IT Services industry was born in Mumbai in 1967 with the establishment of the Tata Group in partnership with Burroughs.The first software export zone, SEEPZ – the precursor to the modern-day IT park – was established in Mumbai in 1973. More than 80 percent of the country's software exports were from SEEPZ in the 1980s.

The Indian economy underwent major economic reforms in 1991, leading to a new era of globalization and international economic integration, and annual economic growth of over 6% from 1993–2002. The new administration under Sri Atal Bihari Vajpayee (Posthumus) (who was Prime Minister from 1998–2004) placed the development of Information Technology among its top five priorities and formed the Indian National Task Force on Information Technology and Software Development.

Wolcott & Goodman (2003) report on the role of the Indian National Task Force on Information Technology and Software Development:

Within 90 days of its establishment, the Task Force produced an extensive background report on the state of technology in India and an IT Action Plan with 108 recommendations. The Task Force could act quickly because it built upon the experience and frustrations of state governments, central government agencies, universities, and the software industry. Much of what it proposed was also consistent with the thinking and recommendanotions of international bodies like the World Trade Organization (WTO), International Telecommunications Union (ITU), and World Bank. In addition, the Task Force incorporated the experiences of Singapore and other nations, which implemented similar programs. It was less a task of invention than of sparking action on a consensus that had already evolved within the networking community and government.
</p><br>
<h5><b>somme IT sector companies are</b></h5>
<ul><li>Tata Consultancy Services</li>
<li>Infosys</li>
<li>Wipro</li>
<li>HCL Technologies</li>
<li>Tech Mahindra</li>
<li>Oracle Financial Services Software</li>
<li>Larsen & Toubro Infotech</li>
<li>Mphasis</li>
<li>Mindtree</li>
<li>Hexaware Technologies</li>
</ul>
<br><br>












<h3><b>Core Electronics Sector</b></h3>
  <hr>
<p>

 This is definitely on the first priority for the students. Working in the core Industry is somewhat the dream of many students so that they can apply their knowledge. But the worst part is that its not a cake walk to get a job in the core industry easily. Starting salary might also be low.
</p>
<ul><li>Ashok Leyland</li>
<li>BEL</li>
<li>BHEL</li>
<li>Coal India</li>
<li>Essar</li>
<li>Godrej & Boyce</li>
<li>HPCL</li>
<li>IOCL</li>
<li>John Deere</li>
<li>L&T Construction</li>
<li>Mahindra & Mahindra</li>
</ul>







<br><br>
<h3><b>Marketing Sector Jobs: </b></h3>
<br>
<p>

Indian consumer durables market is broadly segregated into urban and rural markets, and is attracting marketers from across the world. The sector comprises of a huge middle class, relatively large affluent class and a small economically disadvantaged class, with spending anticipated to more than double by 2025.<br>

Global corporations view India as one of the key markets from where future growth is likely to emerge. The growth in India’s consumer market would be primarily driven by a favourable population composition and increasing disposable incomes.<br>

Per capita GDP of India is expected to reach US$ 3,273.85 in 2023 from US$ 1,983 in 2012. The maximum consumer spending is likely to occur in food, housing, consumer durables, and transport and communication sectors.<br>
</p>
<ul><li>Vodafone</li>
<li>Bharti Airtel</li>
<li>Hindustan Unilever</li>
<li>Cadbury</li>
<li>Coca-Cola India</li>
<li>ITC</li>
<li>Sony India</li>
<li>Nokia</li>
<li>Hero MotoCorp</li></ul>










<br><br>
<h3><b>RESEARCH ORIENTED JOBS</b></h3>
  <hr>
<p>Choosing a career path (or changing one) is, for most of us, a confusing and anxiety-riddled experience. Many will tell you to "follow your passion" or "do what you love," but as Cal Newport argues in So Good They Can't Ignore You, this is not very useful advice. When I graduated from college, I liked lots of things. But love? Passion? That would have been seriously overstating it.<br>

We all want to choose a career that will make us happy, but how can we know what that will be? Research suggests that human beings are remarkably bad at predicting how they will feel when doing something in the future. It's not hard to find someone who started out thinking that they would love their chosen profession, only to wind up hating it. In fairness, how are you supposed to know if you will be happy as an investment banker, or an artist, or a professor, if you haven't actually done any of these things yet? Who has ever, in the history of mankind, taken a job and had it turn out exactly as they imagined it would?<br>

So if passion and expected happiness can't be your guides, what can be? Well, you can begin by choosing a career that fits well with your skills and values. Since you actually have some sense of what those are (hopefully), this is a good starting place.<br>

</p>
<ul><li>DRDO</li>
<li>BEL</li>
<li>ISRO</li>
<li>BARC</li>
<li>NPCIL</li>
</ul>






<br><br>
<h3><b>OPPOURTUNITIES IN PSUs</b></h3>
<hr>
<p>
A state-owned enterprise in India is called a public sector undertaking (PSU) or a public sector enterprise. These companies are owned by the union government of India, or one of the many state or territorial governments, or both. The company stock needs to be majority-owned by the government to be a PSU. PSUs may be classified as central public sector enterprises (CPSEs) or state level public enterprises (SLPEs). In 1951 there were just five enterprises in the public sector in India, but in March 1991 this had increased to 246.

<br>
Many private have been awarded additional financial autonomy. These companies are "public sector companies that have comparative advantages", giving them greater autonomy to compete in the global market so as to "support [them] in their drive to become global giants". Financial autonomy was initially awarded to nine PSUs as Navratna status in 1997. Originally, the term Navaratna meant a talisman composed of nine precious gems. Later, this term was adopted in the courts of Gupta emperor Vikramaditya and Mughal emperor Akbar, as the collective name for nine extraordinary courtiers at their respective courts.

In 2010, the government established the higher Maharatna category, which raises a company's investment ceiling from Rs. 1,000 crore to Rs. 5,000 crore. The Maharatna firms can now decide on investments of up to 15 per cent of their net worth in a project while the Navaratna companies could invest up to Rs 1,000 crore without explicit government approval. Two categories of Miniratnas afford less extensive financial autonomy.

 </p>
<h5>Explore more</h5>
<ul><li>BHEL</li>
<li>IOCL</li>
<li>ONGC</li>
<li>HPCL</li>
<li>NTPC</li>
<li>NLC</li>

 
</ul><br><br>

 
 <br><br>
<h3><b>TEACHING JOBS</b></h3>
<hr>
<p>Professors conduct original research and commonly teach undergraduate, professional and postgraduate courses in their fields of expertise. In universities with graduate schools, professors may mentor and supervise graduate students conducting research for a thesis or dissertation. In many universities, 'full professors' take on senior managerial roles, leading departments, research teams and institutes, and filling roles such as president, principal or vice-chancellor.[5] The role of professor may be more public facing than that of more junior staff, and professors are expected to be national or international leaders in their field of expertise.
 </p>
 <br><br>




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
