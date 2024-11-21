
<?php
session_start();
include './db.php';
?>
<html>
<head>

<title> Home Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />


</head>
<body id="contianer">
<div id="bod">
<div id="bg" style="background-color:#0af7c7">
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
<div id ="middle" style="height:712px;width:820px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
         <br> <h1>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<u><abbr title="Bule Hora University">BHU</abbr> Announcement Board</u></h1>
         <?php
          $newssql=  mysqli_query($con,"SELECT * FROM `news` ORDER BY `Date` DESC");
          while ($newsData=  mysqli_fetch_assoc($newssql)){
              $date=$newsData['date'];
              $Headline=$newsData['Headline'];
              $news=$newsData['News'];
         
         ?>
          <div style="margin-left: 20px;margin-top: 40px;">
         <i> <font color="blue"> <h2>Date: <font color="black"><?php echo $date?></h2></font>
          <h4>Subject: <font color="black"><?php echo $Headline?></h4></font>
          <h4>Detail:<font color="black"> <?php echo $news?> </h4></font></font></i>
          </div> 
          <?php
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