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
 $sql = "INSERT INTO $table_name (Name, College, Branch, Year, Event, Mobile, Email, Amount) VALUES ('$_POST[name]', '$_POST[college]', '$_POST[branch]', '$_POST[year]', '$_POST[event]', '$_POST[mobile]', '$_POST[email]', '$_POST[amount]')";
 $result = @mysqli_query($connection, $sql) or die(mysql_error());
 /*if($result)
 {
	$msg="Record added successfully...";
 }
 echo $msg;*/
$name=$_POST['name'];
$event=$_POST['event'];
$venue=$_POST['venue'];
$e_date=$_POST['e_date'];
$duration=$_POST['duration'];
$head_name=$_POST['head_name'];
$head_mob=$_POST['head_mob'];
$amount=$_POST['amount'];

$account="";
$password='';
$to=$_POST['email'];
$from="Gcek Fest";
$from_name="GCEK Fest";
//$msg= '<b>"Welcome"!</b>';
$msg= "Hello ".$name.",<br> we are from Government College of Engineering, Karad <br> It's our great pleasure that, you have successfully registered for ".$event.". <br> Congratulations !!!! <br><br> Event Date : ".$e_date."<br>Amount Paid : ".$amount."<br> Duration : ".$duration."<br> Venue : ".$venue."<br><br> Note : If possible bring your laptop with you. <br> If you have any queries please ask to <br>".$head_name." (Event Head)"." <br> Contact No : ".$head_mob."<br><br>Regards,<br>Team GCE, Karad.";
// HTML message

$subject="Inviting you to our event!!";
/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
//$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 $msg = "Mailer Error: " . $mail->ErrorInfo;
}else{
 $msg = "E-Mail has been sent";
}

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
						        You are successfully registered for our event, Thank you ! 
						      </div>
                                <a href="panels.php">
                                <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Done</button>
						        </div>
                                </a>
						      
						    </div>
						  </div>
						  
    </body>
</html>