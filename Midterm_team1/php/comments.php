<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
 	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>Comments</title>
</head>
<body>
	<div class="flex-wrapper">
<!--Header Include -->
 <?php include 'header.inc.php'; ?>
 <?php include 'config.inc.php'; ?>
<!-- Content -->
<div class="container">
	<div class="row">
		<div class="col">			
			<div class="panel panel-default">
			<div class="panel-heading">Submit Your Comments</div>
			  <div class="panel-body">
			  	<form method="post">
			  	  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Subject</label>
				    <textarea name="subject" class="form-control" rows="3"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			  </div>
			</div>

			<?php 
				if(isset($_POST) & !empty($_POST)){
					$name = mysqli_real_escape_string($connection, $_POST['name']);
					$email = mysqli_real_escape_string($connection, $_POST['email']);
					$subject = mysqli_real_escape_string($connection, $_POST['subject']);

					$isql = "INSERT INTO comments (name, email, subject) VALUES ('$name', '$email', '$subject')";
					$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
					if($ires){
						$smsg = "Your Comment Submitted Successfully";
					}else{
						$fmsg = "Failed to Submit Your Comment";
					}
				}
			?>

			<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="panel panel-default">
			<div class="panel-heading">Read The Comments</div>
			<table class="table table-striped"> 
				<thead> 
					<tr> 
						<th>#</th> 
						<th>Name</th> 
						<th>Comment</th> 
						<th>Time</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						<th scope="row">Comment ID</th> 
						<td>Name</td> 
						<td>Comment</td> 
						<td>Comment Time</td>  
					</tr> 
					<?php
				$sql = "SELECT * FROM comments";
				$res = mysqli_query($connection, $sql);

				while ( $r = mysqli_fetch_assoc($res)) {
			?>
				<tr> 
					<th scope="row"><?php echo $r['id']; ?></th> 
					<td><?php echo $r['name'] ?></td> 
					<td><?php echo $r['subject']; ?></td> 
					<td><?php echo $r['submittime']; ?></td> 
				</tr> 
			<?php } ?>
				</tbody> 
			</table>
			
			</div>	
		</div>
	</div>
</div>
<!-- End of Content -->

<!-- Footer Include-->
 <?php include 'footer.inc.php'; ?>	
</div>
</body>
</html>

