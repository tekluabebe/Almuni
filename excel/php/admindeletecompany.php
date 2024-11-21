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
Admin page
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
<h3>Request Company:</h3>
<form action="adminrespdelproc.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157"><th>ID:</th><th>Comp_Phone</th><th>Comp_Name</th><th>Comp_Email</th><th>Comp_country</th><th>Comp_City</th><th>Date</th><th>Reason</th><th>Delete</th></tr>
<?php
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from company";
$r=mysqli_query($con,$q);
 while($row = mysqli_fetch_array($r))
{
$Id=$row['ID'];
$fn=$row['Company_Phone'];
$mn=$row['Company_Name'];
$ln=$row['Company_Email'];
$cg=$row['Company_country'];
$yog=$row['Company_City'];
$q=$row['Date'];
$g=$row['Reason_of_Verification'];
?>
<tr bgcolor="#BADFE8" ><td><strong><?php echo $Id;?></strong></td><td><strong><?php echo $fn;?></strong></td><td><strong><?php echo $mn;?></strong></td><td><strong><?php echo $ln;?></strong></td><td><strong><?php echo $cg;?></strong></td><td><strong><?php echo $yog;?></strong></td><td><strong><?php echo $q;?></strong></td><td><strong><?php echo $g;?></strong></td><td><strong><a href="admindeletecompanypro.php?ID=<?php echo $Id;?>"onclick="return confirm('Are you want to permanently delete this data?')"><img src="iterfaceimage/delete-icon.jpg" width="30" height="30"/></a></strong></strong></tr>
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