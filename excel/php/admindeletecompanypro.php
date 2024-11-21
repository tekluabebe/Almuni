<html>
<head>
<title>Delete Company</title>
</head>
<body>
<?php
$Id=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "delete from company where company.ID='".$Id."'";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Company Deleted Succesfully");window.location=\'admindeletecompany.php\';</script>';

?>
</body>
</html>