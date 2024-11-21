<html><head>
<link href="good.css" rel="stylesheet" type="text/css"/>
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
 if (gfn=="")
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
 else if(id=="")
{
window.alert("ID can not left blank");
return false;
}
}
//>
</script>
</head>
<body id="contianer">
<div id="bod">
<div>
<?php
		include "yheader.php";
		?>
</div>                    
<div id="left">
	<?php
		include "yheader1.php";
		?>
</div>
		<div id="spacee">
		<div id="p">
		<img src="iterfaceimage/regemp.jpg" width="370" height="300"/>
<p align="center"><strong><font size="5" color="green"><i>Welcome to Bule Hora University Alumni Systems:</font><br><br><font size="4" color="green"> Every company who wants to employe our <br><br>graduates can verify their credentials<br><br>by registering the Employee and </font><a href="rf.php"><font color="blue">Company</font></a></strong><p></div>
<div id="rf">
<h4>REGISTER GRADUATE TO BE EMPLOYED</h4>
<form action="insertEmployeData.php" method="post" enctype="multipart/form-data" name="forma">
<table cellspacing="15" cellpadding="10">
<tr><td>Frist Name:</td><td><span id="sprytextfield1">
              <label><input type="text" name="Gfname" id="span9001" placeholder="Frist Name" size="30" pattern="[A-Za-z]{2,}" title="name should greater 2 characters"/></label><span class="textfieldRequiredMsg"><br/><b>Frist Name required</b></span></span></td></tr>
<tr><td>Middle Name:</td><td><span id="sprytextfield2">
              <label><input type="text" name="Gmname" id="span9001" placeholder="Middle Name" size="30" pattern="[A-Za-z]{2,}" title="name should greater 2 characters"/></label><span class="textfieldRequiredMsg"><br/><b>Middle Name required</b></span></span></td></tr>
<tr><td>Last Name:</td><td><span id="sprytextfield3">
              <label><input type="text" name="Glname" id="span9001" placeholder="Last Name" size="30" pattern="[A-Za-z]{2,}" title="name should greater 2 characters"/></label><span class="textfieldRequiredMsg"><br/><b>Last Name required</b></span></span></td></tr>
<tr><td>Year of Graduation:</td><td><select name="Yog" id="span9001" >
<option>--select one--</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
</select></td></tr>
<tr><td>Qualification:</td><td><select name="Gqul" id="span9001">
<option>--select one--</option>
<option>Bachelors Degree</option>
<option>Post Graduate</option>
</select></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="mgender" value="Male"> Male 
<input type="radio" name="mgender" value="Female"> Female </td></tr>
<tr><td>Department:</td><td><select name="gdep" id="span9001">
<option>--select one--</option>
<option>Afaan Oromo</option>
<option>Information Science</option>
<option>English</option>
<option>Computer Science</option>
<option>Information Technology</option>
<option>Construction Management Engineering</</option>
<option>Civil Engineering</option>
<option>Mechanical Enginering</option>
<option>Electrical Enginering</option>
<option>chemical Enginering</option>
<option>Plant Science</option>
<option>Accounting</option>
<option>Economics</option>
<option>Cooperatives</option>
<option>management</option>
<option>Geology</option>
<option>Statistics</option>
<option>Animal Science</option>
<option>Plant Science</option>
<option>Antropology</option>
<option>History</option>
<option>Sociology</option>
<option>Geograpy</option>
<option>Civics and Ethical</option>
<option>Biology</option>
<option>Chemistry</option>
<option>Mathematics</option>
<option>Physics</option>
</select></td></tr>
<tr><td>Photo:</td><td><input type="file" name="image"></td></tr>
<tr><td>Graduate ID:</td><td><span id="sprytextfield4">
              <label><input type="text" name="Gid" id="span9001" placeholder="ID_No" size="30"></label><span class="textfieldRequiredMsg"><br/><b>student ID required</b></span></span></td></tr></table>
<button class="btn btn-primary" name="gsub" onClick="validationForm()">&nbsp;REGISTER EMPLOYEE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="CLEAR" class="btn btn-primary" name="gsub""/>
</form>
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