
<html>
<head>
<title> Home Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    h1{
        color:cornflowerBlue;
	font-size:20px;
	margin: 100px 0px 20px 0px;
    }
	h2{
        color:cornflowerBlue;
	font-size:12px;
	margin: 10px 0px 10px 0px;
    }
</style>
</head>
<body id="contianer">
<div id="bod">
<div id="bg" style="background-color:#301b6b">

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
</style>
<script language="JavaScript" type="text/JavaScript">
// Set slideShowSpeed (second)
var slideShowSpeed = 2000;
// Duration of cross fade (seconds)
var crossFadeDuration = 2;
// Specify the image files
var Pic = new Array();
// to add more images, just continue
// the pattern, adding to the array below
Pic[0] = 'photo1/g.jpg'
Pic[1] = 'photo/exam.jpg'
Pic[2] = 'photo1/gc.jpg'
Pic[3] = 'photo1/inf.jpg'
Pic[4] = 'photo1/slide1.jpg'
Pic[5] = 'photo1/lat.jpg'
Pic[6] = 'photo1/pres.jpg'
Pic[6] = 'photo1/hall.jpg'

var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}
function runSlideShow() {
if (document.all) {
document.images.SlideShow.style.filter="blendTrans(duration=4)";
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply();
}
document.images.SlideShow.src = preLoad[j].src;
if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}
j = j + 1;
if (j > (p - 1)) j = 0;
t = setTimeout('runSlideShow()', slideShowSpeed);
}
window.onload=runSlideShow;
</script>
<img  name='SlideShow' width="82%" height="121%"/>
 <?php
include "yfoot.php";
?>
</div>   
</body>
</html>