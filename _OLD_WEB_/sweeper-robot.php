<?php
session_start();
unset($_SESSION['message']);
if (isset($_POST['sub'])) {



  $email = $_POST['email'];

  $mobile = $_POST['mobile'];

  $pn = $_POST['pn'];





  $header = 'MIME-Version: 1.0' . "\r\n";

  $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

  $header .= 'From: Enquiry From  YES Clean   <no-replay@yesclean.ae >' . "\r\n";

  //$header .= 'Bcc: sales@yesclean.ae' . "\r\n";

  $message = '

<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" align="center">

<tbody><tr>

<td>

  

    <table width="520" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center">

    

    

  <tbody><tr valign="top">

    <td align="center" style="padding-top:30px"><a href="https://www.yesclean.ae/" height="40" width="180" border="0" alt="Atlassian" style="display:block;color:#4c9ac9" align="middle" class="CToWUd"><img src="https://www.yesclean.ae/img/logo.png"/></a>

    </td>

    </tr>

    

    

    <tr>

    <td style="color:#cccccc;padding-top:30px" valign="top">

        <hr color="cccccc" size="1">

    </td>

    </tr>

  

  

        

  <tr>

  <td valign="top" style="padding-top:30px;font-family:Helvetica neue,Helvetica,Arial,Verdana,sans-serif;color:#205081;font-size:24px;line-height:40px;text-align:center;font-weight:bold" align="middle">

    <a style="text-decoration:none;color:#205081;font-weight:bold" target="_blank">

           

    ' . $pn . '</a>      

       

  </td>

  </tr>

  







      

 

  <tr>

  <td valign="top" align="center">

   

      <table border="0" cellspacing="0" cellpadding="0" align="center">

      <tbody><tr>

      <td align="center" style="padding-top:30px;padding-bottom:30px">

                                    

          <a  style="font-size:16px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;font-weight:none;color:#ffffff;text-decoration:none;background-color:#3572b0;border-top:11px solid #3572b0;border-bottom:11px solid #3572b0;border-left:20px solid #3572b0;border-right:20px solid #3572b0;border-radius:50px;display:inline-block;text-align:center" target="_blank">

                                        

          Mail: ' . $email . '  </a>

                                 

      </td>

      </tr>









  <tr>

  <td valign="top" align="center">

   

      <table border="0" cellspacing="0" cellpadding="0" align="center">

      <tbody><tr>

      <td align="center" style="padding-top:30px;padding-bottom:30px">

                                    

          <a  style="font-size:16px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;font-weight:none;color:#ffffff;text-decoration:none;background-color:#3572b0;border-top:11px solid #3572b0;border-bottom:11px solid #3572b0;border-left:20px solid #3572b0;border-right:20px solid #3572b0;border-radius:50px;display:inline-block;text-align:center" target="_blank">

                                        

          Phone: ' . $mobile . '  </a>

                                 

      </td>

      </tr>

      </tbody></table>

  </td>

  </tr>

  





    </tbody></table>

</td>

</tr>



    

<tr>

<td>

    <table width="520" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center">        

    <tbody><tr>

    <td style="color:#cccccc" valign="top">

        <hr color="cccccc" size="1"> 

    </td>

    </tr>           

    <tr>



    </tr>

    <tr>

    <td valign="top" style="font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;color:#707070;font-size:12px;line-height:18px;text-align:center;font-weight:none" align="center">

                Copyright by YesClean.ae

    </td>

    </tr>



    </tbody></table>

    

</td>

</tr>

</tbody></table>

';



  if (mail('sales@yesclean.ae', 'Express Interest', $message, $header)) {



     $_SESSION['message']="Thank you for your interest.We will get back to you shortly";

    //echo "<script>alert('Mail Send Successfully')</script>";
  }
}

?>



<!DOCTYPE html>

<html lang="en">









<head>







  <title> Sweeper Robot in UAE | Autonomous Sweeper | YES Clean</title>

  <link rel="shortcut icon" href="img/favicon.png">

  <meta charset="utf-8">

  <meta name="keywords" content="autonomous sweeper, floor cleaning robot, robotic scrubber drier, robotic sweeper, automatic floor cleaning machine, robotic cleaning machine, robotic floor cleaning machine, auto scrubber drier">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="YES Clean supplies a wide range of floor cleaning robots & autonomous sweepers in the UAE, with their range of sensors covering each point of the targeted area.">

 <!-- canonical -->
 <link href="https://www.yesclean.ae/sweeper-robot.php" rel="canonical">
      <!--// canonical -->

  <!--font-->

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">











  <!--***************************************-->

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/layout.css">

  <link rel="stylesheet" href="css/products.css">

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



  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187454492-8"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'UA-187454492-8');
  </script>



