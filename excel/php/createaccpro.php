<html>
<head>
<title>BHU ALUMNI SYSTEM</title>
</head>
<body>
<?php 
$so=$_POST['selectop'];
$uac=$_POST['uaccount'];
$up=$_POST['pass'];
$nua=$_POST['nuaccount'];
$np=$_POST['npass'];
$cnp=$_POST['ncpass'];
if($np!=$cnp)
{
echo '<script type="text/javascript">alert("the password  is not confirmed!");window.location=\'UserAccount.php\';</script>';
exit();
}
else
{
$con = mysqli_connect("localhost","root","","alumni");
$sq = "select * from user where User_type='".$so."'";
$result = mysqli_query($con,$sq);
$row = mysqli_fetch_array($result);  
if(($uac===$row['username'])&&($up==$row['password'])&&($np==$cnp))
{
$sql = "UPDATE  user SET username='$nua',password='$np' WHERE User_type='".$so."'";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
}
mysqli_close($con);
echo '<script type="text/javascript">alert("User Name and password changed successfuly!");window.location=\'UserAccount.php\';</script>';
exit();
}
?>
</body>
</html>
