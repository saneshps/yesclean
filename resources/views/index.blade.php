@extends('layouts.app')
@section('meta') 
<title>  Best Cleaning Machinery Equipment & Cleaning Materials Suppliers In UAE - YES Clean </title>
<meta name="keywords" content="autonomous sweeper, floor cleaning robot, road sweeper, floor cleaning machines, swimming pool cleaning robot, cleaning trolley, air purifier ">
<meta name="description" content="YES Clean is one of the leading suppliers of cleaning machinery, equipment, and materials in the UAE. We Provid High-quality products at competitive prices. Shop from our exclusive inventory today!">
<!-- canonical -->
<link href="{{env('APP_URL')}}" rel="canonical">
<!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/yesclean.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
@endpush
@section('content')
<!-- ====================== 
          HEADER AREA END
      =======================  -->
<!-- <div class="container-fluid">

      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="text">
            <h1>Innovative<br>
              <strong>Cleaning</strong> <br><strong class="tech">Technologies</strong>
            </h1>

            <a href="about.php"><button>Read More <i class="demo-icon icon-right-open-mini">&#xe809;</i></button></a>



            <div class="soci">
              <a class="soci-al" href="https://www.facebook.com/YES-Clean-109644828052481" target="_blank"> <i class="fab fa-facebook-f"></i></a>
              <a class="soci-al" href="https://www.linkedin.com/company/yes-clean/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
              <a class="soci-al" href="https://www.instagram.com/yescleanuae/" target="_blank"> <i class="fab fa-instagram"></i></a>
              <a class="soci-al" href="https://twitter.com/YESClean2" target="_blank"> <i class="fab fa-twitter"></i> </a>
              <a class="soci-al" href="https://www.youtube.com/channel/UCGblR616vSAvum1HUq39OLw" target="_blank"> <i class="fab fa-youtube"></i> </a>
            </div>


          </div>
        </div>
        <div class="col-md-8 col-sm-12">
       
          <main class="main-content">
            <section class="slideshow">
              <div class="slideshow-inner">
                <div class="slides">
                  <div class="slide is-active ">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> World's first fully autonomous cleaning robot </h2>
                        </div>

                        <button class="new"> <a href="floor-cleaning-robot.php" class="ban">read more</a></button>

                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/clean.png" alt="Cleaning Robots" class="image" />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> Quality products from leading manufacturers </h2>
                        </div>
                        <button class="new"> <a href="cleaning-machines.php" class="ban">read more</a></button>

                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/clean-1.png" alt="cleaning machines" class="image" />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> Improving productivity with technology </h2>
                        </div>

                        <button class="new"><a href="compact-sweeper.php" class="ban"> read more</a></button>

                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/clean-3.png" alt="Cleaning Robot" class="image" />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> Robust products for challenging environments </h2>
                        </div>

                        <button class="new"><a href="multi-purpose-trolleys.php" class="ban"> read more</a></button>

                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/clean-4.png" alt="MULTI PURPOSE  CLEANING  TROLLEYS" class="image" />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> Keeping air clean and safe </h2>
                        </div>
                        <button class="new"><a href="air-purification-system.php" class="ban">read more</a></button>

                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/clean-5.png" alt="AIR PURIFICATION SYSTEM" class="image" />
                    </div>
                  </div>

                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> Finding solutions to the world’s biggest challenges </h2>
                        </div>
                        <button class="new"><a href="cleaning-chemicals.php" class="ban">read more</a></button>
                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/clean-6.png" alt="cleaning products in dubai" class="image" />
                    </div>
                  </div>

                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> VACUUM CLEANING ROBOT WITH FLEET MANAGEMENT</h2>
                        </div>
                        <button class="new"><a href="autonomous-vacuum-cleaning-robot.php" class="ban">read more</a></button>
                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/autonomous/autonomous-vaccum-clean.jpg" alt="VACUUM CLEANING ROBOT" class="image" />
                    </div>
                  </div>

                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">
                          <h2> ROAD SWEEPERS </h2>
                        </div>
                        <button class="new"><a href="road-sweeper.php" class="ban">read more</a></button>
                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/road-sweeper/road-sweepers-main.jpg" alt="ROAD SWEEPER  MACHINES" class="image" />
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
                  <div class="item">
                    <span class="icon">5</span>
                  </div>
                  <div class="item">
                    <span class="icon">6</span>
                  </div>
                  <div class="item">
                    <span class="icon">7</span>
                  </div>
                  <div class="item">
                    <span class="icon">8</span>
                  </div>


                </div>
                <div class="arrows">
                  <div class="arrow prev">
                    <i class="demo-icon icon-left-open-mini">&#xe80a;</i>
                  </div>
                  <div class="arrow next">
                    <i class="demo-icon icon-right-open-mini">&#xe809;</i>
                  </div>
                </div>
              </div>
            </section>
          </main>

 
        </div>
      </div>

      <a href="#product" class="scro-ll">
        <div class="scroll-downs">
          <div class="mousey">
            <div class="scroller"></div>
          </div>
        </div>
      </a>
 
    </div> -->


