<html>
<head>
<title>BHU ALUMNI SYSTEM</title>
</head>
<body>
<?php 
session_start();
$eid=$_GET['ID'];
$rea=$_POST['regA'];
if ($rea=="--select one--")
{
echo '<script type="text/javascript">alert("please select verification option");window.location=\'verifygraduateInfo.php\';</script>';
exit();
}
else
{
$con = mysqli_connect("localhost","root","","alumni");
$sql = "INSERT INTO info_verification (ID,Verification) VALUES ('$eid','$rea')";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
echo '<script type="text/javascript">alert("Verification added success");window.location=\'verifygraduateInfo.php\';</script>';
mysqli_close($con);
}
?>
</body>
</html>
