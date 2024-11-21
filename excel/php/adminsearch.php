<html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<title>
Adminstrator page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
		include "adminheader.php";
		?>
<div id="space">
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
?>
<table border="1">
<tr>
<td><font color='red'>ID</font></td> 
<td><font color='red'>Frist_Name</font></td>
<td><font color='red'>Midle_Name</font></td>
<td><font color='red'>Last_Name</font></td>
<td><font color='red'>Cumulative_Gpa</font></td>
<td><font color='red'>Year_of_Graduation</font></td>
<td><font color='red'>Qualification</font></td>
<td><font color='red'>Gender</font></td>
<td><font color='red'>Department</font></td>
<td><font color='red'>Photo</font></td>
</tr>
<?php
for ($i = 0; $i < mysqli_num_rows($r); $i++)
{
$row= mysql_fetch_row($r);
echo "<tr><td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "<td>".$row[7]."</td>";
echo "<td>".$row[8]."</td>";
echo "<td>".$row[9]."</td></tr>";
}
?>
</div>
<?php
		include "yfoot.php";
		?>
</div>

</body>