<!-- ====================== 
          SLIDER AREA START
      =======================  -->
<section class="slider-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 slider-first">
        <div class="swiper text-slider-Swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <h1> Leading Cleaning <br> Machinery Supplier <br> in GCC </h1>
            </div>
              
            <div class="swiper-slide">
              <h2> Complete Solutions <br> for all your cleaning <br> requirements. </h2>
            </div>

            <div class="swiper-slide">
              <h2> Cleaning Machines <br> from Top Brands <br> around the world </h2>
            </div>

            <div class="swiper-slide">
              <h2> Cleaning Robots/machines <br> with the latest <br> technology </h2>
            </div>

            <div class="swiper-slide">
              <h2> Wide range of <br> cleaning trolleys and <br> cleaning accessories </h2>
            </div>


          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="product-social">
          <h6> <a href="{{route('all-products')}}"> EXPLORE OUR PRODUCTS <i class="fas fa-angle-right"></i> </a> </h6>
          <div class="social-banner">
            <ul>
              <li> <a href="https://www.facebook.com/YES-Clean-109644828052481" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>

              <li> <a href="https://www.linkedin.com/company/yes-clean/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a> </li>
              <li> <a href="https://www.instagram.com/yescleanuae/" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
              <li> <a href="https://twitter.com/YESClean2" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
              <li> <a href="https://www.youtube.com/channel/UCGblR616vSAvum1HUq39OLw" target="_blank"> <i class="fab fa-youtube"></i> </a> </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- second -->
      <div class="col-xl-8 slider-second">
        <div class="swiper image-slider-Swiper">
          <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide">
              <img loading="lazy" src="{{env('APP_ADMIN_URL')}}{{$banner->image_url}}?quality=auto&width=1245&height=500" alt="{{$banner->title}}">
              <h2> {{$banner->title}} </h2>
              <a href="{{$banner->banner_link}}" class="btn-top btn-lg"> <span> Read More </span> </a>
            </div>
            @endforeach


          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!-- second -->


    </div>
  </div>
</section>
<!-- ====================== 
       SLIDER AREA END
   =======================  -->

@include('layouts.social')

<!--slider-->


<!--about-->



<div class="page3 about" id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 about-first">
        <h2>Our Story</h2>
        <!--<h4>Cleaning around<br>
      the <strong>World</strong></h4>-->

        <h5> You perfect Cleaning partner. </h5>
        <p>

        You are at the right spot to find high-quality and professional commercial cleaning machinery and hygiene
         products in the UAE region. One-stop solution for your cleaning requirements from cleaning machines,
          it’s spare parts, accessories, and other hygiene products. The main specialty of YES Clean is its
           perfect and incomparable high-quality after-sales support in the industry, especially cleaning materials.
       </p>

        <p> Our talented and well-trained technicians are always happy to help to maintain and protect your <a href="{{route('category','cleaning-machine')}}" style='font-weight:700'>cleaning machines </a>
          and also thereby protect your investment. We bring quality cleaning products into the market of UAE for a healthier
          and cleaner future. We have the best stock of <a href="{{route('category','cleaning-machine')}}" style='font-weight:700'>floor-cleaning machines</a>, swimming pool cleaning machines,
          carpet-cleaning machines, wet and dry vacuum cleaners, etc. </p>

        <p> YES Clean is one of the professional and most trusted cleaning machinery and hygiene products suppliers in UAE.
          We got a diverse portfolio of high-quality cleaning machines and highly experienced professionals.
          And we strive to meet all the demands of our clients in various industries for cleaning equipment.

        </p>


        <br>
        <button class="read"><a href="{{route('our-story')}}">Read More <i class="demo-icon icon-right-open-mini">&#xe809;</i></a></button>
      </div>
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
        <!--<img src="img/about.png" class="aboutim">-->
        <iframe width="100%" height="480" src="https://www.youtube.com/embed/_4QZ8bxhx34?autoplay=1&&mute=1&&loop=1&&controls=0&&showinfo=0&&rel=0" title="Robotic vacuum cleaner -YES Clean" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <a href="#chemical" class="scro-ll">
    <div class="scroll-downs">
      <div class="mousey">
        <div class="scroller"></div>
      </div>
    </div>
  </a>


