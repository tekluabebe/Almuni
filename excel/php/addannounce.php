<?php
            session_start();
           if(!isset($_SESSION['username']))
		   { 
		   header("location:adminpage.php");
		   }
		   else
		   {
		   ?>
<html>
<head>
<title> Home Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
</head>
<body id="contianer">
<div id="bod">
<div id="bg" style="background-color:#f3fffb">
<div>
<?php
		include "adminheader.php";
		?>
</div>                    
<div id="left">
<?php
		include "adminleft.php";
		?>	
</div>
<div id="cent">
<br>
<h4>Fill The Required Fields</h4>
      
          <br>
         
              <form action="add_news_modal.php" method="post"> 
               <label>Date:</label><br/>
               <input type="date" name="date" value="<?php echo date("Y-m-d")?>" readonly required="required"/><br/><br>
               <label>Subject:</label><br/>
               <input type="text" name="headline" placeholder="Title" required="required"/><br/> <br>          
               <label>Detail:</label><br/>
               <textarea cols="59" rows="5" placeholder="Detailed news........." name="detail"></textarea><br/><br/> 
      
    
       
       
     
          <input type="submit" name="save" value="Post" class="btn btn-primary" /> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </form>
</div>
<?php
include "yfoot.php";
?>
</div>
</div>
</body>
</html>
<?php
}
?>