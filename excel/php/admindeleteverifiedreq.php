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
<div id ="middle" style="height:412px;width:810px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<div id="aformsh">
<h3>Verified Employe Information</h3>
<form action="adminUpdatepro.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157"><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verification</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</th></tr>
<?php
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from info_verification";
$r=mysqli_query($con,$q);
 while($row = mysqli_fetch_array($r))
{
$Id=$row['ID'];
$fn=$row['Verification'];
?>
<tr bgcolor="#BADFE8" ><td><strong><?php echo $Id;?></strong></td><td><strong><?php echo $fn;?></strong></td><td><strong><a href="admindeleteverifiyreqpro.php?ID=<?php echo $Id;?>"onclick="return confirm('Are You Want to Delete this Verified Data?')"><img src="iterfaceimage/delete-icon.jpg" width="30" height="30"/></a></strong></td></tr>
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