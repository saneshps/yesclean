@extends('layouts.app')
@section('meta')
<title>All Products|Yesclean</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- canonical -->
<link href="{{route('all-products')}}" rel="canonical">
<!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/products.css')}}">
@endpush
@section('content')






@include('layouts.social')



<!--slider-->








<section class="title-banner-area">
    <h1> All Products</h1>
  </section>




<section class="about-cont">

  <div class="container-fluid">

    <div class="row">





   		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pro-categories">

				<div class="row">

					@foreach($categories as $category)
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{route('category',$category->short_code)}}">
							<div class="pro-categories-box">
								<img src="{{env('APP_ADMIN_URL')}}{{$category->icon_url}}" alt="{{$category->icon_url_alt}}">
								<h3> {{$category->name}} </h3>

							</div>
						</a>
					</div>
					@endforeach











				</div>





			</div>

    </div>

  </div>

</section>
@endsection