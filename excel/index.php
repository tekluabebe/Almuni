<!DOCTYPE html>
<?php 
	include 'db.php';
	


?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Students File From Excel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">


	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">                                Import Excel To Mysql Database Using PHP</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import Students file from Excel</legend>
						<div class="control-group">
							<div class="control-label">
								<label>Insert from EXCEL:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>First Name</th>
				  		<th>Middle Name</th>
				  		<th>Last Name</th>
				  		<th>Cumulative_Gpa</th>
						<th>Year of Graduation</th>
				  		<th>Qualification</th>
				  		<th>Gender</th>
				  		<th>Department</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM student ";
				$result_set =  mysql_query($SQLSELECT, $conn);
				while($row = mysql_fetch_array($result_set))
				{
				?>
			
					<tr>
						<td><?php echo $row['ID']; ?></td>
						<td><?php echo $row['Frist_Name']; ?></td>
						<td><?php echo $row['Midle_Name']; ?></td>
						<td><?php echo $row['Last_Name']; ?></td>
						<td><?php echo $row['Cumulative_Gpa']; ?></td>
						<td><?php echo $row['Year_of_Graduation']; ?></td>
						<td><?php echo $row['Qualification']; ?></td>
						<td><?php echo $row['Gender']; ?></td>
						<td><?php echo $row['Department']; ?></td>
					

					</tr>
				<?php
				}
			?>
		</table>
	</div>

	</div>

	</body>
</html>