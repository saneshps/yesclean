@extends('layouts.app')
@section('meta')
<title>{{$product->meta_title}}</title>
<meta name="keywords" content="{{$product->keywords}}">
<meta name="description" content="{{$product->meta_details}}">
<!-- canonical -->
<link href="{{ route('product', $product->slug) }}" rel="canonical">
<!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/pro-specfction.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/pro-tab.css')}}">
<!-- <link rel="stylesheet" href="{{asset('frontend/css/products.css')}}"> -->
<link rel="stylesheet" href="{{asset('frontend/css/product-view.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush
@section('content')
<!-- product view -->
<section class="product-view-area">
  <!-- breadcrumb -->
  <div class="row breadcrumb-area">
    <div class="breadcrumb">
      <ul>
        <li><a href="{{route('home')}}"> Home</a> <span>/</span> </li>
        @if(isset($prod->category->parent))
        <li><a href="{{route('category',$prod->category->parent->short_code)}}"> {{$prod->category->parent->name}} </a> <span>/</span> </li>
        @endif
        <li> <a href="{{route('category',$product->c_slug)}}"> {{$product->category}}</a> <span>/</span> </li>
        <li class="active"> <a href="{{route('product',$product->slug)}}"> {{$product->name}} </a></li>
      </ul>
    </div>
  </div>
  <!-- breadcrumb -->
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 first">
      <div class="swiper productviewSwiper">
        <div class="swiper-wrapper">

          <!-- 1 -->
          <div class="swiper-slide">

            <a data-fancybox="gallery" href="{{env('APP_ADMIN_URL')}}{{$product->default_image}}">
              <img src="{{env('APP_ADMIN_URL')}}{{$product->default_image}}" alt="{{$product->name}}">
            </a>
          </div>
          <!-- 1 -->

          <!-- 1 -->
          @foreach($productImages as $productImage)
          <div class="swiper-slide">
            <a data-fancybox="gallery" href="{{env('APP_ADMIN_URL')}}{{$productImage->image_url}}">
              <img src="{{env('APP_ADMIN_URL')}}{{$productImage->image_url}}" alt="{{$productImage->title}}">
            </a>

          </div>
          @endforeach
          <!-- 1 -->

          <!-- 1 -->

          <!-- 1 -->


        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      </div>
    </div>
    <style>
      .product-accordion {
        background: none !important;
        color: #017ac9;
        cursor: pointer;
        border: none;
        outline: none;
        font-size: 17px;
        transition: 0.4s;
        width: 100%;
        text-align: left;
        font-weight: 700;
      }

      .textdiv {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 6;
        /* number of lines to show */
        line-clamp: 1;
        -webkit-box-orient: vertical;
      }
    </style>
    <div class="col-xl-6 col-lg-6 col-md-12 second">
      <div class="product-view-content">
        <!-- <span class="new"> <a class="new-text"> New </a> </span> -->


        <h1 id="product_name"> {{$product->name}} </h1>
        <h3> {{$product->subtitle}} </h3>
        <h4> Category : {{$product->category}} </h4>
        @php
        $stripped = strip_tags($product->description);
        $decoded = html_entity_decode($stripped);
        $str_count=str_word_count($decoded);

        @endphp
        @if($str_count > 100)

        <div id="product_short">
          {!! substr($product->description,0,450) !!}
          <button class="product-accordion more_prod_text" data="trigger" id="show_more" class=> Show More <i class="fas fa-angle-down active"></i> </button>
        </div>
        <div id="product_long">
          {!! $product->description !!}
          <button class="product-accordion more_prod_text" id="show_less" data="trigger" class=> Show Less <i class="fas fa-angle-up"></i> </button>
        </div>
        @else
        {!! $product->description !!}
        @endif
        <!-- <h3 class="price"> Item no. 022.000VDE </h3> -->
        <!-- express intrest manual -->
        <div class="express-intrest-manual">
          <!-- express intrest -->
          <div class="express-intrest">
            <!-- Button trigger modal -->
            <button type="button" class="btn-top btn-lg express" id="express" data-toggle="modal" data-target="#express-intrest">
              Express Interest
            </button>

            <!-- Modal -->
            <div class="modal fade" id="express-intrest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle"> Express Interest For the Product </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="row" id="interest_loader">
                    <div class="col-md-12" style="text-align: center;">
                      <img src="{{asset('frontend/img/spinning-loading.gif')}}" style="width: 133px;" alt="loading" />
                    </div>
                  </div>
                  <div class="alert alert-success alert-block" id="interest_block">
                    <div class="row">
                      <div class="col-md-10">
                        <strong id="express_interest_message_block"></strong>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                      </div>

                    </div>
                  </div>
                  <div class="error_interest_form"></div>
                  <div class="modal-body">
                    <form id="contact" class="interest_send" action="" method="post">



                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name_interest" placeholder="Name" required="">

                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email_interest" aria-describedby="emailHelp" placeholder="Email" required="">

                      </div>

                      <div class="form-group">
                        <input type="tel" class="form-control" id="phone_interest" placeholder="Phone Number" required="" name="phone">

                      </div>
                      <div class="col-md-12 form-group">
                        <div class="row">
                          <div class="col-md-12 d-flex mb-3">
                            <div id="captcha_1" class="captcha-div"></div>
                            <a href="javascript:void(0);" onclick="refreshCaptcha();" class="ml-2" style="color:#999;" title="Refresh Captcha"> <i class="fa fa-refresh" aria-hidden="true" style="font-size: 19px;padding-top: 0px;"></i></a>
                          </div>
                          <div class="col-md-12 d-flex mb-3">
                            <input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_1" />
                          </div>
                        </div>
                      </div>

                      <button type="submit" id="express-interest-submit" class="btn">Submit</button>


                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- express intrest -->


          <!-- Request a call intrest -->
          <div class="express-intrest">
            <!-- Button trigger modal -->
            <button type="button" class="btn-top btn-lg express" id="request" data-toggle="modal" data-target="#request-a-call-back">
              Request A Call Back
            </button>

            <!-- Modal -->
            <div class="modal fade" id="request-a-call-back" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle"> Request Call Back </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="row" id="request_loader">
                    <div class="col-md-12" style="text-align: center;">
                      <img src="{{asset('frontend/img/spinning-loading.gif')}}" style="width: 133px;" />
                    </div>
                  </div>
                  <div class="alert alert-success alert-block" id="request_block">
                    <div class="row">
                      <div class="col-md-10">
                        <strong id="request_callback_message_block"></strong>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                      </div>

                    </div>
                  </div>
                  <div class="error_request_call_form"></div>
                  <div class="modal-body">
                    <form id="contact" class="interest_send" action="" method="post">



                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name_request" placeholder="Name" required="">

                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email_request" aria-describedby="emailHelp" placeholder="Email" required="">

                      </div>

                      <div class="form-group">
                        <input type="tel" class="form-control" id="phone_request" placeholder="Phone Number" required="" name="phone">

                      </div>

                      <div class="col-md-12 form-group">
                        <div class="row">
                          <div class="col-md-12 d-flex mb-3">
                            <div id="captcha_2" class="captcha-div"></div>
                            <a href="javascript:void(0);" onclick="refreshCaptcha();" class="ml-2" style="color:#999;" title="Refresh Captcha"> <i class="fa fa-refresh" aria-hidden="true" style="font-size: 19px;padding-top: 0px;"></i></a>
                          </div>
                          <div class="col-md-12 d-flex mb-3">
                            <input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_2" />
                          </div>
                        </div>
                      </div>

                      <button type="submit" id="request-callback-submit" class="btn">Submit</button>


                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Request a call intrest -->

        </div>


        <!-- express intrest manual -->

      </div>
    </div>
  </div>

