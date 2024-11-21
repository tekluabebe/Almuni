<?php
            session_start();
           if(!isset($_SESSION['username']))
		   { 
		   header("location:login.php");
		   }
		   else
		   {
		   ?><html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<title>
Administrator Page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
include "adminheader.php";
		?>
				<div id="leftsh">
<?php
		include "adminleft.php";
		?>
<div id="spaceesh">
<div id ="middle" style="height:412px;width:810px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<div id="aformsh">
<h3>Generated Report:</h3>
<form action="adminrespdelproc.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157"><th>ID:</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First_Name</th><th>Midle_Name</th><th>Last_Name</th><th>Gpa</th><th>Year</th><th>Qualification</th><th>Gender</th><th>Department</th><th>Delete</th></tr>
<?php
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from report";
$r=mysqli_query($con,$q);
 while($row = mysqli_fetch_array($r))
{
$qew = "select * from check_view";
$rr=mysqli_query($con,$qew);
while($rows=mysqli_fetch_array($rr))
{
if($row['ID']==$rows['ID'])
{
if($rows['View']=="Viewed")
{
$Id=$row['ID'];
$fn=$row['Frist_Name'];
$mn=$row['Midle_Name'];
$ln=$row['Last_Name'];
$cg=$row['Cumulative_Gpa'];
$yog=$row['Year_of_Graduation'];
$q=$row['Qualification'];
$g=$row['Gender'];
$d=$row['Department'];
?>
<tr bgcolor="#BADFE8" ><td><strong><?php echo $Id;?></strong></td><td><strong><?php echo $fn;?></strong></td><td><strong><?php echo $mn;?></strong></td><td><strong><?php echo $ln;?></strong></td><td><strong><?php echo $cg;?></strong></td><td><strong><?php echo $yog;?></strong></td><td><strong><?php echo $q;?></strong></td><td><strong><?php echo $g;?></strong></td><td><strong><?php echo $d;?></strong></td><td><strong><a href="admindeletereportgenerated.php?ID=<?php echo $Id;?>"onclick="return confirm('Are You Want to Delete This Generetad Report?')"><img src="iterfaceimage/delete-icon.jpg" width="30" height="30"/></a></strong></strong></tr>
                   <?php
}
}
}
}
?>
</table>
</div>
</div>
</form>
</div>
	</div>
<?php
		include "yfoot.php";
		?>
</div>
</body>
</html>
<?php
}
?>
