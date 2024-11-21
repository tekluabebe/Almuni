<?php
            session_start();
           if(!isset($_SESSION['username']))
		   { 
		   header("location:login.php");
		   }
		   else
		   {
		   ?>
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
						<div id="leftsh">
<?php
		include "adminleft.php";
		?>
<div id="spaceesh">
<div id="aformsh">
<h3>Request Employe:</h3>
<form action="adminUpdatepro.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157"><th>ID</th><th>First_Name</th><th>Midle_Name</th><th>Last_Name</th><th>Year</th><th>Qualification</th><th>Gender</th><th>Department</th><th>Photo</th><th>Delete</th></tr>
<?php
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from employe";
$r=mysqli_query($con,$q);
 while($row = mysqli_fetch_array($r))
{
$Id=$row['ID'];
$fn=$row['Frist_Name'];
$mn=$row['Midle_Name'];
$ln=$row['Last_Name'];
$yog=$row['Year_of_Graduation'];
$q=$row['Qualification'];
$g=$row['Gender'];
$d=$row['Department'];
$p=$row['Photo'];
?>
<tr bgcolor="#BADFE8" ><td><strong><?php echo $Id;?></strong></td><td><strong><?php echo $fn;?></strong></td><td><strong><?php echo $mn;?></strong></td><td><strong><?php echo $ln;?></strong></td><td><strong><?php echo $yog;?></strong></td><td><strong><?php echo $q;?></strong></td><td><strong><?php echo $g;?></strong></td><td><strong><?php echo $d;?></strong></td><td><strong><img src="imagepro2.php?ID=<?php echo $row['ID']?>" width="100" height="50"></td><td><strong><a href="admindeleteemploye.php?ID=<?php echo $Id;?>"onclick="return confirm('Are you want to permanently delete this data?')"><img src="iterfaceimage/delete-icon.jpg" width="60" height="50"/></a></strong></strong></tr>
                    <?php
}
?>
</table>
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
