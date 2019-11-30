<?php session_start(); ?>

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
                      <a class="active" href="MCA_Event.php" >
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
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-12">
                    <?php
                                    $servername = "localhost";
                                    $username = "sahil9697";
                                    $password = "17143281";
                                    //set up database and table names
                                     $db_name ="gcek_fest";
                                     $table_name ="events";
                                     //connect to MySQL and select database to use
                                     $connection = @mysqli_connect($servername, $username, $password) or die(mysql_error());
                                     $db = @mysqli_select_db($connection, $db_name) or die(mysql_error());
                                     $result = mysqli_query($connection,"SELECT * FROM $table_name where Organizer='Master of Computer Applications'");
                                    $i=0;
                                    $num_records=mysqli_num_rows($result);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                    $ename=$row['Event_Name'];
                                    $fee=$row['Fee'];
                                    $e_id=$row['e_id'];
                                    $org=$row['Organizer'];
                                    echo '<div class="col-lg-4 col-md-4 col-sm-4 mb">
                                            <div class="content-panel pn">
                                                <div id="profile-01">';
                                                    echo'<h3>';echo $ename;echo'</h3>';
                                                    echo'<h6 style="font-size:18px">Rs : ';echo $fee; echo'</h6>';
                                                echo'</div>';
                                                echo'<a href="reg.php?eid=';echo $e_id; echo'"';echo'>';
                                                echo'    <div class="profile-01 centered" >';
                                                        echo'<p>CHECK OUT NOW</p>
                                                    </div>
                                                </a>';
                                                echo'<div class="centered">';
                                                    echo'<h6><br/>';echo $org; echo'</h6>';
                                                echo'</div>
                                            </div><! --/content-panel -->
                                        </div><! --/col-md-4 -->';
                                
                        }
                        ?>
										
					
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
<? 
function createSes()
{
    $_SESSION["event"]="SK";
       myFunction();
}
//$_SESSION["event"]=$_GET['id']; 
          ?>
          
          
          
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
    
    <script>
          function myFunction()
        {
            window.sessionStorage.setItem('event','AAVISHKAR');
            
            window.location.href="reg.php";
        }
          </script>
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
