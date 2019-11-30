<html>
<link href="style.css" type="text/css" rel="stylesheet">
<body>
<form autocomplete="off" method="post" action="Registration.php">
<div id='selectedResult'></div>

<select name='test' onChange='showSelected(this.value)'>
	<option value='1'>one</option>
	<option value='2'>two</option>
</select>
</form>
<script type="text/javascript">
	function showSelected(val){
		//document.getElementById
//('selectedResult').innerHTML = "The selected number is - " 
//+ val;
$sk=document.write(val);
//document.getElementById("selectedResult").innerHTML="<?php 
//$phpvar='"+val+"'; 
//echo $phpvar; ?>";
	}
</script>
</body>
</html>
<? 
//$myPhpVar= $_POST['val'];

echo $sk;


?>