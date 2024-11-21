
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
Registerar page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
		include "registerarheader.php";
		?>
						<div id="leftsh">
<?php
		include "registerarleft.php";
		?>
<div id="spaceesh">
<div id="aformsh">
<div id ="middle" style="height:700px;width:800px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<h3>Graduate Information:</h3>
<form action="adminUpdatepro.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157"><th>ID:</th><th>First_Name</th><th>Midle_Name</th><th>Last_Name</th><th>Gpa</th><th>Year</th><th>Qualification</th><th>Gender</th><th>Department</th><th>Photo</th><th>Edit</th><th>Delete</th></tr>
<?php
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from student";
$r=mysqli_query($con,$q);
 while($row = mysqli_fetch_array($r))
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
$p=$row['Photo'];
?>
<tr bgcolor="#BADFE8" ><td><strong><?php echo $Id;?></strong></td><td><strong><?php echo $fn;?></strong></td><td><strong><?php echo $mn;?></strong></td><td><strong><?php echo $ln;?></strong></td><td><strong><?php echo $cg;?></strong></td><td><strong><?php echo $yog;?></strong></td><td><strong><?php echo $q;?></strong></td><td><strong><?php echo $g;?></strong></td><td><strong><?php echo $d;?></strong></td><td><strong><img src="imagepro.php?ID=<?php echo $row['ID']?>" width="30" height="50"></td><td><strong><a href="adminUpdatepro.php?ID=<?php echo $Id;?>"><img src="iterfaceimage/update-icon.png" width="30" height="50"/></a></strong></td><td><strong><a href="admindeletestudent.php?ID=<?php echo $Id;?>"onclick="return confirm('Are You Want to Permanently Delete Student Data?')"><img src="iterfaceimage/delete-icon.jpg" width="30" height="40"/></a></strong></strong></tr>
                    <?php
}
?>
</table>
<h2 align="right"><a href="export-csv/export.php">DOWNLOAD</a></h2></div>
<marquee direction="right to left"><h2 align="center">There are <?php
$con = mysqli_connect("localhost","root","","alumni");
$result = mysqli_query($con,"SELECT * FROM student");
	$numberOfRows = MYSQLI_NUM_ROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="6" color="#FF0000" bgcolor="#003366">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?> graduated students!</h2></marquee>
<!--<input type="button" onClick="window.location.href='export-csv/export.php' " value="DOWNLOAD" style="background-color:#FF0000"/>-->

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
