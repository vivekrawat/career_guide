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
<center>
  <h1><b>Self-Learning</b></h1>
  <div class="container">
   <p><b>If you are a student of student of computer science stream/ information technology stream then are certain things that you need to do other than your academics to get a good placement or have 
   your dream job</b></p>
   <p><b>Following are the additional things that you need to do in addition to your academics:
   </b></p>
</div>
</center>
   
</div>
<br>
<br>

   <div class="container">
   <h3><b> WEB DEVELOPMENT</b></h3>
   <hr>
   <p>Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps) electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. Among web professionals, "web development" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems (CMS). These CMS can be made from scratch, proprietary or open source. In broad terms the CMS acts as middleware between the database and the user through the browser. A principle benefit of a CMS is that it allows non-technical people to make changes to their web site without having technical knowledge.

For larger organizations and businesses, web development teams can consist of hundreds of people (web developers) and follow standard methods like Agile methodologies while developing websites. Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer or information systems technician. Web development may be a collaborative effort between departments rather than the domain of a designated department. There are three kinds of web developer specialization: front-end developer, back-end developer, and full-stack developer. Front-end developers deal with the layout and visuals of a website, while back-end developers deal with the functionality of a website. Back-end developers will program in the functions of a website that will collect data.</p><br>
web development comprises of basicall 2 parts:

	    <h3><b>FRONT END</b></h3>
	    <hr>
	    <br>
		Front-end web development is the practice of converting data to graphical interface for user to view and interact with data through digital interaction using HTML, CSS and JavaScript.<br>following are the languages included in the front end<br>

			<h4><b><li>Hyper Text Markup Language (HTML)</b></h4>
		Hyper Text Markup Language (HTML) is the backbone of any website development process, without which a web page doesn't exist. Hypertext means that text has links, termed hyperlinks, embedded in it. 		When a user clicks on a word or a phrase that has a hyperlink, it will bring another web-page. A markup language indicates text can be turned into images, tables, links, and other representations. It is the HTML code that provides an overall framework of how the site will look. HTML was developed by Tim Berners-Lee. The latest version of HTML is called HTML5 and was published on October 28, 2014 by the W3 recommendation. This version contains new and efficient ways of handling elements such as video and audio files.
		<br>following are the places from where you can learn :<br>
			<ul><li><a href="https://www.w3schools.com/html/">https://www.w3schools.com/html/</a></li>
			<li><a href="https://www.codecademy.com/learn/learn-html">https://www.codecademy.com/learn/learn-html</a></li>
			<li><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML">https://developer.mozilla.org/en-US/docs/Learn/HTML</a></li>
			<li><a href="https://www.learn-html.org/">https://www.learn-html.org/</a></li>
			<li><a href="https://www.udemy.com/html-and-css-for-beginners-crash-course-learn-fast-easy/">https://www.udemy.com/html-and-css-for-beginners-crash-course-learn-fast-easy/</a></li>
			</ul>

		</li>
	


			<h4><b><li>Cascading Style Sheets (CSS)</b></h4>

			Cascading Style Sheets (CSS) controls the presentation aspect of the site and allows your site to have its own unique look. It does this by maintaining style sheets which sit on top of other style rules and are triggered based on other inputs, such as device screen size and resolution.
			<br>following are the places from where you can learn :<br>
			<ul><li><a href="https://www.udemy.com/html-and-css-for-beginners-crash-course-learn-fast-easy/">https://www.udemy.com/html-and-css-for-beginners-crash-course-learn-fast-easy/</a></li>
			<li><a href="https://www.w3schools.com/css/">https://www.w3schools.com/css/</a></li>
			<li><a href="https://www.codecademy.com/learn/learn-css">https://www.codecademy.com/learn/learn-css</a></li>
			<li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS">https://developer.mozilla.org/en-US/docs/Learn/CSS</a></li>
			<li><a href="http://learnlayout.com/">http://learnlayout.com/</a></li>
			<li><a href="https://learn.shayhowe.com/html-css/">https://learn.shayhowe.com/html-css/</a></li>
			</ul>
			</li>

		
			<h4><b><li>JavaScript</b></h4>
			JavaScript is an event-based imperative programming language (as opposed to HTML's declarative language model) that is used to transform a static HTML page into a dynamic interface. JavaScript code can use the Document Object Model (DOM), provided by the HTML standard, to manipulate a web page in response to events, like user input.

			Using a technique called AJAX, JavaScript code can also actively retrieve content from the web (independent of the original HTML page retrieval), and also react to server-side events as well, adding a truly dynamic nature to the web page experience.
			<br>following are the places from where you can learn :<br>
			<ul><li><a href="https://www.codecademy.com/learn/learn-javascript">https://www.codecademy.com/learn/learn-javascript</a></li>
			<li><a href="https://www.learn-js.org/">https://www.learn-js.org/</a></li>
			<li><a href="https://www.w3schools.com/js/">https://www.w3schools.com/js/</a></li>
			<li><a href="https://learnjavascript.today/">https://learnjavascript.today/</a></li>
			<li><a href="https://www.udemy.com/learn-javascript-course/">https://www.udemy.com/learn-javascript-course/</a></li>
			</ul>
			</li>

			<h4><b><li>WebAssembly</b></h4>
			WebAssembly, supported by all the major browsers (i.e. from the major vendors Google, Apple, Mozilla and Microsoft), is the only alternative to JavaScript for running code in web browsers (without the help of plug-ins, such as Flash, Java or Silverlight; all being discontinued, as browsers are dropping plug-in support). Prior to its adoption, there was asm.js (a subset of JavaScript; and thus strictly works in all browsers), that's also used as a compiler target with efficient support in browsers such as Internet Explorer 11; and for such browsers that do not support WebAssembly directly, it can be compiled to asm.js and those browsers supported that way. Generally speaking programmers do not program in WebAssembly (or asm.js) directly, but use languages such as Rust, C or C++ or in theory any language, that compile to it.
			<br>following are the places from where you can learn :<br>
			<ul><li><a href="https://labnotes.panderalabs.com/learning-how-to-learn-webassembly-7743663ed4d0">https://labnotes.panderalabs.com/learning-how-to-learn-webassembly-7743663ed4d0</a></li>
			<li><a href="https://webassembly.org/">https://webassembly.org/</a></li>
			<li><a href="https://codelabs.developers.google.com/codelabs/web-assembly-intro/index.html?index=..%2F..%2Findex">https://codelabs.developers.google.com/codelabs/web-assembly-intro/index.html?index=..%2F..%2Findex</a></li>
			<li><a href="https://hackr.io/tutorials/learn-webassembly">https://hackr.io/tutorials/learn-webassembly</a></li>
			</ul></li>
		</ul></li></ul>
		<h3><b><li>BACKEND</b></h3>
		The backend (or “server-side”) is the portion of the website you don’t see. It’s responsible for storing and organizing data, and ensuring everything on the client-side actually works. The backend communicates with the front-end, sending and receiving information to be displayed as a web page. Whenever you fill out a contact form, type in a web address, or make a purchase (any user interaction on the client-side), your browser sends a request to the server-side, which returns information in the form of frontend code that the browser can interpret and display.

		Your new site will need to have additional backend components to make it a dynamic web application — a website whose content can change based on what is in its database , and that can be modified by user input. This is distinct from a static website, which doesn’t require a database because its content generally stays the same.
		<br>following are the programming languages which are included in the backend:<br>
		<ul>

			<h4><b><lI>PHP: Hypertext Preprocessor</b></h4>  is a server-side scripting language designed for Web development, but also used as a general-purpose programming language. It was originally created by Rasmus Lerdorf in 1994,[5] the PHP reference implementation is now produced by The PHP Group.[6] PHP originally stood for Personal Home Page,[5] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.

			PHP code may be embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in the web server or as a Common Gateway Interface (CGI) executable. The web server combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page. PHP code may also be executed with a command-line interface (CLI) and can be used to implement standalone graphical applications.

			The standard PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge.
			<br>following are the places from where you can learn :<br>
			<ul><li><a href="https://www.learn-php.org/">https://www.learn-php.org/</a></li>
			<li><a href="https://www.w3schools.com/php/">https://www.w3schools.com/php/</a></li>
			<li><a href="https://hackr.io/tutorials/learn-php">https://hackr.io/tutorials/learn-php</a></li>
			<li><a href="https://www.codecademy.com/catalog?composer_curriculum_redirect=php">https://www.codecademy.com/catalog?composer_curriculum_redirect=php</a></li>
			<li><a href="https://www.tutorialspoint.com/php/">https://www.tutorialspoint.com/php/</a></li>
			</ul>
			</li>
		

				<h4><b><li>Node.js</h4></b> is an open-source, cross-platform JavaScript run-time environment that executes JavaScript code outside of a browser. Historically, JavaScript was used primarily for client-side scripting, in which scripts written in JavaScript are embedded in a webpage's HTML and run client-side by a JavaScript engine in the user's web browser. Node.js lets developers use JavaScript to write Command Line tools and for server-side scripting—running scripts server-side to produce dynamic web page content before the page is sent to the user's web browser. Consequently, Node.js represents a "JavaScript everywhere" paradigm,[6] unifying web application development around a single programming language, rather than different languages for server side and client side scripts.

				Though .js is the conventional filename extension for JavaScript code, the name "Node.js" does not refer to a particular file in this context and is merely the name of the product. Node.js has an event-driven architecture capable of asynchronous I/O. These design choices aim to optimize throughput and scalability in web applications with many input/output operations, as well as for real-time Web applications (e.g., real-time communication programs and browser games)
				<br>following are the places from where you can learn :<br>
			<ul><li><a href="https://www.w3schools.com/nodejs/">https://www.w3schools.com/nodejs/</a></li>
			<li><a href="https://medium.com/quick-code/the-best-tutorials-to-learn-node-js-34818d757013">https://medium.com/quick-code/the-best-tutorials-to-learn-node-js-34818d757013</a></li>
			<li><a href="https://learnnode.com/">https://learnnode.com/</a></li>
			<li><a href="https://codeburst.io/25-node-js-tutorials-1db3b1da0260">https://codeburst.io/25-node-js-tutorials-1db3b1da0260</a></li>
			<li><a href="www.udemy.com/NodeJS/Online-Course▼">www.udemy.com/NodeJS/Online-Course▼</a></li>
			</ul>
				</li>
			<h4><b><li>C#</b></h4>
			It is an elegant and type-safe object-oriented language that enables developers to build a variety of secure and robust applications that run on the .NET Framework. You can use C# to create Windows client applications, XML Web services, distributed components, client-server applications, database applications, and much, much more. Visual C# provides an advanced code editor, convenient user interface designers, integrated debugger, and many other tools to make it easier to develop applications based on the C# language and the .NET Framework.
			<br>following are the places from where you can learn :<br>
			<ul><li><a href="www.pluralsight.com/c#">href="www.pluralsight.com/c#"</a></li>
			<li><a href="https://www.learncs.org/">https://www.learncs.org/</a></li>
			<li><a href="https://mva.microsoft.com/en-us/training-courses/c-fundamentals-for-absolute-beginners-16169">https://mva.microsoft.com/en-us/training-courses/c-fundamentals-for-absolute-beginners-16169</a></li>
			<li><a href="https://www.lynda.com/C-tutorials/Learning-C/651201-2.html">https://www.lynda.com/C-tutorials/Learning-C/651201-2.html</a></li>
			<li><a href="https://stackify.com/learn-c-sharp-tutorials/">https://stackify.com/learn-c-sharp-tutorials/</a></li>
			<li><a href="https://www.sololearn.com/Course/CSharp/">https://www.sololearn.com/Course/CSharp/</a></li>
			</ul>
			</li>
		
			<h4><b><li>Ruby </b></h4> It is a very productive, easy and flexible language created to make your life as a programmer easier.
			But this comes with a tradeoff.
			Its performance is way below you would expect from a statically typed language.

			You want to use it for tasks that don't require high performance (which are probably 90% of what most programmers do).

			On those situations where performance matters, use C, C++, Java or C#.

			I believe there is a Ruby implementation for .NET, so you could use Ruby and implement the hotspots in c# trivially.
			<br>following are the places from where you can learn :<br>
			<ul><li><a href="https://www.codecademy.com/learn/learn-ruby">https://www.codecademy.com/learn/learn-ruby</a></li>
			<li><a href="https://www.learnrubyonline.org/">https://www.learnrubyonline.org/</a></li>
			<li><a href="https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d">https://medium.freecodecamp.org/learning-ruby-from-zero-to-hero-90ad4eecc82d</a></li>
			<li><a href="https://learnrubythehardway.org/book/">https://learnrubythehardway.org/book/</a></li>
			<li><a href="http://rubylearning.com">http://rubylearning.com</a></li>
			</ul></li>



			


		<h4><b><li>SQL  (Structured Query Language)</b></h4> is a domain-specific language used in programming and designed for managing data held in a relational database management system (RDBMS), or for stream processing in a relational data stream management system (RDSMS). It is particularly useful in handling structured data where there are relations between different entities/variables of the data. SQL offers two main advantages over older read/write APIs like ISAM or VSAM: first, it introduced the concept of accessing many records with one single command; and second, it eliminates the need to specify how to reach a record, e.g. with or without an index.

		Originally based upon relational algebra and tuple relational calculus, SQL consists of many types of statements, which may be informally classed as sublanguages, commonly: a data query language (DQL),[a] a data definition language (DDL),[b] a data control language (DCL), and a data manipulation language (DML). The scope of SQL includes data query, data manipulation (insert, update and delete), data definition (schema creation and modification), and data access control. Although SQL is often described as, and to a great extent is, a declarative language (4GL), it also includes procedural elements.

		SQL was one of the first commercial languages for Edgar F. Codd's relational model, as described in his influential 1970 paper, "A Relational Model of Data for Large Shared Data Banks".[11] Despite not entirely adhering to the relational model as described by Codd, it became the most widely used database language.
		<br>following are the places from where you can learn :<br>
			<ul><li><a href="www.datacamp.com/">www.datacamp.com/</a></li>
			<li><a href="www.coursera.org/umich">www.coursera.org/umich</a></li>
			<li><a href="www.udemy.com/SQL/Online-Course">www.udemy.com/SQL/Online-Course</a></li>
			<li><a href="www.urbanpro.com/">www.urbanpro.com/</a></li>
			<li><a href="https://www.codecademy.com/learn/learn-sql">https://www.codecademy.com/learn/learn-sql</a></li>
			<li><a href="https://www.w3schools.com/sql/">https://www.w3schools.com/sql/</a></li>
			</ul>
		</li></ul>
<h3><b>ANDROID DEVELOPMENT</b></h3>
	<hr>
	<br>
	<p>

The Android stack[1]

The Nexus 4, part of the Google Nexus series, a line of "developer-friendly" devices.[2]
Android software development is the process by which new applications are created for devices running the Android operating system. Google states that,[3] "Android apps can be written using Kotlin, Java, and C++ languages" using the Android software development kit (SDK), while using other languages is also possible. All non-JVM languages, such as Go (JavaScript, C, C++ or assembly), need the help of JVM language code, that may be supplied by tools, likely with restricted API support. Some languages/programming tools allow cross-platform app support, i.e. for both Android and iOS. Third party tools, development environments and language support have also continued to evolve and expand since the initial SDK was released in 2008. In addition, with major business entities like Walmart, Amazon, Bank of America etc. eyeing to engage and sell through mobiles, mobile application development is witnessing a transformation.<br>
The Android software development kit (SDK) includes a comprehensive set of development tools. These include a debugger, libraries, a handset emulator based on QEMU, documentation, sample code, and tutorials. Currently supported development platforms include computers running Linux (any modern desktop Linux distribution), Mac OS X 10.5.8 or later, and Windows 7 or later. As of March 2015, the SDK is not available on Android itself, but software development is possible by using specialized Android applications.

Until around the end of 2014, the officially-supported integrated development environment (IDE) was Eclipse using the Android Development Tools (ADT) Plugin, though IntelliJ IDEA IDE (all editions) fully supports Android development out of the box,[10] and NetBeans IDE also supports Android development via a plugin. As of 2015, Android Studio,[12] made by Google and powered by IntelliJ, is the official IDE; however, developers are free to use others, but Google made it clear that ADT was officially deprecated since the end of 2015 to focus on Android Studio as the official Android IDE. Additionally, developers may use any text editor to edit Java and XML files, then use command line tools (Java Development Kit and Apache Ant are required) to create, build and debug Android applications as well as control attached Android devices (e.g., triggering a reboot, installing software package(s) remotely).

Enhancements to Android's SDK go hand-in-hand with the overall Android platform development. The SDK also supports older versions of the Android platform in case developers wish to target their applications at older devices. Development tools are downloadable components, so after one has downloaded the latest version and platform, older platforms and tools can also be downloaded for compatibility testing.

Android applications are packaged in .apk format and stored under /data/app folder on the Android OS (the folder is accessible only to the root user for security reasons). APK package contains .dex files (compiled byte code files called Dalvik executables), resource files, etc.</p>
following are the places from where you can learn android
<ul><li><a href="https://developer.android.com/guide/">https://developer.android.com/guide/</a></li>
<li><a href="https://developers.google.com/training/android/">https://developers.google.com/training/android/</a></li>
<li><a href="https://android.jlelse.eu/learning-android-development-in-2018-part-1-83a514f6a205">https://android.jlelse.eu/learning-android-development-in-2018-part-1-83a514f6a205</a></li>
<li><a href="https://www.udacity.com/course/android-basics-user-interface--ud834">https://www.udacity.com/course/android-basics-user-interface--ud834</a></li>
<li><a href="https://blog.mindorks.com/how-to-learn-android-development-f33dd6dba40d">https://blog.mindorks.com/how-to-learn-android-development-f33dd6dba40d</a></li>
<li><a href="https://www.udemy.com/learn-android-application-development-y/">https://www.udemy.com/learn-android-application-development-y/</a></li>
<li><a href="https://www.codementor.io/collections/learn-android-development-bwba0mlle">https://www.codementor.io/collections/learn-android-development-bwba0mlle</a></li>
<li><a href="https://www.pluralsight.com/paths/android">https://www.pluralsight.com/paths/android</a></li>
</ul>



<h3><b>JAVA</b></h3>
<hr>
<p>
Java is a general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers "write once, run anywhere" (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of computer architecture. As of 2016, Java is one of the most popular programming languages in use, particularly for client-server web applications, with a reported 9 million developers.[22] Java was originally developed by James Gosling at Sun Microsystems (which has since been acquired by Oracle Corporation) and released in 1995 as a core component of Sun Microsystems' Java platform. The language derives much of its syntax from C and C++, but it has fewer low-level facilities than either of them.

The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun relicensed most of its Java technologies under the GNU General Public License. Others have also developed alternative implementations of these Sun technologies, such as the GNU Compiler for Java (bytecode compiler), GNU Classpath (standard libraries), and IcedTea-Web (browser plugin for applets).

The latest version is Java 11, released on September 25, 2018, which follows Java 10 after only six months[23] in line with the new release schedule. Java 8 is still supported but there will be no more security updates for Java 9.Versions earlier than Java 8 are supported by companies on a commercial basis; e.g. by Oracle back to Java 6 as of October 2017 (while they still "highly recommend that you uninstall" pre-Java 8 from at least Windows computers.
<br>folowing are the places from where you can learn java<br></p>
<ul><li><a href="www.pluralsight.com/">www.pluralsight.com/</a></li>
<li><a href="https://www.learnjavaonline.org/">https://www.learnjavaonline.org/</a></li>
<li><a href="https://www.codecademy.com/learn/learn-java">https://www.codecademy.com/learn/learn-java</a></li>
<li><a href="https://www.edx.org/learn/java">https://www.edx.org/learn/java</a></li>
<li><a href="https://stackify.com/java-tutorials/">https://stackify.com/java-tutorials/</a></li>
<li><a href="https://netbeans.org/kb/articles/learn-java.html">https://netbeans.org/kb/articles/learn-java.html</a></li>
<li><a href="https://www.sololearn.com/Course/Java/">https://www.sololearn.com/Course/Java/</a></li>
</ul>



<h3><b>PYTHON</b></h3>
	<hr>
<p>Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together. Python's simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance. Python supports modules and packages, which encourages program modularity and code reuse. The Python interpreter and the extensive standard library are available in source or binary form without charge for all major platforms, and can be freely distributed.

Often, programmers fall in love with Python because of the increased productivity it provides. Since there is no compilation step, the edit-test-debug cycle is incredibly fast. Debugging Python programs is easy: a bug or bad input will never cause a segmentation fault. Instead, when the interpreter discovers an error, it raises an exception. When the program doesn't catch the exception, the interpreter prints a stack trace. A source level debugger allows inspection of local and global variables, evaluation of arbitrary expressions, setting breakpoints, stepping through the code a line at a time, and so on. The debugger is written in Python itself, testifying to Python's introspective power. On the other hand, often the quickest way to debug a program is to add a few print statements to the source: the fast edit-test-debug cycle makes this simple approach very effective.<br>
folowing are the places from where you can learn python</p>
<br>
<ul><li><a href="https://www.learnpython.org/">https://www.learnpython.org/</a></li>
<li><a href="https://www.codecademy.com/learn/learn-python">https://www.codecademy.com/learn/learn-python</a></li>
<li><a href="https://docs.python-guide.org/intro/learning/">https://docs.python-guide.org/intro/learning/</a></li>
<li><a href="https://learnpythonthehardway.org/">https://learnpythonthehardway.org/</a></li>
<li><a href="https://www.python.org/about/gettingstarted/">https://www.python.org/about/gettingstarted/</a></li>
<li><a href="https://www.w3schools.com/python/">https://www.w3schools.com/python/</a></li>
</ul>


<h3><b>PLACEMENTS</b></h3>
<hr>
<p>there are basically two types of companies which basically come to your college for placements:</p><br>
<h4><b>SERVICE ORIENTED COMPANIES</b></h4>
   <p>These are mass recruiters as they come to college and hier a lot of students with average package of 2.75-3.5 lakhs. Service firms work only on client requirement. Firstly, the client asks for a particular service from them, and then the service firms work on it.
In Service firms, Candidates with average technical knowledge can easily get hired, if they are having good communication skills and good marketing skills. To get a job in a service firm, a candidate should be well dressed, presentable and well mannered. It’s necessary for a service firm to hire well-groomed candidates, as they have to deal with the clients.
Service firms usually organise office parties around 2-3 a month for their employees. Along with the perks and benefits they give, they also organise trips for their employees. examples of such companies are WIPRO, TCS,etc</p>
<h4><b>PRODUCT BASED COMPANIES</b></h4>
<p>Product firms create their products or application in advance. First, the stock of the product is made or application is created, then it is presented in the market.
Product firms usually hire candidates with good domain knowledge of the technology. It rarely matters whether they are having good communication and sales skill or not. For product firms, employees grooming i.e. they should be well dressed, presentable and well mannered, is not necessary.
In Product Firms, people feel less work pressure and there is more job security in these firms. Management doesn’t fire people easily. Employees in a product firm don’t switch job easily but part time jobs are rarely available in product firms.
In product firms, Office parties are rarely once a month or in two months. Employees have been given various perks and benefits but when it comes to fun, product companies doesn’t have much.
example of such companies are google,amazon,microsoft etc.
If you are looking for better placements from your college. or you want a good package then you need to do the following things.</p>
<h4><b>competive coding</b></h4>
<p>Competitive programming is a mind sport usually held over the Internet or a local network, involving participants trying to program according to provided specifications. Contestants are referred to as sport programmers. Competitive programming is recognized and supported by several multinational software and Internet companies, such as Google and Facebook. There are several organizations who host programming competitions on a regular basis. A programming competition generally involves the host presenting a set of logical or mathematical problems to the contestants (who can vary in number from tens to several thousands), and contestants are required to write computer programs capable of solving each problem. Judging is based mostly upon number of problems solved and time spent for writing successful solutions, but may also include other factors (quality of output produced, execution time, program size, etc.) 
following are the various web sites form where you can learn competitive coding.
</p>
<ul><li><a href="https://www.topcoder.com/">TopCoder</a></li>
<li><a href="https://www.Coderbyte.com/"> Coderbyte</a></li>
<li><a href="https://www.projecteuler.com/">Project Euler</a></li>
<li><a href="https://www.HackerRank.com/">HackerRank</a></li>
<li><a href="https://www.codechef.com/">CodeChef</a></li>
<li><a href="https://www.CodeEval.com/">CodeEval</a></li>
<li><a href="https://www.codewar.com/">Codewars</a></li>
</ul>

<h4>Theory Subjects</h4>
<ul><li>networking</li>
	<li>DBMS</li>
	<li>System Design</li>
	<li>testing</li>

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