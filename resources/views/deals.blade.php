@extends('layouts.deals-header')
@section('meta')
<title>Deals</title>
<meta name="keywords" content="Special Offers">
<meta name="description" content="Special Offers">
<!-- canonical -->
<link href="#" rel="canonical">
<!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/products.css')}}">

@endpush
@section('content')


<section class="banner-area">
@if($slug!="")
<img class="banner-desktop lozad asyncImage"  src="{{(file_exists($supplier->banner_url)||$supplier->banner_url!=" ")?env('APP_ADMIN_URL').$supplier->banner_url:asset('assets/img/banner.jpeg')}}" data-src="{{(file_exists($supplier->banner_url)||$supplier->banner_url!="")?env('APP_ADMIN_URL').$supplier->banner_url:asset('assets/img/banner.jpeg')}}" alt="">  
@else 
	<img class="banner-desktop lozad asyncImage"  src="{{asset('assets/img/banner.jpeg')}}" data-src="{{asset('assets/img/banner.jpeg')}}" alt=""> 
@endif	
<div class="banner-mobile">
@if($slug!="")
            <img  src="{{(file_exists($supplier->banner_mobile_url)||$supplier->banner_mobile_url!=" ")?env('APP_ADMIN_URL').$supplier->banner_mobile_url:asset('assets/img/banner-mobile.jpg')}}" data-src="{{(file_exists($supplier->banner_mobile_url)||$supplier->banner_mobile_url!="")?env('APP_ADMIN_URL').$supplier->banner_mobile_url:asset('assets/img/banner-mobile.jpg')}}" class="lozad asyncImage" alt="banner">
@else 
	 <img  src="{{asset('assets/img/banner-mobile.jpg')}}" data-src="{{asset('assets/img/banner-mobile.jpg')}}" class="lozad asyncImage" alt="banner">
@endif	
</div>


</section>

<!-- =====================
              BANNER END
         ===================== -->


<!-- =======================
           PRODUCTS AREA START
         ======================== -->
