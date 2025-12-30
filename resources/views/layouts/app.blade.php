<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('meta')
  <!--font-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- OG Tags -->
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.yesclean.ae/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="  Best Cleaning Machinery Equipment & Cleaning Materials Suppliers In UAE - YES Clean ">
    <meta property="og:description" content="YES Clean is one of the leading suppliers of cleaning machinery, equipment, and materials in the UAE. We Provid High-quality products at competitive prices. Shop from our exclusive inventory today!">
    <meta property="og:image" content="">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="yesclean.ae">
    <meta property="twitter:url" content="https://www.yesclean.ae/">
    <meta name="twitter:title" content="  Best Cleaning Machinery Equipment & Cleaning Materials Suppliers In UAE - YES Clean ">
    <meta name="twitter:description" content="YES Clean is one of the leading suppliers of cleaning machinery, equipment, and materials in the UAE. We Provid High-quality products at competitive prices. Shop from our exclusive inventory today!">
    <meta name="twitter:image" content="">
    <!-- OG Tags -->

  <!--News-->

  <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}">

  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
  <!--***************************************-->



  <!--***************************************-->

  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/layout.css')}}">
   @stack('style')


  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">


  <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">





  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- fontawesome -->
  <!-- search box -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
  <!-- search box -->


  <link rel="stylesheet" href="{{asset('frontend/css/button.css')}}">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- slick -->
  <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick.theme.css')}}">

  <!-- slick -->


  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TN2CRBH');
  </script>
  <!-- End Google Tag Manager -->


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-206008754-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-206008754-1');
  </script>
  <!-- Google tag (gtag.js) --> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16634254151">
  </script> 
  <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-16634254151'); 
  </script>

</head>

<body>

  @if(Session::get('message'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ Session::get('message') }}</strong>
                                </div>
                                @endif
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TN2CRBH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <div class="page1" id="page1">

    <!-- ======================
          HEADER AREA START
      =======================  -->

    <div class="header-top-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5 col-lg-1 blank"></div>
          <div class="col-xl-7 col-lg-12 header-top-contact">

            <a href="mailto:sales@yesclean.ae"> <i class="fas fa-envelope"></i> sales@yesclean.ae </a>
            <a href="tel:+971542791581"> <i class="fas fa-phone"></i>+971 54 279 1581 </a>
            <button type="button" class="btn-top btn-lg express" data-toggle="modal" data-target="#exampleModalCenter">
              Book Your Services
            </button>

         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle"> Book Your Services </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="row" id="quatation_loader">
                    <div class="col-md-12" style="text-align: center;">
