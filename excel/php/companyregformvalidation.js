<html>
<head>
<title>BHU Alumni System</title>
</head>
<body>
<?php 
session_start();
$eid=$_POST['Gid'];
$rea=$_POST['regA'];
$gq=$_POST['gq'];
$con = mysqli_connect("localhost","root","gcvs_db_success") or die("Can not select Database");
$sql = "INSERT INTO info_verification (ID,Verification,Qualification) VALUES ('$eid','$rea','$gq')";
if(!mysqli_query($sql,$con))
{
die('Error:'.mysqli_error());
}
echo "record added success";
mysqli_close($con);
?>
</body>
</html>
