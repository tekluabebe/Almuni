
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
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<title>
Registerar page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
		include "registerarheader.php";
		?>
				<div id="left">
<?php
		include "registerarLeft.php";
		?>
		</div>
<div id="spacee">
<div id="aform">
<?php
$cem=$_POST['cem'];
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from company WHERE Company_Email='$cem'";
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
?>
<h2>Details of Requested Company:</h2>
<form action="regApprovedcomdet.php?ID=<?php echo $row[0];?>" method="post">
<table cellspacing="20" cellpadding="10">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Employe ID:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[0];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Comany Phone:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Company Name:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[2];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Company Email:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[3];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Company Country:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[4];?></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Company City:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[5];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Date:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[6];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Reason of Verification:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[7];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Enter Remark:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextarea1">
                              <label><textarea name="rer" rows="3" cols="20" ></textarea></label>
                            <span class="textareaRequiredMsg"> Remark required.</span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Approval:</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="regA" id="span9001">
<option>--select one--</option>
<option>Approved</option>
<option>Disproved</option>
</select></td><td></td></tr>
</table>
<input type="submit" name="regsub" value="Submit" class="btn btn-primary">
</form>
<?php
}
mysqli_close($con);
?>
</div>
</div>
<?php
		include "yfoot.php";
		?>
</div>
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
<?php
}
?>