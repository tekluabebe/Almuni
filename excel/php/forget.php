<div id ="middle" style="height:736px;width:738px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

<fieldset>

<tr>
<table>
<td valign="top">
<center><h2>Did you forget your password?</h2></center>
<div style="width:738px; height:400px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="forgetpasswordinst.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 <div style="float:center;" ><strong><font color="white" size="2px">Forget Password</font></strong></div>
 <div style="float:right; margin-top:-10px; margin-right:5px; background-color:#cccccc; width:40px;  text-align:center; border-radius:20px; height:22px;"></div>
 
 </div>
 <h2 style="font-family:rockwell;color:green;font-size:20px;" align="left">
 <?php
 if(isset($_POST['forget']))
  {
   $instid=$_POST['instid'];
   $instfname=$_POST['instfname'];
    $email=$_POST['email'];
   $sql="SELECT * FROM instructor where instid='$instid' AND instfname='$instfname' AND email='$email';"; 
   $result_set=mysql_query($sql,$cn);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysql_fetch_array($result_set))
{
$instfname=$row[1];
$username=$row[7];
$password=$row[8];
$status=$row[9];
echo"<p class='success'>"."Hi"."&nbsp; &nbsp;".$instfname.'<br>'."&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;"." Username is:".$username."&nbsp; &nbsp;".'<br>'."&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;"." Password is:".$password."".'<br>'."&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;"." Account is:".$status."</p>";
echo'<meta content="10;instlogin.php" http-equiv="refresh" />';

}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Please Input Correct value..</p>";
echo'<meta content="10;forgetpasswordinst.php" http-equiv="refresh" />';
}
}
mysql_close($cn);
?>
  </h2>
  <table width="280px" align="center">  
	       <td class='para1_text' width="220px"><font color="red">*</font> ID_NO:</td><td><input type="text" name="instid" required x-moz-errormessage="Enter Your Id" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>Firsrt Name:</td><td><input type="text" name="instfname" required x-moz-errormessage="Enter Your Full Name" ></td>
	     </tr>
		  <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>Email:</td><td><input type="text" name="email" required x-moz-errormessage="Enter Your Full Name" ></td>
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