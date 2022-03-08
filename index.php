<?php
include 'core.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="web development, Plugin Dvlopment, Software, Application Development">
    <meta name="author" content="supazthemes">
    <!--   Mobile Special  meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HALI-DAS COLLEGE</title>
    <!--  Shortcut icon -->
    <link rel="shortcut icon" href="images/edu.png">
    <link rel="apple-touch-icon" href="http://supazthemes.com/themes/illume/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://supazthemes.com/themes/illume/images/edu-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://supazthemes.com/themes/illume/images/edu-icon-114x114.png">
    <!-- Google Fonts css -->
    <link href="https://fonts.googleapis.com/css?family=Raleway%7CTitillium+Web:200,300,400,600,700,900" rel="stylesheet">
    <!-- Google Fonts icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--   Css files -->
    <link rel="stylesheet" type="text/css" href="vender/boot/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="vender/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="vender/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vender/owl-carousel/css/owl-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" id="option_color">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"type="text/javascript"></script>
    <script src="js/respond.min.js"type="application/javascript"></script>
    <![endif]-->
</head>

<body class="marontheme">
    <!-- Switcher structore here  -->
    <div class="switcherWrap">
        
        <div class="section-switch">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="index.php#color-variation" aria-controls="color-variation" role="tab" data-toggle="tab">Choose color</a></li>
                <li role="presentation"><a href="index.php#pages-variation" aria-controls="pages-variation" role="tab" data-toggle="tab">Page Variation</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="color-variation">
                    <div class="color-listed">
                        <span class="default theme-active" data-color="style"> <a href="index.php#" class="color">1 </a></span>
                        <span class="indigo" data-color="indigo"> <a href="index.php#" class="color">1 </a></span>
                        <span class="blue" data-color="blue"> <a href="index.php#" class="color">1 </a></span>
                        <span class="yello" data-color="yello"> <a href="index.php#" class="color">1 </a></span>
                        <span class="red" data-color="red"> <a href="index.php#" class="color">1 </a></span>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="pages-variation">
                    <div class="pagelink">
                        <h5> Let's see on page dropdown menu </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Switcher end -->
    <div id="preloader">
        <div class="loader"> Loading...</div>
    </div>
    <header>
        <div class="header-one">
            <div class="header-top-info-social">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-12">
                            <p class="phone-wrap">
                                <span class="phone"> <i class="fa fa-phone"> </i> +233(0)247262119 </span>
                                <span class="mail"> <i class="fa fa-envelope"> </i> <a href="index.php#"> halidas99@gmail.com </a></span>
                            </p>
                        </div>
                        <div class="col-sm-5 hidden-xs">
                            <ul class="social-media pull-right">
                                <li>
                                    <a href="index.php#"> <i class="fa fa-facebook"> </i></a>
                                </li>
                                <li>
                                    <a href="index.php#"> <i class="fa fa-twitter"> </i></a>
                                </li>
                                <li>
                                    <a href="index.php#"> <i class="fa fa-youtube"> </i></a>
                                </li>
                                <li>
                                    <a href="index.php#"> <i class="fa fa-instagram"> </i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu-logo-info">
                <div class="container menu-and-info-wrap">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="logo">
                                <img src="images/logo.png" class="img-responsive" alt="logo">
                                <!-- <h1> illume<span><i class="material-icons">lightbulb_outline</i> </span></h1> -->
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <nav class="navbar navbar-default edumain-nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#educollapse-nav">
                                        <span class="sr-only"> Navigation </span>
                                        <span class="icon-bar"> </span>
                                        <span class="icon-bar"> </span>
                                        <span class="icon-bar"> </span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="educollapse-nav">
                                    <ul id="menu" class="nav navbar-nav navbar-right">
                                    <li> <a href="index.php">Home </a> </li>
                                        <li><a href="index.php#course"> Programmes </a> </li>
                                        <li> <a href="index.php#feature">About </a> </li>
                                        <li> <a href="index.php#footerone">Contact </a> </li>
                                        <!-- <li> <a href="index.php#news"> Latest news </a> </li>
                                        <li> <a href="index.php#video"> Video tour</a> </li>
                                        <li> <a href="index.php#plan"> Plan</a> </li>
                                        <li> <a href="index.php#testimonials"> Testimonials</a> </li> -->
                                        <!-- <li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown"> Pages </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.php">Home One</a></li>
                                                <li><a href="vdo-banner.php">Home two video banner</a></li>
                                                <li><a href="single-team.php">Single Team</a></li>
                                                <li><a href="blog.php">Blog page</a></li>
                                                <li><a href="blog-single.php">Blog Single</a></li>
                                                <li><a href="single-page.php">Single page</a></li>
                                                <li><a href="contact.php">Contact us</a></li>
                                                <li><a href="gallery-page.php">Gallery</a></li>
                                                <li><a href="error.php">Error page</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="call-info">
                                    <span> <i class="fa fa-mobile"></i>
                                    </span>
                                    <span>
                                    <small> we'r on call 24/7 </small> <br>
                                    +233(0)247262119
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="call-info">
                                    <span> <i class="fa fa-envelope"></i>
                                </span>
                                    <span>
                                <small> Mail us  </small><br>
                                <a href="index.php#"> halidas99@gmail.com </a>
                                </span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="call-info">
                                    <span> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                    <small> Office hour  </small><br>
                                    Mon - sat 8am to 6pm
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="banner-wrap">
            <div class="banner" id="st-banner">
                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/1.jpg" class="img-responsive" alt="banner">
                </div>
                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/3.jpg" class="img-responsive" alt="banner">
                </div>
                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/4.jpg" class="img-responsive" alt="banner">
                </div>
                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/5.jpg" class="img-responsive" alt="banner">
                </div>

                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/6.jpg" class="img-responsive" alt="banner">
                </div>

                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/7.jpg" class="img-responsive" alt="banner">
                </div>

                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/8.jpg" class="img-responsive" alt="banner">
                </div>


                <div class="item">
                    <h2 class="sr-only"> first Image </h2>
                    <img src="images/pic1/9.jpg" class="img-responsive" alt="banner">
                </div>


              
            </div>
        </div>
    </section>
    <section>
        <div class="news-updates">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 class="news-update-text"> Programs </h2>
                    </div>
                    <div class="col-sm-9">
                        <div class="news-ticker" id="st-news-ticker">
                            <p class="update-text-content item">
                            CERTIFICATE IN MICROSOFT OFFICE SUITE 
                            </p>
                            <p class="update-text-content item">
                            ADVANCE CERTIFICATE IN COMPUTER STUDIES
                            </p>
                            <p class="update-text-content item">
                            DIPLOMA IN COMPUTER INFORMATION TECHNOLOGY
                            </p>
                            <p class="update-text-content item">
                            ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY
                            </p>

                            <p class="update-text-content item">
                            CERTIFICATE IN GRAPHIC DESIGN
                            </p>

                            <p class="update-text-content item">
                            DIPLOMA IN GRAPHIC DESIGN
                            </p>

                            <p class="update-text-content item">
                            CERTIFICATE PROGRAM IN M.I.S SKILLS
                            </p>

                            <p class="update-text-content item">
                            DIPLOMA PROGRAM IN M.I.S SKILLS
                            </p>

                            <p class="update-text-content item">
                            DIPLOMA IN COMPUTER HARDWARE AND NETWORKING
                            </p>

                            <p class="update-text-content item">
                            CERTIFICATE IN COMPUTER HARDWARE AND MAINTENANCE 
                            </p>


                            <p class="update-text-content item">
                            DIPLOMA IN DATABASE ADMINISTRATION
                            </p>


                            <p class="update-text-content item">
                            CERTIFICATE IN WEB DESIGNING (CPW)
                            </p>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 viewpoint">
                    <div class="all-heading">
                        <div class="st-section-head">
                            <h2>  Why choose us ? </h2>
                            <h3> The main Feature  </h3>
                        </div>
                        <div class="heading-content">
                            <p>HALI-DAS College of Technology is focused on training experts in the IT Industry with its priorities on Microsoft Office Programmes, Computer programming, Hardware and Networking, Internet Browsing, Graphic designing, Web designing etc. The School is dedicated to Training Unskillful Person(s) to become experts in their chosen field of study.
                                    This school has achieved over the years by following through a wide range of comprehensive Courses throughout each Academic Year. The school has been able to train over three hundred (300) students of which more than half are presently employed in the various companies in the Country.
                                     The School Awards Diploma Certificates to successful graduates and equips them to become productive after school. To produce graduates to fill the vacant job market, the school combines practical and industrial attachment opportunities to each program to bridge the gap between the academic and industrial world.
                                     HALI-DAS College Of Technology strives on the following Goals;
                                    •To provide high quality Education.
                                    •To train Unskillful person(s) to become Experts
                                    • To provide a Holistic Education (training of the mind body and soul to graduate from the school to become better equipped for the job market).
                                     The school also provide the under listed services for institutions, organizations, co-operate bodies, NGOs etc.
                                     Hardware and software training for staff of decentralizations
                                    Local Area Network and Wide Area Network of organizations
                                    Computer programming and installations
                                    Procurement of any IT equipment for institutions
                                    Consultancy services on IT related issues
                                    Browsing related technologies etc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="main-feature-wrap">
                    <div class="col-sm-3 viewpoint">
                        <div class="feature-single">
                            <div class="round-circle">
                                <i class="fa fa-coffee fa-3x"> </i>
                            </div>
                            <h3> <a href="index.php#"> Wordpress </a> </h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <p> <a href="index.php#"> Readmore <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </p>
                        </div>
                    </div>
                    <div class="col-sm-3 viewpoint">
                        <div class="feature-single">
                            <div class="round-circle">
                                <i class="fa fa-eye fa-3x"> </i>
                            </div>
                            <h3> <a href="index.php#"> PHP </a> </h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <p> <a href="index.php#"> Readmore <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </p>
                        </div>
                    </div>
                    <div class="col-sm-3 viewpoint">
                        <div class="feature-single">
                            <div class="round-circle">
                                <i class="active fa fa-database fa-3x"> </i>
                            </div>
                            <h3><a href="index.php#"> Angular </a> </h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <p> <a href="index.php#"> Readmore <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </p>
                        </div>
                    </div>
                    <div class="col-sm-3 viewpoint">
                        <div class="feature-single">
                            <div class="round-circle">
                                <i class="fa fa-leaf fa-3x"> </i>
                            </div>
                            <h3> <a href="index.php#"> Asp </a></h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <p> <a href="index.php#"> Readmore <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <section id="course">
        <div class="course-offer-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 viewpoint">
                        <div class="all-heading">
                            <div class="st-section-head">
                                <h2>  What's our Programmes list ? </h2>
                                <h3> Programmes Offer  </h3>
                            </div>
                            <div class="heading-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="offer-slide-wrap" id="st-course-offer-slide">
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6 months /2hrs daily 
                                                <br>
                                                <strong> CERTIFACTE:</strong> CERTIFICATE IN MICROSOFT OFFICE SUITE 
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3>  CERTIFICATE IN MICROSOFT OFFICE SUITE </h3>
                                        <p>COURSE CONTENTS/MODULES
                                            Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
                                                Course duration: 6 months / 2 hours daily
                                                    Career Aspirations: Front desk assistant, data entry operator, typist.
                                                <ul>
                                            
                                                <li>Basic Concept In  Computer hardware</li>
                                                <li>	Introduction to computer</li>
                                                <li>Word processing</li>
                                                <li>Microsoft Excel</li>
                                                <li>Microsoft power point</li>
                                                <li>English Language</li>
                                                <li>Typing</li>

                                                </ul>
                                           <p> After completing this course, the students should be able to:</p>
                                               <ul> 
                                                    <li>Identify application areas of IT</li>
                                                        <li>	Explore various components of a computer</li>
                                                        <li>	Explore Windows operating system</li>
                                                        <li>Work effectively on the computer</li>
                                                        <li>Explore the usage of Internet</li>
                                                        <li>Troubleshoot PC and its peripherals</li>
                                                        <li>Classify network architecture and topologies</li>
                                                        <li>Identify resources used to connect a network</li>
                                                        <li>Secure your system and mobile devices</li>
                                                        <li>Use the Microsoft Office Application Suite including Word, Excel, PowerPoint, and Outlook</li>
                                               </ul>
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6 months/2hrs daily
                                                <br>
                                                <strong> Certificate:</strong>  ADVANCE CERTIFICATE IN COMPUTER STUDIES
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3>  ADVANCE CERTIFICATE IN COMPUTER STUDIES </h3>
                                        <p>
                                        COURSE CONTENTS/MODULES
Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
 Course duration: 6 months / 2 hours daily
 Career Aspirations: Data entry operator, secretary, sales associate.
 <ul>
	<li>Basic Computer hardware</li>
	<li>Microsoft Word</li>
    <li>Microsoft Excel</li>
    <li>Microsoft Access</li>
    <li>	Microsoft PowerPoint</li>
    <li>Book Keeping</li>
    <li>English Language</li>
    <li>Internet Browsing</li>
    <li>	Typing </li>
    </ul>

 <p>After completing this course, the students should be able to:</p>
	<ul>
    <li>Identify application areas of IT
    <li>Explore various components of a computer
    <li>Explore Windows operating system
    <li>Work effectively on the computer
    <li>Explore the usage of Internet
    <li>Troubleshoot PC and its peripherals
    <li>Classify network architecture and topologies
    <li>Identify resources used to connect a network
    <li>Secure your system and mobile devices
    <li>Use the Microsoft Office Application Suite including Word, Excel, PowerPoint, and Outlook
    Advanced Excel Tools and Techniques for Analyzing Data</li>
	<li>	Explore the world of data, information, and reporting</li>
	<li>	Process data from business transactions</li>
	<li>	Summarize data</li>
	<li>	Analyze data for decision making</li>
	<li>	Exchange data between various sources</li>
	<li>	Analyze & present complex data</li>
	<li>	Collaborate with other users</li>
	<li>	Automate the business operations</li>

    </ul>


                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6 months /2hrs daily
                                                <br>
                                                <strong> Diploma Level:</strong> DIPLOMA IN COMPUTER INFORMATION TECHNOLOGY
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3> DIPLOMA IN COMPUTER INFORMATION TECHNOLOGY </h3>
                                        <p>
                                            Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