</div>



<!-- ============================= 
             WHY CHOOSE US AREA START
         ==============================  -->

<section class="why-choose-us-area">
  <div class="container">
    <h2> Why Choose Us </h2>
    <div class="row">


      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="why-choose-us-boxes">
          <h3> <img loading="lazy" src="{{asset('frontend/img/innovative.png')}}?quality=auto&width=52&height=53" alt="innovative" > Innovative and top-notch technology </h3>
          <p> We are your cleaning solution partner that provides the most innovative and technologically
            advanced cleaning solutions for both domestic and commercial. We are focused on providing
            an updated version of all machinery and other cleaning solution, so that it can provide
            better outcomes and will help you in greater productivity.

          </p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="why-choose-us-boxes">
          <h3> <img loading="lazy" src="{{asset('frontend/img/one-stop-solution.png')}}?quality=auto&width=52&height=53" alt="One stop solution"> One stop solution </h3>
          <p> A one-stop shop for all your cleaning problems. We help you to keep your working environment clean and pleasant.
            And enhance the health and working condition of the employees, thereby increasing productivity and profitability.
            YES Clean is a comprehensive cleaning products distributor in UAE that delivers comprehensive solutions for
            all your cleaning materials, equipment, and machine needs.


          </p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="why-choose-us-boxes">
          <h3> <img loading="lazy" src="{{asset('frontend/img/Affordable.png')}}?quality=auto&width=52&height=53" alt="Affordable"> Affordable </h3>
          <p>YES Clean is one of the leading cleaning machinery suppliers in UAE that can provide premium
            <a href="{{route('category','cleaning-machine')}}" style='font-weight:700'>cleaning machinery</a> at an affordable price. We provide the best machine from the worlds
            leading brand at a reasonable price. Because we want you to know that only a quality
            cleaning product can make your workplace or living place clean and healthy.
            Since everyone deserves to enjoy this quality environment, we are introducing the best
            quality product at an affordable price.


          </p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="why-choose-us-boxes">
          <h3> <img loading="lazy" src="{{asset('frontend/img/After-sales-service.png')}}?quality=auto&width=52&height=53" alt="After-sales service"> After-sales service </h3>
          <p> We always like to take the name for the best after-sales service. We always like to keep a good
            relationship with our clients since we offer incomparable after-sales service and clients
            can contact us any time regarding the product and services.


          </p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="why-choose-us-boxes">
          <h3> <img loading="lazy" src="{{asset('frontend/img/support.png')}}?quality=auto&width=52&height=53" alt="24/7 customer support"> 24/7 customer support </h3>
          <p> Our dedicated customer support team and talented technician teams are always happy to help and
            can provide quick and efficient responses. Our support team is trained to provide on-time quality service.
            They work around the clock to deliver possible solutions to solve the issue immediately.


          </p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="why-choose-us-boxes">
          <h3> <img loading="lazy" src="{{asset('frontend/img/Quality-Tested.png')}}?quality=auto&width=52&height=53" alt="Quality Tested"> Quality Tested </h3>
          <p> There is no product that goes out of the warehouse without rigorous quality tests.
            We deliver top-notch quality cleaning products after all quality tests and this
            has made us one of the most trusted and preferred cleaning machine dealers in UAE.


          </p>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- ============================= 
             WHY CHOOSE US AREA END
         ==============================  -->

<!-- ============================= 
             WHA WE DO AREA START
         ==============================  -->
