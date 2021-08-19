<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Engy</title>
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
						<a href="homepage.php">					
                        <div class="tm-logo-div text-xs-center">
                            <h1 class="tm-site-name">&nbsp Engy &nbsp
							<img src="img/bus.png"width=50 height=50 alt="Logo"></h1>	
                        </a>   
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="homepage.php" class="tm-nav-item-link">Back</a>
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
                                    <h2 class="tm-black-text tm-welcome-title tm-margin-b-45">Log in</h2>
									<div class="box center">
									<form action="" method="post">
										
											<h2 id="italic" >Login</h2><br>
												<label>Username:</label>
												<input type="text" name="username" required> <br>
												<label>Password:&nbsp</label>
												<input type="password" name="password" required>
												<h6 id="italic" class="center">Forgot your password?</h6>
												<h6 id="italic" class="center">Create an account</h6>
											<button type="submit" id="loginbutton" name='submit' value="submit">Login</button>
										
									</form>
										<!--php begins here-->
											
											<?php
											if(isset($_POST['submit'])){
												$user=$_POST['username'];
												$pass=$_POST['password'];
												$q="SELECT Username,Password,AccountType FROM Passenger WHERE Username='$user' AND Password='$pass'";
												$result =$mysqli->query($q);
												$row=$result->fetch_array();
												$s="UPDATE Passenger SET Passenger_Status=1 WHERE Username='$user' and Password='$pass'";
												$result =$mysqli->query($s);
												if($user==$row['Username'] && $pass==$row['Password'])
												{
													
													//If accounttype is admin goto admin.html
													if($row['AccountType']=='admin'){
														header('Location: admin/admin.php');
													}
													else{
														header('Location: index.html');
													}
												}	
												else 
													{
													header('Refresh:0');
													}
												}
												$mysqli->close();
											?>
											
									</div>
                                </header>
								
                            </section>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>