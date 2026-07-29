@extends('layouts.app')
@section('meta')
<title>{{$this_cat->meta_title}}</title>
<meta name="keywords" content="{{$this_cat->meta_keywords}}">
<meta name="description" content="{{$this_cat->meta_description}}">
<link href="{{ route('category', $this_cat->short_code) }}" rel="canonical">
@if($faqs->isNotEmpty())
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faqs->map(function ($faq) {
        return [
            '@type' => 'Question',
            'name' => $faq->question,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq->answer,
            ],
        ];
    })->values(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}
</script>
@endif
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

.category-faq {
  position: relative;
  overflow: hidden;
  padding: 76px 0 82px;
  background:
    radial-gradient(circle at 92% 8%, rgba(0, 174, 239, .13), transparent 25rem),
    linear-gradient(180deg, #f7fbfe 0%, #eef7fc 100%);
}
.category-faq::before {
  position: absolute;
  top: 50px;
  left: -85px;
  width: 220px;
  height: 220px;
  border: 38px solid rgba(1, 122, 201, .06);
  border-radius: 50%;
  content: "";
}
.category-faq__header {
  position: relative;
  z-index: 1;
  max-width: 680px;
  margin: 0 auto 38px;
  text-align: center;
}
.category-faq__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  margin-bottom: 12px;
  color: #017ac9;
  font-size: 13px;
  font-weight: 800;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.category-faq__eyebrow::before,
.category-faq__eyebrow::after {
  width: 24px;
  height: 2px;
  background: #25c4d8;
  content: "";
}
.category-faq__title {
  margin: 0 0 12px;
  color: #12334b;
  font-size: 36px;
  font-weight: 700;
  line-height: 1.2;
}
.category-faq__intro {
  margin: 0;
  color: #627586;
  font-size: 16px;
  line-height: 1.7;
}
.category-faq__list {
  position: relative;
  z-index: 1;
  max-width: 920px;
  margin: 0 auto;
}
.category-faq__item {
  margin-bottom: 14px;
  overflow: hidden;
  border: 1px solid rgba(1, 122, 201, .13);
  border-radius: 14px;
  background: #fff;
  box-shadow: 0 10px 30px rgba(24, 71, 101, .06);
  transition: border-color .25s ease, box-shadow .25s ease, transform .25s ease;
}
.category-faq__item:hover,
.category-faq__item.is-open {
  border-color: rgba(1, 122, 201, .42);
  box-shadow: 0 14px 34px rgba(1, 122, 201, .12);
}
.category-faq__item.is-open {
  transform: translateY(-2px);
}
.category-faq__item h3 {
  margin: 0;
}
.category-faq__question {
  display: flex;
  width: 100%;
  align-items: center;
  gap: 17px;
  padding: 21px 23px;
  border: 0;
  background: transparent;
  color: #183f59;
  cursor: pointer;
  font: inherit;
  font-size: 17px;
  font-weight: 700;
  line-height: 1.45;
  text-align: left;
}
.category-faq__number {
  display: inline-flex;
  width: 38px;
  height: 38px;
  flex: 0 0 38px;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: #eaf6fd;
  color: #017ac9;
  font-size: 12px;
  transition: background .25s ease, color .25s ease;
}
.category-faq__item.is-open .category-faq__number {
  background: #017ac9;
  color: #fff;
}
.category-faq__question-text {
  flex: 1;
}
.category-faq__icon {
  position: relative;
  width: 30px;
  height: 30px;
  flex: 0 0 30px;
  border: 1.5px solid #25bcd4;
  border-radius: 50%;
}
.category-faq__icon::before,
.category-faq__icon::after {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 11px;
  height: 2px;
  background: #017ac9;
  content: "";
  transform: translate(-50%, -50%);
  transition: transform .25s ease;
}
.category-faq__icon::after {
  transform: translate(-50%, -50%) rotate(90deg);
}
.category-faq__item.is-open .category-faq__icon::after {
  transform: translate(-50%, -50%) rotate(0);
}
.category-faq__answer {
  padding: 0 76px 23px;
  color: #526979;
  font-size: 16px;
  line-height: 1.75;
}
.category-faq__answer[hidden] {
  display: none;
}
.category-faq__answer p {
  margin: 0;
}
.category-faq__question:focus-visible {
  outline: 3px solid rgba(1, 122, 201, .28);
  outline-offset: -3px;
}
@media (max-width: 767px) {
  .category-faq {
    padding: 50px 0 56px;
  }
  .category-faq__header {
    margin-bottom: 27px;
  }
  .category-faq__title {
    font-size: 27px;
  }
  .category-faq__question {
    gap: 12px;
    padding: 17px 16px;
    font-size: 15px;
  }
  .category-faq__number {
    width: 32px;
    height: 32px;
    flex-basis: 32px;
  }
  .category-faq__answer {
    padding: 0 16px 19px 60px;
    font-size: 15px;
  }
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


@if($faqs->isNotEmpty())
<section class="category-faq" id="category-faq" aria-labelledby="category-faq-title">
  <div class="container">
    <div class="category-faq__header">
      <span class="category-faq__eyebrow">Helpful answers</span>
      <h2 class="category-faq__title" id="category-faq-title">Frequently Asked Questions</h2>
      <p class="category-faq__intro">
        Find quick answers about {{ $this_cat->name }}. If you need more help, our team is ready to assist.
      </p>
    </div>

    <div class="category-faq__list">
      @foreach($faqs as $faq)
      <article class="category-faq__item">
        <h3>
          <button
            type="button"
            class="category-faq__question"
            aria-expanded="false"
            aria-controls="category-faq-answer-{{ $faq->id }}"
            id="category-faq-question-{{ $faq->id }}"
          >
            <span class="category-faq__number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
            <span class="category-faq__question-text">{{ $faq->question }}</span>
            <span class="category-faq__icon" aria-hidden="true"></span>
          </button>
        </h3>
        <div
          class="category-faq__answer"
          id="category-faq-answer-{{ $faq->id }}"
          role="region"
          aria-labelledby="category-faq-question-{{ $faq->id }}"
          hidden
        >
          <p>{!! nl2br(e($faq->answer)) !!}</p>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</section>
@endif

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
              <div class="col-md-3 col-6 form-box mx-auto text-center">
                <button type="submit" class="send" id="express-interest-submit" data-id="1">SEND</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
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
document.querySelectorAll('.category-faq__question').forEach(function (button) {
  button.addEventListener('click', function () {
    const item = button.closest('.category-faq__item');
    const answer = document.getElementById(button.getAttribute('aria-controls'));
    const willOpen = button.getAttribute('aria-expanded') === 'false';

    document.querySelectorAll('.category-faq__question').forEach(function (otherButton) {
      const otherAnswer = document.getElementById(otherButton.getAttribute('aria-controls'));

      otherButton.setAttribute('aria-expanded', 'false');
      otherButton.closest('.category-faq__item').classList.remove('is-open');
      otherAnswer.hidden = true;
    });

    if (willOpen) {
      button.setAttribute('aria-expanded', 'true');
      item.classList.add('is-open');
      answer.hidden = false;
      answer.animate(
        [
          { opacity: 0, transform: 'translateY(-6px)' },
          { opacity: 1, transform: 'translateY(0)' }
        ],
        { duration: 220, easing: 'ease-out' }
      );
    }
  });
});
</script>

@endpush