<?php

include 'db.php';



$numer_rescued = mysql_num_rows(mysql_query("select * from child_basic_detail"));

$number_rehabilitated = mysql_num_rows(mysql_query("select * from child_basic_detail where pstatus='Y'"));

$number_investigation = mysql_num_rows(mysql_query("select * from child_basic_detail where pstatus='N'"));

$number_card_generation = mysql_num_rows(mysql_query("select * from child_basic_detail where is_card_print!=0"));



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPMIS | Child Protection Management Information System</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

   
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">
    
    <!-- Font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Boxer css -->
    <link rel="stylesheet" href="css/jquery.fs.boxer.min.css">
        
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Multiple colors css -->
    <link rel="stylesheet" href="css/multiple-colors.css">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    
    <body>

   
    <div id="preloader">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
    </div>
   
   
   <?php include 'top_area.php'; ?>
     
    
    <?php include 'header.php'; ?>
  
        
       
        
        <div class="slider-area">
            <div class="single-slide">
                <div class="slide-bg slide-1"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="slide-text-table">
                                <div class="slide-text-cell">
                                    <h2 class="animated">Help The <span>Child</span></h2>
                                    <h2 class="animated">Make <span>Better</span> World</h2>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
            </div>  
            <div class="single-slide">
                <div class="slide-bg slide-2"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="slide-text-table">
                                <div class="slide-text-cell">
                                    <h2 class="animated">Children Need  <span> Education</span></h2>
                                    <h2 class="animated">For Brighter <span>Future</span></h2>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        
        <div class="upcoming-event-area wow fadeInUp">
            <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="upcoming-event-wrapper">
                    <div class="upcoming-event">
                        <div class="upcoming-event-top">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="upcoming-event-title">
                                        <div class="upcoming-event-icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <h3>Upcoming Event</h3>
                                        <p><i class="fa fa-clock-o"></i> 10:00 AM <i class="fa fa-calendar"></i> 12 June, 2015</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-7">
                                    <div class="upcoming-event-heading">
                                        <h2><a href="#">Launch of Child Labour Tracking System</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </section>
    
    
    <section class="about-us section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                         <img src="img/CPMIS_LOGO.png">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-5 wow fadeInUp">
                    <div class="about-photo">
                        <div class="left-frame"></div>
                        <div class="right-frame"></div>
                        <img class="img-responsive" src="img/about.jpg" alt="">
                    </div>
                    
                    <div class="our-stats">
                        <div class="total-events">
                            <h2>34 <span>Events</span></h2>
                        </div>  
                        <div class="total-donation-stats">
                            <p><span class="counter">2434</span> Child tracked</p>
                            <p><span class="counter"></span> </p>
                        </div>    
                    </div>
                </div>
                
                <div class="col-md-7 wow fadeInUp">
                    <div class="about-text">
                        <!--<h2>Lorem ipsum dolor sit amet</h2>-->
                        <p>The State Child Protection Society (SCPS), Bihar is the nodal body at the State level to implement and 

monitor the Integrated Child Protection Scheme (ICPS). The SCPS is mandated to seek routine data 

from District Child Protection Units (DCPU), Child Care Institutions (CCI), Juvenile Justice Boards (JJB) 

and statutory bodies.</p>

<p>
UNICEF Bihar has supported Department of Social Welfare, Govt. of Bihar to create a systematic and 

centralized recording and reporting online system for Juvenile Justice Board (JJBs), Child Welfare 

Committee (CWCs), Special Juvenile Police Unit (SJPUs) and Child Care Institutions (CCIs) running in 

state  to enabling the timely data and accurate consolidation of feedback.
</p>
                        
                   <p>
                   Child Protection Management Information System (CPMIS) is a user friendly, web-enabled

information management and monitoring system. The system enables access to data for key 

indicators through a DevInfo interface as well as for download as quarterly factsheets. Besides, an 

offline of DevInfo has also been developed to enable use of the system in places without access to 

internet connectivity.
                   </p>
                   
                   <p>
                   Data is presently available for 246 indicators across one quarter of 2013 and four quarters of 2014. 

