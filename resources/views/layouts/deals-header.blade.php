<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @yield('meta')
  <!--font-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}">
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
    <!-- =====================
          HEADER START
     ===================== -->
    <header>
        <a href="#" class="logo">
            <img src="{{asset('assets/img/logo.png')}}" alt="yesclean">
        </a>
        <div class="navigation">
            <ul class="menu">
                <div class="close-btn"></div>
                <li class="menu-item"><a class="btn btn-lg express-intrest e-mail" href="mailto:sales@yesclean.ae"> <span> <i
                                class="fas fa-envelope"></i> sales@yesclean.ae </span> </a></li>
                <li class="menu-item"><a class="btn btn-lg express-intrest" href="tel:+97165264382"> <span> <i
                                class="fas fa-phone"></i> +971 65 26 43 82 </span> </a></li>
            </ul>
        </div>
        <div class="menu-btn"></div>
    </header>


    <!-- =====================
              HEADER END
         ===================== -->

    <!-- =====================
              BANNER START
         ===================== -->


    <!-- =====================
              BANNER END
         ===================== -->

    @yield('content')
    <!-- =======================
           PRODUCTS AREA START
         ======================== -->
<footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 footer-box">
                    <div class="footer-widget">

                        <div class="footer-logo">
                            <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                        </div>
                        <div class="footer-social">
                            <ul class="f-social-media">
                                <li> <a href="https://www.facebook.com/YES-Clean-109644828052481" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                                <li> <a href="https://www.linkedin.com/company/yes-clean/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a> </li>
                                <li> <a href="https://www.instagram.com/yescleanuae/" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                                <li> <a href="https://twitter.com/YESClean2" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a href="https://www.youtube.com/channel/UCGblR616vSAvum1HUq39OLw" target="_blank"> <i class="fab fa-youtube"></i> </a> </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 footer-box">
                    <h4> Our Products </h4>
                    <div class="footer-widget">


                        <ul class="f-proct-m">
						    @foreach ($_CategoryMenu as $parent)
                                <li> <i class="fas fa-long-arrow-alt-right"></i> <a href="{{route('category',$parent->short_code)}}"> {{$parent->name}} </a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 footer-box">
                    <h4> Contact Us </h4>
                    <div class="footer-widget">
                        <ul class="f-address">
                            <li> P O Box: 42167, OFFICE NO.: LV 27-D <br>
                                HAMRIYAH FREE ZONE PHASE 2, <br>
                                SHARJAH - UAE </li>
                            <li> <a href="tel:+97165264382" target="_blank"> <i class="fas fa-phone"></i>   +971 6 5264382 </a> </li>
                            <li><a href="tel:+971547918858" target="_blank"> <i class="fas fa-mobile-alt"></i>   +971 54 791 8858  </a> </li>
                            <li>  <i class="fas fa-fax"></i>  +971 6 5264384</li>
                            <li><a href="mailto:sales@yesclean.ae">  <i class="fas fa-envelope"></i>   sales@yesclean.ae</a> </li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </footer>

<footer class="footer-bottom">
    <div class="container">
       <div class="row">
            <div class="col-xl-12">
                <div class="copy-right">
                    <p> © {{ date('Y') }}<span> <a href="https://www.yesclean.ae/" target="_blank"> www.yesclean.ae </a> </span>
                        All rights reserved. Powered By <span> <a href="https://www.bigleap.ae/" target="_blank"> BIG LEAP </a> </span> </p>
                </div>
            </div>
        </div>
    </div>

</footer>


    <!-- =====================
            FOOTER AREA END
         ===================== -->








    <!-- ============================
            BACK TO BUTTON START
         ============================-->
    <a href="#" id="top"> <i class="fas fa-angle-up"></i></a>
    <!-- ============================
                      BACK TO BUTTON END
                   ============================-->

    <!-- =====================
          JS AREA START
     ===================== -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
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
     function generateCapchaCode()
     {
        var charsArray = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var lengthOtp = 4;
        var captcha = [];
         for (var i = 0; i < lengthOtp; i++) {
            var index = Math.floor(Math.random() * charsArray.length + 1);
             if (captcha.indexOf(charsArray[index]) == -1)
                captcha.push(charsArray[index]);
                else i--;
             }
         return captcha.join("");
     }
     function validateCaptcha(text_val) {
	  
        if (code.indexOf(text_val) !== -1) {
		
            $(".error_msg_form").hide();
            $('.error_msg_form').removeClass('alert alert-danger').html("");
            return true;
        } else {
            $(".error_msg_form").show();
            $('.error_msg_form').addClass('alert alert-danger').html("Captcha Invalid");
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
    <!-- =====================
          JS AREA END
     ===================== -->

@stack('scripts')


</body>

</html>
