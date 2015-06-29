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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    
    <body class="page">

        
    
          <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-top-left">
                      
                        </div>
                    </div>
                    
                    <div class="col-md-6 text-right">
                        <?php include 'socialicon.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                             <!--<h1><a href="index.html" style=" font-family:Arial, Helvetica, sans-serif">CPMIS</a></h1>-->
							 <h1><a href="index.php">
							<img src="img/CPMIS_logo_white-6.png"></a></h1>
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>                          
                        </div>
                    </div>
                    
                    <div class="col-md-9">
                         <?php include 'menu.php'; ?>
                    </div>
                </div>
            </div>
            
            <span style="display:none" id="countdown_dashboard"></span>
        </div>
    

    
    <section class="recent-causes section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcroumb">
                        <p><a href="index.php">Home</a> / Contact us</p>
                    </div>
                    
                    <div class="inner-page-title">
                        <h2>Contact us</h2>
                        <p class="page-subtitle">- Get in touch with us </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="map-canvas"></div>
        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: new google.maps.LatLng(25.6080374, 85.1430429)
              };

              var map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);


              var marker = new google.maps.Marker({
                position: map.getCenter(),
                icon: 'img/map-marker.png',
                map: map
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>           
        <div class="container">    
            <div class="row">
                <div class="col-md-12">
                    
                   <form  action="" class="contact-form" id="contactform"  method="post">
                        <div class="row">
                            <div class="col-md-6">
								 
                                <p><input type="text" id ="name" placeholder="Name" name="name" required></p>
							
                                <p><input type="text" id ="email" placeholder="Email" name="email" required></p>
								
                                <p><input type="text" id ="subject" placeholder="Subject" name="subject" required></p>
								
                            </div>
                            <div class="col-md-6">
                                <p><textarea  id="message" cols="30" rows="10" placeholder="Message" name="message" required> </textarea></p>
                            </div>
                        </div>
                        <div id="captcha" class="g-recaptcha" data-sitekey="6Ld7-gcTAAAAAKn2CMylZCPCQtqzbVmmcYjyhqOS"></div>
                        <p class="text-center"><input type="button" value="Send Message!" id="submit" onClick="myFunction(event)"></p>
						<div id ="success" class=" alert alert-success fade in">
    					<a href="#" class="close" data-dismiss="alert">&times;</a>
    					<strong>Success!</strong> Your message has been sent successfully.
						</div>
						
   
                    </form>
                    	
						<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
						<script type="text/javascript">
						$(document).ready(function() {
						$('#success').hide();
							return false;
							});
							 function myFunction(event) {
							 event.target.setCustomValidity('');
							 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*/;
							 document.getElementById("name").setCustomValidity('');
								document.getElementById("email").setCustomValidity('');
								document.getElementById("subject").setCustomValidity('');
								document.getElementById("message").setCustomValidity('');
								var name=document.getElementById("name").value;
								var email =document.getElementById("email").value;
								var subject =document.getElementById("subject").value;
								var message =document.getElementById("message").value;
								
								
								
								// Returns successful data submission message when the entered information is stored in database.
								
								if (document.getElementById("name").value == '') {
								document.getElementById("name").setCustomValidity('Please provide the name');
								
								} else if(document.getElementById("email").value == ''){
								document.getElementById("email").setCustomValidity('Please provide the email');
								
								}else if(!emailRegex.test(document.getElementById("email").value)){
								document.getElementById("email").setCustomValidity('Please provide the correct emailID');
								
								}
								else if(document.getElementById("subject").value == ''){
								document.getElementById("subject").setCustomValidity('Please provide the subject');
								
								}else if(document.getElementById("message").value == ''){
								document.getElementById("message").setCustomValidity('Please provide the message');
								
								}else if(grecaptcha.getResponse() == ""){
							
							 	alert("Please fill the captcha");
							 	return false;
								}else{
								// AJAX code to submit form.
								var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
								$.ajax({
								type: "POST",
								url: "send.php",
								data: dataString,
								cache: false,
								success: function() {
								$('#success').show();
								
								}
								});
								}
								event.target.setCustomValidity('');
								}
										  
							</script> 
					
						
						<style>
						input:focus { 
							border: yellow;
						}
						</style>
                    
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info-left">
                                    <p>
   
</p>
                                </div>
                            </div>
                            
                           




                            <div class="col-md-6">
                                <div class="contact-info-right">
                                    <p><i class="fa fa-map-marker"></i> 
									
									3,South Gandhi maidan,<br/>
Behind Residence of Police Superintendent Gramin, <br/>Patna – 800001, <br>Bihar, India</p>

												
                                    <p><i class="fa fa-phone-square"></i> 0612-2323239</p>
                                    <p><i class="fa fa-envelope"></i> Secysw-bih@nic.in</p>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    

    
  
    
    
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                 <div style="margin-top:30px;">
                  
                       <a href="www.unicef.org"><img src="img/unisef2.png" ></a>  
                       </div>
                   
                </div>
                 <div class="col-md-4" style="text-align:right;">
                 
                 <img src="img/3.png" width="80" height="74"></div>
              <div class="col-md-5" style="text-align:right;">
                
                <div style="margin-top:35px;">
              
                
                 <p>Powered by <a href="http://sdrc.co.in/" style="color:#fea32c; font-size:16px;"><strong>SDRC</strong></a></p>
                </div>
                
                </div>
            </div>            
        </div>
    </footer>

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
    
    <!-- Color change function -->
    <script src="js/color-change-function.js"></script>
  </body>
</html>