Data is available consolidated at the state level as well as for ...<a href="about.php" style="color:#F00">Read More</a>
                   
                   </p>
                                              
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
   <!-- <section class="call-to-action section-padding">
        <div class="cta-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><span>Want to Donate?</span> It’s time to show your huminity</h2>
                    <a href="donate-now.html" class="cta-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </section>-->
    
    <!--<div style="text-align:center; width:100%; background:#110c09;">
    <img src="img/quickstat.png" width="1350" height="497">
    
    </div>-->
    
    
    <div style="text-align:center; background:#110c09;padding-bottom:15px;" class="col-md-12">
    <!--<img src="img/quickstat.png" width="1350" height="497"> -->
    	<div style="text-align:center; width:100%;"  class="col-md-12">
			<h1 style="color:#fff">QUICK STATS</h1>
			<div style="background-color:#53cb8e; height:2px; max-width:20px;margin-left: 50%;margin-top:0;"></div>
			<div class="col-md-12" style="padding-top:40px;">
				<div class="col-md-2" style="padding-top:15px;text-align:center;">
					<div class="col-md-12" style="height:200px;border-radius:50%;border:#53cb8e 10px solid;width:200px; background:url(img/home_1.png) no-repeat;">
					</div>
					<div style="text-align:center;margin-top: 15px;margin-left: 10px;width:200px;">
						<p style="color:#fff;margin: 0 0 0px;font-size: 40px;line-height: 1.2;"><?php echo $numer_rescued; ?></p>
						<p style="color:#fff;font-size: 20px;margin: 0 0 0px;line-height: 1.2;">Child Rescued</p>
					</div>
					
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-2" style="padding-top:15px;text-align:center;">
					<div class="col-md-12" style="height:200px;border-radius:50%;border:#53cb8e 10px solid;width:200px; background:url(img/home_2.png) no-repeat;">
					</div>
					<div style="text-align:center;margin-top: 15px;margin-left: 10px;width:200px;">
						<p style="color:#fff;margin: 0 0 0px;font-size: 40px;line-height: 1.2;"><?php echo $number_rehabilitated; ?></p>
						<p style="color:#fff;font-size: 20px;margin: 0 0 0px;line-height: 1.2;">Child Rehabilitated</p>
					</div>
					
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-2" style="padding-top:15px;text-align:center;">
					<div class="col-md-12" style="height:200px;border-radius:50%;border:#53cb8e 10px solid;width:200px; background:url(img/home_3.png) no-repeat;">
					</div>
					<div style="text-align:center;margin-top: 15px;margin-left: 10px;width:200px;">
						<p style="color:#fff;margin: 0 0 0px;font-size: 40px;line-height: 1.2;"><?php echo $number_investigation; ?></p>
						<p style="color:#fff;font-size: 20px;margin: 0 0 0px;line-height: 1.2;">Child Investigation (ongoing)</p>
					</div>
					
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-2" style="padding-top:15px;text-align:center;">
                
					<div class="col-md-12" style="height:200px;border-radius:50%;border:#53cb8e 10px solid;width:200px; background:url(img/home_4.png) no-repeat;">
                    
                    
					</div>
                    
                    
					<div style="text-align:center;margin-top: 15px;margin-left: 10px;width:200px;">
						<p style="color:#fff;margin: 0 0 0px;font-size: 40px;line-height: 1.2;"><?php echo $number_card_generation; ?></p>
						<p style="color:#fff;font-size: 20px;margin: 0 0 0px;line-height: 1.2;">Entitlement Card Generated</p>
					</div>
					
				</div>
				<div class="col-md-1"></div>
				
			</div>
		</div>
    </div>
    
    
    
    <?php include 'footer.php'; ?>
   
    
    <!-- jQuery and plugins -->
    <script src="js/vendor/jquery.1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.lwtCountdown-1.0.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/jquery.fs.boxer.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
        <script type="text/javascript">new WOW().init();</script>
    <!--<![endif]-->		

    <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
    <!--[if gte IE 9]>
        <script type="text/javascript">new WOW().init();</script>
    <![endif]-->		 

    <!--Opacity & Other IE fix for older browser-->
    <!--[if lte IE 8]>
        <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
    <![endif]-->	    
    
    
    <script src="js/main.js"></script>
    
    <!-- jQuery preloader -->
    <script src="js/preloader.js"></script>
    
    <!-- Color change function -->
    <script src="js/color-change-function.js"></script>
  </body>
</html>