</head>

<body>







  <?php $page = 'product';
  include 'header.php'; ?>



  <div class="page1" id="page1">

    <!-- header -->







    <main class="main-content">

      <section class="slideshow">

        <div class="slideshow-inner">

          <div class="slides">

            <div class="slide is-active ">

              <div class="slide-content">

                <div class="caption">

                  <div class="title"> </div>

                  <div class="text-inn">


                  </div>



                </div>

              </div>

              <div class="image-container">

                <img src="img/sweeper-robot-1.jpg" alt="sweeper-robot" class="image" />

              </div>

            </div>

            <div class="slide">

              <div class="slide-content">

                <div class="caption">

                  <div class="title"> </div>

                  <div class="text-inn">


                  </div>



                </div>

              </div>

              <div class="image-container">

                <img src="img/sweeper-robot-2.jpg" alt="sweeper-robot" class="image" />

              </div>

            </div>

            <div class="slide">

              <div class="slide-content">

                <div class="caption">

                  <div class="title"> </div>

                  <div class="text-inn">


                  </div>



                </div>

              </div>

              <div class="image-container">

                <img src="img/sweeper-robot-3.jpg" alt="sweeper-robot" class="image" />

              </div>

            </div>

            <div class="slide">

              <div class="slide-content">

                <div class="caption">

                  <div class="title"> </div>

                  <div class="text-inn">


                  </div>



                </div>

              </div>

              <div class="image-container">

                <img src="img/sweeper-robot-4.jpg" alt="sweeper-robot" class="image" />

              </div>

            </div>

            <div class="caption1">

              <div class="title1">
                <h1>SWEEPER-VACUUM ROBOT </h1>
              </div>

              <div class="text-inn">

                <!--    <p>World's first Fully Autonomous Scrubber Drier Robot</p>-->

              </div>



            </div>

          </div>

          <div class="pagination">

            <div class="item is-active">

              <span class="icon">1</span>

            </div>

            <div class="item">

              <span class="icon">2</span>

            </div>

            <div class="item">

              <span class="icon">3</span>

            </div>

            <div class="item">

              <span class="icon">4</span>

            </div>


          </div>

          <div class="arrows">

            <div class="arrow prev">

              <span class="svg svg-arrow-left">

                <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                  <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
                </svg>

                <span class="alt sr-only"></span>

              </span>

            </div>

            <div class="arrow next">

              <span class="svg svg-arrow-right">

                <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                  <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
                </svg>

                <span class="alt sr-only"></span>

              </span>

            </div>

          </div>

        </div>

      </section>

    </main>

















  </div>











  </div>





  <?php include('social.php');?>



  <!--slider-->













  <section class="about-cont">

    <div class="container-fluid">

      <div class="row">
        	<div class="col-md-12 col-sm-12">
			<?php 
			if(isset($_SESSION['message']))
			{ ?>  
			<style>
			.alert-warning {
    color: #ffffff;
    background-color: #017ac9;
    border-color: #017ac9;
}
            </style>			
			   
			   <div class="alert alert-warning alert-dismissible" role="alert">
				  <strong><?php echo $_SESSION['message'] ?>!</strong> 
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
			  </div>
				
				
		   <?php	}		
			
			?>
		</div>	


        <div class="col-md-3 col-sm-12">

          <div class="expert">

            <div class="reach">

              <h3>REACH OUR EXPERT</h3>

              <img src="img/sanub.png" class="img-responsive" style="margin: auto;">

              <h6>Sanub Rajan</h6>

              <p><a href="mailto:sales@yesclean.ae">sales@yesclean.ae</a></p>

            </div>



            <div class="intrest">



              <h3>EXPRESS INTEREST</h3>

              <form method="post">

                <input type="hidden" name="pn" id="pn">

                <div class="col-md-12 col-sm-12 padd">

                  <input type="email" name="email" placeholder="Enter Your Email id" required="">

                </div>



                <div class="col-md-12 col-sm-12 padd">

                  <input placeholder="Mobile number" name="mobile" required="">

                </div>





                <div class="col-md-12 col-sm-12 padd">

                  <input type="submit" value="SEND" name="sub">

                </div>

              </form>



              <h4>Hear from us in 24 hours</h4>

            </div>







            







            <div class="download">

              <h3>DOWNLOAD PDF</h3>

              <p><a href="pdf/Sweeper - Vacuum Robot.pdf">

                  <i class="demo-icon icon-file-pdf">&#xf1c1;</i>

                  Sweeper-Vacuum Robot</a></p>

            </div>







          </div>







        </div>



        <div class="col-md-9  col-sm-12">

          <h2 style="text-transform: uppercase;" id="product-tittle"> Sweeper Robot </h2>


          <p>The Sweeper Robot is the worlds firstindustrial dry cleaning robot with intergrated dust extraction for large areas and coarse dirt. </p>
          <p>The sweeping robot orients itself autonomously in the rooms and cleans the areas efficiently around the clock. Thanks to its low design, it also cleans optimally under machines and equipment. </p>
          <p>The Sweeper Robot can be easily transported and used in several buildings or rooms. With the help of sophisticated algorithm and artificial intelligence, the robot can clean very large industrial areas. </p>
          <p>No additional installations are required to operate the robotic sweeper. The intelligent navigation reacts to changing environments without orientation aids or pre-programming. Also available in remote controlled variant. </p>

          <p>Also available in remote controlled variant suitable for areas with no human access, especially low clearance areas like below machineries, racks, staircases, etc. </p>




          <div class="row top dry-vacuum">

            <!-- 1 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
              <img src="img/sweeper-robot-11.jpg" class="img-responsive" alt="Scrubby">
              <p> KEMARO 900 </p>
            </div>
            <!--// 1 -->


          </div>



        </div>

      </div>



    </div>

  </section>







































  <!--footer-->

  <div class="page5 footer" id="footer">

    <!-- footer -->

    <?php include 'footer.php'; ?>

  </div>







  <script src="js/jquerypro.min.js"></script>

  <script src="js/TweenMax.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script>
              $(function() {
            
                var con = $('#product-tittle').html();

                //alert(con);

                $('#pn').val(con);

              });
			 
            </script>



  <script>
    var slideshowDuration = 4000;

    var slideshow = $('.main-content .slideshow');



    function slideshowSwitch(slideshow, index, auto) {

      if (slideshow.data('wait')) return;



      var slides = slideshow.find('.slide');

      var pages = slideshow.find('.pagination');

      var activeSlide = slides.filter('.is-active');

      var activeSlideImage = activeSlide.find('.image-container');

      var newSlide = slides.eq(index);

      var newSlideImage = newSlide.find('.image-container');

      var newSlideContent = newSlide.find('.slide-content');

      var newSlideElements = newSlide.find('.caption > *');

      if (newSlide.is(activeSlide)) return;



      newSlide.addClass('is-new');

      var timeout = slideshow.data('timeout');

      clearTimeout(timeout);

      slideshow.data('wait', true);

      var transition = slideshow.attr('data-transition');

      if (transition == 'fade') {

        newSlide.css({

          display: 'block',

          zIndex: 2

        });

        newSlideImage.css({

          opacity: 0

        });



        TweenMax.to(newSlideImage, 1, {

          alpha: 1,

          onComplete: function() {

            newSlide.addClass('is-active').removeClass('is-new');

            activeSlide.removeClass('is-active');

            newSlide.css({
              display: '',
              zIndex: ''
            });

            newSlideImage.css({
              opacity: ''
            });

            slideshow.find('.pagination').trigger('check');

            slideshow.data('wait', false);

            if (auto) {

              timeout = setTimeout(function() {

                slideshowNext(slideshow, false, true);

              }, slideshowDuration);

              slideshow.data('timeout', timeout);
            }
          }
        });

      } else {

        if (newSlide.index() > activeSlide.index()) {

          var newSlideRight = 0;

          var newSlideLeft = 'auto';

          var newSlideImageRight = -slideshow.width() / 8;

          var newSlideImageLeft = 'auto';

          var newSlideImageToRight = 0;

          var newSlideImageToLeft = 'auto';

          var newSlideContentLeft = 'auto';

          var newSlideContentRight = 0;

          var activeSlideImageLeft = -slideshow.width() / 4;

        } else {

          var newSlideRight = '';

          var newSlideLeft = 0;

          var newSlideImageRight = 'auto';

          var newSlideImageLeft = -slideshow.width() / 8;

          var newSlideImageToRight = '';

          var newSlideImageToLeft = 0;

          var newSlideContentLeft = 0;

          var newSlideContentRight = 'auto';

          var activeSlideImageLeft = slideshow.width() / 4;

        }



        newSlide.css({

          display: 'block',

          width: 0,

          right: newSlideRight,

          left: newSlideLeft

            ,
          zIndex: 2

        });



        newSlideImage.css({

          width: slideshow.width(),

          right: newSlideImageRight,

          left: newSlideImageLeft

        });



        newSlideContent.css({

          width: slideshow.width(),

          left: newSlideContentLeft,

          right: newSlideContentRight

        });



        activeSlideImage.css({

          left: 0

        });



        TweenMax.set(newSlideElements, {
          y: 20,
          force3D: true
        });

        TweenMax.to(activeSlideImage, 1, {

          left: activeSlideImageLeft,

          ease: Power3.easeInOut

        });



        TweenMax.to(newSlide, 1, {

          width: slideshow.width(),

          ease: Power3.easeInOut

        });



        TweenMax.to(newSlideImage, 1, {

          right: newSlideImageToRight,

          left: newSlideImageToLeft,

          ease: Power3.easeInOut

        });



        TweenMax.staggerFromTo(newSlideElements, 0.8, {
          alpha: 0,
          y: 60
        }, {
          alpha: 1,
          y: 0,
          ease: Power3.easeOut,
          force3D: true,
          delay: 0.6
        }, 0.1, function() {

          newSlide.addClass('is-active').removeClass('is-new');

          activeSlide.removeClass('is-active');

          newSlide.css({

            display: '',

            width: '',

            left: '',

            zIndex: ''

          });



          newSlideImage.css({

            width: '',

            right: '',

            left: ''

          });



          newSlideContent.css({

            width: '',

            left: ''

          });



          newSlideElements.css({

            opacity: '',

            transform: ''

          });



          activeSlideImage.css({

            left: ''

          });



          slideshow.find('.pagination').trigger('check');

          slideshow.data('wait', false);

          if (auto) {

            timeout = setTimeout(function() {

              slideshowNext(slideshow, false, true);

            }, slideshowDuration);

            slideshow.data('timeout', timeout);

          }

        });

      }

    }



    function slideshowNext(slideshow, previous, auto) {

      var slides = slideshow.find('.slide');

      var activeSlide = slides.filter('.is-active');

      var newSlide = null;

      if (previous) {

        newSlide = activeSlide.prev('.slide');

        if (newSlide.length === 0) {

          newSlide = slides.last();

        }

      } else {

        newSlide = activeSlide.next('.slide');

        if (newSlide.length == 0)

          newSlide = slides.filter('.slide').first();

      }



      slideshowSwitch(slideshow, newSlide.index(), auto);

    }



    function homeSlideshowParallax() {

      var scrollTop = $(window).scrollTop();

      if (scrollTop > windowHeight) return;

      var inner = slideshow.find('.slideshow-inner');

      var newHeight = windowHeight - (scrollTop / 2);

      var newTop = scrollTop * 0.8;



      inner.css({

        transform: 'translateY(' + newTop + 'px)',
        height: newHeight

      });

    }



    $(document).ready(function() {

      $('.slide').addClass('is-loaded');



      $('.slideshow .arrows .arrow').on('click', function() {

        slideshowNext($(this).closest('.slideshow'), $(this).hasClass('prev'));

      });



      $('.slideshow .pagination .item').on('click', function() {

        slideshowSwitch($(this).closest('.slideshow'), $(this).index());

      });



      $('.slideshow .pagination').on('check', function() {

        var slideshow = $(this).closest('.slideshow');

        var pages = $(this).find('.item');

        var index = slideshow.find('.slides .is-active').index();

        pages.removeClass('is-active');

        pages.eq(index).addClass('is-active');

      });



      /* Lazyloading

      $('.slideshow').each(function(){

        var slideshow=$(this);

        var images=slideshow.find('.image').not('.is-loaded');

        images.on('loaded',function(){

          var image=$(this);

          var slide=image.closest('.slide');

          slide.addClass('is-loaded');

        });

      */



      var timeout = setTimeout(function() {

        slideshowNext(slideshow, false, true);

      }, slideshowDuration);



      slideshow.data('timeout', timeout);

    });



    if ($('.main-content .slideshow').length > 1) {

      $(window).on('scroll', homeSlideshowParallax);

    }
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