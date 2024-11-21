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
<div id="bg" style="background-color:#fef5f5">
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


   
       
        
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>
				
				
                 <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                    <strong><?php include('beutystyle.html'); ?>.
			   </div>
                </div><br>
                <div class="slider-wrapper theme-default">
				<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <a href="music.php"><img src="iterfaceimage/capture1.jpg" width="30" height="26" />Music</a><br><br>
				&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <a href="drama.php"><img src="iterfaceimage/3.jpg" width="30" height="26" />Drama</a><br><br>
				&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <a href="film.php"><img src="iterfaceimage/capture6.jpg" width="30" height="26" />Film</a><br><br>
				&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <a href="photo.php"><img src="iterfaceimage/2.jpg" width="30" height="26" />Photo</a><br><br>	
				&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <a href="funny.php"><img src="iterfaceimage/4.jpg" width="30" height="26" />Funny</a><br><br>
                </div></strong>
				
                <!-- end slider -->
          
 
   
    <!---------------->
     
<?php
		include "yfoot.php";
		?>
		</div>
		</div>
</body>
</html>
