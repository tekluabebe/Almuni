<html>
<head>
<title> Home Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    h1{
        color:#CC33AA;
	font-size:20px;
	margin: 20px 0px 20px 0px;
    }
	h2{
        color:#1705fe#CC33AA;
	font-size:14px;
	margin: 20px 0px 20px 0px;
    }
</style>
</head>
<body id="contianer">
<div id="bod">
<div id="bg" style="background-color:#dff0f0">
<div>
<?php
		include "yheader.php";
		?>
</div>                    
<div id="left">
 <img src="image/note.jpg" width="160" height="250"/>	
</div>
			<div id="content">
			<style>
#ShowText{
color:green;
font-family:Impact;
}
</style>
<script type="text/javascript">
var textarray = [
"Bule Hora University ",

"Alumni System", // No comma after last entry
"Feedback"
];

function RndText() {
var rannum= Math.floor(Math.random()*textarray.length);
document.getElementById('ShowText').innerHTML=textarray[rannum];
}
onload = function() { RndText(); }

var inter = setInterval(function() { RndText(); }, 700);

</script>
<div id="ShowText"style="font:bold 25px Impact green" align="center"> </div>
<br>
	<form  action="feedbackhtml1.php" method="POST">
	<table align="center">
	<tr><td>
<label for="authorName"><b>Name:</b></label></td>
	<td><input name="name" id="authorName" tabindex="1" type="text"required>

</td></tr>
<tr><td ></td><td></td></tr>
<tr><td ></td><td>

<tr><td>

<label for="authorEmail"><b>Email:</b></label></td><td>
<input type="email"name="email" id="authorEmail" tabindex="2" type="text" required>

</td></tr>
	<tr><td ></td><td></td></tr>
<tr><td ></td><td> 
<tr><td>
<label for="authorComment"><b>Message:</b></label></td><td>
<textarea name="feedback" id="authorComment" rows="10" cols="50" tabindex="3" required></textarea>

</td></tr>
<tr><td ></td><td></td></tr>
<tr><td ></td><td>
<tr><td ></td><td></td></tr>
<tr><td ></td><td>
<button class="submit" type="submit" name="feed"><font color='blue'>Submit Feedback</font></button></td></tr></br>
</br>
</table>

<?php
if(isset($_POST['feed']))
{
$name=$_POST["name"];
$email=$_POST["email"];
 $feedback=$_POST["feedback"];
$con = mysqli_connect("localhost","root","","alumni");
	$sql = "INSERT INTO feedback (name,email,comment, date) VALUES ('$name','$email','$feedback',now())";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
}
if($sql==TRUE){  
	               echo "<br/><h3 align='center' id='correct'><b>Your comment sent successfully!</b>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href='feedbackhtml1.php'><img src='iterfaceimage/delete.gif' width='30' height='26' /></a></h3>";
				   
				   
	               }
				  
	else{
         echo "<br/>You don't send your comment!!<br/>". mysqli_error();
	    }
 
mysqli_close($con);
}
?>



<?php
		include "yfoot.php";
		?>
</form>	
</div>
</div>
</div>
</body>
</html>