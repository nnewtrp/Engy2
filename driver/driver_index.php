<?php require_once('../connect.php'); 
$s="UPDATE Driver SET Status=1 WHERE Driver_ID=1";
$result =$mysqli->query($s);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Driver System | Engy</title>
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
                    <div class="tm-blue-bg tm-left-column">   
						<a href="driver_index.php">					
                        <div class="tm-logo-div text-xs-center">
                            <h1 class="tm-site-name">&nbsp Engy &nbsp
							<img src="../img/bus.png"width=50 height=50 alt="Logo"></h1>	
                        </a>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="driver_checkin.php" class="tm-nav-item-link">Logout</a>
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
                                    <h2 class="tm-black-text tm-welcome-title tm-margin-b-45">Bus 1</h2>
                                </header>    
                                <br>
                                <div style="font-size:30px">
									Station
                                </div>
                                <table  class="tableinfo">
									<tr>	
									<th >No.</th>
                                    <th>Station Name</th>
                                    <th>Check</th>
									<th>Bus Arrive</th>
									</tr>
									<?php
									$q="SELECT Sequence,Station_Name FROM Route_Station R LEFT JOIN Station S ON R.Station_ID = S.Station_ID WHERE R.Route_ID=1";
									$result=$mysqli->query($q);
									while($row=$result->fetch_array()){ ?>
									<tr>
										<td class="tableinfo"> <?php echo  $row[0]?> </td>
                                        <td class="tableinfo"> <?php echo  $row[1]?> </td>
                                        <td class="tableinfo"> </td>
										<td class="tableinfo"> <a href="driver_index.php" class="tm-button tm-button-wide">Arrive</a></td>
									</tr>
									<?php } ?>
								</table>

								</ul>
                            </section>
							<div class="center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>