<section class="what-we-do-area">
  <div class="container">

    <h2> WE SPECIALIZES </h2>
    <div class="row">

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="what-we-do-box">
          <h3> CLEANING MACHINES </h3>
          <p> Top-quality hand-picked world’s best cleaning machines and equipment to render the best result and productivity ensuring
            a clean and healthy environment. A one-stop solution for all your cleaning problems and thereby enhanced production.


          </p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="what-we-do-box">
          <h3> AIR PURIFICATION SYSTEM </h3>
          <p> The best <a href="{{route('category','air-purifier')}}" style='font-weight:700'>Air Purification system</a> you can avail in the market. The strongest dust, smog, and pollution fighters.
            Avail the best Antivirus HEPA air purifiers for a healthy and productive working environment.


          </p>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="what-we-do-box">
          <h3> CLEANING CHEMICALS </h3>
          <p> Leading <a href="{{route('category','cleaning-machine')}}" style='font-weight:700'>cleaning chemical</a> supplier in the entire GCC. We got a wide range of cleaning chemicals from the world’s best manufacturers.
            Premium quality cleaning chemicals for a premium quality work life.


          </p>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- ============================= 
             WHA WE DO AREA END
         ==============================  -->


<div class="page5 productfeeds" id="ourproducts">
  @include('layouts.products-home')
</div>

<!-- <div class="page4 chemical" id="chemical">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6  col-sm-12">
            <h2>CLEANING CHEMICALS</h2>
            <h4>EVERYWHERE IT MATTERS.</h4>
     
            <p><strong>Finding solutions to the world's biggest challenges</strong></p>
            <img src="img/home-clean.png" style="width: 70%" alt="YES Clean blog "><br>
            <button><a href="cleaning-chemicals.php">Read More <i class="demo-icon icon-right-open-mini">&#xe809;</i></a></button>
          </div>
          <div class="col-md-6  col-sm-12">
            <img src="img/chemical.png" class="chemical-img" alt="cleaning products in dubai">
          </div>
        </div>
      </div>


    </div> -->




<!--News-->
<div class="page5 news" id="news">
  <!-- news -->
  @include('layouts.news-home')
</div>

<div class="page2 product testimonials-area" id="product">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 col-sm-12 testi-box">
        <h2> Testimonials </h2>
        <div id="testimonial-slider" class="owl-carousel">
          @foreach($testimonials as $testimonial)
          <div class="testimonial">
            <p class="description">
              {{$testimonial->comment}}
            </p>
            <div class="pic">
              <img loading="lazy"  src="{{env('APP_ADMIN_URL')}}{{$testimonial->image_url}}?quality=auto&width=100&height=130" alt="{{$testimonial->name}}">
            </div>
            <h3 class="testimonial-title">
              {{$testimonial->name}}
              <small> {{$testimonial->designation}} </small>
            </h3>
          </div>
          @endforeach





        </div>


      </div>
      <div class="col-md-5  col-sm-12">
        <h4> Representing <br>
          <strong> Global Brands </strong> <br> In The Industry
        </h4>
        <!--<button><a href="#">Read More <i class="demo-icon icon-right-open-mini">&#xe809;</i></a></button>-->

        <div class="row supl">

          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','cleaning-machine')}}" target="_blank"><img loading="lazy" src="{{asset('frontend/img/sup-1.png')}}?quality=auto&width=146&height=47" alt="YES Clean supplier clean fix "></a>
          </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('cleaning-chemicals')}}"><img loading="lazy" src="{{asset('frontend/img/sup-2.png')}}?quality=auto&width=146&height=47" alt="YES Clean supplier Ecolab"></a> </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','suction-sweeper-and--tool-carrier')}}" target="_blank"><img loading="lazy" src="{{asset('frontend/img/sup-3.png')}}?quality=auto&width=146&height=47" alt="YES Clean supplier Egholm"></a> </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','air-purifier')}}" target="_blank"><img loading="lazy" src="{{asset('frontend/img/sup-5.png')}}?quality=auto&width=146&height=47" alt="YES Clean supplier Ulm air "></a> </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','swimming-pool-cleaning-robot')}}" target="_blank"><img loading="lazy" src="{{asset('frontend/img/sup-7.png')}}?quality=auto&width=146&height=47" alt="YES Clean supplier mariner "></a> </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','multi-purpose-cleaning-trolley')}}" target="_blank"><img src="{{asset('frontend/img/sup-6.png')}}?quality=auto&width=146&height=47" class="twt" alt="YES Clean supplier Twt"></a> </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','pressure-washer')}}" target="_blank"><img loading="lazy" src="{{asset('frontend/img/sup-8.png')}}?quality=auto&width=146&height=47" class="twt" alt="YES Clean supplier Dibo"></a> </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','dry-steam-cleaner')}}" target="_blank"><img loading="lazy" src="{{asset('frontend/img/sup-9.png')}}?quality=auto&width=146&height=47" class="twt" alt="YES Clean supplier Frank"></a> </div>
          <div class="col-lg-4 col-md-6 col-6"> <a href="{{route('category','laundry-cleaning')}}" target="_blank"><img loading="lazy" src="{{asset('frontend/img/sup-10.png')}}?quality=auto&width=146&height=47" class="twt" alt="YES Clean supplier Stahl"></a> </div>




        </div>



      </div>
    </div>
  </div>

  <a href="#about" class="scro-ll">
    <div class="scroll-downs">
      <div class="mousey">
        <div class="scroller"></div>
      </div>
    </div>
  </a>

