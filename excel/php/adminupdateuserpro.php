<html>
<head>
<title>BHU ALUMNI SYSTEM</title>
</head>
<body>
<?php 
$gid=$_GET['ID'];
$gfname=$_POST['Gfname'];
$gmname=$_POST['Gmname'];
$glname=$_POST['Glname'];
$yog=$_POST['Gpa'];
$con = mysqli_connect("localhost","root","","alumni");
$sql = "UPDATE user SET Name='".$gfname."',username='".$gmname."',Password='".$glname."',email='".$yog."' WHERE user.User_type='".$gid."'";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
mysqli_close($con);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'admindisplayuser.php\';</script>';
?>
</body>
</html>