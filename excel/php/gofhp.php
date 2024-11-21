	<script type="text/javascript">
// Run function for every second of timer
setInterval(rgbcolors, 300);
function rgbcolors() {
// rgb string generation
var col = "rgb("
+ Math.floor(Math.random() * 255) + ","
+ Math.floor(Math.random() * 255) + ","
+ Math.floor(Math.random() * 255) + ")";
//change the text color with the new random color
document.getElementById("divstyle").style.color = col;
}
</script>
 </style>
 <div id="divstyle" style="font:bold 25px arial" align="center"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
Well come to Bule Hora University</u></div>
	