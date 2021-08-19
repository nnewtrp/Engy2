<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Driver | Admin</title>
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
									Driver
									</h2>
                                </header>
								
								<form action="" method="POST">
								<input type="radio"  name="get" value="First_Name" checked>
								<label>First Name</label>
								<input type="radio" name="get" value="Last_Name">
								<label>Last Name &nbsp</label>
								
							
								<input type="text" name="search">
								<input type="submit" name="submit" value="Search">
								<br>
								<br>
								</form>
								
								<?php 
								if(isset($_POST['submit'])){ ?>
								<table  class="tableinfo">
									<tr>	
									<th >ID</th>
									<th>Name</th>
									<th>License</th>
									<th>Age</th>
									<th>Gender</th>
									</tr>
								
								<?php 
								$get=$_POST['get'];
								$search=$_POST['search'];
								$q="SELECT * FROM Driver WHERE $get LIKE '%$search%'";
								$result=$mysqli->query($q);
								 while($row=$result->fetch_array()){ ?>
								<tr>
								  <td class="tableinfo"> <?php echo  $row[0]?> </td>
								  <td class="tableinfo"> <?php echo  $row[1]?> <?php echo  $row[2]?> </td>
								  <td class="tableinfo"> <?php echo  $row[3]?> </td>
								  <td class="tableinfo"> <?php echo  $row[4]?> </td>
								  <td class="tableinfo"> <?php echo  $row[5]?> </td>
								 </tr>
								<?php }} ?>
								</table>
                            </section>
                            
                           
							
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