</section>
<!-- product view -->



<!-- Product Tab Area  -->
<section class="product-tab-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 product-manager">
        <h2> {{$productTeam->team->designation}} </h2>
        <img src="{{env('APP_ADMIN_URL')}}{{$productTeam->team->image_url}}" alt="{{$productTeam->team->designation}}" class="img-fluid">
        <h4> {{$productTeam->team->user->name}} </h4>
        <h6> <a href="mailto:sales@yesclean.ae"> sales@yesclean.ae </a> </h6>
        <h5> <a href="tel:{{$productTeam->team->phone}}"> {{$productTeam->team->phone}} </a> </h5>
      </div>
      <div class="col-xl-9 col-lg-9">

        <!-- Product Tab Area  -->
        @if(count($productSpecs) != 0 || count($productTechicalImages) !=0 ||count($productOptionals) != 0 || count($productAppImages) != 0 || count($productScopes) != 0 || count($productVideos) != 0 || count($productCats) != 0 )
        <div class="product-specification-area">
          <div class="row">

            <h2> Additional Informations </h2>
            <div class="tab">
              <div class="tab-menu">


                @if(count($productSpecs) >0 || count($productTechicalImages) >0 )
                <button class="tab-menu-link  @php if(count($productSpecs) >0 || count($productTechicalImages) >0) echo 'is-active'; @endphp" data-content="item-1">
                  <span data-title="item-1"> Technical data </span>
                </button>
                @endif
                @if(count($productOptionals) >0)
                <button class="tab-menu-link @php if(count($productSpecs) ==0 && count($productTechicalImages) ==0 && count($productOptionals) >0 ) {  echo 'is-active'; } @endphp" data-content="item-2">
                  <span data-title="item-2"> Optional Accessories </span>
                </button>
                @endif
                @if(count($productAppImages) >0)
                <button class="tab-menu-link @php if(count($productSpecs) == 0 && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) >0 ){ echo 'is-active'; } @endphp" data-content="item-3">
                  <span data-title="item-3"> Images </span>
                </button>
                @endif
                @if(count($productScopes) >0)
                <button class="tab-menu-link @php if(count($productSpecs) == 0 && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) == 0  && count($productScopes) >0 ){ echo 'is-active'; } @endphp" data-content="item-4">
                  <span data-title="item-4"> Scope of Delivery </span>
                </button>
                @endif
                <!--{{count($productVideos) }}-->
                @if(count($productVideos) >0)
                <button class="tab-menu-link @php if(count($productSpecs) == 0 && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) == 0 && count($productScopes) == 0 && count($productVideos) >0 ) {  echo 'is-active'; } @endphp" data-content="item-5">
                  <span data-title="item-5"> Videos </span>
                </button>
                @endif
                @if(count($productCats) >0)
                <button class="tab-menu-link @php if(count($productSpecs) == 0 && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) == 0  && count($productScopes) == 0  && count($productVideos) == 0  && count($productCats) > 0  )   echo 'is-active'; @endphp" data-content="item-6">
                  <span data-title="item-6"> Downloads </span>
                </button>
                @endif
              </div>
              <div class="tab-bar">





                <div class="tab-bar-content  @php if(count($productSpecs) >0 || count($productTechicalImages) >0 ) echo 'is-active'; @endphp" id="item-1">
                  <div class="texts">
                    <p class="paragraph">
                    <table class="responsive-table">

                      <tbody>
                        @foreach($productSpecs as $productSpec)
                        <tr>
                          <th scope="row">{{$productSpec->label}}</th>
                          <td data-title="Released"> {{$productSpec->value}}</td>
                        </tr>
                        @endforeach


                      </tbody>
                    </table>


                    </p>
                    <p class="paragraph">
                    <div class="row">
                      @foreach($productTechicalImages as $productTechicalImage)
                      <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="appli-image">
                          <a data-fancybox="gallery" href="{{env('APP_ADMIN_URL')}}{{$productTechicalImage->image_url}}">


                            <img src="{{env('APP_ADMIN_URL')}}{{$productTechicalImage->image_url}}" alt="{{$productTechicalImage->title}}">
                          </a>
                        </div>
                      </div>
                      @endforeach




                    </div>

                    </p>
                  </div>
                </div>
                <style>
                  .textdiv {
                    overflow: hidden;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    /* number of lines to show */
                    line-clamp: 1;
                    -webkit-box-orient: vertical;
                  }
                </style>
                <div class="tab-bar-content @php if(count($productSpecs) ==0 && count($productTechicalImages) ==0 && count($productOptionals) >0 ) {  echo 'is-active'; } @endphp" id="item-2">
                  <div class="texts">
                    <p class="paragraph">
                    <div class="row">
                      @foreach($productOptionals as $productOptional)
                      <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="access-image">
                          <img src="{{env('APP_ADMIN_URL')}}{{$productOptional->accessories[0]->image}}" alt="{{$productOptional->accessories[0]->image_alt}}">
                          <h5><span class="textdiv"> {{$productOptional->accessories[0]->name}}</span> </h5>
                          <h6> {{$productOptional->accessories[0]->item_number}} </h6>
                        </div>
                      </div>
                      @endforeach





                    </div>

                    </p>
                  </div>
                </div>
                <div class="tab-bar-content @php if(count($productSpecs) == 0  && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) >0 ){ echo 'is-active'; } @endphp" id="item-3">
                  <div class="texts">
                    <p class="paragraph">
                    <div class="row">
                      @foreach($productAppImages as $productAppImage)
                      <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="appli-image">
                          <a data-fancybox="gallery" href="{{env('APP_ADMIN_URL')}}{{$productAppImage->image_url}}">


                            <img src="{{env('APP_ADMIN_URL')}}{{$productAppImage->image_url}}" alt="{{$productAppImage->title}}">
                          </a>
                        </div>
                      </div>
                      @endforeach




                    </div>

                    </p>
                  </div>
                </div>

                <div class="tab-bar-content @php if(count($productSpecs) == 0 && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) == 0  && count($productScopes) >0 ){ echo 'is-active'; } @endphp" id="item-4">
                  <div class="texts">
                    <p class="paragraph">
                    <div class="row">

                      @foreach($productScopes as $productScope)
                      <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="access-image">
                          <img src="{{env('APP_ADMIN_URL')}}{{$productScope->accessories[0]->image}}" alt="{{$productScope->accessories[0]->image_alt}}">
                          <h5> <span class="textdiv">{{$productScope->accessories[0]->name}}</span> </h5>
                          <h6> {{$productScope->accessories[0]->item_number}} </h6>
                        </div>
                      </div>
                      @endforeach





                    </div>

                    </p>
                  </div>
                </div>


                <div class="tab-bar-content @php if(count($productSpecs) == 0 && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) == 0 && count($productScopes) == 0 && count($productVideos) >0 ) {  echo 'is-active'; } @endphp" id="item-5">
                  <div class="texts">
                    <p class="paragraph">
                    <div class="row">
                      @foreach($productVideos as $productVideo)
                      @php
                      preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $productVideo->video_url, $match);
                      $youtube_id = $match[1];
                      @endphp
                      <!--//$video_id = $video_id[1];-->



                      <div class="col-xl-4 col-lg-6 col-md-6">

                        <div class="product-description-youtube">
                          <img src="http://img.youtube.com/vi/{{$youtube_id}}/hqdefault.jpg" alt="{{$productVideo->title}}">
                          <!-- video popup -->
                          <div class="hero-video aos-init aos-animate" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="2500">
                            <a href="{{$productVideo->video_url}}" class="video-play-btn1 popup-video">
                              <i class="icofont-play-alt-3"></i>
                              <div class="center1">
                                <div class="pulse1">
                                  <i class="fas fa-play"></i>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!--// video popup -->
                        </div>
                      </div>
                      @endforeach










                    </div>
                    </p>
                  </div>
                </div>
                <div class="tab-bar-content @php if(count($productSpecs) == 0 && count($productTechicalImages) ==0 && count($productOptionals) == 0 && count($productAppImages) == 0  && count($productScopes) == 0  && count($productVideos) == 0  && count($productCats) > 0  )   echo 'is-active'; @endphp" id="item-6">
                  <div class="texts">
                    <p class="paragraph">
                    <div class="row pro-download">


                      @foreach($productCats as $productCat)
                      <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="catalogues">
                          <iframe src="{{env('APP_ADMIN_URL')}}{{$productCat->catalogue}}"></iframe>
                          <a href="{{env('APP_ADMIN_URL')}}{{$productCat->catalogue}}" target="_blank">
                            <span> <i class="fas fa-file-download"></i> </span>
                          </a>
                          <a href="#" target="_blank">
                            <h5> {{$productCat->title}}s</h5>
                          </a>
                        </div>
                      </div>
                      @endforeach
                    </div>

                    </p>
                  </div>
                </div>
              </div>
            </div>


          </div>


        </div>
        @endif
