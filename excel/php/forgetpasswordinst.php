<html>
<head>
<title> Home Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />
</head>
<body id="contianer">
<div id="bod">
<div>
<?php
		include "yheader.php";
		?>
</div>                    
<div id="left">
<img src="iterfaceimage/k.gif" width="180" height="300">
</div>
<div id="cent">

<div id ="middle" style="height:670px;width:812px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

<fieldset>

<tr>
<table>
<td valign="top">
<center><h2>Did you forget your password?</h2></center>
<div style="width:792px; height:670px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="forgetpasswordinst.php" onSubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 <div style="float:center;" ><strong><font color="white" size="2px">Forget Password</font></strong></div>
 <div style="float:right; margin-top:-10px; margin-right:5px; background-color:#cccccc; width:40px;  text-align:center; border-radius:20px; height:22px;"></div>
 
 </div>
 <h2 style="font-family:rockwell;color:green;font-size:20px;" align="left">
 <?php
 if(isset($_POST['forget']))
  {
   $Name=$_POST['name'];
   $username=$_POST['username'];
    $email=$_POST['email'];
	$con = mysqli_connect("localhost","root","","alumni");
   $sql="SELECT * FROM user where name='$Name' AND username='$username' AND email='$email';"; 
   $result_set=mysqli_query($con,$sql);
   if(!$result_set)
   {
   die("Query fail".mysqli_error());
   }
if(mysqli_num_rows($result_set)>0)
{

//$num=mysqli_num_rows($result_set);
while($row=mysqli_fetch_array($result_set))
{
$name=$row[1];
$username=$row[2];
$password=$row[3];
echo"<p class='success'>"."Hi"."&nbsp; &nbsp;".$Name.'<br>'."&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;"." Username is:".$username."&nbsp; &nbsp;".'<br>'."&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;"." Password is:".$password.""."</p>";
echo'<meta content="10;login.php" http-equiv="refresh" />';

}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Please Input Correct value..</p>";
echo'<meta content="10;forgetpasswordinst.php" http-equiv="refresh" />';
}
}

?>
  </h2>
  <table width="280px" align="center">  
	       <td class='para1_text' width="220px"><font color="red">*</font> Name:</td><td><input type="text" name="name" required x-moz-errormessage="Name" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>User Name:</td><td><input type="text" name="username" required x-moz-errormessage="Enter User Name" ></td>
	     </tr>
		  <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>Email:</td><td><input type="text" name="email" required x-moz-errormessage="Enter Your Email" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br><br><br>
    <td><input type="submit" name="forget" id="r2" value="Submit" />&nbsp;&nbsp;<input id="r3"type="reset" value="Clear" /></td>
  </tr>
</table> 
  </form>	

  
  
  
  
  
</div>
</td>
</tr>
</table>
</fieldset>
	 </div>
	 </div>

<?php
		include "yfoot.php";
		?>
</div>
</body>
</html>
