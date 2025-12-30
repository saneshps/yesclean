<?php
session_start();
unset($_SESSION['message']);
if (isset($_POST['sub'])) {



  $email = $_POST['email'];

  $mobile = $_POST['mobile'];

  $pn = $_POST['pn'];





  $header = 'MIME-Version: 1.0' . "\r\n";

  $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

  $header .= 'From: Enquiry From  YES Clean   <no-replay@yesclean.ae >' . "\r\n";

  //$header .= 'Bcc: sales@yesclean.ae' . "\r\n";

  $message = '

<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" align="center">

<tbody><tr>

<td>

  

    <table width="520" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center">

    

    

  <tbody><tr valign="top">

    <td align="center" style="padding-top:30px"><a href="https://www.yesclean.ae/" height="40" width="180" border="0" alt="Atlassian" style="display:block;color:#4c9ac9" align="middle" class="CToWUd"><img src="https://www.yesclean.ae/img/logo.png"/></a>

    </td>

    </tr>

    

    

    <tr>

    <td style="color:#cccccc;padding-top:30px" valign="top">

        <hr color="cccccc" size="1">

    </td>

    </tr>

  

  

        

  <tr>

  <td valign="top" style="padding-top:30px;font-family:Helvetica neue,Helvetica,Arial,Verdana,sans-serif;color:#205081;font-size:24px;line-height:40px;text-align:center;font-weight:bold" align="middle">

    <a style="text-decoration:none;color:#205081;font-weight:bold" target="_blank">

           

    ' . $pn . '</a>      

       

  </td>

  </tr>

  







      

 

  <tr>

  <td valign="top" align="center">

   

      <table border="0" cellspacing="0" cellpadding="0" align="center">

      <tbody><tr>

      <td align="center" style="padding-top:30px;padding-bottom:30px">

                                    

          <a  style="font-size:16px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;font-weight:none;color:#ffffff;text-decoration:none;background-color:#3572b0;border-top:11px solid #3572b0;border-bottom:11px solid #3572b0;border-left:20px solid #3572b0;border-right:20px solid #3572b0;border-radius:50px;display:inline-block;text-align:center" target="_blank">

                                        

          Mail: ' . $email . '  </a>

                                 

      </td>

      </tr>









  <tr>

  <td valign="top" align="center">

   

      <table border="0" cellspacing="0" cellpadding="0" align="center">

      <tbody><tr>

      <td align="center" style="padding-top:30px;padding-bottom:30px">

                                    

          <a  style="font-size:16px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;font-weight:none;color:#ffffff;text-decoration:none;background-color:#3572b0;border-top:11px solid #3572b0;border-bottom:11px solid #3572b0;border-left:20px solid #3572b0;border-right:20px solid #3572b0;border-radius:50px;display:inline-block;text-align:center" target="_blank">

                                        

          Phone: ' . $mobile . '  </a>

                                 

      </td>

      </tr>

      </tbody></table>

  </td>

  </tr>

  





    </tbody></table>

</td>

</tr>



    

<tr>

<td>

    <table width="520" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center">        

    <tbody><tr>

    <td style="color:#cccccc" valign="top">

        <hr color="cccccc" size="1"> 

    </td>

    </tr>           

    <tr>



    </tr>

    <tr>

    <td valign="top" style="font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;color:#707070;font-size:12px;line-height:18px;text-align:center;font-weight:none" align="center">

                Copyright by YesClean.ae

    </td>

    </tr>



    </tbody></table>

    

</td>

</tr>

</tbody></table>

';



  if (mail('sales@yesclean.ae', 'Express Interest', $message, $header)) {



    $_SESSION['message'] = "Thank you for your interest.We will get back to you shortly";
  }
}

?>



<!DOCTYPE html>

<html lang="en">





