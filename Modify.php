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
 $sql = "UPDATE $table_name SET Event_Name='$_POST[ename]', Participants='$_POST[participants]', Fee='$_POST[amt]', Organizer='$_POST[venue]', E_Date='$_POST[e_date]', R_Date='$_POST[r_date]', Duration='$_POST[duration]', E_Head_Name='$_POST[head_name]', E_Head_Mob='$_POST[head_mob]' WHERE e_id='$_POST[e_id]' ";
 $result = @mysqli_query($connection, $sql) or die(mysql_error());
 /*if($result)
 {
	$msg="Record added successfully...";
 }
 echo $msg;*/
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
      <!-- Modal -->
						
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">GCEK FEST</h4>
						      </div>
						      <div class="modal-body">
						        Event updated successfully, Thank you ! 
						      </div>
                                <a href="admin.php">
                                <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Done</button>
						        </div>
                                </a>
						      
						    </div>
						  </div>
						  
    </body>
</html>