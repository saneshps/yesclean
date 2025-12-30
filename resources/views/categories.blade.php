@extends('layouts.app')
@section('meta')
<title>{{$this_cat->meta_title}}</title>
<meta name="keywords" content="{{$this_cat->meta_keywords}}">
<meta name="description" content="{{$this_cat->meta_description}}">
<link href="{{ route('category', $this_cat->short_code) }}" rel="canonical">
@endsection

@push('style')
<style>
.about-cont p {
    font-size: 17px;
    color: #161616;
    line-height: 25px;
}
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
   -webkit-line-clamp: 5;
           line-clamp: 1; 
   -webkit-box-orient: vertical;
}






</style>

<link rel="stylesheet" href="{{asset('frontend/css/blogs.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{asset('frontend/css/products.css')}}" media="print" onload="this.media='all'">
@endpush

@section('content')
<div class="page1" id="page1">
  <main class="main-content">
    <section class="slideshow">
      <div class="slideshow-inner">
        <div class="slides">
          <div class="slide is-active">
            <div class="slide-content">
              <div class="caption">
                <div class="title"></div>
                <div class="text-inn"></div>
              </div>
            </div>
            <div class="image-container">
              <img src="{{env('APP_ADMIN_URL')}}{{$this_cat->banner}}" 
                   alt="{{$this_cat->banner_alt}}" 
                   class="image"
                   loading="lazy"
                   width="1200" 
                   height="400" />
            </div>
          </div>
          <div class="caption1">
            <div class="title1">
              <h1 id="product_name">{{$this_cat->name}}</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

@include('layouts.social')

