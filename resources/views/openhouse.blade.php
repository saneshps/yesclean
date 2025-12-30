@extends('layouts.app')
@section('meta')
<title>Register on OpenHouse, UAE|YES Clean</title>
<meta name="keywords" content="autonomous sweeper, floor cleaning robot, road sweeper, floor cleaning machines, swimming pool cleaning robot, cleaning trolley, air purifier ">
<meta name="description" content="Buy Top quality Commercial & Professional Cleaning Machinery in UAE from wide range of industrial cleaning machinery suiting your need.">
<!-- canonical -->
<link href="" rel="canonical">
<!--// canonical -->
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}">
@endpush
@section('content')
<div class="page5" id="page1">
    <!-- header -->
    <div id="contact-banner" class="open-house-banner"></div>
    <!-- <div class="catpion">
        <h1>Register On Open House</h1>
    </div> -->
    <!--slider-->
</div>
@include('layouts.social')

<section id="contact-content" class="open-house-content ">
    <div class="open-house">
        <h1>Register On Open House</h1>
    </div>
    <div class="container-fluid">

        <div class="row pt-5 m-2">
            <div class="col-lg-6 col-md-12 col-sm-6 up">
                <p>On the advent of YES Clean crusading on to her 3rd year, let us take a moment to convey my appreciation for all the support and patronage you have expended to our humble organization.</p>

                <p>As you know, we love Machines and the techno-innovations associated with it. The world class brands we represent eminently showcases this passion of ours and we know that you too share the same fondness.</p>

                <p>Our machines poses various possibilities and to unfold these fascinations to you, we are organizing a 3 day long Open House at our <b>Demo Center in Sharjah</b>, from <b>Feb 21 to Feb 23, 2024.</b></p>

                <p>Apart from witnessing the captivating live demos & presentations on the latest technologies, we intend to offer a great opportunity to network amongst your peers from the Industry, over a beautiful lunch. Not to miss are the special deals on the machines displayed.</p>

                <p>Amidst our preparations to meet all your expectations, on behalf of the entire YES Clean team I hereby invite you to join us and make this event more auspicious & a rewarding experience.</p>

                <p> Expecting your much esteemed presence.</p>


                <h3> What to expect?</h3>
                <ul>
                    <li>Machines & Possibilities</li>
                    <li>Innovative Technologies</li>
                    <li>Live Demos</li>
                    <li>Keynote Presentations</li>
                    <li>Manufacturer's Prescence</li>
                    <li>Industrial Networking</li>
                    <li>Business Lunch & Refreshments</li>
                </ul>

                <p>Above all</p>
                <h4> WE GUARANTEE A GOOD TIME !!</h4>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-6">

                <section id="contact-form">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Fill the below form to register</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="row form-horizontal open-house-form" id="frmregisteroh" name="frmregisteroh" method="POST">

                                    <input type="hidden" name="subject" value="Register on Open House 2024" />

                                    <div class="col-md-6 form-group">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">

                                    </div>

                                    <div class="col-md-12 form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">

                                    </div>

                                    <div class="col-md-12 form-group">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <i class="fas fa-building"></i>
                                        <input type="text" class="form-control" name="company" id="company" placeholder="Company Name">

                                    </div>
                                    <div class="col-md-12 form-group">
                                        <h3>Expected Dates to Visit :</h3>
                                    </div>
                                    <div class="col-md-4 form-group date-visit">
                                        <input type="checkbox" name="ohdate[]" id="firstday" value="2024-02-21" class="mr-3">
                                        <label for="firstday">21/02/2024</label>
                                    </div>
                                    <div class="col-md-4 form-group date-visit">
                                        <input type="checkbox" name="ohdate[]" id="secday" value="2024-02-22" class="mr-3">
                                        <label for="secday">22/02/2024</label>
                                    </div>
                                    <div class="col-md-4 form-group date-visit">
                                        <input type="checkbox" name="ohdate[]" id="thirdday" value="2024-02-23" class="mr-3">
                                        <label for="thirdday">23/02/2024</label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <i class="fas fa-cog"></i>
                                        <input type="number" class="form-control" name="participants" id="participants" placeholder="No of Participants">
                                    </div>
                                    <div class="col-md-12 open-submit demo-submit">
                                        <button class="btn btn-primary" data="trigger" id="submit" name="reg-oh"> <span> Submit </span>
                                        </button>
                                        <p id="submit-msg"></p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {


        var loading = false;
        $('#frmregisteroh').on('submit', function(e) {
            e.preventDefault();
            loading = true;
        });

    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // SERVICE REQUESTS
    if ($("#frmregisteroh").length > 0) {
        $("#frmregisteroh").validate({
            rules: {
                firstname: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                },
                company: {
                    required: true,
                    maxlength: 50
                },
                participants: {
                    required: true
                }
            },
            messages: {
                firstname: {
                    required: "Please enter name",
                    maxlength: "Your name maxlength should be 50 characters long."
                },
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
                company: {
                    required: "Please enter company",
                    maxlength: "Your name maxlength should be 50 characters long."
                },
                participants: {
                    required: "Please enter no of participants"
                }
            },
            submitHandler: function(form) {

                $('#submit').html('Please Wait...');
                $("#submit").attr("disabled", true);
                $.ajax({
                    url: "{{route('registerevents')}}",
                    type: "POST",
                    data: $('#frmregisteroh').serialize(),
                    success: function(response) {

                        $('#submit').html('Submit');
                        $("#submit").attr("disabled", false);
                        // $('#submit-msg').html(response.message).css('display', 'block').delay(5000).fadeOut('slow');
                        document.getElementById("frmregisteroh").reset();

                        alert("You are registered successfully !!");
                    }
                });
            }
        })
    }
</script>



@endpush