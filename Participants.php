<?php
session_start();
$ename = $_GET['ename'];
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
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-12">
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>  <?php echo $ename; ?> Participants</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <?php
                                $servername = "localhost";
                                $username = "sahil9697";
                                $password = "17143281";
                                //set up database and table names
                                 $db_name ="gcek_fest";
                                 $table_name ="students";
                                 //connect to MySQL and select database to use
                                 $connection = @mysqli_connect($servername, $username, $password) or die(mysql_error());
                                 $db = @mysqli_select_db($connection, $db_name) or die(mysql_error());
                                 //test if connection failed
                                if(mysqli_connect_errno()){
                                    die("connection failed: "
                                        . mysqli_connect_error()
                                        . " (" . mysqli_connect_errno()
                                        . ")");
                                }

                                //get results from database
                                $result = mysqli_query($connection,"SELECT * FROM $table_name where Event='$ename'");
                                $all_property = array();  //declare an array for saving property

                                //showing property
            
                                echo '<table border=\"0\" class="table table-bordered table-striped table-condensed">
                                        <tr class="data-heading">';  //initialize table tag
                                while ($property = mysqli_fetch_field($result)) {
                                    echo '<th>' . $property->name . '</th>';  //get field name for header
                                    array_push($all_property, $property->name);  //save those to array
                                }
                                echo '</tr>'; //end tr tag
                                $amount=0;
                                $i=0;
                                //showing all data
                                while ($row = mysqli_fetch_array($result)) {
                                    $i=$i+1;
                                    echo "<tr>";
                                    foreach ($all_property as $item) {
                                        echo '<td>' . $row[$item] . '</td>'; //get items using property value
                                    }
                                    echo '</tr>';
                                    $amount=$amount+$row['Amount'];
                                }
                                echo "</table>";

                                ?>
                          </table>
                          </section>
                          <br>
                          <h4><center>Total Participants = <?php echo $i; ?> </center></h4>
                          <h4><center>Total Amount Collection = <?php echo $amount; ?> Rs. </center></h4>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
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
