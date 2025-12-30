@extends('layouts.app')
@section('meta')
<title>{{$blog->meta_title}}</title>
<meta name="description" content="{{$blog->meta_description}}">
<!-- For Facebook -->
<meta property="og:title" content="{{$blog->meta_title}}" />
<meta property="og:type" content="article" />
<meta property="og:image" content="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}" />
<meta property="og:url" content="{{route('blog-detail',$blog->slug)}}" />
<meta property="og:description" content="{{$blog->meta_description}}" />
<!-- canonical -->
<link href="{{route('blog-detail',$blog->slug)}}" rel="canonical">
  <!--// canonical -->
@endsection

@section('content')
  <section class="title-banner-area">
    <h1> Blog Details </h1>
  </section>

  <!-- ===============================
              OUR BLOGS START
      =============================== -->
  <section class="blog-details-area">
    <div class="container">

      <div class="row">

        <div class="col-xl-8 col-lg-7 col-md-12">
          <div class="blog-details-pic">

            <div class="post-slide">
              <div class="post-img">
                <a href="#"><img src="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}" alt="{{$blog->title}}"></a>
              </div>
              <div class="post-content">
                <div class="post-date">
                    <span class="month">{{ date('M', strtotime($blog->created_at)) }}</span>
                    <span class="date">{{ date('d', strtotime($blog->created_at)) }}</span>
                </div>
                <h2><a href="#">{{$blog->title}}</a></h2>
              {!! $blog->description !!}
              </div>

            </div>

          </div>
        </div>

        <div class="col-xl-4">
          <div class="blog-details-description">
            <h2> Latest Post </h2>

            @foreach ($notthisblogs as $blog )
            <div class="latest-box">
              <div class="latest-pic">
                <a href="{{route('blog-detail',$blog->slug)}}"><img src="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}" alt="{{$blog->title}}"></a>

              </div>
              <div class="latest-content">
                <h6> <a href="{{route('blog-detail',$blog->slug)}}"> <i class="fas fa-calendar-alt"></i> {{ date('d', strtotime($blog->created_at)) }} {{ date('M', strtotime($blog->created_at)) }} </a> </h6>
                <p> <a href="{{route('blog-detail',$blog->slug)}}"> {{$blog->title}} </a> </p>
              </div>
            </div>
            @endforeach









          </div>
        </div>




        <!-- </div> -->



      </div>
    </div>
  </section>
  <!-- ===============================
              OUR BLOGS END
      =============================== -->



  <!-- ===============================
              RECENT BLOGS START
      =============================== -->
  <section class="recent-blogs-area">
    <div class="container">

      <h2> Recent Blogs </h2>
      <div class="row">

        <div id="news-slider" class="owl-carousel">
            @foreach ($notthisblogs as $blog )
                <div class="post-slide">
                    <div class="post-img">
                        <a href="{{route('blog-detail',$blog->slug)}}"><img src="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}" alt="{{$blog->title}}"></a>
                    </div>
                    <div class="post-content">
                    <div class="post-date">
                        <span class="month">{{ date('M', strtotime($blog->created_at)) }}</span>
                        <span class="date">{{ date('d', strtotime($blog->created_at)) }}</span>
                    </div>
                    <h5 class="post-title"><a href="#">{{$blog->title}}</a></h5>
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
@endsection
@push('scripts')
<script src="{{asset('frontend/js/blogs.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
@endpush
