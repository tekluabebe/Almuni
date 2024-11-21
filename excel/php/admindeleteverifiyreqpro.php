<html>
<head>
<title>Delete Verified Request</title>
</head>
<body>
<?php
$Id=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "delete from info_verification where info_verification.ID='".$Id."'";
	mysqli_query ($con,$sql);
	$sql2 = "delete from request_approval where request_approval.Employe_ID='".$Id."'";
	mysqli_query ($con,$sql2);
		$sql3 = "delete from company where company.ID='".$Id."'";
	mysqli_query ($con,$sql3);
			$sql4 = "delete from employe where employe.ID='".$Id."'";
	mysqli_query ($con,$sql4);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Request Delete  Succesfully");window.location=\'admindeleteverifiedreq.php\';</script>';

?>
</body>
</html>