COURSE CONTENTS/MODULES
Course duration: 6 months / 2 hours daily
  Career Aspirations: Data entry operator, secretary.
  <ul>
	<li>Basic computer hardware</li>
	<li>Word processing</li>
	<li>Spreadsheets using Ms Excel</li>
	<li>Presentation skills using power point</li>
	<li>Office Practice</li>
	<li>Database using MS Access</li>
	<li>English Language</li>
	<li>Book Keeping</li>
	<li>Internet Browsing </li>
	<li>Typing </li>
    </ul>

<p>After completing this course, the students should be able to:</p>
    <ul>
<li>Identify application areas of IT</li>
</li>Explore various components of a computer</li>
Explore Windows operating system </li>
</li>	Work effectively on the computer</li>	
<li>	Explore the usage of Internet</li>	
<li>		Troubleshoot PC and its peripherals</li>	
<li>		Classify network architecture and topologies</li>	
<li>	Identify resources used to connect a network</li>	
<li>	Secure your system and mobile devices</li>	
<li>Use the Microsoft Office Application Suite including Word, Excel, PowerPoint, and Outlook 
Advanced Excel Tools and Techniques for Analyzing Data </li>	
<li>	Explore the world of data, information, and reporting </li>	
<li>	Process data from business transactions </li>	
<li>Summarize data</li>	
<li>Analyze data for decision making</li>	
<li>Exchange data between various sources</li>	
<li>Analyze & present complex data</li>	 
<li>Collaborate with other users</li>	
<li>	Automate the business operations</li>	

    </ul>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6months/2hrs daily
                                                <br>
                                                <strong> Diploma Level:</strong> ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY
                                            </p>
                                            
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3> ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY </h3>
                                    
                                        <p>
                                         Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
                                                COURSE CONTENTS/MODULES
                                                Course duration: 6 months / 2 hours daily
                                                Career Aspirations: Data entry operator, secretary.
                                                <ul>
                                                <li>Basic computer hardware</li>
                                                    <li>	Word processing</li>
                                                    <li>	Spreadsheets using Ms Excel </li> 
                                                    <li>Presentation skills using power point </li>
                                                    <li> Internet Browsing</li>
                                                    <li>Office Practice</li>
                                                    <li>Database using MS Access</li>
                                                    <li>English Language</li>
                                                    <li>Short-Hand</li>
                                                    <li>Typing </li>

                                                </ul>
                                                <p>After completing this course, the students should be able to:</p>
                                                    <ul>   
                                                <li>	Identify application areas of IT </li>
                                                <li>Explore various components of a computer</li>
                                                <li>	Explore Windows operating system</li>
                                                <li> Work effectively on the computer</li>
                                                <li>	Explore the usage of Internet</li>
                                                <li>	Troubleshoot PC and its peripherals</li>
                                                <li>	Classify network architecture and topologies</li>
                                                <li>Identify resources used to connect a network</li>
                                                <li>	Secure your system and mobile devices</li>
                                                <li>	Use the Microsoft Office Application Suite including Word, Excel, PowerPoint, and Outlook
                                                Advanced Excel Tools and Techniques for Analyzing Data</li>
                                                <li>	Explore the world of data, information, and reporting</li>
                                                <li>	Process data from business transactions</li>
                                                <li>	Summarize data</li>
                                                <li>	Analyze data for decision making</li>
                                                <li>	Exchange data between various sources</li>
                                                <li>	Analyze & present complex data</li>
                                                <li>	Collaborate with other users</li>
                                                <li>  	Automate the business operations</li>

                                                    </ul>
  
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6 months 2hrs daily
                                                <br>
                                                <strong> Certificate Level:</strong>  CERTIFICATE IN GRAPHIC DESIGN
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3>  CERTIFICATE IN GRAPHIC DESIGN </h3>
                                        <p>
                                        Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
