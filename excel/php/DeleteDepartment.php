<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Delete Student</title>
</head>
<body>
<?php
$Id=$_GET['FacId'];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "delete from student where student.ID='".$Id."'";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Student Updated Succesfully");window.location=\'regupdate.php\';</script>';

?>
</body>
</html>
