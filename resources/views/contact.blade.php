@extends('layouts.app')
@section('meta')
<title>Cleaning Machinery Supplier,UAE|Contact US|YES Clean</title>
<meta name="keywords" content="autonomous sweeper, floor cleaning robot, road sweeper, floor cleaning machines, swimming pool cleaning robot, cleaning trolley, air purifier ">
<meta name="description" content="YES Clean Provides The best quality leading floor cleaning machine, sweeper vacuum robot, and floor cleaning machinery in UAE. Get In Touch With us to explore our products Just call|+971 65264382">
<!-- canonical -->
<link href="{{ route('contact') }}" rel="canonical">
  <!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}">
@endpush
@section('content')
<div class="page5" id="page1">
    <!-- header -->

    <div id="contact-banner">

    </div>

    <div class="catpion">
        <h1>Contact Us</h1>
    </div>









    <!---->
    <!--slider-->
</div>
</div>


</div>





</div>


@include('layouts.social')

<!--slider-->


<section id="contact-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 text-center mx-auto">
                <h3>Our Locations</h3>
                <p>If you would like to find out more about how Yes Machinery can help your business, we will be more than happy to speak with you and set up a meeting to identify your requirement and provide you our proposal</p>

            </div>
        </div>

        <div class="row pt-5">
            <div class="col-lg-5 col-md-5 col-sm-6 up text-center">
                <div class="">
                    <div class="col-md-12 pb-5">
                        <h4>REGISTERED COMPANY NAME &amp; ADDRESS:</h4>
                        <p>YORK ENGINEERING SOLUTIONS FZC </p>
                        <p>P O Box: 42167, OFFICE NO.: LV 27-D HAMRIYAH FREE ZONE PHASE 2 <br> | SHARJAH | UAE</p>
                        <!-- 	<h5><span>TEL :</span> +971 6 5264382 </h5>
               <h5><span>MOB :</span> +971 50 8993781 </h5>
               <h5><span>FAX :</span>+971 6 5264384 </h5>
               <p>Mail : <a href="mailto:sales@yesmachinery.ae"><span>sales@yesmachinery.ae</span></a></p>
-->
                    </div>



                    <div class="col-md-12 col-sm-12 up">

                        <div class="ic-con col-lg-6 col-md-12 cnt-i">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3> Tel</h3>
                            
                            <h5> <a href="tel:+97165264382">+971 6 526 4382</a></h5>
                        </div>
                        <div class="ic-con col-lg-6 col-md-12 cnt-i">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <h3>Mob</h3>
                            <h5> <a href="tel:+971542791581">+971 54 279 1581</a></h5>
                        </div>
                        <div class="ic-con col-lg-6 col-md-12 cnt-i">
                            <i class="fa fa-fax" aria-hidden="true"></i>
                            <h3>Fax</h3>
                            <h5> <a href="fax:+97165264384 "> + 971 6 5264384 </a> </h5>
                        </div>
                        <div class="ic-con col-lg-6 col-md-12 cnt-i">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h3>E-mail</h3>
                            <h5><a href="mailto:sales@yesclean.ae"><span>sales@yesclean.ae</span></a></h5>
                            <h5>
                            </h5>
                        </div>

                    </div>



                </div>


            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">

                <section id="contact-form">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Quick Enquiry</h2>
                                <p>Brief us your requirements below, and let's connect</p>

                            </div>
                        </div>



                      <div class="row">
                            <div class="col-md-12">
                              
                                <form class="form-horizontal" action="{{route('mail')}}" method="post">
                                    @csrf
                                     <div class="error_contact_msg"></div>
									 @error('name')
						                <p style="color:red;background:white">{{ $message }}</p>
						             @enderror
						             @error('email')
							            <p style="color:red;background:white">{{ $message }}</p>
						             @enderror
						             @error('phone')
							           <p style="color:red;background:white">{{ $message }}</p>
						             @enderror
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" id="name" pattern=".*\S+.*" name="name" placeholder="Name." required="">
                                           
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <input type="email" id="email" pattern=".*\S+.*" name="email" placeholder="E-mail.." required="">
                                        </div>


                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" id="phone" pattern=".*\S+.*" name="phone" placeholder="Mobile.." required="">
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" id="subject" pattern=".*\S+.*" name="subject" placeholder="Subjects..">
                                        </div>

                                        <div class="col-md-12">

                                            <textarea id="message" name="message" pattern=".*\S+.*" placeholder="Message" style="height:200px" required=""></textarea>
                                        </div>
										<div class="col-md-12">
											<div class="row">
											<div class="col-md-12 d-flex mb-3">    
											<div id="captcha_1" class="captcha-div"></div>
											<a href="javascript:void(0);" onclick="refreshCaptcha();" class="ml-2" style="color:#999;" title="Refresh Captcha"> <i class="fa fa-refresh" aria-hidden="true" style="font-size: 19px;padding-top: 13px;"></i></a>
											</div>
											<div class="col-md-12 d-flex mb-3"> 
											<input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_1" />
											</div>
											</div>
										</div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn5" data-id="1" value="Send mail" name="subc">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>



                </section>

            </div>


        </div>
    </div>

</section>
@endsection
@push('scripts')
<script type="text/javascript">
$(".btn5").click(function(e) {
  var data_id = $(this).attr("data-id");
  let text_code = $('#cpatchaTextBox_' + data_id).val();
  if (text_code) {
					if (!validateCaptcha(text_code)) {
					  $('.error_contact_msg').hide();
					  $('.error_contact_msg').removeClass('alert alert-danger').html(" "); 	
					  $('.error_contact_msg').show();
					  $('.error_contact_msg').addClass('alert alert-danger').html("<h6 style='color: #d30a0a;'>No Captcha</h6>");
					  $('#cpatchaTextBox_' + data_id).val("")
					  return false;
					} else {
						$(this).submit();
					}	
				  } else {
						$('.error_contact_msg').show();
						$('.error_contact_msg').addClass('alert alert-danger').html("<h6 style='color: #d30a0a;'>Captcha is invalid</h6>");
								
						return false;
				  }
});  
 
</script>
@endpush