INTRODUCTION
This course is designed with the following objectives: 
	•	Get a understanding of concepts, tools, techniques and methods used in a multimedia environment. 
	•	Enhance images and create appealing illustrations
	•	Create engaging and interactive interfaces by using text, graphics
 COURSE CONTENTS/MODULES
Adobe Photoshop 
<ul>
<li>Exploring the working area of Photoshop</li>
<li> Basic Photo Correction – Retouching</li>
<li>Working with Selections</li>
<li>Understanding Layers and working with mask and channels</li>
<li>Creating Typographic Designs</li>
<li> Vector drawing techniques</li>
<li>Working with Files for the Web</li>
Adobe Illustrator 
<li>Introduction to Adobe Illustrator Workspace</li>
<li>Designing Type and Layout</li>
<li> Rethinking Construction and the use of Expressive Strokes</li>
<li> Color transitions</li>
<li> Reshaping Dimensions</li>
<li> Mastering Complexity</li>
<li> Understanding Linking and Embedding in Illustrator</li>
CorelDRAW
<li> Getting started with CorelDRAW</li>
<li>Drawing Shapes and Managing Objects</li>
<li> Working with Colors and Bitmap</li>
<li>Working with Text and using Layers</li>
<li> Using Special Effects</li>
<li> Printing and Exporting Drawings</li>

