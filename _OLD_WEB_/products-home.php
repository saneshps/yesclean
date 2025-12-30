<section id="productfeeds">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2 class="trend-product"> TRENDING PRODUCTS in CLEANING </h2>
        <div class="owl-slider">
          <div id="carousel-prod" class="owl-carousel">
            <a href="sweeper-machine.php">
              <div class="item">
                <img src="img/cleaning-machines/6.png" class="img-responsive" alt="floor cleaning machines">
                <h6 class="text-center">Sweeper Machines</h6>
              </div>
            </a>

            <a href="multi-purpose-trolleys.php">
              <div class="item">
                <img src="img/multipurpose-trolleys/op7100ar_1.png" class="img-responsive" alt="cleaning trolley">
                <h6 class="text-center"> Room attendant trolley for hotels </h6>
              </div>
            </a>
            <a href="floor-cleaning-robot.php">
              <div class="item">
                <img class="img-responsive" src="img/cleaning-machines/11.jpeg" alt="Cleaning Robots">
                <h6 class="text-center">Robotic Cleaning Machines</h6>
              </div>
            </a>
            <a href="vacuum-cleaner.php">
              <div class="item">
                <img src="img/cleaning-machines/10.png" class="img-responsive" alt="steam cleaning machines">
                <h6 class="text-center">Wet & Dry Vaccum Cleaner</h6>
              </div>
            </a>
            <a href="multi-purpose-trolleys.php">
              <div class="item">
                <img src="img/multipurpose-trolleys/op1120ar.png" class="img-responsive" alt="multi purpose trolley">
                <h6 class="text-center"> Trolley for health care </h6>
              </div>
            </a>
            <a href="single-disc-machine.php">
              <div class="item">
                <img src="img/cleaning-machines/8.png" class="img-responsive" alt="vacuum cleaner">
                <h6 class="text-center">Single Disc Machine</h6>
              </div>
            </a>
            <a href="multi-purpose-trolleys.php">
              <div class="item">
                <img src="img/multipurpose-trolleys/s0200101.png" class="img-responsive" alt="cleaning trolley">
                <h6 class="text-center"> Mopping Trolley </h6>
              </div>
            </a>

            <a href="swimming-pool-cleaning-robot.php">
              <div class="item">
                <img src="img/swimming-pool-cleaning-robot-trend.jpg" class="img-responsive" alt="swimming-pool-cleaning-robot-trend">
                <h6 class="text-center"> Swimming pool cleaning robot </h6>
              </div>
            </a>

            <a href="road-sweeper.php">
              <div class="item">
                <img src="img/sweeper-tool-carrier.jpg" class="img-responsive" alt="Sweeper Machines">
                <h6 class="text-center"> Sweeper Tool Carrier </h6>
              </div>
            </a>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

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
      320: {
        items: 2
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