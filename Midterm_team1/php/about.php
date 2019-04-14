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
 	<style>
        #map {
        	height: 400px;  /* The height is 400 pixels */
        	width: 100%;  /* The width is the width of the web page */
       	}
   </style>
    <title>About Basic Knots</title>	
</head>

<body>
<div class="flex-wrapper">
<!--Header Include -->
 <?php include 'header.inc.php'; ?>

<!-- Content -->
<div class="container" id="aboutContainer">
	<div class="row">
		<div class="col">
			<h2>About</h2>
			<br>
			<p>This website was created as a project for the CS3500 Intro to Web Technologies at Western Michigan University. Authors for the page are James Damveld and Joshua Taylor</p>
			<p>The knot tutorials and videos are originally created by <a href="https://animatedknots.com">Animated Knots</a> by Grog.
			<br>They have a large collection of knots, their variants, and best use scenarios for them. They also have mobile apps created for all major platforms. Check them out if you want to know more.</p>
			<br>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<h5>Find some rope!</h5>
			<br>
			<p>This map is centered on some sporting goods stores in Kalamazoo. Use it to help find your way to a outdoor sporting goods store.
			<div id="map"></div>
		    <script>
			// Initialize and add the map
			function initMap() {
			  // The location of Uluru
			  var uluru = {lat: 42.27185925, lng: -85.65297853914947};
			  // The map, centered at Uluru
			  var map = new google.maps.Map(
			      document.getElementById('map'), {zoom: 16, center: uluru});
			  // The marker, positioned at Uluru
			  var marker = new google.maps.Marker({position: uluru, map: map});
			}
		    </script>
		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6kCSsa0Sffk_Nd1FBwSb4JLgU8Ldp6f4&callback=initMap">
		    </script>
		</div>
	</div>		
</div>
<!-- End of Content -->

<!-- Footer Include-->
 <?php include 'footer.inc.php'; ?>

</body>

</html>
