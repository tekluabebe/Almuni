<?php
$gid=$_POST['id'];
$con = mysqli_connect("localhost","root","","gcvs_db_success");
$q="delete from report where ID='$gid'";
mysqli_query($q);
?>