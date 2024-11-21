<html>
<head>
<title> Home Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />
</head>
<body id="contianer">
<div id="bod">
<div id="bg" style="background-color:#000000">
<div>
<?php
		include "yheader.php";
		?>
</div>                    
<div id="left">
<?php
		include "yleft.php";
		?>	
</div>
<div id="cent">
<div id="img">
<?php
		include "welcome.php";
		?>	
		<?php
		include "galleryshow.php";
		?>
</div>

</div>
<div id="righ">
<ul id="nav">
<a href="announce.php"><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Announcement</b></a> </ul id="nav">
<li class="flag">  <img src="image/Flag.gif" width="295" height="100" />
      </li>
 <li class="flag">  <img src="image/Flag2.jpg" width="300" height="250" />
      </li>    	  
		<?php
		include "yheader1.php";
		?>
		<?php 
if (isset($_POST['Login']))
			
			{
session_start();
$UserName=$_POST['uname'];
$Password=$_POST['pword'];
$UserType=$_POST['selectop'];
if($UserType==="--select one--")
{
?>
<div class="alert alert-error">
			  	 Please select your account type
				 and try again!!!
				</div>
<?php 
}
else
{
if($UserType==="Administrator")
{
$con = mysqli_connect("localhost","root","","alumni");
$sql = "select * from user where username='".$UserName."' and password='".$Password."' and  User_type='".$UserType."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
?>
<div class="alert alert-error">
			  	 Please check your User Name,Password and select your account type
				 and try again!!!
				</div>

<?php 
}
else
{
session_start();
$_SESSION['username']=$row['username'];
header("location:AdminPage.php");
} 
mysqli_close($con);
}
else if($UserType==="Registerar")
{
$con = mysqli_connect("localhost","root","","alumni");
$sql = "select * from user where username='".$UserName."' and password='".$Password."' and  User_type='".$UserType."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
?>
<div class="alert alert-error">
			  	 Please check your User Name,Password and select ur account type
				 and try again!!!
				</div>

<?php 
}
else
{
session_start();
$_SESSION['username']=$row['username'];
header("location:RegisterarPage.php");
} 
mysqli_close($con);
}
}
}
?>
</div>
<?php
		include "yfoot.php";
		?>
</div>
</div>
</body>
</html>
