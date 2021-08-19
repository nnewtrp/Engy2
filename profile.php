<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile | Engy</title>
<!--
Neaty HTML Template
http://www.templatemo.com/tm-501-neaty
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

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
                    <div class="tm-blue-bg tm-left-column">   
											
                        <div class="tm-logo-div text-xs-center">
							<a href="index.html">
                            <h1 class="tm-site-name">&nbsp Engy &nbsp
							<img src="img/bus.png"width=50 height=50 alt="Logo"></h1>	
                            </a>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="index.html" class="tm-nav-item-link">Back</a>
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
                            <section id="welcome" class="tm-section">
                                <header>
									<?php 
										$q="SELECT * FROM PASSENGER WHERE Passenger_Status=1";
										$result=$mysqli->query($q);	
										while($row=$result->fetch_array()){
									?>
                                    <h2 class="tm-black-text tm-welcome-title tm-margin-b-45">Profile</h2> 
									<div class="col-lg-6">
										<div style="font-size:30px">
											<b>Username</b>: <?=$row['Username']?><br>
										</div>
                                        <img src="img/profile.png" alt="Image" style="height:360px;width:300px;">									
                                    </div>	
									
									<div style="margin:center;font-size:30px">									
									<b>Name</b>: <?=$row['FirstName']?> <?=$row['LastName']?><br>
									<b>Gender</b>: <?=$row['Gender']?><br>
									<b>Age</b>: <?=$row['Age']?><br>
									<b>Email</b>: <?=$row['email']?><br>
									<b>Contact Number</b>: <?=$row['Contact_number']?><br>
									<?php } ?>
									<br>
									<div style="text-align:center">
										<a href="editprofile.php" class="tm-button tm-button-wide">Edit Profile</a>
									</div>
									</div>
								</header>
                            </section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>