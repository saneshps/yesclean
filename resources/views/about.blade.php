@extends('layouts.app')
@section('meta')
<title>Commercial & Industrial Cleaning Equipment Supplier,UAE|YES Clean</title>
<meta name="keywords" content="floor cleaning machines, autonomous sweeper, road sweeper, commercial pool cleaning robot, janitor trolley, air purifier">
<meta name="description" content="Get the top quality cleaning equipments from Commercial & Industrial Cleaning Equipments in UAE with superior quality,great customer support at best prices">
<!-- canonical -->
<link href="{{ route('our-story') }}" rel="canonical">
<!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/about.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/yesclean.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush
@section('content')
<!-- ====================== 
          HEADER AREA END
      =======================  -->



<!-- ====================== 
          HERO AREA START
      =======================  -->
<section class="about-main-area">
    <div class="container">
        <img src="{{asset('frontend/img/gallery-hero.jpg')}}" alt="gallery">
    </div>
</section>

<!-- ====================== 
          HERO AREA END
      =======================  -->

<!-- ====================== 
             ABOUT AREA START
         =======================  -->
<section class="about-page-area">
    <div class="container">
        <div class="row">
            <div class="about-box">
                <img src="{{asset('frontend/img/about/about-1.jpg')}}" alt="about">
                <h1> About Us </h1>
                <h5> Your perfect Cleaning partner. </h5>
                <p> You are at the right spot to find high-quality and professional commercial cleaning machinery and
                    hygiene products in the UAE region. One-stop solution for your cleaning requirements from cleaning
                    machines, it’s spare parts, accessories, and other hygiene products. The main specialty of YES Clean
                    is its perfect and incomparable high-quality after-sales support in the industry. </p>

                <p> Our talented and well-trained technicians are always happy to help to maintain and protect your
                    cleaning machines and also thereby protect your investment. We bring quality cleaning products into
                    the market of UAE for a healthier and cleaner future. We have the best stock of floor-cleaning machines,
                    <a href="{{route('category','swimming-pool-cleaning-robot')}}" style='font-weight:700'>swimming pool cleaning machines</a>, carpet-cleaning machines, wet and dry vacuum cleaners, etc.
                </p>

                <p> YES Clean is one of the professional and most trusted cleaning machinery and hygiene products
                    suppliers in UAE. We got a diverse portfolio of high-quality cleaning machines and highly experienced professionals. And we strive to meet all the demands of our clients in
                    various industries for cleaning equipment. </p>

                <p> We have a stock of an immense range of the world’s top branded cleaning machines and hygiene products. We deliver affordable machinery with unrivaled customer
                    service and product quality. As a customer-centric company, we deliver our products and services in the most convenient way to our clients. </p>

                <p> Our objective is to avail of the most innovative productive and durable cleaning machines and equipment in the Middle East market with perfect after-sale support. The
                    machines we supply are manufactured and designed to enhance efficiency and speed. Also to reduce the impact on indoor environments and total cost with greater
                    profitability for your organization.</p>

                <p> Over the years we have partnered with cleaning contractors, cleaning services providers, in-house cleaning professionals, facility management companies, and operation
                    & maintenance contractors to provide cleaning solutions. This has helped to create a safe, clean, and healthy environment for industrial, commercial, and residential areas
                    with innovative cleaning technology. </p>

                <p> We have adopted innovative cleaning technology which is developed to reduce the cost and minimize the impact of cleaning on both indoor and outdoor environments.
                    We have selected our products, suppliers, and manufacturers with the utmost care by keeping quality and efficiency in mind.</p>

                <p> We have a wide range of products from scrubbers, driers, sweepers, janitorial supplies, vacuum cleaners, spare parts, accessories, and more. As leading suppliers and
                    distributors, we never compromise on the quality of our products and services. You are always welcome to Yes Clean to experience the best Floor Cleaning Machine, Carpet
                    Cleaning Machine, swimming pool cleaning Machine, <a href="{{route('category','wet-and-dry-vacuum-cleaner')}}" style='font-weight:700'>Wet and Dry Vacuum Cleaners</a>, and more.

                </p>
            </div>
        </div>
    </div>
</section>

<!-- ====================== 
             ABOUT AREA END
         =======================  -->

<!-- ============================= 
             WHY CHOOSE US AREA START
         ==============================  -->

