<?php
$gid=$_POST['Gid'];
$yog=$_POST['Yog'];
$gqul=$_POST['gqul'];
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from student where ID like '%$gid%' and Year_of_Graduation like '%$yog%' and Qualification like '%$gqul%'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)==0)
 {
 echo"No such record exists";
  exit();
 }
$q="delete from student where ID='$gid' AND Year_of_Graduation='$yog'";
mysqli_query($q);
echo"Record deleted successfully";
?>