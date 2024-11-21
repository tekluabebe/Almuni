<html>
<head>
<title>Delete Student</title>
</head>
<body>
<?php
$Id=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "delete from student where student.ID='".$Id."'";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Student Deleted Succesfully");window.location=\'adminUpdate.php\';</script>';

?>
</body>
</html>
