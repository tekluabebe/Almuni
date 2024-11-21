<html>
<head>
<title>BHU ALUMNI SYSTEM</title>
</head>
<body>
<?php 
session_start();
$gid=$_POST['Gid'];
$Cphone=$_POST['cphone'];
$Cname=$_POST['cname'];
$Cemail=$_POST['cemail'];
$Ccountry=$_POST['ccountry'];
$Ccity=$_POST['ccity'];
$Date=$_POST['date'];
$Rfv=$_POST['rov'];
$con = mysqli_connect("localhost","root","","alumni");
$sql = "INSERT INTO company (ID,Company_Phone,Company_Name,Company_Email,Company_Country,Company_City,Date,Reason_of_Verification) VALUES (
'$gid','$Cphone','$Cname','$Cemail','$Ccountry','$Ccity','$Date','$Rfv')";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
die(header("location:rf.php"));
mysqli_close($con);

?>
</body>
</html>
