<?php
session_start();
include './db.php';

if(isset($_POST['submit'])){
    
    $user=$_POST['fullname'];
    $date=$_POST['date'];
    $email=$_POST['email'];
    $comm=$_POST['comment'];
    
    mysqli_query($con,"INSERT INTO `comment`(`Username`, `Email`, `Comment`, `Date`) VALUES ('$user','$email','$comm','$date')") or die(mysqli_error());
    echo '<script>alert("You message sent successfully!")</script>';
}
?>
 <html>
<head>
<title> Message Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />
  <link href="css/commentstyle.css" rel="stylesheet" type="text/css">
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
<div id="bg" style="background-color:#f3fffb">

<div>
<?php
		include "registerarheader.php";
		?>
</div>  
<div>
<?php
		include "msgtitle.php";
		?>
</div>                    
		                  
			<div id="content">
		

  <div class="main">
 

      <div class="cent">
       
           <div class="form-box" style="width:980px; height: auto;margin:10px;">
          <div class="box-header with-border">
            <h4 class="box-title">Message</h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <div class="schedule-form">
          <p>Send your message to Administrator of the system.</p><br/>
          <form action="comment.php" method="post">
           <label>Name:</label><br/>
           <input type="text" name="fullname" placeholder="Full name" required style="width:400px;"/><br/> 
           <label>Email:</label><br/>
           <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please user the correct email format eg: username@gmail.com" required style="width:400px;"/><br/> 
           <label>Date:</label><br/>
           <input type="date" name="date" value="<?php echo date("Y-m-d") ?>" readonly placeholder="Date" required style="width:400px;"/><br/>        
           <label>Comment:</label><br/>
           <textarea cols="115" rows="3" name="comment" required style="margin: 0px; height: 199px; width: 900px;"></textarea></br></br>
           <input type="submit" value="Comment" class="btn btn-primary"  name="submit"/>
          </form>
                     
               </div>
            </div> 
         </div>
         
      </div>
    </div>
<?php
		include "yfoot.php";
		?>
</form>	
</div></div>  
</div>
</body>
</html>