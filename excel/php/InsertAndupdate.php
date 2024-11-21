<?php
            session_start();
           if(!isset($_SESSION['username']))
		   { 
		   header("location:homepage.php");
		   }
		   else
		   {
		   ?><html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
<!--
function validationForm() {
var gfn=document.forma.Gfname.value
var id=document.forma.Gid.value
var gmn=document.forma.Gmname.value
var gln=document.forma.Glname.value
var yog=document.forma.Yog.value
var gqu=document.forma.Gqul.value
var gdp=document.forma.gdep.value
var gdpp=document.forma.image.value
if (id=="")
{
window.alert("ID can not left blank");
return false;
}
else if (gfn=="")
{
window.alert("Graduate first name can not left blank");
return false;
}
else if (isNaN(gfn)==false)
{
window.alert("Graduate first name can not be number");
return false;
}
else if (gmn=="")
{
window.alert("Graduate Midle name can not left blank");
return false;
}
else if (isNaN(gmn)==false)
{
window.alert("Graduate Midle name can not be number");
return false;
}
else if (gln=="")
{
window.alert("Graduate Last name can not left blank");
return false;
}
else if (isNaN(gln)==false)
{
window.alert("Graduate Last name can not be number");
return false;
}
else if (yog=="--select one--")
{
window.alert("select year of garduation");
return false;
}
else if (gqu=="--select one--")
{
window.alert("Select Graduate qualification");
return false;
}
else if (!((document.forma.mgender[0].checked)||(document.forma.mgender[1].checked)))
{
window.alert("Select gender option");
return false;
}

else if (gdp=="--select one--")
{
window.alert("select Department");
return false;
}
else if (gdpp=="")
{
window.alert("select Upload image");
return false;
}
}
//>
</script>
<title>
Insertion Page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
		include "registerarheader.php";
		?>
						<div id="leftsh">
<?php
		include "registerarLeft.php";
		?>
		
<div id="spacee">
<div id="aform">
<h3>Insert Graduate Information Form:</h3>
<form action="graduateInfopro.php" method="post" enctype="multipart/form-data" name="forma">
<table cellspacing="10" cellpadding="15" bgcolor="#FFCCFF">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graduate ID:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield1">
              <label><input type="text" name="Gid" id="span9001" placeholder="Graduate ID" size="30"><span class="textfieldRequiredMsg"><b>Graduate ID required</b></span></span></td></tr>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Frist Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield2">
              <label><input type="text" name="Gfname" id="span9001" placeholder="Frist Name" size="30" pattern="[A-Za-z]{2,}" title="name should greater 2 characters"/><span class="textfieldRequiredMsg"><b>Frist Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield3">
              <label><input type="text" name="Gmname" id="span9001" placeholder="Middle Name" size="30" pattern="[A-Za-z]{2,}" title="name should greater 2 characters"/><span class="textfieldRequiredMsg"><b>Middle Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield4">
              <label><input type="text" name="Glname" id="span9001" placeholder="Last Name" size="30"pattern="[A-Za-z]{2,}" title="name should greater 2 characters"/><span class="textfieldRequiredMsg"><b>Last Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year of Graduation:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Yog" id="span9001">
<option>--select one--</option>
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
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qualification:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Gqul" id="span9001">
<option>--select one--</option>
<option>Bachelors Degree</option>
<option>Post Graduate</option>
</select></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="mgender" value="Male"> Male 
<input type="radio" name="mgender" value="Female"> Female </td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="gdep" id="span9001">
<option>--select one--</option>
<option>Afaan Oromoo</option>
<option>Information Science</option>
<option>English</option>
<option>Computer Science</option>
<option>Information Technology</option>
<option>Construction Management Engineering</</option>
<option>Civil Engineering</option>
<option>Mechanical Engineering</option>
<option>Electrical Engineering</option>
<option>chemical Engineering</option>
<option>Plant Science</option>
<option>Accounting</option>
<option>Economics</option>
<option>Cooperatives</option>
<option>management</option>
<option>Geology</option>
<option>Statistics</option>
<option>Animal Science</option>
<option>Plant Science</option>
<option>Anthropology</option>
<option>History</option>
<option>Sociology</option>
<option>Geography</option>
<option>Civics and Ethical</option>
<option>Biology</option>
<option>Chemistry</option>
<option>Mathematics</option>
<option>Physics</option>
</select></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Photo:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image" ></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cumlative GPA:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield5">
              <label><input type="text" name="Gpa" id="span9001" placeholder="CGPA" size="30"><span class="textfieldRequiredMsg"><b>Cumlative GPA required</b></span></span></td></tr>
</table>
<br>
<button class="btn btn-primary" name="browse" onclick="validationForm()">&nbsp;REGISTER</button>
<button class="btn btn-primary"onclick="window.location.href='excel/index.php'">&nbsp;IMPORT FROM EXCEL</button>
<input type="reset" value="CLEAR" class="btn btn-primary" name="gsub""/>
<!--<div style="background-color:#CCCCFF"><h3>IF YOU WANT TO IMPORT FROM EXCEL</h3><a href="excel/index.php"><h1>CLICK HERE</h1></a></div>-->
</form>
</div>
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
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
<?php
}
?>