</section>
<!-- Related Products Start -->
@if(count($productRecommendations)!="0"){
<section class="related-product-area">
  <h2> Recommended Products </h2>
  <div class="swiper relatedProductSwiper">
    <div class="swiper-wrapper">

      @foreach($productRecommendations as $productRecommendation)
      <div class="swiper-slide">
        <div class="product-grid">
          <div class="product-image">
            <a href="{{route('product',$productRecommendation->recommened_products[0]->slug)}}" class="image">
              <img src="{{env('APP_ADMIN_URL')}}{{$productRecommendation->recommened_products[0]->default_image}}" class="img-responsive" alt="{{$productRecommendation->recommened_products[0]->name}}">
            </a>
            <ul class="product-links">
              <li> <a href="tel:+97165264382"> <i class="fas fa-mobile-alt"></i> </a> </li>
              <li> <a href="mailto:sales@yesclean.ae"> <i class="fas fa-envelope"></i> </a> </li>
            </ul>

          </div>

          <div class="product-content">
            <h4 class="title1"> <a href="{{route('product',$productRecommendation->recommened_products[0]->slug)}}"> {{$productRecommendation->recommened_products[0]->name}} </a></h4>
          </div>
          <!-- button -->
          <a href="{{route('product',$productRecommendation->recommened_products[0]->slug)}}" class="btnm btn-lg">
            <span> More </span>
          </a>
          <!-- button -->
        </div>
      </div>
      @endforeach
















    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
@endif
<!-- Supplier Details Area Start -->
<section class="supplier-details-area">
  <div class="supplier-details-box">
    <div class="col-xl-12 mx-auto">
      <div class="row align-items-center">
        <div class="col-xl-2 col-lg-2 col-md-2 product-supplier">
          <img src="{{env('APP_ADMIN_URL')}}{{$product->s_logo_url}}" alt="{{$product->s_brand}}">
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7">
          <h2> Do you want to know more
            about our suppliers? </h2>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3">
          <!-- button -->
          <a href="{{$product->s_website}}" target="_blank" class="btnm btn-lg supplier-details">
            <span> Know More </span> </a>
          <!--// button -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Supplier Details Area End -->

<!-- Related Products End -->
</div>

@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/pro-specfction.js')}}"></script>
<script src="{{asset('frontend/js/productview.js')}}"></script>
<script src="{{asset('frontend/js/related-products.js')}}"></script>

<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/aos.js')}}"></script>
<script src="{{asset('frontend/js/youtube.js')}}"></script>
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("#interest_block").hide();
  $("#interest_loader").hide();
  $("#request_block").hide();
  $("#request_loader").hide();
  $("#express").click(function(e) {
    $('.error_interest_form').hide();
  });
  $("#express-interest-submit").click(function(e) {

    e.preventDefault();

    var data_id = $(this).attr("data-id");
    let text_code = $('#cpatchaTextBox_' + data_id).val();

    if (text_code) {
      if (!validateCaptcha(text_code)) {
        $('.error_interest_form').hide();
        $('.error_interest_form').removeClass('alert alert-danger').html(" ");
        $('.error_interest_form').show();
        $('.error_interest_form').addClass('alert alert-danger').html("Captcha is Invalid");
        $('#cpatchaTextBox_' + data_id).val("");
        return false;
      }

    } else {
      $('.error_interest_form').show();
      $('.error_interest_form').addClass('alert alert-danger').html("No Captcha entered");

      return false;
    }

    var name_interest = $("#name_interest").val();
    var phone_interest = $("#phone_interest").val();
    var email_interest = $("#email_interest").val();
    var interest_product_name = $("#product_name").html();





    $.ajax({
      method: "POST",
      url: "{{ route('express-interest-mail') }}",
      data: {
        name: name_interest,
        phone: phone_interest,
        email: email_interest,
        product_name: interest_product_name,

      },
      beforeSend: function(xhr) {
        // Show the loader
        $("#interest_loader").show();
        $(".error_interest_form").hide();

      },
      success: function(data) {

        $("#interest_loader").hide();
        $("#interest_block").show();
        $(".error_interest_form").hide();
        $("#express_interest_message_block").html(data.success);
        $("#name_interest").val("");
        $("#phone_interest").val("");
        $("#email_interest").val("");


      },
      error: function(data) {
        $("#interest_loader").hide();
        $(".error_interest_form").show();
        let err_str = '';
        if (data.responseJSON.errors) {
          err_str = '<dl class="row"><dt class="col-sm-3"></dt><dt class="col-sm-9"><p><b>Whoops!!</b> There is some Problem</p></dt>';
          $.each(data.responseJSON.errors, function(key, val) {
            err_str += '<dt class="col-sm-3">' + key.replace("_", " ") + ' </dt><dd class="col-sm-9">' + val + '</dd>';
          });
          err_str += '</dl>';
          $('.error_interest_form').addClass('alert alert-danger').html(err_str);

          return false;
        }

      }
    });

  });
  $("#request").click(function(e) {
    $('.error_request_call_form').hide();
  });
  $("#request-callback-submit").click(function(e) {

    e.preventDefault();
    var data_id = $(this).attr("data-id");
    let text_code = $('#cpatchaTextBox_' + data_id).val();

    if (text_code) {
      if (!validateCaptcha(text_code)) {
        $('.error_request_call_form').hide();
        $('.error_request_call_form').removeClass('alert alert-danger').html(" ");
        $('.error_request_call_form').show();
        $('.error_request_call_form').addClass('alert alert-danger').html("Captcha is Invalid");
        $('#cpatchaTextBox_' + data_id).val("");
        return false;
      }

    } else {
      $('.error_request_call_form').show();
      $('.error_request_call_form').addClass('alert alert-danger').html("No Captcha entered");

      return false;
    }

    var name_request = $("#name_request").val();
    var phone_request = $("#phone_request").val();
    var email_request = $("#email_request").val();
    var request_product_name = $("#product_name").html();





    $.ajax({
      method: "POST",
      url: "{{ route('request-call-back-mail') }}",
      data: {
        name: name_request,
        phone: phone_request,
        email: email_request,
        product_name: request_product_name,

      },
      beforeSend: function(xhr) {
        // Show the loader
        $("#request_loader").show();
        $('.error_request_call_form').hide();

      },
      success: function(data) {
        $("#request_loader").hide();
        $("#request_block").show();
        $('.error_request_call_form').hide();
        $("#request_callback_message_block").html(data.success);
        $("#name_request").val("");
        $("#phone_request").val("");
        $("#email_request").val("");


      },
      error: function(data) {
        $("#request_loader").hide();
        $(".error_request_call_form").show();
        let err_str = '';
        if (data.responseJSON.errors) {
          err_str = '<dl class="row"><dt class="col-sm-3"></dt><dt class="col-sm-9"><p><b>Whoops!!</b> There is some Problem</p></dt>';
          $.each(data.responseJSON.errors, function(key, val) {
            err_str += '<dt class="col-sm-3">' + key.replace("_", " ") + ' </dt><dd class="col-sm-9">' + val + '</dd>';
          });
          err_str += '</dl>';
          $('.error_request_call_form').addClass('alert alert-danger').html(err_str);

          return false;
        }

      }
    });

  });
</script>
<script>
  $(document).ready(function() {
    $("#product_long").hide();
  });
  $("#show_more").click(function() {
    $("#product_long").show();
    $("#product_short").hide();
  });
  $("#show_less").click(function() {
    $("#product_long").hide();
    $("#product_short").show();
  });
</script>
@endpush