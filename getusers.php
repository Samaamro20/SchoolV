<?php 

require 'MyDb.php';
$db = new MyDb();

$id = $_GET['id'];
// Get User Data by id
$infos = $db->getuserprofile($id);

 ?>
 <!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="editform.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>View User Info</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h2 style="text-align: center;">Edit Trainees</h2>
					<!-- <form class="" method="get" action="edit2.php?id=" <?php $id ?> >						 -->
						<?php 
						echo "<form method='get' action='edit2.php'>";//?id=".$id."
				     	?>  
				     	<?php
							foreach ($infos as $info) {
							
							echo"<input type='text' name='id' value='".$id."' style='display:none;'>";
							echo"<input type='text' name='trainingtype' value='".$info['trainingtype']."' style='display:none;'>";
				     	?> 

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">User Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>

									<input type="text" class="form-control" name="username" value="<?php echo $info['username']; ?>" id="name"  placeholder="Enter User Name"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Save Changes</button>
						</div>
						<?php
							} //End of Foreach
						?>
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>