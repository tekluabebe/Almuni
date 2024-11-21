<html>
<head>
<title>Delete Report</title>
</head>
<body>
<?php
$Id=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "delete from report where report.ID='".$Id."'";
	mysqli_query ($con,$sql);
		$sqll = "delete from check_view where check_view.ID='".$Id."'";
	mysqli_query ($con,$sqll);
		$sql1 = "delete from info_verification where info_verification.ID='".$Id."'";
	mysqli_query ($con,$sql1);
		$sql2 = "delete from request_approval where request_approval.Employe_ID='".$Id."'";
	mysqli_query ($con,$sql2);
		$sql3 = "delete from company where company.ID='".$Id."'";
	mysqli_query ($con,$sql3);
			$sql4 = "delete from employe where employe.ID='".$Id."'";
	mysqli_query ($con,$sql4);
	
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Report Deleted Succesfully");window.location=\'adminsearchrepdel.php\';</script>';

?>
</body>
</html>