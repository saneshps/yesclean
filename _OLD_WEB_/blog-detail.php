<?php
include("include/config.php");
$slug = $_GET['slug'];
$blog_detail = mysqli_query($con, "select * from `blogs` where `slug`='$slug'");
$row_blog_detail = mysqli_fetch_array($blog_detail);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="https://www.yesclean.ae/blog-detail">


  <title><?php echo $row_blog_detail['title'];  ?> | YES Clean</title>
  <link rel="shortcut icon" href="../img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $row_blog_detail['meta_description'];  ?>">
  <meta property="og:title" content="<?php echo $row_blog_detail['title'];  ?> | YES Clean" />
  <meta name="og:description" content="<?php echo $row_blog_detail['meta_description'];  ?>">
  <meta property="og:type" content="article" />
  <meta property="og:image" content="https://admin.yesclean.ae/storage/<?php echo $row_blog_detail['default_image']; ?>" />
  <meta property="og:image:secure_url" content="https://admin.yesclean.ae/storage/<?php echo $row_blog_detail['default_image']; ?>" />
  <meta property="og:image:width" content="560" />
  <meta property="og:image:height" content="315" />
  <meta property="og:site_name" content="Yesclean" />
  <meta property="og:url" content="https://www.yesclean.ae/blog-detail/<?php echo $row_blog_detail['slug'];  ?>" />

  <!-- canonical -->
  <link href="blog-detail/<?php echo $row_blog_detail['slug'];  ?>" rel="canonical">
  <!--// canonical -->

  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">






  <!--***************************************-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/layout.css">
  <link rel="stylesheet" href="css/blogs-det.css">



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


  <?php $page = 'blog';
  include 'header.php'; ?>

  <div class="page1" id="page1">
    <!-- header -->



    <main class="main-content">
      <section class="slideshow">

      </section>
    </main>








  </div>





  </div>


  <?php include('social.php'); ?>

  <!--slider-->






  <section class="about-cont">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h3 style="float: right; font-weight: 600; color: #017ac9; font-size:18px;"><a href="../blogs.php">BACK</a></h3>
        </div>
      </div>
      <div class="row">

        <div class="col-md-3 col-sm-12">
          <div class="expert">
            <div class="reach">
              <h3>OUR PRODUCTS</h3>

            </div>

            <div class="intrest">

              <h4><a href="floor-cleaning-robot.php">Cleaning Robots</a></h4>
              <h4><a href="sweeper-robot.php">Sweeper Robot</a></h4>
              <h4><a href="swimming-pool-cleaning-robot.php">Swimming Pool Cleaning Robots</a></h4>
              <h4><a href="floor-cleaning-machines.php">Cleaning Machines</a></h4>
              <h4><a href="compact-sweeper.php">Sweeper Tool Carrier</a></h4>
              <h4><a href="multi-purpose-trolleys.php">Multi Purpose Trolleys</a></h4>
              <h4><a href="air-purification-system.php">Air Purification System</a></h4>
              <h4><a href="cleaning-chemicals.php">Chemicals</a></h4>


            </div>



            <script>
              $(function() {
                var con = $('#product-tittle').html();
                //alert(con);
                $('#pn').val(con);
              });
            </script>



            <!-- <div class="download">
			<h3>DOWNLOAD PDF</h3>				
				<p><a href="pdf/Autonomous-Scrubber-Drier-RA-660-Navi.pdf">
					<i class="demo-icon icon-file-pdf">&#xf1c1;</i>
					Autonomous Scrubber</a></p>
			</div> -->



          </div>



        </div>

        <div class="col-md-9  col-sm-12">
          <h1><?php echo $row_blog_detail['title'];  ?></h1>
          <img src="https://admin.yesclean.ae/storage/<?php echo $row_blog_detail['default_image']; ?>" alt="<?php echo $row_blog_detail['alt'];  ?>" style="width:100%;">

          <?php echo $row_blog_detail['description'];  ?>



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
          left: newSlideLeft,
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








</body>

</html>