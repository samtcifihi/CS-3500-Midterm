<?php
//'knotname'=> array('img', 'imgalt', 'knotdescription', 'knotlink')
$catalog = array('Overhand Knot' => array('overhandR6.jpg', 'Overhand Knot card image cap', 'A simple stopper knot.', 'overhandKnot.php'), 'Square Knot' => array('squareR7.jpg', 'Square Knot Card image cap', 'Combine two ends into a knot.', 'squareKnot.php'), 'Figure Eight Knot' => array('fig8_R4.jpg', 'Figure 8 Knot card image cap', 'A stopper knot shaped like a figure 8.', 'figureEightKnot.php') ,'Slip Knot' => array('slipR6.jpg', 'Slip Knot Card image cap', 'Quick release style stopper knot.', 'slipKnot.php'));

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
 	<link rel="stylesheet" type="text/css" href="../css/styles.css" />

    <title>Knot Catalog</title>
</head>

<body>
<div class="flex-wrapper">
<!--Header Include -->
 <?php include 'header.inc.php'; ?>

<!-- Content -->
<div class="container">
	<div class="row">
		<div class="col">
			<h2>Knot Catalog</h2>
			<div class="row">
					<div class="col-md-6">
						<div class="card" style="width: 18rem;">
  							<img class="card-img-top" src="../images/overhandR6.jpg" alt="Overhand Knot card image cap">
  							<div class="card-body">
    							<h5 class="card-title">Overhand Knot</h5>
    							<p class="card-text">A simple stopper knot.</p>
    							<a href="overhandKnot.php" class="btn btn-primary">Learn How</a>
  							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card" style="width: 18rem;">
  							<img class="card-img-top" src="../images/squareR7.jpg" alt="Square Knot Card image cap">
  							<div class="card-body">
    							<h5 class="card-title">Square Knot</h5>
    							<p class="card-text">Combine two ends into a knot.</p>
    							<a href="squareKnot.php" class="btn btn-primary">Learn How</a>
  							</div>
						</div>
					</div>
				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card" style="width: 18rem;">
  						<img class="card-img-top" src="../images/fig8_R4.jpg" alt="Figure 8 Knot card image cap">
  						<div class="card-body">
    						<h5 class="card-title">Figure Eight Knot</h5>
    						<p class="card-text">A stopper knot shaped like a figure 8.</p>
    						<a href="figureEightKnot.php" class="btn btn-primary">Learn How</a>
  						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card" style="width: 18rem;">
  						<img class="card-img-top" src="../images/slipR6.jpg" alt="Slip Knot Card image cap">
  						<div class="card-body">
    						<h5 class="card-title">Slip Knot</h5>
    						<p class="card-text">Quick release style stopper knot.</p>
    						<a href="slipKnot.php" class="btn btn-primary">Learn How</a>
  						</div>
					</div>
				</div>
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