</ul>





                                        </p>
                                       
                                    </div>
                                </div>
                            </div>



                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6months 2hrs daily
                                                <br>
                                                <strong> Diploma Level:</strong> DIPLOMA IN GRAPHIC DESIGN
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3> DIPLOMA IN GRAPHIC DESIGN </h3>
                                        <p>
                                            Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
                                             COURSE CONTENTS/MODULES
                                            Adobe Photoshop 
                                            <ul>
                                            <li> Exploring the working area of Photoshop</li>
                                            Basic Photo Correction – Retouching</li>
                                            <li>Working with Selections </li>
                                            <li>Understanding Layers and working with mask and channels </li>
                                            <li>Creating Typographic Designs </li>
                                            <li>Vector drawing techniques </li>
                                            <li>Working with Files for the Web </li>
                                            Adobe Illustrator 
                                            <li>Introduction to Adobe Illustrator Workspace </li>
                                            <li>Designing Type and Layout </li>
                                            <li>Rethinking Construction and the use of Expressive Strokes </li>
                                            <li>Color transitions </li>
                                            <li>Reshaping Dimensions </li>
                                            <li> Mastering Complexity </li>
                                            <li>Understanding Linking and Embedding in Illustrator </li>
                                            CorelDRAW
                                            <li>Getting started with CorelDRAW</li>
                                            <li>Drawing Shapes and Managing Objects</li>
                                            <li> Working with Colors and Bitmap</li>
                                            <li>Working with Text and using Layers</li>
                                            <li>Using Special Effects</li>
                                            <li>Printing and Exporting Drawing</li>
                                            </ul>
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6months 2hrs daily
                                                <br>
                                                <strong> Certificate Level:</strong>  CERTIFICATE PROGRAM IN M.I.S SKILLS
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3>  CERTIFICATE PROGRAM IN M.I.S SKILLS </h3>
                                        <p>
                                            Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.This course is designed for students who have the desire to work as an MIS executive in any organization.
 
                                            COURSE CONTENTS/MODULES
                                            CERTIFICATE PROGRAM IN MIS SKILLS
                                            Organizations are facing constantly changing problems, diverse styles of working, and ever changing information needs, which offer a challenging context for developing computer based Management Information Systems (MIS). MIS uses computer technology to provide information and decision support to managers, helping them becomes more effective.A MIS provides information that is needed to manage organizations efficiently and effectively.  MIS are distinct from other information systems as they are used to analyze operational activities in the organization. Managers require data which is timely, precise, detailed, internal, and historical. Upper level managers need data which is aggregated, external as well as internal, future oriented as well as historical and covering a longer span time.   COURSE CONTENTS
                                            <ul>    
                                            <li>IT Fundamentals and Basics of MS-Office </li>
                                            <li> 	Advanced Office Productivity Tools</li>
                                            <li>	Understanding Business & Customers</li>
                                            <li>	Querying and Managing Data Using SQL Server</li>
                                            <li>	Management Information System</li>
                                            <li>	Work Simulation</li>

                                                </ul>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6months 2hrs daily
                                                <br>
                                                <strong> Diploma Level:</strong> DIPLOMA PROGRAM IN M.I.S SKILLS
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3> DIPLOMA PROGRAM IN M.I.S SKILLS </h3>
                                        <p>
                                            DIPLOMA PROGRAM IN M.I.S SKILLS
                                             Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.This course is designed for students who have the desire to work as an MIS executive in any organization.
                                             
                                            COURSE CONTENTS/MODULES
                                            DIPLOMA PROGRAM IN MIS SKILLS
                                            Organizations are facing constantly changing problems, diverse styles of working, and ever changing information needs, which offer a challenging context for developing computer based Management Information Systems (MIS). MIS uses computer technology to provide information and decision support to managers, helping them becomes more effective.A MIS provides information that is needed to manage organizations efficiently and effectively.  MIS are distinct from other information systems as they are used to analyze operational activities in the organization. Managers require data which is timely, precise, detailed, internal, and historical. Upper level managers need data which is aggregated, external as well as internal, future oriented as well as historical and covering a longer span time.   COURSE CONTENTS
                                            <ul>  
                                            <li>	IT Fundamentals and Basics of MS-Office</li>
                                            </li> Advanced Office Productivity Tools</li>
                                            </li>	Understanding Business & Customers</li>
                                            </li>Querying and Managing Data Using SQL Server</li>
                                            </li>Management Information System</li>
                                            </li>Work Simulation</li>

                                            </ul>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6months 2hrs daily
                                                <br>
                                                <strong> Diploma Level:</strong>  DIPLOMA IN COMPUTER HARDWARE AND NETWORKING 
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3>  DIPLOMA IN COMPUTER HARDWARE AND NETWORKING  </h3>
                                        <p>
                                            
                                                Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
                                                COURSE CONTENTS
                                                <ul>
                                                <li> Understand the fundamentals of computer technology, networking, and security.</li>
                                                <li>Identify hardware, peripheral, networking, and security components of a computer.</li>
                                                <li> Understand the basic functionality of the Windows OS.</li>
                                                <li>Understand basic troubleshooting methodology.</li>
                                                <li>Practice proper safety procedures while working with computers.</li>
                                                <li>Effectively interact with customers and peers.</li>
                                                <li>Identify and define network components, models, and protocols </li>
                                                <li>Install, configure, and troubleshoot networks  </li>
                                                <li> Manage and monitor networks  </li>
                                                <li>Implement security methods to ensure network security</li>
                                                <li>Describe the enterprise desktop life cycle.</li>
                                                <li> Assess hardware and infrastructure readiness for enterprise level desktop deployment.</li>
                                                <li>Identify and select the appropriate deployment option as per organizational requirements.</li>
                                                <li> Deploy, manage, and secure desktops by implementing centralized policies.</li>
                                                <li>Design, configure, and implement desktop settings</li>
                                                <li> Manage and maintain an organizational desktop infrastructure.</li>
                                                <li>Plan, configure, and implement user state virtualization. </li>
                                                 
                                                Part 1 - Installing, Configuring, Managing, & troubleshooting a PC 
                                                After completing this course, the students should be able to:

                                                <li>Describe computers and their components. </li>
                                                <li> Install, maintain, and troubleshoot computer components and peripherals. </li>
                                                <li>Diagnose and troubleshoot issues affecting laptops and personal computing devices. </li>
                                                <li>Install and configure the Windows OS.</li>
                                                <li>Describe OS boot sequences, methods, user interfaces, startup utilities, and system tools and utilities. </li>
                                                <li> Carry out preventative maintenance and safety procedures. </li>
                                                <li> Describe computer networks, their components, network connectivity options and methods. </li>
                                                <li> Mitigate computer security threats. </li>
                                                <li> Describe green computing and its approaches. 
                                                <li>Appropriately use communication skills at the workplace.</li>

                                                Paart 2 - Protocol & Internetworking Standards
                                                After completing this course, the students should be able to:
                                                <li> Explore and summarize networking concepts. </li>
                                                <li> Install, configure, and troubleshoot wired and wireless networks. </li>
                                                <li>Identify the various network media types and connector types. </li>
                                                <li> Explore different network topologies.</li>
                                                <li> Explore the LAN and WAN technologies. </li>
                                                <li>Identify and troubleshoot common connectivity issues.  </li> 
                                                <li>Analyze network traffic using the appropriate network monitoring resource. </li>
                                                <li> Implement wireless security measures. </li>
                                                <li>Identify the methods of network access security and user authentication. </li>
                                                <li>Identify common threats, vulnerabilities, and mitigation techniques in the context of network security.</li>

                                                Part 3 - Enterprise Business Desktop Deployment 
                                                After completing this course, the students should be able to:
                                                <li>Understand desktop deployment </li>
                                                <li> Identify the different desktop deployment levels and methods </li>
                                                <li>Assess the network infrastructure for deployment and test application compatibility </li>
                                                <li>Identify deployment scenarios and challenges and guidelines for desktop deployment </li>
                                                <li>Understand the role of Active Directory Domain Services (AD DS) </li>
                                                <li> Identify image formats and the imaging process and create and maintain images</li>
                                                <li>Plan and deploy desktops in a small business environment, medium business environment, and an enterprise business environment </li>
                                                <li>Install and configure Remote Desktop Services (RDS) </li>
                                                <li>Implement user state virtualization, desktop deployment support, and desktop security </li>
                                                <li> Monitor the desktop health using various tools and troubleshoot enterprise desktops</li>

                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6months 2hrs daily
                                                <br>
                                                <strong> Certificate Level:</strong> CERTIFICATE IN COMPUTER HARDWARE AND MAINTENANCE 
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3> CERTIFICATE IN COMPUTER HARDWARE AND MAINTENANCE  </h3>
                                        <p>
                                            Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
                                             COURSE CONTENTS/MODULES
                                            The course Installing, Configuring, Managing, and Troubleshooting a PC focuses on computer systems and the components that make up a computer. It teaches how to install, maintain, and configure the Windows OS and different computer components and peripherals. The course also enables students to set up computer networks and mitigate computer security threats. In addition, the course educates students on how to carry out troubleshooting, preventative maintenance, and other safety procedures. 
                                            After completing this course, the students should be able to:
                                            <ul>
                                            <li> Describe computers and their components. </li>
                                            <li>Install, maintain, and troubleshoot computer components and peripherals. </li>
                                            <li>Diagnose and troubleshoot issues affecting laptops and personal computing devices. </li>
                                            <li>Install and configure the Windows OS.</li>
                                            <li> Describe OS boot sequences, methods, user interfaces, startup utilities, and system tools and utilities. </li>
                                            <li>Carry out preventative maintenance and safety procedures. </li>
                                            <li> Describe computer networks, their components, network connectivity options and methods. </li>
                                            <li>Mitigate computer security threats.</li> 
                                            <li> Describe green computing and its approaches. </li>
                                            <li>Appropriately use communication skills at the workplace.</li>
                                            </ul>
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6 months 2hrs
                                                <br>
                                                <strong> Diploma Level:</strong> DIPLOMA IN DATABASE ADMINISTRATION
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3> DIPLOMA IN DATABASE ADMINISTRATION </h3>
                                        <p>
                                            
                                            Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
                                            COURSE CONTENTS/MODULES
                                            Database Administration
                                            Course Objective: Database: Introduction to SQL NEW:
                                            
                                                <ul>
                                            <li>	Identify the major structural components of the Oracle Database </li>
                                            <li>	Create reports of aggregated data</li>
                                            <li>	Write SELECT statements that include queries</li>
                                            <li>	Retrieve row and column data from tables</li>
                                            <li>	Run data manipulation statements (DML) in Oracle Database </li>
                                            <li>	Create tables to store data</li>
                                            <li>	Utilize views to display data</li>
                                            <li>	Control database access to specific objects</li>
                                            <li>Manage schema objects</li>
                                            <li>	Display data from multiple tables using the ANSI SQL 99 JOIN syntax</li>
                                            <li>	Manage objects with data dictionary views</li>
                                            <li>	Write multiple-column sub-queries</li>
                                            <li>	Employ SQL functions to retrieve customized data</li>
                                            <li>	Use scalar and correlated sub-queries</li>
                                            <li>	Create reports of sorted and restricted data Database  Admin, Install and Upgrade Accelerated NEW</li>
                                            <li>	Use Oracle Restart to manage components</li>
                                            <li>	Upgrade database to Oracle Database 12c</li>
                                            <li>	Install Oracle Grid Infrastructure for a Standalone Server</li>
                                            <li>	Create a container database</li>
                                            <li>	Create an Oracle Database </li>
                                            <li>	Install Oracle Database 12c software</li>
                                            <li>	Monitor the Database </li>
                                            <li>	Manage Database Performance</li>
                                            <li>	Implement Database Auditing </li>
                                            <li>	Configure the Database Instance Such That Resources Are Appropriately Allocated Among Sessions and Tasks</li>
                                            <li>	Schedule Jobs to Run Inside or Outside of the Database</li>
                                            <li>	Configure Oracle Net Services</li>
                                            <li>	Configure your Database For Backup and Recovery Operations</li>
                                            <li>	Describe Oracle Database Architecture</li>
                                            <li>	Manage the Oracle Database Instance</li>
                                            <li>	Manage Oracle Database Storage structures</li>
                                            <li>	Plan effective backup and recovery procedures.</li>
                                            <li>	Configure the database for recoverability.</li>
                                            <li>	Use Recovery Manager (RMAN) to create backups and perform recovery operations.</li>
                                            <li>	Use the Data Recovery Advisor to diagnose and repair failures.</li>
                                            <li>	Use Oracle Flashback Technologies to recover from human error.</li>
                                            <li>	Perform an encrypted database backup and restore.</li>
                                            <li>	Perform table space point-in-time recovery.</li>
                                            <li>	Describe additional high availability features such as Oracle Data Guard</li>

                                                </ul>

                                        </p>
                                       
                                    </div>
                                </div>
                            </div>


                            <div class="item viewpoint">
                                <div class="c-offer-single">
                                    <figure class="effect-tamlal">
                                        <img src="images/10.jpg" alt="course" class="img-responsive">
                                        <figcaption>
                                            <p> <strong> Coursse Duration:</strong> 6months 2hrs daily
                                                <br>
                                                <strong> Certificate Level:</strong> CERTIFICATE IN WEB DESIGNING (CPW)
                                            </p>
                                            <a href="index.php#">View more</a>
                                        </figcaption>
                                    </figure>
                                    <div class="c-offer-caption">
                                        <h3> CERTIFICATE IN WEB DESIGNING (CPW) </h3>
                                        <p>
                                        Candidates must possess JHS / SHS, Technical / Vocational, O’ level or its   equipment and any professional certificate.
                                            INTRODUCTION
                                            Before you start on any programming language, you need to know the techniques used in programming. Also, the understanding of the techniques that are used to represent the logic required for solving problems using a computer. 
                                            The Introduction to Programming Logic and Techniques module focuses on developing basic programming logic using pseudo code and flowcharting techniques. You will learn concepts related to programming, conditions, iterations, and modular programming. 
                                            For an individual or an organization to create a global presence, they need to create a Web site. These Web sites contain the information in the form of Web pages. These Web pages are created using a language known as Hypertext Markup Language (HTML).
                                            This module aims at enabling students to create Web pages and Web sites.

                                            COURSE CONTENTS/MODULES
                                            Program Outline
                                            <li>Programming Logic and Techniques</li>
                                            <li> Web Content Development</li>
                                            <li>Adobe Photoshop </li>
                                            <li>Adobe Dreamweaver</li>
                                            <li>Work Simulation Project</li>

                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose our team -->
    <!-- <section id="team">
        <div class="choose-our-team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 viewpoint">
                        <div class="all-heading">
                            <div class="st-section-head">
                                <h2>  Do you wanna meet ? </h2>
                                <h3> Our Team </h3>
                            </div>
                            <div class="heading-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-slide-wrap" id="st-team-slide">
                        <div class="item viewpoint">
                            <div class="team-single">
                                <figure>
                                    <a href="index.php#"> <img src="images/person-1.jpg" alt="" class="img-responsive"> </a>
                                </figure>
                                <div class="team-caption">
                                    <div class="name-n-position">
                                        <h3> CEO & FOuNDER </h3>
                                        <h4> RAYAN BERTAND </h4>
                                    </div>
                                    <p>
                                        Rayan Bertand is a full-time web designer from AU. He love create WordPress Themes and write about web design, WordPress.
                                    </p>
                                    <ul class="social-share">
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-youtube"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item viewpoint">
                            <div class="team-single">
                                <figure>
                                    <a href="index.php#"> <img src="images/person-3.jpg" alt="" class="img-responsive"> </a>
                                </figure>
                                <div class="team-caption">
                                    <div class="name-n-position">
                                        <h3> CEO & FOuNDER </h3>
                                        <h4> RAYAN BERTAND</h4>
                                    </div>
                                    <p>
                                        Rayan Bertand is a full-time web designer from AU. He love create WordPress Themes and write about web design, WordPress.
                                    </p>
                                    <ul class="social-share">
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-youtube"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item viewpoint">
                            <div class="team-single">
                                <figure>
                                    <a href="index.php#"> <img src="images/person-1.jpg" alt="" class="img-responsive"> </a>
                                </figure>
                                <div class="team-caption">
                                    <div class="name-n-position">
                                        <h3> CEO & FOuNDER </h3>
                                        <h4> RAYAN BERTAND</h4>
                                    </div>
                                    <p>
                                        Rayan Bertand is a full-time web designer from AU. He love create WordPress Themes and write about web design, WordPress.
                                    </p>
                                    <ul class="social-share">
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-youtube"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item viewpoint">
                            <div class="team-single">
                                <figure>
                                    <a href="index.php#"> <img src="images/person-3.jpg" alt="" class="img-responsive"> </a>
                                </figure>
                                <div class="team-caption">
                                    <div class="name-n-position">
                                        <h3> CEO & FOuNDER </h3>
                                        <h4> RAYAN BERTAND</h4>
                                    </div>
                                    <p>
                                        Rayan Bertand is a full-time web designer from AU. He love create WordPress Themes and write about web design, WordPress.
                                    </p>
                                    <ul class="social-share">
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-youtube"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item viewpoint">
                            <div class="team-single">
                                <figure>
                                    <a href="index.php#"> <img src="images/person-1.jpg" alt="" class="img-responsive"> </a>
                                </figure>
                                <div class="team-caption">
                                    <div class="name-n-position">
                                        <h3> CEO & FOuNDER </h3>
                                        <h4> RAYAN BERTAND</h4>
                                    </div>
                                    <p>
                                        Rayan Bertand is a full-time web designer from AU. He love create WordPress Themes and write about web design, WordPress.
                                    </p>
                                    <ul class="social-share">
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-youtube"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item viewpoint">
                            <div class="team-single">
                                <figure>
                                    <a href="index.php#"> <img src="images/person-2.jpg" alt="" class="img-responsive"> </a>
                                </figure>
                                <div class="team-caption">
                                    <div class="name-n-position">
                                        <h3> CEO & FOuNDER </h3>
                                        <h4> RAYAN BERTAND</h4>
                                    </div>
                                    <p>
                                        Rayan Bertand is a full-time web designer from AU. He love create WordPress Themes and write about web design, WordPress.
                                    </p>
                                    <ul class="social-share">
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-youtube"></i> </a>
                                        </li>
                                        <li>
                                            <a href="index.php#"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section id="counter">
        <div class="counter-section-wrap">
            <h2 class="sr-only"> counter section </h2>
            <div class="overlay-wrap"> Overlay </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="counter-single">
                            <span class="counter-icon">
                            <i class="material-icons">group_work </i>
                             </span>
                            <span class="counter">
                              10145

                           </span>
                            <span class="counter-text">
                            Group Work
                             </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="counter-single">
                            <span class="counter-icon">
                             <i class="material-icons">language</i>
                             </span>
                            <span class="counter">
                               10145

                              </span>
                            <span class="counter-text">
                        Global success 
                             </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="counter-single">
                            <span class="counter-icon">
                            <i class="material-icons">youtube_searched_for</i>
                              </span>
                            <span class="counter">
                               10145

                               </span>
                            <span class="counter-text">
                            Research work
                              </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="counter-single">
                            <span class="counter-icon">
                                 <i class="material-icons">transform</i>
                                </span>
                            <span class="counter">
                                10145

                               </span>
                            <span class="counter-text">
                             Technology transform
                               </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- News section  -->
    <!-- <section id="news">
        <div class="news-section-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 viewpoint">
                        <div class="all-heading">
                            <div class="st-section-head">
                                <h2>  What's happening ? </h2>
                                <h3> Our latest news </h3>
                            </div>
                            <div class="heading-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 viewpoint">
                        <div class="breaking-news-wrap">
                            <div class="top-breking-caption">
                                <span class="breaking-news-text">  Latest Activity </span>
                                <h3> <a href="index.php#"> Making this the first true generator on the Internet.  </a></h3>
                                <div class="date-comment">
                                    <span class="date"><i class="fa fa-clock-o"> </i> 14 min ago  </span>
                                    <span class="comment"> <i class="fa fa-comment"> </i> 16 comments</span>
                                </div>
                            </div>
                            <figure class="brk-img">
                                <a href="index.php#"> <img src="images/alexi-lamm1.jpg" alt="news" class="img-responsive"> </a>
                            </figure>
                        </div>
                        <div class="news-listing">
                            <ul>
                                <li class="viewpoint">
                                    <div class="news-left-image-wrap">
                                        <figure>
                                            <a href="index.php#"> <img src="images/cap.png" class="img-responsive" alt="hello"> </a>
                                        </figure>
                                    </div>
                                    <div class="news-right-cont-wrap">
                                        <div class="content-news">
                                            <span class="breaking-news-text">  BREAKING STORY </span>
                                            <h3> <a href="index.php#"> Making this the first true generator on the Internet.  </a></h3>
                                            <div class="date-comment">
                                                <span class="date"><i class="fa fa-clock-o"> </i> 14 min ago  </span>
                                                <span class="comment"> <i class="fa fa-comment"> </i> 16 comments</span>
                                            </div>
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using established fact that .
                                            </p>
                                            <a href="http://supazthemes.com/themes/illume/read-more"> Readmore 
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="viewpoint">
                                    <div class="news-left-image-wrap">
                                        <figure>
                                            <a href="index.php#">
                                                <img src="images/news1.jpg" class="img-responsive" alt="hello">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="news-right-cont-wrap">
                                        <div class="content-news">
                                            <span class="breaking-news-text">  BREAKING STORY </span>
                                            <h3> <a href="index.php#"> Making this the first true generator on the Internet.  </a></h3>
                                            <div class="date-comment">
                                                <span class="date"><i class="fa fa-clock-o"> </i> 14 min ago  </span>
                                                <span class="comment"> <i class="fa fa-comment"> </i> 16 comments</span>
                                            </div>
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using established fact that .
                                            </p>
                                            <a href="http://supazthemes.com/themes/illume/read-more"> Readmore
                                             <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="viewpoint">
                                    <div class="news-left-image-wrap">
                                        <figure>
                                            <a href="index.php#"> <img src="images/mathematics.jpg" class="img-responsive" alt="hello"> </a>
                                        </figure>
                                    </div>
                                    <div class="news-right-cont-wrap">
                                        <div class="content-news">
                                            <span class="breaking-news-text">  BREAKING STORY </span>
                                            <h3> <a href="index.php#"> Making this the first true generator on the Internet.  </a></h3>
                                            <div class="date-comment">
                                                <span class="date"><i class="fa fa-clock-o"> </i> 14 min ago  </span>
                                                <span class="comment"> <i class="fa fa-comment"> </i> 16 comments</span>
                                            </div>
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using established fact that .
                                            </p>
                                            <a href="http://supazthemes.com/themes/illume/read-more"> Readmore 
                                            <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section id="video">
        <div class="video-enroll-wrap">
            <div class="operlay-wrap"> overlay </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="all-heading">
                            <div class="st-section-head">
                                <h2>  What do you wanna see ? </h2>
                                <h3> Enlodge in video tour</h3>
                            </div>
                            <div class="heading-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
                                </p>
                            </div>
                            <div class="material-icon-wrap">
                                <a href="" data-toggle="modal" data-target=".modal-popup-box"> <i class="fa fa-play" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                        <div class="modal modal-popup-box">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
                                      </span></button>
                                        <h4 class="modal-title">Our College Activities</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/ePbKGoIGAXY"></iframe>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section id="plan">
        <div class="pricing-message-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 viewpoint">
                        <div class="all-heading">
                            <div class="st-section-head">
                                <h2>  Which plan you perfer? </h2>
                                <h3> Pricing Plan </h3>
                            </div>
                            <div class="heading-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="price-plan-wrap">
                        <div class="col-sm-4 viewpoint">
                            <div class="price-plan light">
                                <div class="p-plan-header">
                                    <div class="price-text">
                                        $30/m
                                    </div>
                                </div>
                                <div class="price-content">
                                    <h2>Price Plan  </h2>
                                    <p> for Freelancer</p>
                                    <ul>
                                        <li> 3 Months Subscribtion
                                        </li>
                                        <li> 3 MBPS Speed
                                        </li>
                                        <li> Router not Include
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <button class="btn btn-theme btn-lg" type="submit"> Select Plan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 viewpoint">
                            <div class="price-plan regular">
                                <div class="p-plan-header">
                                    <div class="price-text">
                                        $30/m
                                    </div>
                                </div>
                                <div class="price-content">
                                    <h2>Price Plan  </h2>
                                    <p> for Freelancer</p>
                                    <ul>
                                        <li> 3 Months Subscribtion
                                        </li>
                                        <li> 3 MBPS Speed
                                        </li>
                                        <li> Router not Include
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <button class="btn  btn-theme btn-lg" type="submit"> Select Plan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 viewpoint">
                            <div class="price-plan light">
                                <div class="p-plan-header">
                                    <div class="price-text">
                                        $30/m
                                    </div>
                                </div>
                                <div class="price-content">
                                    <h2>Price Plan  </h2>
                                    <p> for Freelancer</p>
                                    <ul>
                                        <li> 3 Months Subscribtion
                                        </li>
                                        <li> 3 MBPS Speed
                                        </li>
                                        <li> Router not Include
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <button class="btn btn-theme btn-lg" type="submit"> Select Plan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section id="testimonials">
        <div class="testimonial-wrap">
            <div class="operlay-wrap"> overlay </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 viewpoint">
                        <h2 style="text-align:center"> What alumni says ? </h2>
                        <div class="testi-slide-wrap" id="st-testimonial-slide">
                            <div class="item">
                                <div class="testi-left">
                                    <img src="images/img-six-1.png" class="img-circle" alt="testi-image">
                                </div>
                                <div class="testi-content">
                                    <span class="quote"> <i class="fa fa-quote-left" aria-hidden="true"></i> </span>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut labore etu dolore magna aliqua enim veniam quis nostrud exercitate.
                                    </p>
                                    <span class="client-name"> Jesika </span>
                                    <span class="client-position"> Principle (Supaz college)</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi-left">
                                    <img src="images/team.jpg" class="img-circle" alt="testi-image">
                                </div>
                                <div class="testi-content">
                                    <span class="quote"> <i class="fa fa-quote-left" aria-hidden="true"></i> </span>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut labore etu dolore magna aliqua enim veniam quis nostrud exercitate .
                                    </p>
                                    <span class="client-name"> Mr. Adhikari </span>
                                    <span class="client-position"> Software Developer(Supaz web)</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi-left">
                                    <img src="images/person-3.jpg" class="img-circle" alt="testi-image">
                                </div>
                                <div class="testi-content">
                                    <span class="quote"> <i class="fa fa-quote-left" aria-hidden="true"></i> </span>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut labore etu dolore magna aliqua enim veniam quis nostrud exercitate .
                                    </p>
                                    <span class="client-name"> John</span>
                                    <span class="client-position"> Doctor (Supaz medical )</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="principle-message-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 viewpoint">
                        <div class="all-heading">
                            <div class="st-section-head">
                                <h2> Wt's Principle Says ?  </h2>
                                <h3> Principle message </h3>
                            </div>
                            <div class="heading-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 viewpoint">
                        <div class="avatar-content-wrap">
                            <div class="principle-image">
                                <img src="images/person-2.jpg" class="img-responsive" alt="principle">
                            </div>
                            <div class="message-content-wrap">
                                <div class="principle-name-possition">
                                    <h3> Juction hilari</h3>
                                    <h4> Main Principle </h4>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many .
                                </p>
                                <ul class="social-share">
                                    <li>
                                        <a href="index.php#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="index.php#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="index.php#"> <i class="fa fa-youtube"></i> </a>
                                    </li>
                                    <li>
                                        <a href="index.php#"> <i class="fa fa-instagram"></i> </a>
                                    </li>
                                </ul>
                                <a href="index.php#" class="btn btn-theme btn-lg"> View more message </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section id="association">
        <div class="our-association-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 viewpoint">
                        <div class="all-heading">
                            <div class="st-section-head">
                                <h2>  Who connect us ? </h2>
                                <h3> Our Association  </h3>
                            </div>
                            <div class="heading-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many .
                                </p>
                            </div>
                        </div>
                        <div class="indvidual-association" id="st-our-association">
                            <div class="item">
                                <img src="images/bootstrap.png" class="" alt="logo-client">
                            </div>
                            <div class="item">
                                <img src="images/html5.png" class="" alt="logo-client">
                            </div>
                            <div class="item">
                                <img src="images/css3.png" class="" alt="logo-client">
                            </div>
                            <div class="item">
                                <img src="images/sass.png" class="" alt="logo-client">
                            </div>
                            <div class="item">
                                <img src="images/js.png" class="" alt="logo-client">
                            </div>
                            <div class="item">
                                <img src="images/browserc.png" class="" alt="logo-client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section>
        <div class="call-to-action-wrap viewpoint">
            <div class="operlay-wrap"></div>
            <div class="container">
                <div class="row">
                    <div class="call-content-wrap">
                        <div class="col-sm-9 align-verticle">
                            <h3> Lexitarian retro affogato listicle truffaut gluten-free and ready made</h3>
                        </div>
                        <div class="col-sm-3 align-verticle">
                            <button class="btn btn-theme btn-lg"> View theme</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
   <!-- footer goes here -->
    <?php ft(); ?>
    <!-- js file link here -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="vender/boot/js/bootstrap.min.js"></script>
    <!-- view point checker  -->
    <script type="text/javascript" src="js/viewpointchecker.js"></script>
    
    <!-- Page smooth scroll js -->
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <!-- owl carousel -->
    <script type="text/javascript" src="vender/owl-carousel/owl.carousel.js"></script>
    
    <!-- photoswipe gallery popup-->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <!-- counter require js -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/counterup.js"></script>
 
    <!-- Video banner -->
    <script src="js/jquery.vide.js"></script>
    <!-- masonry and imageloded -->
    <script type="text/javascript" src="js/masonry.js"></script>
    <script type="text/javascript" src="js/imageloded.js"></script> 
    <!-- Custom js file-->
    <script type="text/javascript" src="js/script.js"></script>
   
</body>

</html>
