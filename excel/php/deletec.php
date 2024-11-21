<?php
  ob_start();
$con = mysqli_connect("localhost","root","","alumni");
  if(isset($_GET['email'])!="")
  {
  $delete=$_GET['email'];
  $delete=mysqli_query($con,"DELETE FROM feedback WHERE email='$delete'");
  if($delete)
  {   
        
      header("Location:view commentt.php");
  }
  else
  {
      echo mysqli_error();
  }
  }
  ob_end_flush();
?>