<head>









  <title>  Commercial Washing Machine & Laundry Systems,UAE|Yes Clean  </title>

  <link rel="shortcut icon" href="img/favicon.png">

  <meta charset="utf-8">

  <meta name="keywords" content="Vacuum Cleaner, Vacuum Cleaner in UAE, Vacuum Cleaner in Dubai, Wet and Dry Vacuum Cleaners, Wet and Dry Vacuum Cleaners in UAE, Wet and Dry Vacuum Cleaner">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Get top quality Commercial Washing Machine & Laundry Systems in UAE.We provide industrial washing machine for all commercial and Industrial applications">


  <!-- canonical -->
  <link href="https://www.yesclean.ae/vacuum-cleaner.php" rel="canonical">
  <!--// canonical -->


  <!--font-->

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">





  <!--News-->



  <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>



  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">



  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">

  <!--***************************************-->



  <!-- fancy box -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <!-- fancy box -->




  <!--***************************************-->

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/layout.css">


  <link rel="stylesheet" href="css/products.css">

  <!-- search box -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
  <!-- search box -->

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-206008754-1">

  </script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'UA-206008754-1');
  </script>



  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187454492-8"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'UA-187454492-8');
  </script>





</head>

<body>







  <?php $page = 'product';
  include 'header.php'; ?>



  <div class="page1" id="page1">

    <!-- header -->







    <main class="main-content">

      <section class="slideshow">

        <div class="slideshow-inner">

          <div class="slides">



            <div class="slide is-active ">

              <div class="slide-content">

                <div class="caption">

                  <div class="title"> </div>

                  <div class="text-inn">



                  </div>



                </div>

              </div>

              <div class="image-container">

                <img src="./img/washing-machine/washing-machine-banner1.jpg" alt="Washing Machines & Laundry Systems In Dubai" class="image" />

              </div>

            </div>






            <div class="slide">

              <div class="slide-content">

                <div class="caption">
                  <div class="title">
                  </div>
                  <div class="text-inn">

                  </div>
                </div>

              </div>

              <div class="image-container">

                <img src="./img/washing-machine/washing-machine-banner2.jpg" alt="Washing Machines & Laundry Systems In Dubai" class="image" />

              </div>

            </div>



            <div class="slide">

              <div class="slide-content">

                <div class="caption">
                  <div class="title">
                  </div>
                  <div class="text-inn">

                  </div>
                </div>

              </div>

              <div class="image-container">

                <img src="./img/washing-machine/washing-machine-banner3.jpg" alt="Washing Machines & Laundry Systems In Dubai" class="image" />

              </div>

            </div>

            <div class="slide">

              <div class="slide-content">

                <div class="caption">
                  <div class="title">
                  </div>
                  <div class="text-inn">

                  </div>
                </div>

              </div>

              <div class="image-container">

                <img src="./img/washing-machine/washing-machine-banner4.jpg" alt="Washing Machines & Laundry Systems In Dubai" class="image" />

              </div>

            </div>




            <div class="caption1">
              <div class="title1">
                <h1> Commercial Washing Machines & Laundry Systems </h1>
              </div>
              <div class="text-inn">
                <p> STAHL provides commercial laundry technology from commercial washing machines to dryers. </p>
              </div>
            </div>




          </div>

          <div class="pagination">

            <div class="item is-active">

              <span class="icon">1</span>

            </div>

            <div class="item">

              <span class="icon">2</span>

            </div>
            <div class="item">

              <span class="icon">3</span>

            </div>
            <div class="item">

              <span class="icon">4</span>

            </div>





          </div>

          <div class="arrows">

            <div class="arrow prev">

              <span class="svg svg-arrow-left">

                <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                  <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
                </svg>

                <span class="alt sr-only"></span>

              </span>

            </div>

            <div class="arrow next">

              <span class="svg svg-arrow-right">

                <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                  <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
                </svg>

                <span class="alt sr-only"></span>

              </span>

            </div>

          </div>

        </div>

      </section>

    </main>

















  </div>











  </div>





  <?php include('social.php'); ?>



  <!--slider-->













  <section class="about-cont">

    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <?php
          if (isset($_SESSION['message'])) { ?>
            <style>
              .alert-warning {
                color: #ffffff;
                background-color: #017ac9;
                border-color: #017ac9;
              }
            </style>

            <div class="alert alert-warning alert-dismissible" role="alert">
              <strong><?php echo $_SESSION['message'] ?>!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


          <?php  }

          ?>
        </div>
        <div class="col-md-3 col-sm-12">

          <div class="expert">

            <div class="reach">

              <h3>REACH OUR EXPERT</h3>

              <img src="img/sanub.png" class="img-responsive" style="margin: auto;">

              <h6>Sanub Rajan</h6>

              <p><a href="mailto:sales@yesclean.ae">sales@yesclean.ae</a></p>

            </div>





            <div class="intrest">



              <h3>EXPRESS INTEREST</h3>

              <form method="post">

                <input type="hidden" name="pn" id="pn">

                <div class="col-md-12 col-sm-12 padd">

                  <input type="email" name="email" placeholder="Enter Your Email id" required="">

                </div>



                <div class="col-md-12 col-sm-12 padd">

                  <input placeholder="Mobile number" name="mobile" required="">

                </div>





                <div class="col-md-12 col-sm-12 padd">

                  <input type="submit" value="SEND" name="sub">

                </div>

              </form>



              <h4>Hear from us in 24 hours</h4>

            </div>













            <!-- <div class="download">

              <h3>DOWNLOAD PDF</h3>

              <p><a href="pdf/Cleanfix_Product_Overview.pdf">

                  <i class="demo-icon icon-file-pdf">&#xf1c1;</i>

                  Cleanfix Product Overview</a></p>

            </div> -->







          </div>







        </div>



        <div class="col-md-9 col-sm-12">

          <h2 style="text-transform: uppercase;" id="product-tittle"> Commercial Washing Machines & Laundry Systems </h2>

          <p> <b> STAHL </b> provides commercial laundry technology from commercial washing machines to dryers.
          </p>


          <p> The German company found from Baden-Württemberg in 1909 and developing exclusively commercial
            laundry machine in Germany and selling them across the world.
          </p>


          <p> Stahl develops commercial laundry technology from washing machines and dryers to
            ironers and folding machines. Stahl producing for 100 years with high quality and high production depth. </p>





          <div class="row">

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-1.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-1.jpg" src="./img/washing-machine/washing-machine-1.jpg" alt="Washing Machines & Laundry Systems">
              </a>


            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-2.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-2.jpg" src="./img/washing-machine/washing-machine-2.jpg" alt="Washing Machines & Laundry Systems">
              </a>
            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-3.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-3.jpg" src="./img/washing-machine/washing-machine-3.jpg" alt="Washing Machines & Laundry Systems">
              </a>
            </div>
            <!--// 1 -->


          </div>

          <h5> Industrial Laundry Washing Machines & Industrial Washers </h5>

          <div class="pad"></div>


          <div class="row">

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-4.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-4.jpg" src="./img/washing-machine/washing-machine-4.jpg" alt="Washing Machines & Laundry Systems">
              </a>
            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-5.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-5.jpg" src="./img/washing-machine/washing-machine-5.jpg" alt="Washing Machines & Laundry Systems">
              </a>
            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-6.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-6.jpg" src="./img/washing-machine/washing-machine-6.jpg" alt="Washing Machines & Laundry Systems">
              </a>
            </div>
            <!--// 1 -->


          </div>

          <h5> Laundry Dryers & Drying Machine </h5>
          <div class="pad"></div>



          <h3> Industrial Laundry Washing Machines & Industrial Washers </h3>
          <p> STAHL develops industrial washing machine for all commercial and Industrial applications with a capacity of 5 KG to 200 KG.</p>
          <p> There are three models of Washing machines, the ATOLL, WS and DIVIMAT.
            All industrial washingmachine models are available in differentsizes and configuration.

          </p>
          <div class="row">

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-7.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-7.jpg" src="./img/washing-machine/washing-machine-7.jpg" alt="Washing Machines & Laundry Systems">
              </a>
              <p> Atoll high speed professional </p>
            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-8.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-8.jpg" src="./img/washing-machine/washing-machine-8.jpg" alt="Washing Machines & Laundry Systems">
              </a>
              <p> WS medium speed </p>
            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-9.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-9.jpg" src="./img/washing-machine/washing-machine-9.jpg" alt="Washing Machines & Laundry Systems">
              </a>
              <p> DIVMAT Hygienic </p>
            </div>
            <!--// 1 -->


          </div>




          <div class="pad"></div>

          <h3> Laundry Dryers & Drying Machine </h3>
          <p> STAHL manufactures professional drying machines for quick, thorough, and economical drying of laundry. </p>
          <p> The perfect wash is the first step of laundry but after that washing always comes drying.
            For the perfect result of laundry, it must be dried thoroughly.
          </p>
          <p> STAHL Laundry dryers have different T Series models. </p>

          <div class="row">

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-10.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-10.jpg" src="./img/washing-machine/washing-machine-10.jpg" alt="Washing Machines & Laundry Systems">
              </a>
              <p> T 232-246 Laundry dryers </p>
            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-11.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-11.jpg" src="./img/washing-machine/washing-machine-11.jpg" alt="Washing Machines & Laundry Systems">
              </a>
              <p> T 352-356 laundry dryers </p>
            </div>
            <!--// 1 -->

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-12.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-12.jpg" src="./img/washing-machine/washing-machine-12.jpg" alt="Washing Machines & Laundry Systems">
              </a>
              <p> TE 3201-7001 Eco laundry dryers </p>
            </div>
            <!--// 1 -->


          </div>

          <div class="pad"></div>



          <h3> Drying cabinet </h3>
          <p> STAHL develops TS 1300 Drying cabinets which are suitable for all types textiles and equipment’s like fire brigade clothing,
            emergency services textiles, boots, gloves, breathing mask, fire hoses, helmet,
            regulators, outdoor and hiking clothing, hiking and sports shoes, towel and bathrobes, mops, outwear and more..

          </p>
          <p> Thanks to modular design with large side openings. It offers plenty of space and it can dry more clothes simultaneously.
          </p>
          <p> It gives three temperature levels 40/60/800c . It allows easy, quick, and gentle drying for all kinds of textiles and equipment. </p>

          <div class="row">

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-13.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-13.jpg" src="./img/washing-machine/washing-machine-13.jpg" alt="Washing Machines & Laundry Systems">
              </a>
              <p> TS 1300 </p>
            </div>
            <!--// 1 -->

          </div>

          <div class="pad"></div>


          <h3> SPRAY IMPREGNATION BOOTH </h3>
          <p> STAHL develops Spray impregnation booth for the impregnation of personal protective equipment’s (PPE).
            With the several nozzles it gives 100 percent area wide impregnation from outside of clothes.
          </p>
          <p> Spray impregnation booth suitable for firefighting emergency clothing, rescue service textile and other PPE </p>


          <div class="row">

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-14.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-14.jpg" src="./img/washing-machine/washing-machine-14.jpg" alt="Washing Machines & Laundry Systems">
              </a>

            </div>
            <!--// 1 -->

          </div>

          <div class="pad"></div>


          <h3> Flatwork Ironers</h3>
          <p> STAHL provides Flatwork ironers commonly referred as rotary ironers for laundry.
            STAHL gives a wide range of laundry ironers for different requirements from simple
            laundry ironers to multi rollers and professional return feed ironers.

          </p>
          <p> STAHL is designed for a long service life. Use high quality and
            robust material and gives perfect result with minimum energy and water use. </p>


          <div class="row">

            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-15.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-15.jpg" src="./img/washing-machine/washing-machine-15.jpg" alt="Washing Machines & Laundry Systems">
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-16.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-16.jpg" src="./img/washing-machine/washing-machine-16.jpg" alt="Washing Machines & Laundry Systems">
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-17.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-17.jpg" src="./img/washing-machine/washing-machine-17.jpg" alt="Washing Machines & Laundry Systems">
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/washing-machine-18.jpg">
                <img class="lazy" data-src="./img/washing-machine/washing-machine-18.jpg" src="./img/washing-machine/washing-machine-18.jpg" alt="Washing Machines & Laundry Systems">
              </a>

            </div>
            <!--// 1 -->

          </div>

          <div class="pad"></div>

          <h3> Folding machine </h3>
          <p> STAHL provides folding machine resulting more folding being gives compared to pure manual work.
            Folding machines are used in all businesses like hotels, care homes, launderettes, retirement homes.
          </p>
          <p> The STAHL folding machine, depending on the design, gives long service life with less energy efficiency. </p>

          <div class="pad"></div>

          <h3> Disinfection sluice </h3>
          <p> STAHL develops disinfection sluice that is perfectly used for safe and hygienic cleaning of laundry trolleys and containers. </p>
          <p> STAHL disinfection is designed with two side opening doors which helps faster loading and unloading process
            and for conventional sluices with roller doors.
          </p>
          <p> Thanks to freely programmable control unit and its suitable for wide range of application.
            STAHL disinfection sluice made by stainless steel.
          </p>

          <div class="pad"></div>

          <h3> Disinfection Column </h3>
          <p> STAHL provides disinfection column ideally suited for the provision of hand disinfection in sales area, offices , guest rooms. </p>
          <p> STAHL disinfection column manufactured from powder coated aluminum convinces with its
            modern design and which is extremely durable and easy cleaning.
          </p>


          <div class="pad"></div>


          <div class="row top">

            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/COMPACT-LAUNDRY-DRYER.jpg">
                <img class="lazy" data-src="./img/washing-machine/COMPACT-LAUNDRY-DRYER.jpg" src="./img/washing-machine/COMPACT-LAUNDRY-DRYER.jpg" alt="Washing Machines & Laundry Systems">
                <p> COMPACT LAUNDRY DRYER </p>
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/DISINFECTION-SLUICE.jpg">
                <img class="lazy" data-src="./img/washing-machine/DISINFECTION-SLUICE.jpg" src="./img/washing-machine/DISINFECTION-SLUICE.jpg" alt="Washing Machines & Laundry Systems">
                <p> DISINFECTION SLUICE </p>
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/DRYING-CABINET.jpg">
                <img class="lazy" data-src="./img/washing-machine/DRYING-CABINET.jpg" src="./img/washing-machine/DRYING-CABINET.jpg" alt="Washing Machines & Laundry Systems">
                <p> DRYING CABINET </p>
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/FLATWORK-IRONER.jpg">
                <img class="lazy" data-src="./img/washing-machine/FLATWORK-IRONER.jpg" src="./img/washing-machine/FLATWORK-IRONER.jpg" alt="Washing Machines & Laundry Systems">
                <p> FLATWORK IRONER </p>
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/FOLDING-MACHINES.jpg">
                <img class="lazy" data-src="./img/washing-machine/FOLDING-MACHINES.jpg" src="./img/washing-machine/FOLDING-MACHINES.jpg" alt="Washing Machines & Laundry Systems">
                <p> FOLDING MACHINES </p>
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/TUMBLE-LAUNDY-DRYERS.jpg">
                <img class="lazy" data-src="./img/washing-machine/TUMBLE-LAUNDY-DRYERS.jpg" src="./img/washing-machine/TUMBLE-LAUNDY-DRYERS.jpg" alt="Washing Machines & Laundry Systems">
                <p> TUMBLE LAUNDY DRYERS </p>
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/WASHING-MACHINE-20.jpg">
                <img class="lazy" data-src="./img/washing-machine/WASHING-MACHINE-20.jpg" src="./img/washing-machine/WASHING-MACHINE-20.jpg" alt="Washing Machines & Laundry Systems">
                <p> WASHING MACHINE </p>
              </a>

            </div>
            <!--// 1 -->
            <!-- 1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6 laundry">
              <a data-fancybox="gallery" href="./img/washing-machine/WASHING-MACHINE-21.jpg">
                <img class="lazy" data-src="./img/washing-machine/WASHING-MACHINE-21.jpg" src="./img/washing-machine/WASHING-MACHINE-21.jpg" alt="Washing Machines & Laundry Systems">
                <p> WASHING MACHINE </p>
              </a>

            </div>
            <!--// 1 -->


          </div>



          <!-- 1 -->
          <div class="row top">

            <div class="col-md-6  col-sm-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/3LTg5bKwwfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/NqVqgGMhBh8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

          </div>
          <!-- 1 -->
          <!-- 1 -->
          <div class="row top">

            <div class="col-md-6  col-sm-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/QbGe7WXuHAY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/emwQjegSetA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

          </div>
          <!-- 1 -->
          <!-- 1 -->
          <div class="row top">

            <div class="col-md-6  col-sm-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/EGIFkScOZRA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/R9zjdG0_Ook" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

          </div>
          <!-- 1 -->
          <!-- 1 -->
          <div class="row top">

            <div class="col-md-6  col-sm-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/ucuNiUFNZuw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
          </div>
          <!-- 1 -->








        </div>

      </div>

    </div>

  </section>







































  <!--footer-->

  <div class="page5 footer" id="footer">

    <!-- footer -->

    <?php include 'footer.php'; ?>

  </div>










  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script>
    $(function() {

      var con = $('#product-tittle').html();

      //alert(con);

      $('#pn').val(con);

    });
  </script>
  <script src="">
    $('a[href*="#"]')

      // Remove links that don't actually link to anything

      .not('[href="#"]')

      .not('[href="#0"]')

      .click(function(event) {

        // On-page links

        if (

          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')

          &&

          location.hostname == this.hostname

        ) {

          // Figure out element to scroll to

          var target = $(this.hash);

          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

          // Does a scroll target exist?

          if (target.length) {

            // Only prevent default if animation is actually gonna happen

            event.preventDefault();

            $('html, body').animate({

              scrollTop: target.offset().top

            }, 1000, function() {

              // Callback after animation

              // Must change focus!

              var $target = $(target);

              $target.focus();

              if ($target.is(":focus")) { // Checking if the target was focused

                return false;

              } else {

                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable

                $target.focus(); // Set focus again

              };

            });

          }

        }

      });
  </script>







  <script src="js/jquerypro.min.js"></script>

  <script src="js/TweenMax.min.js"></script>

  <script>
    var slideshowDuration = 4000;

    var slideshow = $('.main-content .slideshow');



    function slideshowSwitch(slideshow, index, auto) {

      if (slideshow.data('wait')) return;



      var slides = slideshow.find('.slide');

      var pages = slideshow.find('.pagination');

      var activeSlide = slides.filter('.is-active');

      var activeSlideImage = activeSlide.find('.image-container');

      var newSlide = slides.eq(index);

      var newSlideImage = newSlide.find('.image-container');

      var newSlideContent = newSlide.find('.slide-content');

      var newSlideElements = newSlide.find('.caption > *');

      if (newSlide.is(activeSlide)) return;



      newSlide.addClass('is-new');

      var timeout = slideshow.data('timeout');

      clearTimeout(timeout);

      slideshow.data('wait', true);

      var transition = slideshow.attr('data-transition');

      if (transition == 'fade') {

        newSlide.css({

          display: 'block',

          zIndex: 2

        });

        newSlideImage.css({

          opacity: 0

        });



        TweenMax.to(newSlideImage, 1, {

          alpha: 1,

          onComplete: function() {

            newSlide.addClass('is-active').removeClass('is-new');

            activeSlide.removeClass('is-active');

            newSlide.css({
              display: '',
              zIndex: ''
            });

            newSlideImage.css({
              opacity: ''
            });

            slideshow.find('.pagination').trigger('check');

            slideshow.data('wait', false);

            if (auto) {

              timeout = setTimeout(function() {

                slideshowNext(slideshow, false, true);

              }, slideshowDuration);

              slideshow.data('timeout', timeout);
            }
          }
        });

      } else {

        if (newSlide.index() > activeSlide.index()) {

          var newSlideRight = 0;

          var newSlideLeft = 'auto';

          var newSlideImageRight = -slideshow.width() / 8;

          var newSlideImageLeft = 'auto';

          var newSlideImageToRight = 0;

          var newSlideImageToLeft = 'auto';

          var newSlideContentLeft = 'auto';

          var newSlideContentRight = 0;

          var activeSlideImageLeft = -slideshow.width() / 4;

        } else {

          var newSlideRight = '';

          var newSlideLeft = 0;

          var newSlideImageRight = 'auto';

          var newSlideImageLeft = -slideshow.width() / 8;

          var newSlideImageToRight = '';

          var newSlideImageToLeft = 0;

          var newSlideContentLeft = 0;

          var newSlideContentRight = 'auto';

          var activeSlideImageLeft = slideshow.width() / 4;

        }



        newSlide.css({

          display: 'block',

          width: 0,

          right: newSlideRight,

          left: newSlideLeft

            ,
          zIndex: 2

        });



        newSlideImage.css({

          width: slideshow.width(),

          right: newSlideImageRight,

          left: newSlideImageLeft

        });



        newSlideContent.css({

          width: slideshow.width(),

          left: newSlideContentLeft,

          right: newSlideContentRight

        });



        activeSlideImage.css({

          left: 0

        });



        TweenMax.set(newSlideElements, {
          y: 20,
          force3D: true
        });

        TweenMax.to(activeSlideImage, 1, {

          left: activeSlideImageLeft,

          ease: Power3.easeInOut

        });



        TweenMax.to(newSlide, 1, {

          width: slideshow.width(),

          ease: Power3.easeInOut

        });



        TweenMax.to(newSlideImage, 1, {

          right: newSlideImageToRight,

          left: newSlideImageToLeft,

          ease: Power3.easeInOut

        });



        TweenMax.staggerFromTo(newSlideElements, 0.8, {
          alpha: 0,
          y: 60
        }, {
          alpha: 1,
          y: 0,
          ease: Power3.easeOut,
          force3D: true,
          delay: 0.6
        }, 0.1, function() {

          newSlide.addClass('is-active').removeClass('is-new');

          activeSlide.removeClass('is-active');

          newSlide.css({

            display: '',

            width: '',

            left: '',

            zIndex: ''

          });



          newSlideImage.css({

            width: '',

            right: '',

            left: ''

          });



          newSlideContent.css({

            width: '',

            left: ''

          });



          newSlideElements.css({

            opacity: '',

            transform: ''

          });



          activeSlideImage.css({

            left: ''

          });



          slideshow.find('.pagination').trigger('check');

          slideshow.data('wait', false);

          if (auto) {

            timeout = setTimeout(function() {

              slideshowNext(slideshow, false, true);

            }, slideshowDuration);

            slideshow.data('timeout', timeout);

          }

        });

      }

    }



    function slideshowNext(slideshow, previous, auto) {

      var slides = slideshow.find('.slide');

      var activeSlide = slides.filter('.is-active');

      var newSlide = null;

      if (previous) {

        newSlide = activeSlide.prev('.slide');

        if (newSlide.length === 0) {

          newSlide = slides.last();

        }

      } else {

        newSlide = activeSlide.next('.slide');

        if (newSlide.length == 0)

          newSlide = slides.filter('.slide').first();

      }



      slideshowSwitch(slideshow, newSlide.index(), auto);

    }



    function homeSlideshowParallax() {

      var scrollTop = $(window).scrollTop();

      if (scrollTop > windowHeight) return;

      var inner = slideshow.find('.slideshow-inner');

      var newHeight = windowHeight - (scrollTop / 2);

      var newTop = scrollTop * 0.8;



      inner.css({

        transform: 'translateY(' + newTop + 'px)',
        height: newHeight

      });

    }



    $(document).ready(function() {

      $('.slide').addClass('is-loaded');



      $('.slideshow .arrows .arrow').on('click', function() {

        slideshowNext($(this).closest('.slideshow'), $(this).hasClass('prev'));

      });



      $('.slideshow .pagination .item').on('click', function() {

        slideshowSwitch($(this).closest('.slideshow'), $(this).index());

      });



      $('.slideshow .pagination').on('check', function() {

        var slideshow = $(this).closest('.slideshow');

        var pages = $(this).find('.item');

        var index = slideshow.find('.slides .is-active').index();

        pages.removeClass('is-active');

        pages.eq(index).addClass('is-active');

      });



      /* Lazyloading

      $('.slideshow').each(function(){

        var slideshow=$(this);

        var images=slideshow.find('.image').not('.is-loaded');

        images.on('loaded',function(){

          var image=$(this);

          var slide=image.closest('.slide');

          slide.addClass('is-loaded');

        });

      */



      var timeout = setTimeout(function() {

        slideshowNext(slideshow, false, true);

      }, slideshowDuration);



      slideshow.data('timeout', timeout);

    });



    if ($('.main-content .slideshow').length > 1) {

      $(window).on('scroll', homeSlideshowParallax);

    }
  </script>














  <!-- sticky menu -->
  <script type="text/javascript">
    $(function() {
      var navbar = $('.header');
      $(window).scroll(function() {
        if ($(window).scrollTop() <= 40) {
          navbar.removeClass('navbar-scroll');
        } else {
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>
  <!--// sticky menu -->



  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function() {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });
    });
  </script>

  <a id="back-to-top" href="#" class="back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>


  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>




</body>

</html>