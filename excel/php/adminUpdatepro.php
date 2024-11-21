
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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<title>
Registerar page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
	include "adminheader.php";
		?>
				<div id="left">
<?php
			include "adminleft.php";
		?>
		</div>
<div id="spacee">
<div id="aform">
<?php
$gid=$_GET['ID'];
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from student where ID='$gid'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)==0)
 {
 echo"No such record exists";
  exit();
 }
?>
<?php
for ($i = 0; $i < mysqli_num_rows($r); $i++)
{
$row= mysqli_fetch_row($r);
$Id=$row[0];
?>
<h3>Update Graduate Information Form:</h3>
<form method="post"  enctype="multipart/form-data" action="AdminUpdatepro2.php?ID=<?php echo $Id;?>">
<table cellspacing="15" cellpadding="10">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graduate ID:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[0];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Frist Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield1">
              <label><input type="text" name="Gfname" size="20" id="span9001" value="<?php echo $row[1];?>"><span class="textfieldRequiredMsg"><b>Frist Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield2">
              <label><input type="text" name="Gmname" size="20" id="span9001" value="<?php echo $row[2];?>"><span class="textfieldRequiredMsg"><b>Middle Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield3">
              <label><input type="text" name="Glname" size="20" id="span9001" value="<?php echo $row[3];?>"><span class="textfieldRequiredMsg"><b>Last Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cumulative GPA:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield4">
              <label><input type="text" name="Gpa" size="20" id="span9001" value="<?php echo $row[4];?>"><span class="textfieldRequiredMsg"><b>Cumulative GPA required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year of Graduation:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Yog" id="span9001">
<option><?php echo $row[5];?></option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
</select></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quaification:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="gqul" id="span9001">
<option><?php echo $row[6];?></option>
<option>Bachelors Degree</option>
<option>Post Graduate</option>
</select></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="mgender" id="span9001">
<option><?php echo $row[7];?></option>
<option>Male</option>
<option>Female</option>
</select></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="gdep" id="span9001">
<option><?php echo $row[8];?></option>
<option>Information Science</option>
<option>Computer Science</option>
<option>Construction Technology Management Engineering</</option>
<option>Civil Engineering</option>
<option>Water and Resource Irrigation Engineering</option>
<option>Plant Science</option>
<option>Animal Science</option>
<option>Natural Resource Management</option>
<option>Statistics</option>
<option>Mathematics</option>
<option>Biology</option>
<option>Chemistry</option>
<option>Physics</option>
<option>Economics</option>
<option>Accounting and Finance</option>
<option>Management</option>
<option>English</option>
<option>History</option>
<option>Geography</option>
<option>Sociology</option>
<option>Civics and Ethical Education</option>
</select></td></tr>
<tr><td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Photo:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image" ></td></tr></table>
<input type="submit" name="browse" class="btn btn-primary" Value="Update">
</form>
 <?php
// Close the connection
mysqli_close($con);
?>
<?php
}
?>
</div>
</div>
<?php
		include "yfoot.php";
		?>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>
</body>
</html>

<?php
}
?>