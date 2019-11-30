<?php
session_start();

$eid = $_GET['eid'];
?>

<html>
<link href="style.css" type="text/css" rel="stylesheet">
<body>
<form autocomplete="off" method="post" action="Registration.php">
<h1 style="font-size:30px; margin-top:20px;">Student Registration</h1>
<p><label>Name : <input type="text" name="name" required></label></p>
<p><label>College : <input type="text" name="college" required></label></p>
<p><label>Branch : <input type="text" name="branch" required></label></p>
<datalist id="years">
  <option value="I">
  <option value="II">
  <option value="III">
  <option value="IV">
</datalist>
<p><label>Year : <input type="text" list="years" name="year" required></label></p> 
<? 
$servername = "localhost";
$username = "sahil9697";
$password = "17143281";
//set up database and table names
 $db_name ="gcek_fest";
 $table_name ="events";
 //connect to MySQL and select database to use
 $connection = @mysqli_connect($servername, $username, $password) or die(mysql_error());
 $db = @mysqli_select_db($connection, $db_name) or die(mysql_error());
 $result = mysqli_query($connection,"SELECT Event_Name FROM $table_name where e_id =$eid");
 while ($row = mysqli_fetch_array($result)) {
    $ename = $row['Event_Name'];
}
?>
<p><label><input type="text" value="<?php echo $ename;?>" name="event" style="display:none"/></label></p>
<p><label>Mobile No. : <input type="text" name="mobile"></label></p>
<p><label>Email : <input type="text" name="email" required></label></p>
<?
$servername = "localhost";
$username = "sahil9697";
$password = "17143281";
//set up database and table names
 $db_name ="gcek_fest";
 $table_name ="events";
 //connect to MySQL and select database to use
 $connection = @mysqli_connect($servername, $username, $password) or die(mysql_error());
 $db = @mysqli_select_db($connection, $db_name) or die(mysql_error());
 $result = mysqli_query($connection,"SELECT Fee FROM $table_name WHERE Event_Name='$sk' limit 1");
$row = mysqli_fetch_array($result);
$firstname = $row['Fee'];
?>
<p><label>Amount : <input type="text" name="amount"></label></p>
<button style="font-size : 18px;height:45px;width:200px;margin-left:500px",type="submit" name="register" class="button">Register</button>
</form>
<script type="text/javascript">
	function showSelected(val){
		//document.getElementById
//('selectedResult').innerHTML = "The selected number is - " 
//+ val;
$sk=document.write(val);
$a=$sk;
//document.getElementById("selectedResult").innerHTML="<?php 
//$phpvar='"+val+"'; 
//echo $phpvar; ?>";
	}
</script>
</body>
</html>
<? echo $a; ?> 