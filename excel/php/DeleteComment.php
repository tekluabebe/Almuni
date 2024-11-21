<?php

include './db.php';
$comId=$_POST['com_id'];
$SQL = "DELETE FROM comment WHERE Id = '$comId'";
mysqli_query($con,$SQL)or die(mysqli_error()) ;
echo "<script>window.location='View commentt.php';</script>"; 

?>