<!--                      <img src="{{asset('frontend/img/spinning-loading.gif')}}" style="width: 133px;" alt="loading spinner" />-->
                        <img src="https://www.yesclean.ae/frontend/img/spinning-loading.gif" style="width: 133px;" alt="Loading spinner">
                    </div>
                  </div>
                  <div class="alert alert-success alert-block" id="success_quatation_block">
                    <div class="row">
                      <div class="col-md-10">
                        <strong id="success_quatation_message_block"></strong>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                      </div>

                    </div>
                  </div>
                  <div class="error_request_form"></div>
                  <div class="modal-body">
                    <form id="contact" action="" method="post">



                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name_quatation" placeholder="Name" required="">

                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email_quatation" aria-describedby="emailHelp" placeholder="Email" required="">

                      </div>

                      <div class="form-group">
                        <input type="tel" class="form-control" id="phone_quatation" placeholder="Phone Number" required="" name="phone">

                      </div>
                      <div class="form-group">
                        <select class="form-control" id="service_quatation" name="service">
                          <option value="">-- Service Type --</option>
                          <option value="MachineRepair">Machine Repair</option>
                          <option value="Service-Maintenance">Service &amp; Maintenance</option>
                          <option value="DemoRequest">Demo Request/ Training</option>
                          <option value="Installation-Commissioning">Installation/ Commissioning</option>
                        </select>

                      </div>
                      <div class="form-group">
                        <textarea name="message" id="message_quatation" placeholder="Message" class="form-control"></textarea>
                      </div>                          
                      <div class="form-group">																
                        <div class="row">																
                          <div class="col-md-12 d-flex mb-3">																				
                            <div id="captcha_0" class="captcha-div"></div>																				
                            <a href="javascript:void(0);" onclick="refreshCaptcha();" class="ml-2" style="color:#999;" title="Refresh Captcha"> 
                              <i class="fa fa-refresh" aria-hidden="true" style="font-size: 19px;"></i></a>																				
                            </div>																			
                            	<div class="col-md-12 d-flex mb-3">																				
                                <input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_0" />																				
                              </div>																				</div>                                                            </div>


                      <button type="submit" id="contact-submit" data-id="0" class="btn submit-book">Submit</button>


                    </form>
                  </div>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <header>
      @include('layouts.menu')
    </header>

    @yield('content')

    <div class="page5 footer" id="footer">
      <!-- footer -->
      @include('layouts.footer')
    </div>



    <!-- nav -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      //jquery for toggle dropdown menus
      $(document).ready(function() {
        //toggle sub-menus
        $(".sub-btn").click(function() {
          $(this).next(".sub-menu").slideToggle();
        });

        //toggle more-menus
        $(".more-btn").click(function() {
          $(this).next(".more-menu").slideToggle();
        });
      });

      //javascript for the responsive navigation menu
      var menu = document.querySelector(".menu");
      var menuBtn = document.querySelector(".menu-btn");
      var closeBtn = document.querySelector(".close-btn");

      menuBtn.addEventListener("click", () => {
        menu.classList.add("active");
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove("active");
      });

      //javascript for the navigation bar effects on scroll
      window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
      //javascript for the navigation bar effects on scroll
      window.addEventListener("scroll", function() {
        var header = document.querySelector("header_bar");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
    </script>
    <!--// nav -->




    <!-- search -->
    <script src="{{asset('frontend/js/search.js')}}"></script>
    <!-- search -->



    <!-- slick for brand area -->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script>
      var code = [];
    
    function createCaptcha() {
        document.getElementsByClassName('captcha-div').innerHTML = "";
        let cdiv = document.getElementsByClassName('captcha-div').length;
		for (i = 0; i < cdiv; i++) {
            let randomCode = generateCapchaCode();
            var canv = document.createElement("canvas");
            canv.id = "captcha_" + i;
            canv.className = "mycaptcha";
            canv.width = 100;
            canv.height = 50;
            var ctx = canv.getContext("2d");
            ctx.font = "25px Georgia";
            ctx.strokeText(randomCode, 0, 30);
            code[i] = randomCode;
            document.getElementById('captcha_' + i).appendChild(canv);
        }
    }
    
    function generateCapchaCode() {
        var charsArray = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var lengthOtp = 4;
		var captcha = [];
        for (var i = 0; i < lengthOtp; i++) {
            var index = Math.floor(Math.random() * charsArray.length + 1);
            if (captcha.indexOf(charsArray[index]) == -1) captcha.push(charsArray[index]);
            else i--;
        }
        return captcha.join("");
    }
    
    function validateCaptcha(text_val) {
        if (code.indexOf(text_val) !== -1) {
            $(".error_request_form").hide();
            $('.error_request_form').removeClass('alert alert-danger').html("");
            return true;
        } else {
            $(".error_request_form").show();
            $('.error_request_form').addClass('alert alert-danger').html("Captcha is Invalid");
            return false;
            $(".mycaptcha").remove();
            createCaptcha();
        }
    }
    
    function refreshCaptcha() {
        $(".mycaptcha").remove();
        createCaptcha();
    } 
    </script>
    <script>
      $('.logo-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infiniite: true,
        responsive: [{
            breakpoint: 2000,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 2,
              infinite: true,
            }
          },
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 2,
              infinite: true,
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }

        ]
      });
    </script>
    <!-- slick for brand area -->


    <script src="{{asset('frontend/js/jquerypro.min.js')}}"></script>
    <script src="{{asset('frontend/js/TweenMax.min.js')}}"></script>
    <script>
      var slideshowDuration = 6000;
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
    <script>
      // AJAX call for autocomplete
      $(document).ready(function() {
        $("#search-box").keyup(function() {
          var query = $(this).val();
          if (query != '') {
            var csrf = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
              url: "{{ route('load') }}",
              method: "POST",
              data: {
                query: query,
                _token: csrf,
              },
              beforeSend: function() {
                $("#search-box").css("background", "#FFF  no-repeat 165px");
              },
              success: function(data) {
                $("#suggesstion-box").show();
                $("#suggesstion-box").html(data);
                $("#search-box").css("background", "#FFF");
              }
            });
          } else {
            $("#suggesstion-box").hide();
          }
        });
      });
      //To select a product or category name
      function selectCountry(val) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
      }
    </script>
    <script src='https://unpkg.com/popper.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>    <script>        $(document).ready(function() {			createCaptcha();                 });    </script>
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $("#success_quatation_block").hide();
      $("#quatation_loader").hide();
      $("#contact-submit").click(function(e) {

        e.preventDefault();			var data_id = $(this).attr("data-id");            let text_code = $('#cpatchaTextBox_' + data_id).val();					if (text_code) {					if (!validateCaptcha(text_code)) {					  $('.error_request_form').hide();					  $('.error_request_form').removeClass('alert alert-danger').html(" "); 						  $('.error_request_form').show();					  $('.error_request_form').addClass('alert alert-danger').html("Captcha is Invalid");					  $('#cpatchaTextBox_' + data_id).val("");					  return false;					}				  } else {						$('.error_request_form').show();						$('.error_request_form').addClass('alert alert-danger').html("No Captcha entered");														return false;				  }

        var name = $("#name_quatation").val();
        var phone = $("#phone_quatation").val();
        var email = $("#email_quatation").val();
        var message_quatation = $("#message_quatation").val();
        var service_quatation = $("#service_quatation").val();



        $.ajax({
          method: "POST",
          url: "{{ route('request-quotation-mail') }}",
          data: {
            name: name,
            phone: phone,
            email: email,
            message_quatation: message_quatation,
            service_quatation: service_quatation,
          },
          beforeSend: function(xhr) {
            // Show the loader
            $("#quatation_loader").show();

          },
          success: function(data) {
            $("#quatation_loader").hide();			$(".error_request_form").hide();
            $("#success_quatation_block").show();
            $("#success_quatation_message_block").html(data.success);
            $("#name_quatation").val("");
            $("#phone_quatation").val("");
            $("#email_quatation").val("");
            $("#message_quatation").val("");
            $("#service_quatation").prop('selected', false).find('option:first').prop('selected', true);

          },
          error: function(data) {
            $("#quatation_loader").hide();
            $(".error_request_form").show();
            let err_str = '';
            if (data.responseJSON.errors) {
              err_str = '<dl class="row"><dt class="col-sm-3"></dt><dt class="col-sm-9"><p><b>Whoops!!</b> There is some Problem</p></dt>';
              $.each(data.responseJSON.errors, function(key, val) {
                err_str += '<dt class="col-sm-3">' + key.replace("_", " ") + ' </dt><dd class="col-sm-9">' + val + '</dd>';
              });
              err_str += '</dl>';
              $('.error_request_form').addClass('alert alert-danger').html(err_str);

              return false;
            }

          }
        });

      });
    </script>
      
      <script src="https://unpkg.com/web-vitals"></script>
      <script>
  // Send the Core Web Vitals metrics to Google Analytics.
  import { getCLS, getFID, getLCP } from 'https://unpkg.com/web-vitals?module';

  function sendToGoogleAnalytics({name, delta, id}) {
    gtag('event', name, {
      event_category: 'Web Vitals',
      event_label: id,
      value: Math.round(name === 'CLS' ? delta * 1000 : delta), // values must be integers
      non_interaction: true, // avoids affecting bounce rate
    });
  }

  getCLS(sendToGoogleAnalytics);
  getFID(sendToGoogleAnalytics);
  getLCP(sendToGoogleAnalytics);
</script>
    @stack('scripts')



    <a id="back-to-top" href="#" class="back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>




</body>

</html>
