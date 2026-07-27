@extends('layouts.app')
@section('meta')
<title>Gallery | YES CLEAN</title>
<meta name="keywords" content="floor cleaning machines, autonomous sweeper, road sweeper, commercial pool cleaning robot, janitor trolley, air purifier">
<meta name="description" content="We are the leading cleaning machinery suppliers in UAE, focused on hygiene solutions driven by the experience and passion.">
<!-- canonical -->
<link href="" rel="canonical">
<!--// canonical -->
@endsection

@section('content')


<!-- ====================== 
          HERO AREA END
      =======================  -->



<!-- ====================== 
          GALLERY AREA START
      =======================  -->


<!-- ====================== 
          HERO AREA END
      =======================  -->



<!-- ====================== 
          GALLERY AREA START
      =======================  -->
<section class="gallery-main-area">
    <div class="container">
        <div class="row">

            @foreach($gallery as $gal)
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="gallery-image-box">
                    <a href="#" data-toggle="modal" class="mo" data-target="#exampleModalCenter{{$gal->id}}" id="{{$gal->id}}">
                        <img src="{{env('APP_ADMIN_URL')}}{{$gal->image}}" alt="{{$gal->image_alt}}">
                        <h4>{{$gal->title}} </h4>
                    </a>


                    <div class="modal fade" id="exampleModalCenter{{$gal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gallery-popup">
                                        <div class="col-xl-7 gallery-popup-first">
                                            <div class="swiper gallerySwiper">
                                                <div class="swiper-wrapper" id="swipe-add">


                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-5 gallery-popup-second">
                                            <h3>{{$gal->title}} </h3>
                                            <!-- <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> -->
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- <h4> Lorem ipsum dolor sit amet </h4> -->
                </div>
            </div>
            @endforeach













            <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-12">
					<div class="gallery-image-box">
						<a data-fancybox="gallery" href="img/gallery/gallery-large.jpg">
							<img src="img/gallery/gallery-1.jpg" alt="gallery">
						</a>
						<h4> Lorem ipsum dolor sit amet </h4>
					</div>
				</div> -->


        </div>
    </div>
</section>

<!-- ====================== 
          GALLERY AREA END
      =======================  -->










@include('layouts.social')



<!--slider-->















@endsection
@push('scripts')

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'> </script>

<!--// fancy box -->
<!-- prodct view -->

<script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/gallery.js')}}"></script>
<script>
    $(document).ready(function() {
        //toggle the component with class accordion_body
        $(".accordion_head").click(function() {
            if ($('.accordion_body').is(':visible')) {
                $(".accordion_body").slideUp(300);
                $(".plusminus").text('+');
            }
            if ($(this).next(".accordion_body").is(':visible')) {
                $(this).next(".accordion_body").slideUp(300);
                $(this).children(".plusminus").text('+');
            } else {
                $(this).next(".accordion_body").slideDown(300);
                $(this).children(".plusminus").text('-');
            }
        });
    });
</script>
<!-- faq -->




<!-- tab -->
<script>
    // Tabs Action
    const tabLink = document.querySelectorAll(".tab-menu-link");
    const tabContent = document.querySelectorAll(".tab-bar-content");

    tabLink.forEach((item) => {
        item.addEventListener("click", activeTab);
    });

    function activeTab(item) {
        const btnTarget = item.currentTarget;
        const content = btnTarget.dataset.content;

        tabContent.forEach((item) => {
            item.classList.remove("is-active");
        });

        tabLink.forEach((item) => {
            item.classList.remove("is-active");
        });

        document.querySelector("#" + content).classList.add("is-active");
        btnTarget.classList.add("is-active");
    }
</script>
<script>
    $(document).ready(function() {
        $(".mo").click(function() {
            var id = $(this).attr("id");
            var csrf = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('gallery-load') }}",
                method: "POST",
                data: {
                    id: id,
                    _token: csrf,
                },

                success: function(data) {

                    $("#swipe-add").html(data);

                }
            });

        });
    });
</script>
@endpush