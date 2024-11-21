 <div id="yuu"><ul>
 <br>
						<li><a href="addannounce.php">Announcement</a></li>
                       
							<!--<li><a href="admindisplayuser.php">Display Account</a></li>-->
							<!--<li><a href="UserAccount.php">Change Password</a></li>-->
							<li><a href="admindeleteapprovedreq.php">Approved Request</a></li>
							<li><a href="admindeleteverifiedreq.php">Verified&nbsp;Req.&nbsp;Emplo</a></li>
							<li><a href="adminsearchrepdel.php"> Generated Report </a></li>
							 <li><a href="calander2.php">Calendar</a> </li>
							 <li><a href="view commentt.php">Comment</a>

		 <?php
include("db.php");
			$con=mysqli_query($con,"SELECT * FROM feedback");
			$intt=mysqli_num_rows($con);
			echo"<font face='times new roman' size='4px' color='red'>";
			while($row=mysqli_fetch_array($con))
			?> 			
<?php
include("db.php");
			$con=mysqli_query($con,"SELECT * FROM comment");
			$intt2=mysqli_num_rows($con);
			echo"<br>";
			echo"<font face='times new roman' size='4px' color='red'>";
		    echo''.$intt2+$intt.'&nbsp; new comment';
			while($row=mysqli_fetch_array($con))
			?> 	
		</li>
										 <li> 

								 </li>
							 
        </ul>	
  </div> 