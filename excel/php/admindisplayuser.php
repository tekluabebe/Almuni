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
Admin Page
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
<h3>User of The System:</h3>
<form action="adminrespdelproc.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157"><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User_Type</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit</th></tr>
<?php
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from user";
$r=mysqli_query($con,$q);
 while($row = mysqli_fetch_array($r))
{
$Id=$row['User_type'];
$ln=$row['Name'];
$cg=$row['username'];
$q=$row['password'];
$qe=$row['email'];
?>
<tr bgcolor="#BADFE8" ><td><strong><?php echo $Id;?></strong></td><td><strong><?php echo $ln;?></strong></td><td><strong><?php echo $cg;?></strong></td><td><strong><?php echo $q;?></strong></td><td><strong><?php echo $qe;?></strong></td><td><strong><a href="adminupdateuser.php?ID=<?php echo $Id;?>"><img src="iterfaceimage/update-icon.png" width="100" height="35"/></a></strong></strong></td></tr>
                   <?php
}
?>
</table>
</div>
</form>
</div></div>
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