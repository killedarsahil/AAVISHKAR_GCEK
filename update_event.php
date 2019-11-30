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
                      <a href="admin.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="Add_Event.php">
                          <i class="fa fa-desktop"></i>
                          <span>Add New Event</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="IT.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Information Technology</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="MCA.php" >
                          <i class="fa fa-cogs"></i>
                          <span>MCA</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="ENTC.php" >
                          <i class="fa fa-book"></i>
                          <span>ENTC</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="Mechanical.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Mechanical Engineering</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="Electrical.php" >
                          <i class="fa fa-th"></i>
                          <span>Electrical Engineering</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="Civil.php" >
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
            $eid=$row['e_id'];
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
							 
							<div class="content-panel pn" style="margin-left:80px;margin-right:40px;margin-top:150px;">
								<div id="profile-01">
									<h3><?php echo $ename;?></h3>
									<h6 style="font-size:18px">Rs : <?php echo $amt;?></h6>
								</div>
                                <a  data-toggle="modal" href="#delete">
                                <div class="profile-01 centered" >
                                        <p>DELETE THIS EVENT</p>
                                    </div>
                                </a>
								<div class="centered">
									<h6><br/><?php echo $venue;?></h6>
								</div>
							</div><! --/content-panel -->
           		</div>
                <div class="col-lg-6">
          		    
                    <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Update this Event </h4>
                      <form class="form-horizontal style-form" method="post" action="Modify.php" autocomplete="off">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="ename" value="<?php echo $ename;?>" required>
                              </div>
                          </div>
                          
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Venue</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="venue">
                                  <option><?php echo $venue;?></option>
                                  <option>Information Technology</option>
                                  <option>Mechanical Engineering</option>
                                  <option>ENTC Engineering</option>
                                  <option>Electrical Engineering</option>
                                  <option>Civil Engineering</option>
                                  <option>Master of Computer Applications</option>
                                </select>
                          </div>
                              </div>
                          
                          <input type="text" value="<?php echo $eid;?>" name="e_id" style="display:none"/>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Participants</label>
                              <div class="col-sm-10">
                                  
						    <select class="form-control" name="participants">
                                  <option><?php echo $participants;?></option>
                                  <option>1 </option>
                                  <option>2 </option>
                                  <option>3 </option>
                                  <option>4 </option>
						</select>
						  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Registration Date</label>
                              <div class="col-sm-10">
                                  <input class="form-control" placeholder="dd/mm/YYYY" type="text" name="r_date" value="<?php echo $r_date;?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Event Date</label>
                              <div class="col-sm-10">
                                  <input class="form-control" placeholder="dd/mm/YYYY" type="text" name="e_date" value="<?php echo $e_date;?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Duration</label>
                              <div class="col-sm-10">
                                  
						    <select class="form-control" name="duration">
                                  <option><?php echo $duration;?></option>
                                  <option>1 Day </option>
                                  <option>2 Days </option>
                                  <option>3 Days </option>
                                  <option>4 Days </option>
						</select>
						  
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Event Head</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="head_name" value="<?php echo $head_name;?>" required>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact No.</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" name="head_mob" value="<?php echo $head_mob;?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Amount</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" name="amt" value="<?php echo $amt;?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-10">
                                <button type="submit" name="register" class="btn btn-theme03" style="margin-left:170px; width:150px;">Update</button>  
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
      <form autocomplete="off" method="post" action="delete_event.php">
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete" class="modal fade">
		             <!-- Modal -->
						  
                              <input type="text" value="<?php echo $eid;?>" name="e_id" style="display:none"/>
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">GCEK FEST</h4>
						      </div>
						      <div class="modal-body">
						        Are you sure to delete this event ?
						      </div>
                                
                                <div class="modal-footer">
						        <button class="btn btn-default" type="submit" name="register">Yes</button>
						        </div>
                                
						      
						    </div>
						  </div>
                      
		          </div>
          </form>
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
