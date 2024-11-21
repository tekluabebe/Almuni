<?php
include './db.php';

if(isset($_POST['save'])){
    
    $headline=$_POST['headline'];
    $date=$_POST['date'];
  $news=$_POST['detail'];
  
  $Query="INSERT INTO `news`(`Headline`,`News`, `Date`) VALUES ('$headline','$news','$date')";  
  $ExQuery=  mysqli_query($con,$Query) or die('Unable to add news!'.mysqli_error());
   echo '<script>alert("Your announce posted successfully!")</script>';
   echo "<script>window.location='addannounce.php';</script>"; 
}

?>
