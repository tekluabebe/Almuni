<html>
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
<div id="space"><div id="appl">
<h2>Saved Graduate Details:</h2>
<form action="" method="post">
<table cellspacing="20" cellpadding="10"><tr><td>
Campany Name:</td><td><input type="text" name="cname"></td></tr>
<tr><td>Campany Email:</td><td><input type="text" name="cemail"></td></tr>
<tr><td>Camany Phone:</td><td><input type="text" name="cphone"></td></tr>
<tr><td>Campany Country:</td><td><input type="text" name="ccountry"></tr>
<tr><td>Campany City:</td><td><input type="text" name="ccity"></td></tr><tr><td>Date:</td><td><input type="text" name="date"></td></tr>
<tr><td>Reason of Verification:</td><td><textarea name="rov" rows="5" cols="10"></textarea></td></tr></table></table>
</form>
</div><div id="appr">
<h2>Employe Details:</h2>
<form action="" method="post">
<table cellspacing="15" cellpadding="10"><tr><td>
Frist Name:</td><td><input type="text" name="Gfname" size="20"></td></tr>
<tr><td>Middle Name:</td><td><input type="text" name="Gmname" size="20"></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="Glname" size="20"></td></tr>
<tr><td>ID:</td><td><input type="text" name="Gid" size="20"></td></tr>
<tr><td>Year of Graduation:</td><td><input type="text" name="yof"></td></tr>
<tr><td>Quaification:</td><td><input type="text" name="gq"></td></tr>
<tr><td>Gender:</td><td><input type="text" name="gg"></td></tr>
<tr><td>Department:</td><td><input type="text" name="gd"></td></tr>
<tr><td>Photo:</td><td><textarea name="u_text" rows="5" cols="10"> Post your Photos</textarea></td></tr></table></form>
</div></div>

<?php
		include "yfoot.php";
		?>
</div>
</body>
</html>