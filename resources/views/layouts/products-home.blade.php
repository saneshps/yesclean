<section id="productfeeds">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2 class="trend-product"> TRENDING PRODUCTS in CLEANING </h2>
        <div class="owl-slider">
          <div id="carousel-prod" class="owl-carousel">
            @foreach($trendings_products as $trendings_product)
            <a href="{{route('product',$trendings_product->slug)}}">
              <div class="item">
                <img loading="lazy" src="{{env('APP_ADMIN_URL')}}{{$trendings_product->default_image}}?quality=auto&width=290&height=330" class="img-responsive" alt="{{$trendings_product->name}}">
                <h6 class="text-center">{{$trendings_product->name}}</h6>
              </div>
            </a>
            @endforeach



          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<script type="text/javascript">
  jQuery("#carousel-prod").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 10,
    /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: false,
    responsive: {
      300: {
        items: 1
      },
      768: {
        items: 3
      },

      1024: {
        items: 4
      },

      1200: {
        items: 5
      },

      1366: {
        items: 5
      }
    }
  });
</script>