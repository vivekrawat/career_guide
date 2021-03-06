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
	<title>Bio HIGHER STUDIES</title>
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
      background: url(https://www.macleans.ca/wp-content/uploads/2016/10/Best-Biology-Universities-in-Canada-2017-Ranking-FB.jpg) no-repeat center; 
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
.container{width:90%;
	
	}
  .containe
  {
    width: 70;
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
   <p><b>There are multiple options for biology students for their under graduation. However, that depends on your marks, entrance tests, college options, course type, country where you want to pursue and also financial preferences.

Good news is that there’s immense scope for biology students all over the globe.</b></p>
</div><br><br>
</center>
<div class="container">
<ul><h3><b>M.B.B.S (BACHELOR OF MEDICINE AND BACHELOR OF SURGERY)</b></h3>
  <hr>
<p>The most sought after and popular course after one completes 12th science, biology. MBBS is for those, who want to become a Doctor. I guess almost all of you know that!

But the problem with doing MBBS is that there is heavy competition involved in the admission process. The Government College seats, the most sought after one, is taken up by meritorious students and the ones who are eligible for reservations.

The admission is based on the marks scored in 12th science and entrance examination. If you want to get into a private/Government Medical College, you must have scored good scores in those exams.

Further, don’t think that just doing MBBS would suffice. To gain value and knowledge, one must also be willing to do PG (Post Graduation) course also, which again is highly competitive!

And after becoming a Doctor, it won’t be just about building a lucrative career and money! You should be ready to serve, ready to sacrifice many personal pleasures etc. The course duration is five and a half years.</p><br>
<h5><b>Following are the entrance exams for doing M.B.B.S in INDIA:</b></h5>
<ul><li><a href="https://www.aiimsexams.org/">A.I.I.M.S(All india institute of medical sciences)</a></li>
<li><a href="https://cbseneet.nic.in/cbseneet/Welcome.aspx">NEET( National Eligibility Cum Entrance Test)</a></li>
<li><a href="http://www.afmc.nic.in/Courses/MBBScourse.html">AFMC(Armed Forces Medical College exam)</a></li>
<li><a href="https://www.aimseducation.edu/admission-requirements">(Amrita Institute of  Medical Sciences)</a></li>
<li><a href="https://admission.aglasem.com/amu-mbbs-bds/">AMU Medical Entrance Exam</a></li>
</ul>
<br><br><h3><b>BDS (BACHELOR OF DENTAL SURGERY)</b></h3>
  <hr>
<p>After doing this course, you can become a Dentist. Yes, you will be called a Doctor!

Like MBBS, in order to succeed and have a good career in this field, you one must be willing to do PG course also. The duration of the course is 5 years.

Compared to an MBBS Doctor, a BDSDoctor will have a bit more time to relax! The schedule won’t be as hectic as an MBBS Doctor. But this again depends on various factors like the ‘popularity’ you achieve, your work rate, skills etc. A popular dentist will have more appointments and thus have a busy time</p>
<br>
<h5><b>Following are the entrances for doing BDS in india:</b></h5>
<ul><li><a href="http://www.winentrance.com/medical_entrance_exam/pims/">PIMS - Pravara Institute of Medical Sciences</a></li>
<li><a href="https://targetstudy.com/exams/mgdch-jet/">MGDCH JET - Mahatma Gandhi Dental College and Hospital - Joint Entrance Test</a></li>
<li><a href="https://targetstudy.com/exams/mgdch-jet/">Delhi University Medical/Dental Entrance Test (DUMET)</a></li>
<li><a href="https://cbseneet.nic.in/cbseneet/Welcome.aspx">NEET( National Eligibility Cum Entrance Test)</a></li>
<li><a href="https://www.jbigdeal.in/mp-dmat/">MP DMAT - All India Dental & Medical Admission Test - Madhya Pradesh</a></li>
</ul></li>
<br><br>
<h3><b>BAMS (BACHELOR OF AYURVEDA MEDICINE AND SURGERY)</b></h3>
  <hr>
<p>Again, by doing this course also, you can become a Doctor. But an Ayurvedic Doctor! Ayurveda is a field, which is thriving even now. It started to grow a while back, with the boost in tourism industry.

Thanks to a booming tourism industry, Ayurveda Tourism packages have become quite popular among tourists. Many chains of Ayurvedic hospitals are raking in huge profits during the tourist season.

With Ayurveda and its benefit of having no side effects getting well known, more and more people are willing to make use of it! In India, more people are now ready to visit Ayurvedic clinics to solve their health problems.

Not only in India, it has also earned a good name abroad also. Opening up a good Ayurvedic clinic abroad isn’t a bad idea! The course duration is five and a half years</p>
<ul><li><a href="https://cbseneet.nic.in/cbseneet/Welcome.aspx">NEET( National Eligibility Cum Entrance Test)</a></li>
<a href="http://www.aiapget.com/">All India AYUSH Post Graduate Entrance Test   (AIAPGET  )</a> </li>
<li>students can also apply for BAMS by  giving vaeious  medical state entrance exams </li></ul>
</li>
<br><br>
<h3><b>BHMS (BACHELOR OF HOMEOPATHIC MEDICINE AND SURGERY)</b></h3>
<br>
<p>BHMS stands for Bachelor of Homeopathic Medicine and Surgery. It is a 4½ years long course. After completing the course, students have to do an internship lasting a period of 1 year. Thus, in total, this course takes 5½ years to complete. BHMS course focuses on the principles of Homeopathic medicine system.

Students unable to secure admission in courses like MBBS, BDS and BAMS may take up BHMS course. After completing this course, successful Graduates will get the tag of Doctor.</p>
<ul><li><a href="https://cbseneet.nic.in/cbseneet/Welcome.aspx">NEET( National Eligibility Cum Entrance Test)</a></li>
<li><a href="http://www.aiapget.com/">All India AYUSH Post Graduate Entrance Test   (AIAPGET  )</a> </li>
<li><a href="https://www.successcds.net/MedicalEntranceExam/list-of-homeopathy-entrance-exams-for-pg-courses.html">Also there are other state entrances fopr BHMS the completre list is here</a></li>
</ul></li>
<br><br>
<h3><b>PHARAMACY</b></h3>
  <hr>
<p>You may go for B Pharm Degree, followed by an M Pharmacy Degree and land a good job in Pharmaceuticals company or as a lecturer in Pharmacy colleges.

The course duration of B Pharm is 4 years and that of M Pharm is 2 years. So, doing both of them will take up 6 years to complete.
</p>
<ul><li><a href="https://pharmacy.careers360.com/exams">LIST OF  ENTRANCES EXAMS FOR B PHARMA  in india</a></li>
</ul>
</li><br><br>
<h3><b>PHARMD</b></h3>
<hr>
<p>PharmD is a degree made specially to work as a pharmacist and was made keeping patients in mind. Very few Indian students pursue Pharmacy to become a pharmacist and tend to go to industry/academia instead.

After a PharmD, you can work as a clinical pharmacist, preferably at a hospital. Or, you can go into clinical research, pharmacovigilance, hosptial administration, regulatory affairs, etc.

But, that's it. If you wish to go into the industry in preclinical R&D or work in the management, then you don't need a PharmD degree and should go for a B.Pharm, M.Pharm/MBA. If you think that being a 'Doctor in Pharmacy' would make you more eligible for jobs in the synthesis of drugs, formulation of medications, or PK/PD testing than a 'Master in Pharmacy </p>

<ul><li><a href="https://pharmacy.careers360.com/exams">list of entrances for pharmd</a></li>
</ul></li><br><br>
<h3><b>BUMS (Bachelor of Unani Medicine and Surgery)</b></h3>
<hr>
<p>The Unani medicine system is one of the ancient medication system adopted by the South-Asia and Middle-East countries of the world. This system has originated from the Greek by the great physician “Hippocrates”. It is also known as the “Hikmat” or Unani Tibb Medicine. It has the 6000 years back history.BUMS

This system refers to the Roman medication system developed by the Roman physician “Galen”. In the middle age era and by the development of this system, the Arabic and Persian physician have been adopted and flagged this system.

BUMS (Bachelor of Unani Medicine and Surgery) is an undergraduate degree programme in the field of Unani medicine and surgery. This degree covers the medical knowledge of the Unani system. To pursue and owe this degree is quite enough to become a doctor (Hakim) in the Unani medical field</p>
<ul><li><a href="https://cbseneet.nic.in/cbseneet/Welcome.aspx">NEET( National Eligibility Cum Entrance Test)</a></li></ul>
</li>
<br><br>
<h3><b>Veterinary (B.V.Sc)</b></h3>
<hr>
<p>
 A veterinarian is a medical professional, who provides animals with medical treatment. There are different types of veterinarians. Some work with small animals and some with large farm animals, or even wild animals. They diagnose animal diseases and treat sick and injured animals. They advise owners on proper care of their pets and livestock. They diagnose, treat, and research medical conditions and diseases of pets, livestock, and other animals.
 </p><ul><li><a href="https://cbseneet.nic.in/cbseneet/Welcome.aspx">NEET( National Eligibility Cum Entrance Test)</a></li></ul></li>
 <br><br>
 <h3><b>BPTH(BACHELOR OF PHYSIOTHERAPY)</b></h3>
 <hr>
 <p>Physiotherapist helps patient with physical problems caused by illness, injury or aging. They work at different locations from a hospital ward to private clinics. They even work with mental health patients. Your job is to rehabilitate ill and injured patients. Patients include children, the elderly, stroke patients and people with sports injuries</p>
 <ul><li><a href="https://cbseneet.nic.in/cbseneet/Welcome.aspx">NEET( National Eligibility Cum Entrance Test)</a></li></ul>
 </li>
 <br><br>
 <h3><b>SOME ALLIED MEDICINE COURSES INCLUDE</b></h3>
 <hr>
 <br><ul>
 












 <li><h4>Optometry (B.Optom.)</h4>
 Optometry is a fast growing healthcare profession that is concerned with the eyes as well as vision & visual systems processing in humans. They specialized in treating & diagnosing visual problems and are trained to prescribe and fit lenses to improve vision. With increasing usage of technology and visual media, the demand for optometrists is expected to increase manifold in the coming years, making it a lucrative career option. You can work in shops/ organizations, hospitals or even work as a consultant. You can learn more about a career in optometry here:<br><a href="https://www.mindler.com/careerlibrary/Allied-Medicine/Optometry">opometry</a></li>
<li><h4>Public Health Administration</h4>Public Health Administrators is an area of administration which emphasis on health promotions and disease prevention. The job profile relates to management, leadership as well as administration of hospitals, health care & public health systems. They work with hospitals, government organizations and even not-for-profit organizations. You can opt for graduation in medical/ allied medicine field and then a degree in Masters in Public Health (MPH) is required. You can learn more about a career in PHA here:<br>
<a href= "https://www.mindler.com/careerlibrary/Allied-Medicine/Public-Health-Administration">public health adinistration</a></li>
<li><h4>
Occupational therapy</h4> Occupational therapist design some purposeful activity or interventions to promote health, prevent injury or disability. They work with clients on a one-to-one basis and they design treatment programmers to suit each person's needs and lifestyle. The work could include programs like teaching an older patient recovering from a stroke how to dress themselves, encouraging someone suffering with depression to take up a hobby or activity which they enjoyed earlier, helping clients adjust to permanent disabilities etc. Social service department, hospitals, special schools, etc. are some of the places where you can work. You can learn more about a career in occupational Therapy here:<br>
<a href="https://www.mindler.com/careerlibrary/Allied-Medicine/Occupational-Therapist">occupational therapy</a></li>
<li><h4>
 clinical Research</h4>Clinical research scientists conduct research and investigations of diseases and conditions to determine accurate diagnoses and effective treatments. They work in a variety of employment settings, including hospitals, universities and pharmaceutical labs. You can choose the area of your specialization at master’s level. You can learn more about a career in clinical research here:<br>
 <a href="https://www.mindler.com/careerlibrary/Allied-Medicine/Clinical-Research">clinical reasearch</a></li>
<li><h4> 
Radiology</h4>They diagnose and treat diseases, injuries etc. They use medical imaging techniques, such as x-rays, computed tomography (CT), magnetic resonance imaging (MRI), nuclear medicine, positron emission tomography (PET) and ultrasound. You can learn more about a career in Radiology here: https://www.mindler.com/careerli...
Audiology: It is the science of hearing, balance and related disorders. Audiologists use advanced technology and procedures to diagnose and treat a patient's hearing and balance problems. Clinical audiologists work in a variety of settings. They can specialize in pediatrics, geriatrics, balance, cochlear implants, hearing aids, tinnitus and auditory processing, among other issues. You can learn more about a career in Audiology here:<br><a href="https://www.mindler.com/careerlibrary/Allied-Medicine/Audiologist">radiology</a></li>
</li></ul></li>
<br><br><br>
<h3><b>SOME OTHER OPTIONS OTHER THAN MEDICINE</b></h3>
<hr>









<ul>
<li><h4>
Botany</h4> It is a branch of biology that involves the study of plants, their structure, processes, growths etc. Those in the field of Botany conduct research and observation to discover new species, study the interactions of plants with different organisms in their environment, genetic formation of plants etc.With a degree in Botany, you can work in landscape industries, natural resource centers, environmental consultancies, research, teacher/professor etc. You can learn more about a career in Botany here: https://www.mindler.com/careerlibrary/Life-Science-Environment/Botany
Zoology: This field involves the study of the animal kingdom. Zoologists analyze the structure, life processes, physiology, classification and interactions of different species in detail. With a degree in Zoology, you can find work as a researcher, animal breeder, wildlife rehabilitator, wildlife biologist, teacher/professor etc. You can learn more about a career in Zoology here:<br><a href="https://www.mindler.com/careerlibrary/Life-Science-Environment/Zoology">botany</a></li>

<li><h4>Microbiology</h4> It is the study of microscopic organisms and their interactions with humans, animals, plants and other organisms in the environment.
Environmental Science: Environmental science is the study of the physical, chemical and biological environment components of the environment and their interactions. Environmental scientists investigate environmental issues, the effects of humans on environment, and how these effects can be dealt with. Environmental scientists are hired for research and other roles by various industries such as mines, water treatment plants, fertilizer plants, etc. and different government departments and agencies such as forestry, pollution control board, agriculture etc. You can learn more about a career in Environmental Science here:<br><a href="https://www.mindler.com/careerlibrary/Life-Science-Environment/Environmental-Science">microbiology</a></li>

<li><h4>Physiology</h4>It is the study of bodily functions and mechanisms of living organisms, especially humans. Physiologists generally study our organs, muscles and cells interact and work together to keep the body functioning. Professional opportunities in this field include working as a clinical exercise physiologist, biomedical scientist, sports physiologist, researcher, teacher/professor etc. You can learn more about a career in Physiology here:<br><a href="https://www.mindler.com/careerlibrary/Life-Science-Environment/Physiology">phsiology</a></li>

<li><h4>Genetics</h4>It is a field involving the study of genes, genetic variations and heredity of living organisms. Professionals in this field study genetic diseases, anomalies, etc. Jobs related to genetics include immunologist, cytogenecist, forensic DNA analyst, medical technologist, geneticist, pharmacologist, clinical research associate, research scientist etc. You can learn more about a career in Genetics here:<br><a href="https://www.mindler.com/careerlibrary/Life-Science-Environment/Genetics">genetics</a></li>

<li><h4>marine Biology</h4>It is a field of knowledge involving the study of marine organisms, their behaviors and interactions with the environment. You can find work as an aqua culturist, fisheries biologist, environmental consultant, researcher etc. Another related career to this is Fishery Science. You can learn more about a career in Marine Biology here: https://www.mindler.com/careerlibrary/Life-Science-Environment/Marine-Biology. You can also read about Fishery Science here:
<br><a href="https://www.mindler.com/careerlibrary/Life-Science-Environment/Fishery-Science">marine biology</a></li>

<li><h4>Biophysics</h4> This field combines the principles of Physics with those of Biology. Biophysicists study organisms at the cellular and molecular level using the methods and approaches of Physics. Jobs in this field include becoming a Nuclear Medicine Physicist, Clinical Biophysicist, Researcher, Professor etc. You can learn more about a career in Biophysics here:<br>
 <a href="https://www.mindler.com/careerlibrary/Life-Science-Environment/Biophysics">biophysics</a></li>
 <li><h4>
Biotechnology</h4> It is a field that combines biology and technology. It utilizes living organisms such as cells and bacteria in the industrial process. You can go into pharmaceutical, health care, genetics, or clinical research. Many government and private industries in the fields of agriculture, animal husbandry, nutrition, cosmetics, marine biotechnology, environmental conservation and waste management etc. hire candidates with degrees in biotechnology. If research is not your calling, then you can also apply for many other positions such as sales and marketing, quality control, administration, laboratory assistants and field technician.</li>


<li><h4>Biomedical Science</h4> It is an applied science that combines different aspects of different disciplines to develop interventions, technology and knowledge in the domain of health care. Biomedical scientists work to study how cells, organs, and processes function in the human body, and thus their work is applied to the understanding and treatment of diseases. The knowledge and skills gained in this career allow you to work as a biomedical scientist, clinical researcher, forensic scientist, toxicologist and other healthcare professions. It is a relatively new yet fast expanding field in India.</li>
<li><h4>
Food and Agriculture</h4> This is a wide domain consisting of various fields related to the understanding of biological and chemical processes that affect plants, dairy, and the production of food. It includes fields such as food science & technology, agronomy, horticulture, dairy technology, agricultural engineering etc. The career paths and opportunities for each of these careers are very vast. You can learn more about the different fields in Food and Agriculture here:<br>
<a href="https://www.mindler.com/careerlibrary/Food-Agriculture">food and agriclture</a></li>
</ul>
</li>
</ul>
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