</div>




<!--==================================
          Industries We Serve-area-Strat 
     ===================================== -->

<section class="industries-we-serve-area">
  <div class="container-fluid">
    <h2> Industries we serve </h2>

    <div class="swiper industries-we-serveSwiper">
      <div class="swiper-wrapper">


        <div class="swiper-slide">
          <a href="#">
            <img loading="lazy" src="{{asset('frontend/img/hotel-cleaning.jpg')}}?quality=auto&width=199&height=177" alt="Hotel Cleaning">
            <h6> Hotel Cleaning </h6>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#">
            <img loading="lazy" src="{{asset('frontend/img/Pharmaceutical-cleaning.jpg')}}?quality=auto&width=199&height=177" alt="Pharmaceutical Cleaning">
            <h6> Pharmaceutical Cleaning </h6>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#">
            <img loading="lazy" src="{{asset('frontend/img/car-wash.jpg')}}?quality=auto&width=199&height=177" alt="Car Wash">
            <h6> Car Wash</h6>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#">
            <img loading="lazy" src="{{asset('frontend/img/kitchen-cleaning.jpg')}}?quality=auto&width=199&height=177" alt="Kitchen Cleaning">
            <h6> Kitchen Cleaning </h6>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#">
            <img loading="lazy" src="{{asset('frontend/img/Dental-clinic.jpg')}}?quality=auto&width=199&height=177" alt="Dental Clinic">
            <h6> Dental Clinic </h6>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#">
            <img loading="lazy" src="{{asset('frontend/img/hospital-cleaning.jpg')}}?quality=auto&width=199&height=177" alt="Hospital Cleaning ">
            <h6> Hospital Cleaning </h6>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#">
            <img loading="lazy" src="{{asset('frontend/img/mechanic-cleaning.jpg')}}?quality=auto&width=199&height=177" alt="Mechanic Cleaning">
            <h6> Mechanic Cleaning</h6>
          </a>
        </div>

        <!--<div class="swiper-slide">-->
        <!--  <a href="#">-->
        <!--    <img src="{{asset('frontend/img/industries-we-serve/7.jpg')}}" alt="Industries we serve">-->
        <!--    <h6> Hospitals / Clinics </h6>-->
        <!--  </a>-->
        <!--</div>-->

        <!--<div class="swiper-slide">-->
        <!--  <a href="#">-->
        <!--    <img src="{{asset('frontend/img/industries-we-serve/1.jpg')}}" alt="Industries we serve">-->
        <!--    <h6> PHARMACEUTICALS-->
        <!--      INDUSTRY </h6>-->
        <!--  </a>-->
        <!--</div>-->


      </div>

    </div>
  </div>
</section>
<!--==================================
          Industries We Serve-area-End 
     ===================================== -->
<!--==================================
          Social Media-area-Start 
     ===================================== -->

<!--<section class="social-media-area">-->
<!--  <div class="container-fluid">-->
<!--    <h2> Social Feeds </h2>-->

<!--    <div class="swiper socialMediaSwiper">-->
<!--      <div class="swiper-wrapper">-->

<!--        <div class="swiper-slide">-->
<!--          <a href="#">-->
<!--            <img src="{{asset('frontend/img/industries-we-serve/1.jpg')}}" alt="Social Media">-->

<!--            <div class="like-and-share">-->
<!--              <i class="fas fa-heart"></i>-->
<!--              <h6> 3 </h6>-->
<!--              <p>Likes</p>-->
<!--              <p class="pl-4"> 15 <small>May, 2023</small> </p>-->


