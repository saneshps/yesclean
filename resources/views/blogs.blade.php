@extends('layouts.app')
@section('meta')
<title>Best Cleaning Machinery Products Suppliers - YES Clean UAE</title>
<meta name="keywords" content="autonomous sweeper, floor cleaning robot, road sweeper, floor cleaning machines, swimming pool cleaning robot, cleaning trolley, air purifier ">
<meta name="description" content="One of the premier and trusted cleaning machinery products suppliers in the UAE. High-quality cleaning products at an affordable price. Shop now from YES Clean.">
<!-- canonical -->
<link href="{{ route('blogs') }}" rel="canonical">
  <!--// canonical -->
@endsection

@section('content')
<section class="title-banner-area">
    <h1> Our Blogs </h1>
  </section>

  <!-- ===============================
              OUR BLOGS START
      =============================== -->
<style>
   .textdiv {
   overflow: hidden;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
           line-clamp: 1; 
   -webkit-box-orient: vertical;
} 
</style>      
  <section class="blog-list-area">
    <div class="container">

      <div class="row">
       @foreach ($blogs as $blog )

        <div class="col-xl-4 col-lg-6 col-md-12">

          <div class="post-slide">
            <div class="post-img">
              <a href="{{route('blog-detail',$blog->slug)}}"><img src="{{env('APP_ADMIN_URL')}}{{$blog->default_image}}" alt="{{$blog->title}}"></a>
            </div>
            <div class="post-content">
              <div class="post-date">

                <span class="month">{{ date('M', strtotime($blog->created_at)) }}</span>
                <span class="date">{{ date('d', strtotime($blog->created_at)) }}</span>
              </div>
              <h5 class="post-title"><a href="{{route('blog-detail',$blog->slug)}}" class="textdiv">{{$blog->title}}</a></h5>
              {{-- <p class="post-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
              </p> --}}
            </div>

          </div>

        </div>

       @endforeach







        <!-- </div> -->



      </div>
    </div>
  </section>
@endsection
