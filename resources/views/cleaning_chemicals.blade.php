@extends('layouts.app')
@section('meta') 
<title> Best Quality Commercial And Industrial Cleaning Chemicals Suppliers In UAE - YES Clean </title>
<meta name="keywords" content="cleaning products, cleaning chemicals, floor cleaning roboys, vacuum cleaner, wet and dry vacuum cleaner, hygiene solution">
<meta name="description" content="Purchase quality cleaning chemicals for the best prices from YES Clean UAE. Get variety of cleaning chemicals and get them delivered right to your doorstep.">
<!-- canonical -->
<link href="" rel="canonical">
  <!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/chemicals.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/products.css')}}">
@endpush
@section('content')
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

                <img src="{{asset('frontend/img/cleaning-chemicals6.png')}}" alt="autonomous sweeper

" class="image" />

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

                <img src="{{asset('frontend/img/cleaning-chemicals2.png')}}" alt="floor cleaning robot

" class="image" />

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

                <img src="{{asset('frontend/img/cleaning-chemicals3.png')}}" alt="robotic scrubber drier

" class="image" />

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

                <img src="{{asset('frontend/img/cleaning-chemicals4.png')}}" alt="robotic sweeper

" class="image" />

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

                <img src="{{asset('frontend/img/cleaning-chemicals5.png')}}" alt="robotic sweeper

" class="image" />

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

                <img src="{{asset('frontend/img/cleaning-chemicals1.png')}}" alt="robotic sweeper

" class="image" />

              </div>

            </div>




            <div class="caption1">

              <div class="title1">
                <h1> Cleaning Chemicals </h1>
              </div>

              <div class="text-inn">

                <p>ECOLAB</p>

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





  @include('layouts.social')



  <!--slider-->













  <section class="about-cont">

    <div class="container-fluid">

      <div class="row">

        <div class="col-md-12 col-sm-12">
          <?php
          if (isset($_SESSION['message'])) { ?>
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


          <?php  }

          ?>
        </div>

        <!--<div class="col-md-3 col-sm-12">-->

        <!--  <div class="expert">-->

        <!--    <div class="reach">-->

        <!--      <h3>REACH OUR EXPERT</h3>-->

              <!--<img src="{{asset('frontend/img/neha1.png')}}" class="img-responsive" style="margin: auto;">-->
 
        <!--      <p><a href="mailto:sales@yesclean.ae">sales@yesclean.ae</a></p>-->

        <!--    </div>-->



        <!--    <div class="intrest">-->



        <!--      <h3>EXPRESS INTEREST</h3>-->

        <!--      <form method="post">-->

        <!--        <input type="hidden" name="pn" id="pn">-->

        <!--        <div class="col-md-12 col-sm-12 padd">-->

        <!--          <input type="email" name="email" placeholder="Enter Your Email id" required="">-->

        <!--        </div>-->



        <!--        <div class="col-md-12 col-sm-12 padd">-->

        <!--          <input placeholder="Mobile number" name="mobile" required="">-->

        <!--        </div>-->





        <!--        <div class="col-md-12 col-sm-12 padd">-->

        <!--          <input type="submit" value="SEND" name="sub">-->

        <!--        </div>-->

        <!--      </form>-->



        <!--      <h4>Hear from us in 24 hours</h4>-->

        <!--    </div>-->















     






        <!--  </div>-->







        <!--</div>-->



        <div class="col-md-12  col-sm-12">

          <h2 style="text-transform: uppercase;" id="product-tittle"> Hygiene Solutions </h2>

          <p>A trusted partner at nearly three million customer locations, Ecolab (ECL) is the global leader in water, hygiene and infection prevention solutions and services. With annual sales of $12 billion and more than 44,000 associates, Ecolab delivers comprehensive solutions, data-driven insights and personalized service to advance food safety, maintain clean and safe environments, optimize water and energy use, and improve operational efficiencies and sustainability for customers in the food, healthcare, hospitality and industrial markets in more than 170 countries around the world. <a rel="nofollow" href="http://www.ecolab.com/"><strong>www.ecolab.com</strong></a></p>







          <div class="row top dry-vacuum">

            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
              <img src="{{asset('frontend/img/Adette.jpg')}}" class="img-responsive" alt="Adette">
              <p> Adette </p>
            </div>
            <!--// 1 -->

            <!-- 2 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
              <img src="{{asset('frontend/img/Brial-Top.jpg')}}" class="img-responsive" alt="Brial Top">
              <p> Brial Top </p>
            </div>
            <!--// 2 -->
            <!-- 3 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
              <img src="{{asset('frontend/img/Clean-and-Smooth.jpg')}}" class="img-responsive" alt="Clean and Smooth">
              <p> Clean and Smooth </p>
            </div>
            <!--// 3 -->

            <!-- 4 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
              <img src="{{asset('frontend/img/Facl-PRO.jpg')}}" class="img-responsive" alt="Facl PRO">
              <p> Facl PRO </p>
            </div>
            <!--// 4 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
              <img src="{{asset('frontend/img/Lemon-Eze_32oz.jpg')}}" class="img-responsive" alt="Lemon-Eze_32oz">
              <p> Lemon-Eze_32oz </p>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
              <img src="{{asset('frontend/img/Lime-A-Way.jpg')}}" class="img-responsive" alt="Lime A Way">
              <p> Lime A Way </p>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
              <img src="{{asset('frontend/img/Mikro-Chlor.jpg')}}" class="img-responsive" alt="Mikro-Chlor">
              <p> Mikro-Chlor </p>
            </div>






          </div>

          <!--

<div class="row top">

  <div class="col-md-6 col-sm-12">

    <iframe width="100%" height="315" src="https://www.youtube.com/embed/otSNOrceDRM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>

   <div class="col-md-6 col-sm-12">

    <iframe width="100%" height="315" src="https://www.youtube.com/embed/WwAcYeTbkG8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>



</div> -->







        </div>

      </div>



    </div>

  </section>
@endsection
