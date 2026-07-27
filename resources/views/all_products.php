@extends('layouts.app')
@section('meta')
<title>All Products|Yesclean</title>
<meta name="keywords" content="{{$this_cat->meta_keywords}}">
<meta name="description" content="{{$this_cat->meta_description}}">
<!-- canonical -->
<link href="{{env('APP_URL')}}{{route('all_products')}}" rel="canonical">
<!--// canonical -->
@endsection
@push('style')
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

              <img src="{{env('APP_ADMIN_URL')}}{{$this_cat->banner}}" alt="{{$this_cat->banner_alt}}" class="image" />

            </div>

          </div>











          <div class="caption1">
            <div class="title1">
              <h1> {{$this_cat->name}}</h1>
            </div>
            <!--<div class="text-inn">-->
            <!--  <p>{{$this_cat->description}}</p>-->
            <!--</div>-->
          </div>




        </div>

        <div class="pagination">

          <div class="item is-active">

            <span class="icon">1</span>

          </div>

          <div class="item">

            <span class="icon">2</span>

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
      <div class="col-md-3 col-sm-12">

        <div class="expert">

          <div class="reach">

            <h3>REACH OUR EXPERT</h3>

            <ul class="expert-contact">
              <li> <a href="tel:+97165264382"> <i class="fas fa-mobile-alt"></i> +971 6 5264382 </a> </li>
              <li> <a href="mailto:sales@yesclean.ae"> <i class="fas fa-envelope"></i> sales@yesclean.ae </a> </li>
            </ul>

          </div>





          <div class="intrest">



            <h3>EXPRESS INTEREST</h3>

            <form method="post">

              <input type="hidden" name="pn" id="pn" value="Vaccum Cleaner">

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

            <p><a href="pdf/Cleanfix_Product_Overview.pdf">

                <i class="demo-icon icon-file-pdf">&#xf1c1;</i>

                Cleanfix Product Overview</a></p>

          </div>







        </div>







      </div>



      <div class="col-md-9 col-sm-12">




        <div class="row pro-image-box">

          <!-- 1 -->


          @foreach($products as $product)
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">

              <a href="{{route('product',$product->slug)}}"><div class="product-grid">
              <div class="product-image">
                <a href="{{route('product',$product->slug)}}" class="image">
                  <img src="{{env('APP_ADMIN_URL')}}{{$product->default_image}}" class="img-responsive" alt="{{$product->name}}">
                </a>
                {{-- <span class="product-sale-label"> <a href="#"> New </a> </span> --}}
                <ul class="product-links">
                  <li> <a href="tel:+97165264382"> <i class="fas fa-mobile-alt"></i> </a> </li>
                  <li> <a href="mailto:sales@yesclean.ae"> <i class="fas fa-envelope"></i> </a> </li>
                </ul>

              </div>

              <div class="product-content">
                <h4 class="title1"> <a href="{{route('product',$product->slug)}}"> {{$product->name}} </a></h4>
              </div>
              <!-- button -->
           <a href="{{route('product',$product->slug)}}" class="btnm btn-lg">
                <span> More </span>
              </a>
              <!-- button -->
            </div></a>
          </div>
          @endforeach


          <!--// 1 -->
          <!-- 2 -->

          <!--// 2 -->
          <!-- 3 -->

          <!--// 3 -->
          <!-- 4 -->

          <!--// 4 -->
          <!-- 5 -->

          <!--// 5 -->
          <!-- 6 -->

          <!--// 6 -->
          <!-- 7 -->

          <!--// 7 -->
          <!-- 8 -->

          <!--// 8 -->





        </div>


        <div class="pad"></div>


      </div>

    </div>

  </div>

</section>
@endsection