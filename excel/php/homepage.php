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
<li class="flag">  <img src="image/Flag.gif" width="295" height="73" />
<li class="flag">  <img src="image/oro.png" width="295" height="73" />
      </li>
 <li class="flag">  <img src="image/Flag2.jpg" width="300" height="250" />
      </li>    	  
		<?php
		include "yheader1.php";
		?>
</div>
<?php
		include "yfoot.php";
		?>
</div>
</div>
</body>
</html>
