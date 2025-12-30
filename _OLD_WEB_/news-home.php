<?php 
include("include/config.php");
?>
	<section id="newsfeeds">

	  <div class="container-fluid">



	    <div class="row">





	      <div class="col-md-8 col-sm-12">

	        <h2>News</h2>





	        <div class="owl-slider">

	          <div id="carousel" class="owl-carousel">







	            <a href="#" target="blank">
	              <div class="item">

	                <div class="container">

	                  <div class="column">

	                    <div class="min">

	                      <div class="ico">

	                        <img src="img/news/icon.png" alt="Yes Clean Logo">

	                      </div>

	                      <div class="hed">

	                        <h3>Yes Clean<span class="date">02th July 2020</span></h3>

	                        <p>Dubai, United Arab Emirates - UAE</p>

	                      </div>

	                    </div>

	                    <img src="img/news/news-2.png" alt="yes clean CEO message">

	                    <div class="min">

	                      <div class="li">

	                        <h3 class="like"><i class="demo-icon icon-thumbs-up-alt">&#xf164;</i> 13 likes</h3>

	                      </div>

	                      <div class="hedsc">

	                        <p>Basanth Raghavan of YES Machinery, comments on the launch of their partner's, Cleanfix Reinigungssyteme AG., fully #autonomous cleaning robot NAVI XL in the UAE!</p>

	                        <p class="red">Read more on <img class="linked" src="img/linked-in.png" alt="linkedin logo"></p>



	                      </div>



	                    </div>



	                  </div>



	                </div>

	              </div>

	            </a>





	            <a href="#" target="blank">
	              <div class="item">

	                <div class="container">

	                  <div class="column">

	                    <div class="min">

	                      <div class="ico">

	                        <img src="img/news/icon.png" alt="Yes Clean Logo">

	                      </div>

	                      <div class="hed">

	                        <h3>Yes Clean <span class="date">25th June 2020</span></h3>

	                        <p>Dubai, United Arab Emirates - UAE</p>

	                      </div>

	                    </div>

	                    <img src="img/news/news-1.png" alt="yes clean CEO message">

	                    <div class="min">

	                      <div class="li">

	                        <h3 class="like"><i class="demo-icon icon-thumbs-up-alt">&#xf164;</i> 15 likes</h3>

	                      </div>

	                      <div class="hedsc">



	                        <p>Basanth Raghavan of YES Machinery, comments on the launch of their partner's, Cleanfix Reinigungssyteme AG., fully #autonomous cleaning robot NAVI XL in the UAE!</p>

	                        <p class="red">Read more on <img class="linked" src="img/linked-in.png" alt="linkedin logo"></p>



	                      </div>



	                    </div>



	                  </div>





	                </div>

	              </div>

	            </a>



	          </div>



	        </div>





































	        <div class="col-md-12">

	          <a href="#">
	            <div class="read">

	              view all<i class="demo-icon icon-right-open-mini">&#xe809;</i>

	            </div>
	          </a>

	        </div>



	      </div>

	      <div class="col-md-4 col-sm-12">



	        <h2 class="bog">Latest Blog</h2>







	        <div class="w3-content w3-display-container">

	          <div class="full-vi">
			  
			  <?php
								
												$blog=mysqli_query($con,"select * from `blogs` order by id desc");
											
												while($blog_list=mysqli_fetch_array($blog))
												{
												?>

	            <div class="w3-display-container mySlides">

	              <a href="blog-detail/<?php echo $blog_list['slug']  ?>">

	                <img src="https://admin.yesclean.ae/storage/<?php echo $blog_list['default_image']; ?>" alt="<?php echo  $blog_list['alt']?>" style="width:100%">

	                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">

	                   <?php echo $blog_list['title']; ?>


	                </div>

	              </a>

	            </div>


<?php } ?>


	            



	          



	            



	           



	          </div>

	          <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>

	          <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>



	        </div>





	        <script>
	          var slideIndex = 1;

	          showDivs(slideIndex);



	          function plusDivs(n) {

	            showDivs(slideIndex += n);

	          }



	          function showDivs(n) {

	            var i;

	            var x = document.getElementsByClassName("mySlides");

	            if (n > x.length) {
	              slideIndex = 1
	            }

	            if (n < 1) {
	              slideIndex = x.length
	            }

	            for (i = 0; i < x.length; i++) {

	              x[i].style.display = "none";

	            }

	            x[slideIndex - 1].style.display = "block";

	          }
	        </script>







	        <div class="col-md-12 bolgsd">

	          <a href="blogs">
	            <div class="read">

	              view all<i class="demo-icon icon-right-open-mini">&#xe809;</i>

	            </div>
	          </a>

	        </div>





	      </div>











	    </div>







	  </div>

	</section>







	<script src="js/jquery.min.js"></script>

	<script src="js/owl.carousel.min.js"></script>



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