<?php
 $gid=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");

$q = "select Photo,Photo_type from employe WHERE ID='$gid'";
$r=mysqli_query($con,$q);
if($r)
{
 $row= mysqli_fetch_array($r);
 $type="content-type:".$row['Photo_type'];
 header($type);
echo $row['Photo'];
}
else
{
 echo mysqli_error();
 }
?>