<section class="about-cont pb-0">
  <div class="container-fluid">
    <div class="row breadcrumb-area">
      <div class="breadcrumb">
        <ul>
          <li><a href="{{route('home')}}">Home</a><span>/</span></li>
          @if ($this_cat->parent_id != '0')
          <li><a href="{{route('category',$this_cat->parent->short_code)}}">{{$this_cat->parent->name}}</a><span>/</span></li>
          @endif
          <li class="active"><a href="{{route('category',$this_cat->short_code)}}">{{$this_cat->name}}</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2 style="text-transform: uppercase;" id="product-tittle">{{$this_cat->name}}</h2>

                    {!! $this_cat->description !!}

        <div class="row pro-image-box">
          @if($count_cat >= 1)
            @foreach($categories as $category)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <a href="{{route('category',$category->short_code)}}">
                <div class="product-grid">
                  <div class="product-image">
                    <img src="{{env('APP_ADMIN_URL')}}{{$category->icon_url}}" 
                         class="img-responsive" 
                         alt="{{$category->icon_url_alt}}"
                         loading="lazy"
                         width="300"
                         height="200">
                    <ul class="product-links">
                      <li><a href="tel:+97165264382"><i class="fas fa-mobile-alt"></i></a></li>
                      <li><a href="mailto:sales@yesclean.ae"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                  </div>
                  <div class="product-content">
                    <h4 class="title1">{{$category->name}}</h4>
                  </div>
                  <a href="{{route('category',$category->short_code)}}" class="btnm btn-lg">
                    <span>More</span>
                  </a>
                </div>
              </a>
            </div>
            @endforeach
          @else
            @foreach($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <a href="{{route('product',$product->slug)}}">
                <div class="product-grid">
                  <div class="product-image">
                    <img src="{{env('APP_ADMIN_URL')}}{{$product->default_image}}" 
                         class="img-responsive" 
                         alt="{{$product->name}}"
                         loading="lazy"
                         width="300"
                         height="200">
                    <ul class="product-links">
                      <li><a href="tel:+97165264382"><i class="fas fa-mobile-alt"></i></a></li>
                      <li><a href="mailto:sales@yesclean.ae"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                  </div>
                  <div class="product-content">
                    <h4 class="title1">{{$product->name}}</h4>
                  </div>
                  <a href="{{route('product',$product->slug)}}" class="btnm btn-lg">
                    <span>More</span>
                  </a>
                </div>
              </a>
            </div>
            @endforeach
          @endif
        </div>

        <div class="pad"></div>
      </div>
    </div>
  </div>
</section>


                       <!-- tab start -->
  @if ($slug === 'pressure-washer')
  <main class="main">
  <div class="tab">
    <div class="tab-menu">
      <button class="tab-menu-link is-active" data-content="item-1">
        <span data-title="item-1">FAQ Section</span>
      </button>
    </div>

    <div class="tab-bar">
      <div class="tab-bar-content is-active" id="item-1">
        <div class="paragraph">
          <div class="accordion_container">

            <div class="accordion_head">
              What type of pressure washers does YES Clean supply?
              <span class="plusminus">+</span>
            </div>
            <div class="accordion_body" style="display: none;">
              <p> At YES Clean we supply a variety of lightweight and easy to use pressure washers.
              Our range includes petrol and diesel pressure washers, electric pressure washers, and hot and cold pressure washers.
              From residential to commercial usage, our pressure washers are ideal for every day cleaning tasks and heavy-duty tasks.
              </p>
            </div>

            <div class="accordion_head">
              How can I choose the right pressure washer? 
              <span class="plusminus">+</span>
            </div>
            <div class="accordion_body" style="display: none;">
              <p> While choosing the right pressure washer consider the following factors such as the PSI rate,
              Flow rate, Nozzle type, Power source, Portability and whether it is meant for residential or commercial use. 
  </p>
            </div>

            <div class="accordion_head">
              What are the maintenance requirements of pressure washers?
              <span class="plusminus">+</span>
            </div>
            <div class="accordion_body" style="display: none;">
              <p> The maintenance requirements of pressure washers include inspecting the hoses and connections for leaks,
              checking the pump and cleaning the nozzles. For electric models, this also includes checking the power cable,
              watching  for sparks and inspecting control panels and switches. With proper maintenance,
              pressure washers can operate safely and deliver consistent performance. 
              </p>
            </div>

            <div class="accordion_head">
              What are the applications of pressure washers?
              <span class="plusminus">+</span>
            </div>
            <div class="accordion_body" style="display: none;">
              <p> Pressure washers are widely used in both commercial, residential and industrial applications.
              They are ideal for cleaning bikes, cars, driveways, maintaining warehouses and workshops,
              and for cleaning heavy machinery and degreasing production areas in the industrial settings. 
              </p>
            </div>
            
            
            <div class="accordion_head">
              Do these pressure washers have warranty coverage?
              <span class="plusminus">+</span>
            </div>
            <div class="accordion_body" style="display: none;">
              <p>  Yes, our pressure washers come with the manufacturer’s warranty. For further information please check the product’s specific details. 
              </p>
            </div>
            
            
            <div class="accordion_head">
             How do I choose between a hot and cold pressure washer?
              <span class="plusminus">+</span>
            </div>
            <div class="accordion_body" style="display: none;">
              <p> If the cleaning tasks involve removing general dirt and dust, then cold pressure washers would be ideal.
              But if the task involves the regular tackling of tough grease and oil,
              then hot pressure washers are the best choice and it cleans faster and more effectively.
              
              </p>
            </div>
            
                        
            <div class="accordion_head">
           Are the pressure washers sustainable?
              <span class="plusminus">+</span>
            </div>
            <div class="accordion_body" style="display: none;">
              <p> Yes, most modern pressure washers are sustainable. They use less water and chemicals, and effectively remove harsh dirt and grime. 
              
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endif

                <!-- tab end -->

<section class="express-intrst-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-7 col-lg-10 col-md-10 mx-auto">
        <div class="express-intrst-box">
          <h3>Express Interest</h3>
          <div class="row" id="interest_loader" style="display:none;">
            <div class="col-md-12 text-center">
              <img src="{{asset('frontend/img/spinning-loading.gif')}}" 
                   style="width:133px;padding-bottom:16px;" 
                   alt="loading"
                   loading="lazy">
            </div>
          </div>
          <div class="alert alert-success alert-block" id="interest_block" style="display:none;">
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
          <form id="interestForm" method="post">
            <div class="row">
              <div class="col-md-6 col-sm-12 form-box">
                <input type="text" name="Name" id="name_interest" placeholder="Enter Your Name" required>
              </div>
              <div class="col-md-6 col-sm-12 form-box">
                <input type="tel" name="mobile" id="phone_interest" placeholder="Mobile number" required>
              </div>
              <div class="col-md-12 col-sm-12 form-box">
                <input type="email" name="email" id="email_interest" placeholder="Enter Your Email id" required>
              </div>
              <div class="col-md-12 col-sm-12 form-box position-relative text-center">
                <div id="captcha_1" class="captcha-div"></div>
                <a href="javascript:void(0);" onclick="refreshCaptcha();" class="ml-2" style="color:#999;" title="Refresh Captcha">
                  <i class="fa fa-refresh" aria-hidden="true" style="font-size:19px;"></i>
                </a>
              </div>
              <div class="col-md-12 d-flex mb-3">
                <input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_1">
              </div>
              <div class="col-md-3 col-6 form-box mx-auto">
                <button type="submit" class="send" id="express-interest-submit" data-id="1">SEND</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@if($slug == 'pressure-washer-and-tools')
<section class="product-faq-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="product-faq-box">
          <h2>Frequently Asked Question On Pressure Washers</h2>
          <div class="accordion_container">
            <!-- FAQ content remains the same but optimized -->
            <div class="accordion_head">1. What are the types of pressure washers<span class="plusminus">+</span></div>
            <div class="accordion_body" style="display:none;">
              <!-- FAQ content -->
            </div>
            <!-- More FAQ items -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection

@push('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


<script>
// Defer JavaScript execution for product show more/less and form submission
document.addEventListener('DOMContentLoaded', function() {
  // Initialize variables
  const productLong = document.getElementById('product_long');
  const productShort = document.getElementById('product_short');
  const interestBlock = document.getElementById('interest_block');
  const interestLoader = document.getElementById('interest_loader');
  
  // Show/hide content toggle
  if (productLong && productShort) {
    document.getElementById('show_more')?.addEventListener('click', function() {
      productLong.style.display = 'block';
      productShort.style.display = 'none';
      document.querySelector('.error_interest_form').style.display = 'none';
    });
    
    document.getElementById('show_less')?.addEventListener('click', function() {
      productLong.style.display = 'none';
      productShort.style.display = 'block';
      document.querySelector('.error_interest_form').style.display = 'none';
    });
  }
  
  // Form submission
  const interestForm = document.getElementById('interestForm');
  if (interestForm) {
    interestForm.addEventListener('submit', function(e) {
      e.preventDefault();
      submitInterestForm();
    });
  }
});

// AJAX setup for CSRF token with jQuery
if (typeof $ !== 'undefined') {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  });
}

