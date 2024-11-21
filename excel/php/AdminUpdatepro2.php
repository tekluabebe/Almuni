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
$yog=$_POST['Yog'];
$gqul=$_POST['gqul'];
$mgender=$_POST['mgender'];
$gdep=$_POST['gdep'];
$image_size=getimagesize($_FILES['image']['tmp_name']);
if ($image_size==FALSE)
{
echo '<script type="text/javascript">alert("Please select student an image!");window.location=\'adminUpdate.php\';</script>';
exit();
}
else
{
if ($_FILES['image']['size']<=40000)
{
$gphoto=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_type=addslashes($_FILES['image']['type']);
$con = mysqli_connect("localhost","root","","gcvs_db_success");
if(move_uploaded_file ($_FILES['image']['tmp_name'],"image/".$_FILES['image']['name']))
$sql = "UPDATE student SET Frist_Name='".$gfname."',Midle_Name='".$gmname."',Last_Name='".$glname."',Year_of_Graduation='".$yog."',Qualification='".$gqul."',Gender='".$mgender."',Department='".$gdep."' ,Photo='".$gphoto."',Photo_type='".$image_type."' WHERE student.ID='".$gid."'";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
mysqli_close($con);
echo '<script type="text/javascript">alert("Student Updated Succesfully");window.location=\'adminUpdate.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("The Student image is too big to upload!");window.location=\'adminUpdate.php\';</script>';
exit();
}
}
?>
</body>
</html>