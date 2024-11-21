<html>
<head>
<title>BHU ALUMNI SYSTEM</title>
</head>
<body>
<?php 
$gid=$_POST['Gid'];
$gfname=$_POST['Gfname'];
$gmname=$_POST['Gmname'];
$glname=$_POST['Glname'];
$gpa=$_POST['Gpa'];
$yog=$_POST['Yog'];
$gqul=$_POST['Gqul'];
$mgender=$_POST['mgender'];
$gdep=$_POST['gdep'];
$image_size=getimagesize($_FILES['image']['tmp_name']);
if ($image_size==FALSE)
{
echo '<script type="text/javascript">alert("Please select student an image!");window.location=\'InsertAndupdate.php\';</script>';
exit();
}
else
{
if ($_FILES['image']['size']<=30000)
{
$gphoto=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_type=addslashes($_FILES['image']['type']);
$con = mysqli_connect("localhost","root","","alumni");
if(move_uploaded_file ($_FILES['image']['tmp_name'],"image/".$_FILES['image']['name']))
$sql = "INSERT INTO student (ID,Frist_Name,Midle_Name,Last_Name,Cumulative_Gpa,Year_of_Graduation,Qualification,Gender,Department,Photo,Photo_type) VALUES ('$gid','$gfname','$gmname','$glname','$gpa','$yog','$gqul','$mgender','$gdep','$gphoto','$image_type')";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
mysqli_close($con);
echo '<script type="text/javascript">alert("Student added success");window.location=\'InsertAndupdate.php\';</script>';
exit();
}
else
{
echo '<script type="text/javascript">alert("The image is to big!");window.location=\'InsertAndupdate.php\';</script>';
exit();
}

}
?>
</body>
</html>
