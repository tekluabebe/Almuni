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
<div id="body">
<?php
		include "adminheader.php";
		?>
				<div id="left">
<?php
		include "adminleft.php";
		?>
		</div>
<div id="spacee">
<br>
<h1 align="center"><font color="green" size="10" >Welcome to Alumni System!</font></h1>
<img src="iterfaceimage/yes.jpg" width="800" height="500"/>
<p>
<h1 align="center"><font color="green" size="10" >System Administrator</font></h1><h3 align="center"><font color="green" size="4"> You are administrator of the system! </font></p></div></h3>
<?php
		include "yfoot.php";
		?>

</div>
</body>
</html>
<?php
}
?>