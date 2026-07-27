<section id="newsfeeds">

	<div class="container-fluid">



		<div class="row">





			<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 pro-categories">

				<h2> Product Categories </h2>

				<div class="row">

					@foreach($categories as $category)
					<div class="col-xl-3 col-lg-4 col-md-4">
						<a href="{{route('category',$category->short_code)}}">
							<div class="pro-categories-box">
								<img loading="lazy" src="{{env('APP_ADMIN_URL')}}{{$category->icon_url}}?quality=auto&width=90&height=99" alt="{{$category->icon_url_alt}}">
								<h3> {{$category->name}} </h3>

							</div>
						</a>
					</div>
					@endforeach











				</div>





			</div>

			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 home-blog-sec">



				<h2 class="bog">Latest Blog</h2>

				<div id="home-blog-slider" class="owl-carousel">
					@foreach ($blogs as $blog )
					<div class="post-slide">
						<div class="post-img">
							<a href="{{route('blog-detail',$blog->slug)}}"><img loading="lazy" src="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}?quality=auto&width=544&height=320" alt="{{$blog->title}}"></a>
						</div>
						<div class="post-content">
							<div class="post-date">

								<span class="month">{{ date('M', strtotime($blog->created_at)) }}</span>
								<span class="date">{{ date('d', strtotime($blog->created_at)) }}</span>
							</div>
							<h5 class="post-title"><a href="{{route('blog-detail',$blog->slug)}}">{{$blog->title}}</a></h5>
							{{-- <p class="post-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
              </p> --}}
						</div>

					</div>
					@endforeach







				</div>



			</div>







		</div>

</section>








<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>



<script type="text/javascript">
	jQuery("#carousel").owlCarousel({

		autoplay: true,

		lazyLoad: true,

		loop: true,

		margin: 20,

		/*

  animateOut: 'fadeOut',

  animateIn: 'fadeIn',

  */

		responsiveClass: true,

		autoHeight: true,

		autoplayTimeout: 7000,

		smartSpeed: 800,

		nav: true,

		responsive: {

			0: {

				items: 1

			},



			700: {

				items: 2

			},



			1024: {

				items: 2

			},



			1200: {

				items: 2

			},



			1366: {

				items: 2

			}

		}

	});
</script>