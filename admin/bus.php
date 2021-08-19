<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bus | Admin</title>
<!--
Neaty HTML Template
http://www.templatemo.com/tm-501-neaty
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="../css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Left column: logo and menu -->
                    <div class="tm-admin-bg tm-left-column">   
											
                        <div class="tm-logo-div text-xs-center">
							<a href="admin.php">
                            <h1 class="tm-site-name">&nbsp Engy &nbsp
							<img src="../img/bus.png"width=50 height=50 alt="Logo"></h1>	
                            </a>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <!--
								<li class="tm-nav-item">
                                    <a href="#about" class="tm-nav-item-link">About Us</a>
                                </li>
								-->
                                <li class="tm-nav-item">
                                    <a href="Bus.php" class="tm-nav-item-link">Round</a>
                                </li>
								<li class="tm-nav-item">
                                    <a href="buscontrol.php" class="tm-nav-item-link">Bus Control</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="Map.html" class="tm-nav-item-link">Map</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="Passenger.php" class="tm-nav-item-link">Passenger</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="Driver.php" class="tm-nav-item-link">Driver</a>
                                </li>
								<li class="tm-nav-item">
                                    <a href="../HomePage.php" class="tm-nav-item-link">Log out</a>
                                </li>
                            </ul>
                        </nav>                                         
                    </div> <!-- Left column: logo and menu -->
                    
                    <!-- Right column: content -->
                    <div class="tm-right-column">
                        <!---<figure>
                            <img src="img/neaty-01.jpg" alt="Header image" class="img-fluid">    
                        </figure>-->
                        <div class="tm-content-div">
                            <!-- Welcome section -->
                            <section  class="tm-section">
                                <header>
                                    <h2 class="tm-black-text tm-welcome-title tm-margin-b-45">
									Bus
									</h2>
                                </header>
								<div style="font-size:30px">
									Select Bus Route
								</div>
								<br>
								<div class="center">
								<table style="width:60%;border:1px solid red;border-collapse:collapse">																	
								  <tr>
									<td><a href="1A.php" class="tm-button">1A</a></td>
									<td>Bus Terminal - Asian Dormitory (Left Turn)</td>
								  </tr>
								  <tr>
									<td><a href="1B.php" class="tm-button">1B</a></td>
									<td>Bus Terminal - Asian Dormitory (Right Turn)</td>
								  </tr>
								  <tr>
									<td><a href="2.php" class="tm-button">&nbsp;2&nbsp;</a></td>
									<td>A Dormitory - TU Hospital</td>
								  </tr>
								  <tr>
									<td><a href="3.php" class="tm-button">&nbsp;3&nbsp;</a></td>
									<td>TU DOME - Institute of East Asian Studies</td>
								  </tr>
								  <tr>
									<td><a href="4.php" class="tm-button">&nbsp;4&nbsp;</a></td>
									<td>Convention Center - Institute of East Asian Studies</td>
								  </tr>
								</table>
								</div>
                            </section>
                            <!-- About section -->
							<!--
                            <section id="about" class="tm-section">
                                <div class="row">                                                                
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 push-lg-4 push-md-5">
                                        <header>
                                            <h2 class="tm-blue-text tm-section-title tm-margin-b-45">What is Engy?</h2>
                                        </header>
                                        <p>Engy is a web application of NGV bus in Thammasat University Rangsit Campus. 
										This application will help you to solve the problem when you use NGV bus by showing the real-time location of NGV bus, 
										selecting the bus route that you want to get on, and showing the station of that NGV bus route pass.</p>      
                                        <a href="aboutus2.html" class="tm-button tm-button-wide">Read More</a>  
                                    </div>

                                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 pull-lg-8 pull-md-7 tm-about-img-container">
                                        <img src="img/560car02.jpg" alt="Image" class="img-fluid">    
                                    </div>  
                                </div>                            
                            </section>  
							-->
                           
							
							<section id="logout" class="tm-section">
							<a href="homepage.html"></a>
							</section>
							
                            <footer>
                                <p class="tm-copyright-p">Copyright &copy; <span class="tm-current-year">2017</span> Engy 
                                
                                | Designed by TemplateMo</p>
                            </footer>
                        </div>  
                        
                    </div> <!-- Right column: content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
                
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script>     
       
            $(document).ready(function(){

                // Single page nav
                /*$('.tm-main-nav').singlePageNav({
                    'currentClass' : "active",
                    offset : 20
                });*/

                // Magnific pop up
                $('.tm-gallery-1').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                }); 

                $('.tm-gallery-2').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                }); 

                $('.tm-gallery-3').magnificPopup({
                  delegate: 'a', // child items selector, by clicking on it popup will open
                  type: 'image',
                  gallery: {enabled:true}
                  // other options
                }); 

                $('.tm-current-year').text(new Date().getFullYear());                
            });
        </script>             
</body>
</html>