<section class="product-area-first">
    <h2> PRODUCTS </h2>
    <div class="container">
        <div class="row">
            @php
            $i=0;
            @endphp
            @foreach($deals as $deal)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-6 pp">
                <div class="product-first-boxes">
                    <span class="discount">
                            <h2> Our Offer Price </h2>
                        </span>
                  <h6> <a href="#"> CLEARANCE SALE </a> </h6>
				 <div class="pro-box-img">
                    <img src="{{env('APP_ADMIN_URL')}}{{$deal->pimage}}" data-src="{{env('APP_ADMIN_URL')}}{{$deal->pimage}}" alt="{{$deal->title!=""?$deal->title:$deal->pname}}" class="asyncImage">
				</div>	
					  <h4 class="country-twt">Made in {{$deal->cname}}</h4>
                      <a href="{{route('product',$deal->pslug)}}" target="_blank" class="title"><h4>{{($deal->title!=""?$deal->title:$deal->pname)}} </h4></a>
                    <h5> AED {{number_format($deal->discount_price,2)}} </h5>
                    <p> Incl.Shipping & all Taxes </p>

                    <a href="#" type="button" class="btn btn-lg express-intrest" data-toggle="modal" data-target="#exampleModalCenter{{$deal->id}}">
                        <span> Proceed to Buy </span>
                    </a>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter{{$deal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"> Express interest to buy the product
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="error_msg_form error_msg" id="error_msg{{$deal->id}}"></div>
                                <form id="contact" class="interest_send" action="" method="post">



                                    <div class="form-group">
                                        <input type="hidden" id="product_name{{$deal->id}}" value="{{$deal->pname}}">
                                        <input type="text" name="name" class="form-control" id="name{{$deal->id}}" placeholder="Name" required="" data-sider-insert-id="f175008d-3510-4f72-8e5d-5b7398adac77" data-sider-select-id="86e14447-4da8-4b20-9f91-70e6130302e8">

                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email{{$deal->id}}" aria-describedby="emailHelp" placeholder="Email" required="">

                                    </div>

                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phone{{$deal->id}}" placeholder="Phone Number" required="" name="phone">

                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-12 d-flex mb-3">
                                                <div id="captcha_{{$i}}" class="captcha-div"></div>
                                                <a href="javascript:void(0);" onclick="refreshCaptcha();" class="ml-2" style="color:#999;font-size: 22px;padding-top: 12px;" title="Refresh Captcha"> <i class="fa fa-refresh" aria-hidden="true" style="position: static;"></i></a>
                                            </div>
                                            <div class="col-md-12 d-flex mb-3">
                                                <input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_{{$i}}" />
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" id="{{$deal->id}}" data-id="{{$i}}" class="btn submit-b csubmit"> <span>
                                            Submit</span> </button>
                                    <br>
                                    <div class="resume_loader row" id="resume_loader{{$deal->id}}">
                                        <div class="col-md-12" style="text-align: center;">
                                            <img src="{{asset('frontend/img/spinning-loading.gif')}}" style="width: 133px;" alt="loading"/>
                                        </div>
                                    </div>
                                    <div class="success_resume_block alert alert-success alert-block" id="success_resume_block{{$deal->id}}">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong id="success_resume_message_block{{$deal->id}}" class="success_resume_message_block"></strong>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @php
            $i++
            @endphp
            @endforeach








        </div>
    </div>
</section>
<!-- =====================
           PRODUCTS AREA END
         ===================== -->


<!-- =====================
           WHY BY AREA START
         ===================== -->
   <section class="how-it-work-area">
        <div class="container">
            <h2> How it works </h2>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="how-it-work">
                        <div class="how-it-work-image">
                            <img class="lozad" data-src="{{asset('assets/img/Browse-Select.png')}}" src="{{asset('assets/img/Browse-Select.png')}}" alt="Browse & Select Your Cleaning Machinery">
                        </div>

                        <h4> Browse & Select Your <br> Cleaning Machinery </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nihil nesciunt sed beatae dolorum repudiandae? Deleniti distinctio fuga,
                            harum laudantium voluptate, nisi beatae nihil dignissimos praesentium
                            eius rerum facere repudiandae laboriosam.
                        </p>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="how-it-work">
                        <div class="how-it-work-image">
                            <img class="lozad" data-src="{{asset('assets/img/Submit-your-details.png')}}" src="{{asset('assets/img/Submit-your-details.png')}}" alt="Submit your details">
                        </div>

                        <h4> Submit your details and cleaning machinery <br> type which you wish to buy </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nihil nesciunt sed beatae dolorum repudiandae? Deleniti distinctio fuga,
                            harum laudantium voluptate, nisi beatae nihil dignissimos praesentium
                            eius rerum facere repudiandae laboriosam.
                        </p>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="how-it-work">
                        <div class="how-it-work-image">
                            <img  class="lozad" data-src="{{asset('assets/img/team-will-contact.png')}}" src="{{asset('assets/img/team-will-contact.png')}}" alt="team will contact">
                        </div>

                        <h4> Our team will contact you <br> to confirm your order </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nihil nesciunt sed beatae dolorum repudiandae? Deleniti distinctio fuga,
                            harum laudantium voluptate, nisi beatae nihil dignissimos praesentium
                            eius rerum facere repudiandae laboriosam.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
           HOW IT WORK AREA END
         ======================= -->

    <!-- ==============================
           PRODUCT FEATURES AREA START
         ============================== -->
    <section class="product-features-area">
        <div class="container">
            <h2> Product Features </h2>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="product-features-box">
                        <img class="lozad" data-src="{{asset('assets/img/high-quality.png')}}"  src="{{asset('assets/img/high-quality.png')}}" alt="High quality European made Machinery">
                        <h4> High quality <br> European made Machinery </h4>
                        <p> We supply high-quality European made Cleaning machinery that deliver superior performance and efficiency </p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="product-features-box">
                        <img class="lozad" data-src="{{asset('assets/img/warranty.png')}}" src="{{asset('assets/img/warranty.png')}}" alt="12 Months Warranty">
                        <h4> 12 Months <br> Warranty </h4>
                        <p> We value your satisfaction. That's why we offer a comprehensive 12-month warranty on our products. </p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="product-features-box">
                        <img class="lozad" data-src="{{asset('assets/img/technicians.png')}}" src="{{asset('assets/img/technicians.png')}}" alt="⁠Service by trained technicians">
                        <h4> ⁠Service by <br> trained technicians </h4>
                        <p> Get expert service from our team of trained technicians.
                             They possess the knowledge and expertise to handle your needs with precision and care. </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
         
<section class="why-by-area">
    <div class="container">

        <h2> Why buy online from YES Clean </h2>
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="why-by-area-widgect">
                    <i class="fas fa-truck"></i>
                    <h4> Free Delivery and <br> Returns </h4>
                    <p> Enjoy Free Delivery in UAE for all your cleaning equipments
                    </p>

                   

                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="why-by-area-widgect">
                    <i class="fas fa-check-circle"></i>
                    <h4> 2 Years Manufacturer's <br> Guarantee </h4>
                    <p> All our cleaning machinery comes with a two year manufacturer's guarantee.
                    </p>
                   
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="why-by-area-widgect">
                    <i class="fas fa-luggage-cart"></i>
                    <h4> Extensive <br> Product Range </h4>
                    <p> You can choose  from  our extensive range of cleaning machinery suiting your cleaning requirements
                    </p>
                   
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad();
observer.observe();
(() => {
  'use strict';
  // Page is loaded
  const objects = document.getElementsByClassName('asyncImage');  Array.from(objects).map((item) => {
    // Start loading image
    const img = new Image();
    img.src = item.dataset.src;
    // Once image is loaded replace the src of the HTML element
    img.onload = () => {
      item.classList.remove('asyncImage');
      return item.nodeName === 'IMG' ? 
        item.src = item.dataset.src :        
        item.style.backgroundImage = `url(${item.dataset.src})`;
    };
  });
})();

</script>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        createCaptcha();
        $(".success_resume_block").hide();
        $(".resume_loader").hide();

        $(".csubmit").on("click", function() {
            var id = $(this).attr("id");
            var data_id = $(this).attr("data-id");
            let text_code = $('#cpatchaTextBox_' + data_id).val();
            if (text_code) {
                //alert(text_code);
                if (!validateCaptcha(text_code)) {
                    $(".error_msg").hide();
                    $('.error_msg').removeClass('alert alert-danger').html(" ");
                    $(".error_msg").show();
                    $('.error_msg').addClass('alert alert-danger').html("Captcha is Invalid");
                    $('#cpatchaTextBox_' + data_id).val("");
                    return false;
                }

            } else {
                $(".error_msg").show();
                $('.error_msg').addClass('alert alert-danger').html("No Captcha entered");

                return false;
            }

            if ($("#name" + id).val() == "") {
                $(".error_msg").show();
                $('#error_msg' + id).addClass('alert alert-danger').text("Enter the Name");
                return false;
            }
            if ($("#email" + id).val() == "") {
                $(".error_msg").show();
                $('#error_msg' + id).addClass('alert alert-danger').text("Enter the Email");
                return false;
            }
            if ($("#phone" + id).val() == "") {
                $(".error_msg").show();
                $('#error_msg' + id).addClass('alert alert-danger').text("Enter The phone");
                return false;
            }




            var name = $("#name" + id).val();
            var phone = $("#phone" + id).val();
            var email = $("#email" + id).val();
            var product = $("#product_name" + id).val();

            var formData = new FormData();
            formData.append('name', name);
            formData.append('phone', phone);
            formData.append('email', email);
            formData.append('product_name', product);
            //  validateCaptcha();

            $.ajax({
                method: "POST",
                url: "{{ route('express-interest-mail') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function(xhr) {
                    // Show the loader
                    $('#error_msg' + id).hide();
                    $("#resume_loader" + id).show();

                },
                success: function(response) {

                    $("#resume_loader" + id).hide();
                    $("#success_resume_block" + id).show();
                    $("#success_resume_message_block" + id).html(response.success);
                    $("#name" + id).val("");
                    $("#phone" + id).val("");
                    $("#email" + id).val("");
                    $('#cpatchaTextBox_' + data_id).val("");
                    $(".mycaptcha").remove();
                    createCaptcha();

                },
                error: function(data) {
                    $("#resume_loader" + id).hide();
                    $("#error_msg" + id).show();
                    $('#cpatchaTextBox_' + data_id).val("");
                    $(".mycaptcha").remove();
                    createCaptcha();
                    let err_str = '';
                    if (data.responseJSON.errors) {
                        err_str = '<dl class="row"><dt class="col-sm-3"></dt><dt class="col-sm-9"><p><b>Whoops!!</b> There is some Problem</p></dt>';
                        $.each(data.responseJSON.errors, function(key, val) {
                            err_str += '<dt class="col-sm-3">' + key.replace("_", " ") + ' </dt><dd class="col-sm-9">' + val + '</dd>';
                        });
                        err_str += '</dl>';
                        $("#error_msg" + id).addClass('alert alert-danger').html(err_str);

                        return false;
                    }

                }
            });


        });
    });
</script>
@endpush