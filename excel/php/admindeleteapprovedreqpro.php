<html>
<head>
<title>Delete Approved Request</title>
</head>
<body>
<?php
$Id=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "delete from request_approval where request_approval.Employe_ID='".$Id."'";
	mysqli_query ($con,$sql);
	$sql3 = "delete from company where company.ID='".$Id."'";
	mysqli_query ($con,$sql3);
			$sql4 = "delete from employe where employe.ID='".$Id."'";
	mysqli_query ($con,$sql4);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Request approval Deleted Succesfully");window.location=\'admindeleteapprovedreq.php\';</script>';

?>
</body>
</html>