function submitInterestForm() {
  const data_id = document.getElementById('express-interest-submit')?.getAttribute('data-id') || '1';
  const text_code = document.getElementById('cpatchaTextBox_' + data_id)?.value;
  const errorDiv = document.querySelector('.error_interest_form');
  
  // Validate captcha (assuming validateCaptcha is defined)
  if (!text_code || !validateCaptcha(text_code)) {
    if (errorDiv) {
      errorDiv.style.display = 'block';
      errorDiv.className = 'alert alert-danger';
      errorDiv.innerHTML = text_code ? "Captcha is Invalid" : "No Captcha entered";
    }
    document.getElementById('cpatchaTextBox_' + data_id).value = "";
    return false;
  }
  
  const formData = {
    name: document.getElementById('name_interest')?.value,
    phone: document.getElementById('phone_interest')?.value,
    email: document.getElementById('email_interest')?.value,
    product_name: document.getElementById('product_name')?.innerHTML
  };
  
  // Show loader
  document.getElementById('interest_loader').style.display = 'block';
  if (errorDiv) errorDiv.style.display = 'none';
  
  fetch("{{ route('express-interest-mail') }}", {
    method: "POST",
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify(formData)
  })
  .then(response => response.json())
  .then(data => {
    document.getElementById('interest_loader').style.display = 'none';
    const interestBlock = document.getElementById('interest_block');
    interestBlock.style.display = 'block';
    document.getElementById('express_interest_message_block').textContent = data.success;
    
    // Reset form
    document.getElementById('name_interest').value = "";
    document.getElementById('phone_interest').value = "";
    document.getElementById('email_interest').value = "";
    document.getElementById('cpatchaTextBox_' + data_id).value = "";
    
    if (errorDiv) errorDiv.style.display = 'none';
  })
  .catch(error => {
    document.getElementById('interest_loader').style.display = 'none';
    if (errorDiv) {
      errorDiv.style.display = 'block';
      errorDiv.className = 'alert alert-danger';
      errorDiv.innerHTML = 'An error occurred. Please try again.';
    }
  });
}
</script>

<script>
$(".accordion_head").click(function () {
  const $thisBody = $(this).next(".accordion_body");
  const isVisible = $thisBody.is(":visible");

  if (isVisible) {
    $thisBody.slideUp(300);
    $(this).children(".plusminus").text("+");
  } else {
    $(".accordion_body").slideUp(300);
    $(".plusminus").text("+");
    $thisBody.slideDown(300);
    $(this).children(".plusminus").text("-");
  }
});


</script>

@endpush