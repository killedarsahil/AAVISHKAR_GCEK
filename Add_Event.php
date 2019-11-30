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
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>EVENTS MANAGEMENT</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="panels.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
       
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
                      <a class="active" href="Add_Event.php">
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
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-12">
                                 <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> ADD NEW EVENT </h4>
                      <form class="form-horizontal style-form" method="post" action="new_event.php" autocomplete="off">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Event Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="ename" required>
                              </div>
                          </div>
                          
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Venue</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="venue">
                                  <option>-- Select Venue -- </option>
                                  <option>Informantion Technology</option>
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
                                  <option>-- Select number of participants --</option>
                                  <option>1 </option>
                                  <option>2 </option>
                                  <option>3 </option>
                                  <option>4 </option>
						</select>
						  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Last Registration Date</label>
                              <div class="col-sm-10">
                                  <input class="form-control" placeholder="dd/mm/YYYY" type="text" name="r_date" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Event Date</label>
                              <div class="col-sm-10">
                                  <input class="form-control" placeholder="dd/mm/YYYY" type="text" name="e_date" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Duration</label>
                              <div class="col-sm-10">
                                  
						    <select class="form-control" name="duration">
                                  <option>-- Select event duration --</option>
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
                                  <input type="text" class="form-control" name="head_name" required>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact No.</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" name="head_mob" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Amount</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" name="amt" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-10">
                                <button type="submit" name="register" class="btn btn-theme03" style="margin-left:440px; width:150px;">ADD EVENT</button>  
                              </div>
                          </div>
                          	
                      </form>
                  </div>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
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
