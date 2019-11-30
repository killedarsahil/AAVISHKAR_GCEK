<?php
session_start();

$eid = $_GET['eid'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>GCEK FEST</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <section id="container" >
      
      
       <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="assets/img/gcek.jpg" class="img-square" width="120"></p>
              	  <h5 class="centered">GCEK FEST</h5>
              	  	
                  <li class="mt">
                      <a href="panels.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a data-toggle="modal" href="#mylogin">
                          <i class="fa fa-desktop"></i>
                          <span>Admin Login</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="IT_EVENT.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Information Technology</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="MCA_Event.php" >
                          <i class="fa fa-cogs"></i>
                          <span>MCA</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="ENTC_Event.php" >
                          <i class="fa fa-book"></i>
                          <span>ENTC</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="Mechanical_Event.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Mechanical Engineering</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="Electrical_Event.php" >
                          <i class="fa fa-th"></i>
                          <span>Electrical Engineering</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="Civil_Event.php" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Civil Engineering</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php
            $servername = "localhost";
            $username = "sahil9697";
            $password = "17143281";
            $db_name ="gcek_fest";
            $table_name ="events";
            $connection = mysqli_connect($servername, $username, $password);
            $db = @mysqli_select_db($connection, $db_name) or die(mysql_error());
            $result = mysqli_query($connection,"SELECT * FROM $table_name where e_id =$eid");
            while ($row = mysqli_fetch_array($result)) {
            $ename = $row['Event_Name'];
            $amt=$row['Fee'];
            $venue=$row['Organizer'];
            $e_date=$row['E_Date'];
            $r_date=$row['R_Date'];
            $duration=$row['Duration'];
            $head_name=$row['E_Head_Name'];
            $head_mob=$row['E_Head_Mob'];
            $participants=$row['Participants'];
            }
        ?>
      <section id="main-content">
          <section class="wrapper site-min-height" style="margin-top:5px;">
        
          	<div class="row mt">
          		<div class="col-lg-6">
							 
							<div class="content-panel pn" style="margin-left:80px;margin-right:40px;margin-top:16px;">
								<div id="profile-01">
									<h3><?php echo $ename;?></h3>
									<h6 style="font-size:18px">Rs : <?php echo $amt;?></h6>
								</div>
                                <div class="profile-01 centered" >
                                        <p>Participate</p>
                                    </div>
                                </a>
								<div class="centered">
									<h6><br/><?php echo $venue;?></h6>
								</div>
							</div><! --/content-panel -->
                                            
                            <br><h4 style="margin-left:80px;">Maximum Participants : <?php echo $participants; ?></h4>
                            <br><h4 style="margin-left:80px;">Registration Date Upto : <?php echo $r_date; ?></h4>
                            <br><h4 style="margin-left:80px;">Event Date : <?php echo $e_date;?></h4>
                            <br><h4 style="margin-left:80px;">Event Duration : <?php echo $duration; ?></h4>
                            <br><h4 style="margin-left:80px;">Event Head : <?php echo $head_name; ?></h4>
                            <br><h4 style="margin-left:80px;">Contact Number : <?php echo $head_mob; ?></h4>
           		</div>
                <div class="col-lg-6">
          		    
                    <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Submit Your Details </h4>
                      <form class="form-horizontal style-form" method="post" action="Registration.php" autocomplete="off">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">College</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="college" required>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Branch</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="branch">
                                  <option>-- Select Branch --</option>
                                  <option>Information Technology</option>
                                  <option>Mechanical Engineering</option>
                                  <option>ENTC Engineering</option>
                                  <option>Electrical Engineering</option>
                                  <option>Civil Engineering</option>
                                  <option>Master of Computer Applications</option>
                                </select>
                          </div>
                              </div>
                          
                          <input type="text" value="<?php echo $ename;?>" name="event" style="display:none"/>
                          <input type="text" value="<?php echo $venue;?>" name="venue" style="display:none"/>
                          <input type="text" value="<?php echo $e_date;?>" name="e_date" style="display:none"/>
                          <input type="text" value="<?php echo $duration;?>" name="duration" style="display:none"/>
                          <input type="text" value="<?php echo $head_name;?>" name="head_name" style="display:none"/>
                          <input type="text" value="<?php echo $head_mob;?>" name="head_mob" style="display:none"/>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Year</label>
                              <div class="col-sm-10">
                                  
						    <select class="form-control" name="year">
                                  <option>-- Select Year --</option>
                                  <option>1 Year</option>
                                  <option>2 Year</option>
                                  <option>3 Year</option>
                                  <option>4 Year</option>
						</select>
						  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input class="form-control" type="text" name="email" required>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Mobile </label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" name="mobile" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Amount</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" name="amount" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-10">
                                <button type="submit" name="register" class="btn btn-theme03" style="margin-left:170px; width:150px;">Register</button>  
                              </div>
                          </div>
                          	
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
                   
          		</div>
          	</div>
			
		</section><! --/wrapper -->
    <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="mylogin" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content" style="width:332px;margin-left:180px;margin-top:80px;">

                        <form class="form-login" autocomplete="off" method="post" action="authen_login.php" style="margin-top:0px;">
                        <h2 class="form-login-heading">sign in now</h2>
                                <div class="login-wrap">
                                    <input class="form-control" placeholder="User ID" autofocus="" name="user_id" id="user_id" required="" type="text">
                                    <br>
                                    <input class="form-control" placeholder="Password" name="user_pass" id="user_pass" required="" type="password">
                                    <label class="checkbox">
                                        <span class="pull-right">
                                            <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                                        </span>
                                    </label>
                                    <button class="btn btn-theme btn-block" type="submit" name="register"><i class="fa fa-lock"></i> SIGN IN</button>
                                    <hr>
                                </div>

                                  <!-- Modal -->
                                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                  <h4 class="modal-title">Forgot Password ?</h4>
                                              </div>
                                              <div class="modal-body">
                                                  <p>Enter your e-mail address below to reset your password.</p>
                                                  <input name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" type="text">

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                                  <button class="btn btn-theme" type="button">Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- modal -->

                              </form>	  	                              
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center" style="color:black;">
              Developed By - Sahil Killedar & Team
          </div>
      </footer>
      <!--footer end-->
  </section>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
