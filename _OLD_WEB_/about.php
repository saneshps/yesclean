<!DOCTYPE html>

<html lang="en">

<head>







	<title>About Us | YES CLEAN</title>

	<link rel="shortcut icon" href="img/favicon.png">

	<meta charset="utf-8">

	<meta name="keywords" content="floor cleaning machines, autonomous sweeper, road sweeper, commercial pool cleaning robot, janitor trolley, air purifier">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="We are the leading cleaning machinery suppliers in UAE, focused on hygiene solutions driven by the experience and passion.">

        <!-- canonical -->
 <link href="https://www.yesclean.ae/about.php" rel="canonical">
      <!--// canonical -->



	<!--font-->

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">





	<!--News-->



	<link href='https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>



	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">



	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">

	<!--***************************************-->







	<!--***************************************-->

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/layout.css">

	<link rel="stylesheet" href="css/about.css">

	<!-- search box -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
	<!-- search box -->

</head>

<body>







	<?php $page = 'about';
	include 'header.php'; ?>



	<div class="page1" id="page1">

		<!-- header -->



		<div id="about-banner">



		</div>



		<div class="catpion">

			<h2>Our Story</h2>

		</div>



















		<!---->

		<!--slider-->

	</div>

	</div>





	</div>











	</div>





	  <?php include('social.php');?>



	<!--slider-->













	<section class="about-cont">

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-12">

					<p>YES Clean is a part of YES Machinery, a company found to redefine the machinery business in the Middle East. We focused on adding value by promoting the best solutions, empowering product expertise, setting up a demo center to watch, try and like the product, and above all, a flexible approach to the client and market needs. We are always passionate about technology, Innovation, and introducing solutions for different industries.</p>

					<p>From a team of three, YES Machinery has appreciably come a long way forward. We represent and promote the most reputed global brands through our experienced sales team. Focused on machines and solutions for the Steel fabrication industry and providing peripheral machinery & automation solutions to the general industry, YES Machinery caters to every industrial sector. The brand further diversified to specialty rentals providing types of machinery for a shorter period.</p>

					<p>With German collaboration, YES Machinery has risen to be a one-stop solution for all machinery needs.</p>

					<p>The Middle East market is expediting its course of action in facilitating the highest levels of global standards when it comes to hygiene. </p>

					<p>YES Clean came in with a focus on both cleanliness & innovation with reliable, sustainable, and professional cleaning solutions collaborating with the leading global innovators worldwide in the field of machinery, chemical, and cleaning tools. </p>

					<p>The key remains in enjoying what we do, which is to observe and find solutions for customer challenges. We make sure all our machines and solutions are backed by a trained, dedicated, and prompt team at all times.</p>

					<p>Ultimately, Customer satisfaction is the core of our foundation. </p>

					<p>The YES Family constitutes of multidomain businesses as below</p>

					<p></p>

				</div>

			</div>

			<div class="row top">

				<div class="col-md-12">

					<a href="http://yesmachinery.ae/" target="blank"><img src="img/ym-logo.png" class="yes"></a>

					<a href="http://yesautomation.ae/" target="blank"><img src="img/ya-logo.png"></a>

					<a href="http://yesclean.ae/" target="blank"><img src="img/yc-logo.png"></a>

					<a href="http://storetogo.ae/" target="blank"><img src="img/stg-logo.png"></a>

					<a href="http://rhinofloor.ae/" target="blank"><img src="img/rh-logo.png"></a>

					<a href="http://bigleap.ae/" target="blank"><img src="img/bl-logo.png"></a>

				</div>

			</div>

		</div>

	</section>









	<!--footer-->

	<div class="page5 footer" id="footer">

		<!-- footer -->

		<?php include 'footer.php'; ?>

	</div>



























	<script src="">
		$('a[href*="#"]')

			// Remove links that don't actually link to anything

			.not('[href="#"]')

			.not('[href="#0"]')

			.click(function(event) {

				// On-page links

				if (

					location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')

					&&

					location.hostname == this.hostname

				) {

					// Figure out element to scroll to

					var target = $(this.hash);

					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

					// Does a scroll target exist?

					if (target.length) {

						// Only prevent default if animation is actually gonna happen

						event.preventDefault();

						$('html, body').animate({

							scrollTop: target.offset().top

						}, 1000, function() {

							// Callback after animation

							// Must change focus!

							var $target = $(target);

							$target.focus();

							if ($target.is(":focus")) { // Checking if the target was focused

								return false;

							} else {

								$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable

								$target.focus(); // Set focus again

							};

						});

					}

				}

			});
	</script>





	<!-- sticky menu -->
	<script type="text/javascript">
		$(function() {
			var navbar = $('.header');
			$(window).scroll(function() {
				if ($(window).scrollTop() <= 40) {
					navbar.removeClass('navbar-scroll');
				} else {
					navbar.addClass('navbar-scroll');
				}
			});
		});
	</script>
	<!--// sticky menu -->



	<script>
		$(document).ready(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 50) {
					$('#back-to-top').fadeIn();
				} else {
					$('#back-to-top').fadeOut();
				}
			});
			// scroll body to 0px on click
			$('#back-to-top').click(function() {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		});
	</script>

	<a id="back-to-top" href="#" class="back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>


</body>

</html>