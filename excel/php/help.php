
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
<div id="bg" style="background-color:#bde6ed">
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
<div id="space">
<div id="login" align="right"><br><h2>Would you want to <a href="login.php"><img src='iterfaceimage/login.gif' width='70' height='36' /></a></h2></div>
<div align="left"> <img style="margin:10px 2px 2px 10px;float:left;" height="90%" width="20%" src="iterfaceimage/help.png" alt="GCVS"/></div>
<h1 align="center">WELCOME TO BULE HORA UNIVERSITY ALUMNI SYTEM</h1>
<hr/>
<h2 align="left">This is Help page of Alumni Sytem for Bule Hora University</h2>

<div align="justify"><h2>If you want any help to use our systems, all directions are listed below: If some company wants to verify the certificate of students who graduated from Bule Hora University, that company must register the students to be employed as well as company itself where students to be work in the future. To verify that employee it is mandatory to register both company and details of graduated students. When we register employee(who graduated from Bule Hora) and company it is mandatory to put graduted ID in both. Company is a place where graduated students to be work in.
External users can access two main tasks:
<ol>
<li>Register company and employee details to verify credentials.</li>
<li>Viewing Response: Viewing response is the last work or step for external user after the registered company and employee is checked by the registrar office. Based on registred details of employee by external user and original students file saved in database, office of the registrar can verify or unverify registered employee. External user can view his/her response by filling a given field.</li>
</ol></h2></div>
<ol>
<strong><li>Who to access from the system</li></strong>
<ul>
<li>Guest user of the University can access the pages <a href="contactus.php"><font color="blue"> About us </font></a>and <a href="help.php"><font color="blue">Help</font></a></li>
<li type="circle">External user who wants to employee our graduates can verify their credentials by registering <a href="rf.php"><font color="blue">Company</font></a> and graduated students to be <a href="employeform.php"><font color="blue">Employed</font></a> in a given Company and view <a href="responsepage.php"><font color="blue">Response</font><span>&nbsp;</span></a> after agiven time.</li>
<li>Registrar</li>
<li>Administrator</li>
</ul>
<strong><li>How to access the system</li></strong>
<ul>
<li>Authorized user first <a href="login.php"><font color="blue"> Login</font></a> to the system by inserting your Username and Password</li>
<li type="circle">After authorized person entered into the system by inserting valid Username and Password he/her can access the system according to his/her activity.Lastly <strong>Logout</strong> from the systems.</li>
 
</ul>
</ol>
</div>
<?php
include "yfoot.php";
?>
</div>
</div>
</body>
</html>
