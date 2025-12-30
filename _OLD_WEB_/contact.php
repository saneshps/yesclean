 <?php
	if (isset($_POST['subc'])) {
		//print_r($_POST);exit;
		$name = $_POST['firstname'];
		$mail = $_POST['email'];
		$phone = $_POST['mobile'];

		$msg = $_POST['msg'];
		$subject = $_POST['subject'];

		$header = 'MIME-Version: 1.0' . "\r\n";
		$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		//$header .= 'To: Yesmachinery ' . "\r\n";
		//$header .= 'From: Yesclean ' . "\r\n";
		$header .= 'From: ' . $mail . "\r\n";

		$message = '
<div style="background:#e5e5e5; padding:2% 6%">


<div style="padding:15px; background:#e7e7e7;text-align: center;  border-bottom:solid 5px #9dc33b">
<div><img src="https://www.yesclean.ae/img/logo.png"  alt="Yesclean" /></div>
</div>


 


<div style="margin-top: -6%;">
<div style="padding:15px 15px 35px 15px; background:white;text-align: center; ">
<H1>Enquiry from Yesclean Website</H1>
<div style="padding-bottom:5px; height: 30px; border-top:dashed 1px #e5e5e5; padding-top:20px;">
<div > Name:  <a style="color:#999">' . $name . '</a></div>


</div>
<div style="padding-bottom:5px; height: 30px;">
<div > Mail:  <a style="color:#999">' . $mail . '</a></div>

 
  
</div>

<div style="padding-bottom:5px; height: 30px;">
<div > Phone:  <a style="color:#999">' . $phone . '</a></div>

 
  
</div>


<div style="padding-bottom:5px; height: 30px;">
<div > Subject:  <a style="color:#999">' . $subject . '</a></div>


  
</div>

<div style="padding-bottom:5px; height: 30px;">
<div > Message:  <a style="color:#999">' . $msg . '</a></div>
  
</div>

</div>

';
		//echo '<pre>';print_r($message);exit;
		//$result= mail('shahad.bigleap.gmail.com','Enquiry From yesclean website' ,$message,$header);
		$result = mail('sales@yesclean.ae', 'Enquiry From yesclean website', $message, $header);
		//mail($email,'Thanks for your feedback' , $feedback,$header);
		if ($result) {
			echo "<script>alert('Mail Send Successfully')</script>";
			echo "<script>window.location='index.php'</script>";
		} else {
			echo "<script>alert('Something Wrong.......')</script>";
		}
	}

	?>


 <!DOCTYPE html>
 <html lang="en">

 <head>



 	<title>YES CLEAN</title>
 	<link rel="shortcut icon" href="img/favicon.png">
 	<meta charset="utf-8">
 	<meta name="keywords" content="">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="description" content="">

 	<!-- canonical -->
 	<link href="https://www.yesclean.ae/contact.php" rel="canonical">
 	<!--// canonical -->



 	<!--font-->
 	<link rel="preconnect" href="https://fonts.googleapis.com">
 	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 	<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


 	<!--News-->

 	<link href='https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>

 	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">

 	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

 	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
 	<!--***************************************-->



 	<!--***************************************-->
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/layout.css">
 	<link rel="stylesheet" href="css/contact.css">
 	<!-- search box -->
 	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
 	<!-- search box -->
 	<!-- Global site tag (gtag.js) - Google Analytics -->
 	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-206008754-1">
 	</script>








 	<script>
 		window.dataLayer = window.dataLayer || [];

 		function gtag() {
 			dataLayer.push(arguments);
 		}
 		gtag('js', new Date());

 		gtag('config', 'UA-206008754-1');
 	</script>
 </head>

 <body>



 	<?php $page = 'contact';
		include 'header.php'; ?>

 	<div class="page5" id="page1">
 		<!-- header -->

 		<div id="contact-banner">

 		</div>

 		<div class="catpion">
 			<h1>Contact Us</h1>
 		</div>









 		<!---->
 		<!--slider-->
 	</div>
 	</div>


 	</div>





 	</div>


 	<?php include('social.php'); ?>

 	<!--slider-->


 	<section id="contact-content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-md-8 text-center mx-auto">
 					<h3>Our Locations</h3>
 					<p>If you would like to find out more about how Yes Machinery can help your business, we will be more than happy to speak with you and set up a meeting to identify your requirement and provide you our proposal</p>

 				</div>
 			</div>

 			<div class="row pt-5">
 				<div class="col-lg-5 col-md-5 col-sm-6 up text-center">
 					<div class="">
 						<div class="col-md-12 pb-5">
 							<h4>REGISTERED COMPANY NAME &amp; ADDRESS:</h4>
 							<p>YORK ENGINEERING SOLUTIONS FZC </p>
 							<p>P O Box: 42167, OFFICE NO.: LV 27-D HAMRIYAH FREE ZONE PHASE 2 <br> | SHARJAH | UAE</p>
 							<!-- 	<h5><span>TEL :</span> +971 6 5264382 </h5>
					<h5><span>MOB :</span> +971 50 8993781 </h5>
					<h5><span>FAX :</span>+971 6 5264384 </h5>
					<p>Mail : <a href="mailto:sales@yesmachinery.ae"><span>sales@yesmachinery.ae</span></a></p>
 -->
 						</div>



 						<div class="col-md-12 col-sm-12 up">

 							<div class="ic-con col-lg-6 col-md-12 cnt-i">
 								<i class="fa fa-phone" aria-hidden="true"></i>
 								<h3> Tel</h3>
 								<h5> <a href="tel:+97165264382"> + 971 6 5264382 </a> </h5>
 							</div>
 							<div class="ic-con col-lg-6 col-md-12 cnt-i">
 								<i class="fa fa-mobile" aria-hidden="true"></i>
 								<h3>Mob</h3>
 								<h5> <a href="tel:+971563986757"> + 971 56 398 6757 </a> </h5>
 							</div>
 							<div class="ic-con col-lg-6 col-md-12 cnt-i">
 								<i class="fa fa-fax" aria-hidden="true"></i>
 								<h3>Fax</h3>
 								<h5> <a href="fax:+97165264384 "> + 971 6 5264384 </a> </h5>
 							</div>
 							<div class="ic-con col-lg-6 col-md-12 cnt-i">
 								<i class="fa fa-envelope" aria-hidden="true"></i>
 								<h3>E-mail</h3>
 								<h5><a href="mailto:sales@yesclean.ae"><span>sales@yesclean.ae</span></a></h5>
 								<h5>
 								</h5>
 							</div>

 						</div>



 					</div>


 				</div>

 				<div class="col-lg-6 col-md-6 col-sm-6">

 					<section id="contact-form">
 						<div class="container-fluid">
 							<div class="row">
 								<div class="col-md-12">
 									<h2>Quick Enquiry</h2>
 									<p>Brief us your requirements below, and let's connect</p>

 								</div>
 							</div>



 							<div class="row">
 								<div class="col-md-12">
 									<form action="" method="post">

 										<div class="row">
 											<div class="col-md-6 col-sm-12">
 												<input type="text" id="fname" pattern=".*\S+.*" name="firstname" placeholder="Firstname.." required="">
 											</div>

 											<div class="col-md-6 col-sm-12">
 												<input type="email" id="email" pattern=".*\S+.*" name="email" placeholder="E-mail.." required="">
 											</div>


 											<div class="col-md-6 col-sm-12">
 												<input type="text" id="lname" pattern=".*\S+.*" name="mobile" placeholder="Mobile.." required="">
 											</div>

 											<div class="col-md-6 col-sm-12">
 												<input type="text" id="lname" pattern=".*\S+.*" name="subject" placeholder="Subjects..">
 											</div>

 											<div class="col-md-12">

 												<textarea id="subject" name="msg" pattern=".*\S+.*" placeholder="Message" style="height:200px" required=""></textarea>
 											</div>
 											<div class="col-md-12">
 												<input type="submit" value="Send mail" name="subc">
 											</div>
 										</div>
 									</form>
 								</div>
 							</div>

 						</div>



 					</section>

 				</div>


 			</div>
 		</div>

 	</section>











 	<!--footer-->
 	<div class="page5 footer" id="footer">

 		<!-- footer -->
 		<?php include 'footer.php'; ?>

 	</div>













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