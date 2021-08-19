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
                                    <a href="profile.php" class="tm-nav-item-link">Back</a>
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
                                
									
									<div class="signup_box center" >
										<form action="" method="post">
											<?php 
											$q="SELECT * FROM PASSENGER WHERE Passenger_Status=1";
											$result=$mysqli->query($q);	
											while($row=$result->fetch_array()){
											?>
											<h2 id="italic" >Edit Profile</h2><br>
												<label>First Name:</label>
												<input type="text" name="firstname" value="<?php echo $row[2]?>"> <br>
												<label>Last Name:</label>
												<input type="text" name="lastname" value="<?php echo $row[3]?>"> <br>
												<label> Gender: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
												<input type="radio" id="male" name="gender" value="Male" <?php if($row[4]=="Male"){echo "checked";}?>>
												<label for="male">Male</label>
												<input type="radio" id="female" name="gender" value="Female" <?php if($row[4]=="Female"){echo "checked";}?>>
												<label for="female">Female</label><br>
												<label for="birthday">Age:</label>
												<input type="text" name="age" value="<?php echo $row[5]?>"><br>
												<label>E-mail:</label>
												<input type="email" name="email" value="<?php echo $row[6]?>"> <br>
												<label>Contact Number:</label>
												 <input type="text" name="phone" value="<?php echo $row[7]?>">
												 <br>
												 <br>
												<label>Username:&nbsp </label>
												<input type="text" name="username" value="<?php echo $row[8]?>"> <br>
												<label>Password:&nbsp </label>
												<input type="password" name="password" value="<?php echo $row[2]?>"> <br>
												<input type="submit" id="loginbutton" value="Submit" name="submit"><br>
												<br>
												<a href="editprofile.php" class="tm-button">Update</a>
												
												<?php
												} ?>
										</form>
										<?php 
												if(isset($_POST['submit'])){
													$fn=$_POST['firstname'];
													$ln=$_POST['lastname'];
													$gender=$_POST['gender'];
													$age=$_POST['age'];
													$email=$_POST['email'];
													$phone=$_POST['phone'];
													$username=$_POST['username'];
													$pass=$_POST['password'];
													$q="UPDATE Passenger SET FirstName='$fn',LastName='$ln',Gender='$gender',Age='$age',email='$email',
													contact_number='$phone',username='$username',password='$pass' WHERE Passenger_Status=1";
													$result =$mysqli->query($q);
													
													if(!$mysqli->query($q)){
														echo "Failed";
													}	
												}													
												?>
									</div>
								
                            </section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>