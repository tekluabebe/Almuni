
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
				<div id="left">
<?php
		include "registerarLeft.php";
		?>
		</div>
<div id="spacee">
<div id="aform">

<h3>Approve Service Request Form:</h3>
<form action="AproveServiceRequest.php" method="post">
<table cellspacing="20" cellpadding="10"><br><br><br><br><br>
<tr><td><b><h2>Company Email:</b></h2></td><td>
<select name="cem" id="span9001">
<?php
$con = mysqli_connect("localhost","root","","alumni");
$q = "select * from company";
$r=mysqli_query($con,$q);
while($ro=mysqli_fetch_array($r))
{



echo "<option>".$ro['Company_Email']."</option>";


}
?>
</select></td></tr>
</table>
<button class="btn btn-primary" name="search">&nbsp;Search</button>
</div>
</form>
</div>
<?php
		include "yfoot.php";
		?>
</div>

</body>
<?php
}
?>
