<html>
<head>
<title>Delete Employe</title>
</head>
<body>
<?php
$Id=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "delete from employe where employe.ID='".$Id."'";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("employe Deleted Succesfully");window.location=\'admindisplayemploye.php\';</script>';

?>
</body>
</html>