<!--            </div>-->

<!--            <p class="caption"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas voluptatum-->
<!--              praesentium laborum-->

<!--            </p>-->

<!--          </a>-->
<!--        </div>-->
<!--        <div class="swiper-slide">-->
<!--          <a href="#">-->
<!--            <img src="{{asset('frontend/img/industries-we-serve/2.jpg')}}" alt="Social Media">-->

<!--            <div class="like-and-share">-->
<!--              <i class="fas fa-heart"></i>-->
<!--              <h6> 3 </h6>-->
<!--              <p>Likes</p>-->
<!--              <p class="pl-4"> 15 <small>May, 2023</small> </p>-->


<!--            </div>-->

<!--            <p class="caption"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas voluptatum-->
<!--              praesentium laborum-->

<!--            </p>-->

<!--          </a>-->
<!--        </div>-->
<!--        <div class="swiper-slide">-->
<!--          <a href="#">-->
<!--            <img src="./img/industries-we-serve/3.jpg" alt="Social Media">-->

<!--            <div class="like-and-share">-->
<!--              <i class="fas fa-heart"></i>-->
<!--              <h6> 3 </h6>-->
<!--              <p>Likes</p>-->
<!--              <p class="pl-4"> 15 <small>May, 2023</small> </p>-->


<!--            </div>-->

<!--            <p class="caption"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas voluptatum-->
<!--              praesentium laborum-->

<!--            </p>-->

<!--          </a>-->
<!--        </div>-->
<!--        <div class="swiper-slide">-->
<!--          <a href="#">-->
<!--            <img src="./img/industries-we-serve/4.jpg" alt="Social Media">-->

<!--            <div class="like-and-share">-->
<!--              <i class="fas fa-heart"></i>-->
<!--              <h6> 3 </h6>-->
<!--              <p>Likes</p>-->
<!--              <p class="pl-4"> 15 <small>May, 2023</small> </p>-->


<!--            </div>-->

<!--            <p class="caption"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas voluptatum-->
<!--              praesentium laborum-->

<!--            </p>-->

<!--          </a>-->
<!--        </div>-->
<!--        <div class="swiper-slide">-->
<!--          <a href="#">-->
<!--            <img src="./img/industries-we-serve/5.jpg" alt="Social Media">-->

<!--            <div class="like-and-share">-->
<!--              <i class="fas fa-heart"></i>-->
<!--              <h6> 3 </h6>-->
<!--              <p>Likes</p>-->
<!--              <p class="pl-4"> 15 <small>May, 2023</small> </p>-->


<!--            </div>-->

<!--            <p class="caption"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas voluptatum-->
<!--              praesentium laborum-->

<!--            </p>-->

<!--          </a>-->
<!--        </div>-->




<!--      </div>-->

<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<!--==================================
          Social Media-area-End 
     ===================================== -->
<!--==================================
          Email Subscription -area-Start 
     ===================================== -->
<section class="email-subscription-area">
  <h2> Have a requirement ? Send us a quick inquiry Now ! </h2>
  <button class="read"><a href="{{route('contact')}}">Read More <i class="demo-icon icon-right-open-mini"></i></a></button>
</section>
<!--==================================
          Email Subscription -area-End 
     ===================================== -->


<!--==============================
             brands -area-Strat 
 ===============================-->
@if(count($clients) > 0)
<section class="brands component">
  <div class="container">
    <!-- title-area-center Start -->
    <div class="title-area-center text-center pb-4 brand">
      <h2> Our Clients </h2>

    </div>
    <!-- title-area-center End -->
    <div class="logo-slider">


      @foreach($clients as $client)
      <div class="item">
        <a>
          <img src="{{env('APP_ADMIN_URL')}}{{$client->logo_url}}?quality=auto&width=252&height=220" loading="lazy" alt="{{$client->company}}">
        </a>
      </div>
      @endforeach






    </div>
  </div>
</section>
@endif
@endsection
@push('scripts')
<!-- testimonials -->
<script src="{{asset('frontend/js/testimonials.js')}}"></script>
<!-- testimonials -->



<!-- Industries we serve -->
<script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/slider.js')}}"></script>
<script src="{{asset('frontend/js/industries-we-serve.js')}}"></script>
<script src="{{asset('frontend/js/blogs.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="{{asset('frontend/js/social-media.js')}}"></script>
@endpush