<section class="why-choose-us-area">
    <div class="container">
        <h2> Why Choose Us </h2>
        <div class="row">


            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="why-choose-us-boxes">
                    <h3> <img src="{{asset('frontend/img/innovative.png')}}" alt="innovative"> Innovative and top-notch technology </h3>
                    <p> We are your cleaning solution partner that provides the most innovative and technologically
                        advanced cleaning solutions for both domestic and commercial. We are focused on providing
                        an updated version of all machinery and other cleaning solution, so that it can provide
                        better outcomes and will help you in greater productivity.

                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="why-choose-us-boxes">
                    <h3> <img src="{{asset('frontend/img/one-stop-solution.png')}}" alt="One stop solution"> One stop solution </h3>
                    <p> A one-stop shop for all your cleaning problems. We help you to keep your working environment clean and pleasant.
                        And enhance the health and working condition of the employees, thereby increasing productivity and profitability.
                        Yes Clean is a comprehensive cleaning products distributor in UAE that delivers comprehensive solutions for
                        all your cleaning materials, equipment, and machine needs.


                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="why-choose-us-boxes">
                    <h3> <img src="{{asset('frontend/img/Affordable.png')}}" alt="Affordable"> Affordable </h3>
                    <p>Yes Clean is one of the leading cleaning machinery suppliers in UAE that can provide premium
                        cleaning machinery at an affordable price. We provide the best machine from the worlds
                        leading brand at a reasonable price. Because we want you to know that only a quality
                        cleaning product can make your workplace or living place clean and healthy.
                        Since everyone deserves to enjoy this quality environment, we are introducing the best
                        quality product at an affordable price.


                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="why-choose-us-boxes">
                    <h3> <img src="{{asset('frontend/img/After-sales-service.png')}}" alt="After-sales service"> After-sales service </h3>
                    <p> We always like to take the name for the best after-sales service. We always like to keep a good
                        relationship with our clients since we offer incomparable after-sales service and clients
                        can contact us any time regarding the product and services.


                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="why-choose-us-boxes">
                    <h3> <img src="{{asset('frontend/img/support.png')}}" alt="24/7 customer support"> 24/7 customer support </h3>
                    <p> Our dedicated customer support team and talented technician teams are always happy to help and
                        can provide quick and efficient responses. Our support team is trained to provide on-time quality service.
                        They work around the clock to deliver possible solutions to solve the issue immediately.


                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="why-choose-us-boxes">
                    <h3> <img src="{{asset('frontend/img/Quality-Tested.png')}}" alt="Quality Tested"> Quality Tested </h3>
                    <p> There is no product that goes out of the warehouse without rigorous quality tests.
                        We deliver top-notch quality cleaning products after all quality tests and this
                        has made us one of the most trusted and preferred cleaning machine dealers in UAE.


                    </p>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ============================= 
             WHY CHOOSE US AREA END
         ==============================  -->

<!-- ============================= 
             VALUES AREA START
         ==============================  -->
<section class="values-area">
    <div class="container">
        <h2> Values </h2>
        <div class="row">
            <div class="col-xl-12 value-box">

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="values-boxes">
                        <img src="{{asset('frontend/img/top-brand.png')}}" alt="Top Brands">
                        <h3> Top Brands </h3>
                        <p> Representing the global markets leaders, bringing the best to the region </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="values-boxes">
                        <img src="{{asset('frontend/img/product-expert.png')}}" alt="Product Experts">
                        <h3> Product Experts </h3>
                        <p> Factory trained Professionals, with in depth knowledge & application skills </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="values-boxes">
                        <img src="{{asset('frontend/img/demo-center.png')}}" alt="Demo Center">
                        <h3> Demo Center </h3>
                        <p> Come, see, try and like it at our Demo Center. Test to your satisfaction </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="values-boxes">
                        <img src="{{asset('frontend/img/trained-technicians.png')}}" alt="Trained Technicians">
                        <h3> Trained Technicians </h3>
                        <p> Available to provide fast & superior solutions on call. Comprehensive Service
                            Provider </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- ============================= 
             VALUES AREA END
         ==============================  -->

<!--==============================
             brands -area-Strat 
 ===============================-->
@if(count($clients) > 0)
<section class="brands component">
    <div class="container">
        <!-- title-area-center Start -->
        <div class="title-area-center text-center pb-4 brand">
            <h2> Our Clients </h2>

        </div>
        <!-- title-area-center End -->
        <div class="logo-slider">


            @foreach($clients as $client)
            <div class="item">
                <a>
                    <img src="{{env('APP_ADMIN_URL')}}{{$client->logo_url}}" loading="lazy" alt="{{$client->company}}">
                </a>
            </div>
            @endforeach






        </div>
    </div>
</section>
@endif
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

@endpush