<?php
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/reservationbootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/reservationstyle.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p><img src='images/about.jpg' width='120%' height='120%'></p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">


							<form action="includes/book.php" method="post">
								<p><?php
									if (isset($_GET['error'])) {
										if ($_GET['error'] == 'select') {
											echo 'Please Select a Room';
										} elseif ($_GET['error'] == 'sql') {
											echo 'Booking Failed</br>Please Try Again Later';
										} elseif ($_GET['error'] == 'roombooked') {
											echo 'Room Booked!';
										}
									}
								 ?></p>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input name="username" class="form-control" type="text" value=<?php echo $_SESSION['username'] ?>>
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input name="email" class="form-control" type="email" value=<?php echo $_SESSION['email'] ?>>
											<span class="form-label">Email</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input name="phone" class="form-control" type="tel" value=<?php echo $_SESSION['phone']; ?>>
											<span class="form-label">Phone</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select name="rooms" class="form-control">
												<option value='None'>Select</option>
												<option value='Luxury'>Luxury</option>
												<option value='Family'>Family</option>
												<option value='Deluxe'>Deluxe</option>
												<option value='Premier'>Premier Suite</option>
												<option value='Superior'>Superior</option>
												<option value='Twin'>Superior Twin</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Guests</span>
											<Select name="guests" class="form-control"/>
												<option disabled>Select</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>4+</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input name="checkin" class="form-control" type="date" required>
											<span class="form-label">Check In</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input name="checkout" class="form-control" type="date" required>
											<span class="form-label">Check Out</span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button type="	submit" name="btnBook" class="submit-btn">Book Now</button>
								</div>
							</form>
							<p></p>
							<form method="post" action="room.php">
							<div class="form-btn">
								<button class="submit-btn">Cancel</button>
							</div>
						</form>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/reservationjquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<?php
 	include 'includes/footer.php';
 ?>
