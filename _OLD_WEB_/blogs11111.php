<?php 
include("https://admin.yesclean.ae/include/config.php");
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    //$url.= $_SERVER['REQUEST_URI'];    
      
    
?>
<!DOCTYPE html>

<html lang="en">

<head>







	<title>Cleaning Products Blog | YES Clean | Dubai | UAE</title>

	<link rel="shortcut icon" href="img/favicon.png">

	<meta charset="utf-8">

	<meta name="keywords" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="To know the complete updations about cleaning machines and guidence and instuction for the usage of cleaning equipment">


     <!-- canonical -->
 <link href="https://www.yesclean.ae/blogs" rel="canonical">
      <!--// canonical -->

	

	<!--font-->

	<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



	

	

<!--***************************************-->

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/layout.css">

	<link rel="stylesheet" href="css/blogs.css">



 </head>

<body>



	

<?php $page ='blog';  include'header.php';?>	



<div class="page1" id="page1">

<!-- header -->



	

			

	<main class="main-content">

  <section class="slideshow">

    <div class="slideshow-inner">

      <div class="slides">

        <div class="slide is-active ">

          <div class="slide-content">

            <div class="caption">

              <div class="title">  BLOG</div>

              <!-- <div class="text-inn">

                <p>ECOLAB</p>

              </div>  -->

              

            </div>

          </div>

          <div class="image-container"> 

            <img src="img/blogs.png" alt="autonomous sweeper" class="image" />

          </div>

        </div>

        

	

		  

		  

		  

      </div>

      

      

    </div> 

  </section>

</main>		

			

			

			

			

			

		

	

	

	</div>

	

	

	

	

	

</div>

	

	

	<?php include('social.php');?>
	

	<!--slider-->

	

	

	







<section class="about-cont">

<div class="container-fluid">

	<div class="row">

	<div class="col-md-12 col-sm-12">


 <div class="row top">

  <!-- BLOG START -->

<?php
								
												$blog=mysqli_query($con,"select * from `blogs` order by id desc");
											
												while($blog_list=mysqli_fetch_array($blog))
												{
												?>
  

  <div class="col-md-4 col-sm-6 col-xs-12 spc">

    <a href="blog-detail/<?php echo $blog_list['slug']  ?>">

  <img src="https://admin.yesclean.ae/storage/<?php echo $blog_list['default_image']; ?>" style="width:100%">

  <div class="w3-padding-16">

  <?php echo $blog_list['title']; ?>

  </div>

  </a>

  </div>

<?php } ?>



















  

</div>

<!-- 

<div class="row top">

  <div class="col-md-6 col-sm-12">

    <iframe width="100%" height="315" src="https://www.youtube.com/embed/otSNOrceDRM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>

   <div class="col-md-6 col-sm-12">

    <iframe width="100%" height="315" src="https://www.youtube.com/embed/WwAcYeTbkG8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>

 

</div> -->

	

	

	

	</div>

	</div>

	

	</div>

</section>

























	

	









		

<!--footer-->

	<div class="page5 footer" id="footer">

<!-- footer -->

<?php include'footer.php';?>

</div>



	

	

	

	

	

	

	

	

	

	



	

	

	<script src="js/jquerypro.min.js"></script>

	<script src="js/TweenMax.min.js"></script>

	<script>

	var slideshowDuration = 4000;

var slideshow=$('.main-content .slideshow');



function slideshowSwitch(slideshow,index,auto){

  if(slideshow.data('wait')) return;



  var slides = slideshow.find('.slide');

  var pages = slideshow.find('.pagination');

  var activeSlide = slides.filter('.is-active');

  var activeSlideImage = activeSlide.find('.image-container');

  var newSlide = slides.eq(index);

  var newSlideImage = newSlide.find('.image-container');

  var newSlideContent = newSlide.find('.slide-content');

  var newSlideElements=newSlide.find('.caption > *');

  if(newSlide.is(activeSlide))return;



  newSlide.addClass('is-new');

  var timeout=slideshow.data('timeout');

  clearTimeout(timeout);

  slideshow.data('wait',true);

  var transition=slideshow.attr('data-transition');

  if(transition=='fade'){

    newSlide.css({

      display:'block',

      zIndex:2

    });

    newSlideImage.css({

      opacity:0

    });



    TweenMax.to(newSlideImage,1,{

      alpha:1,

      onComplete:function(){

        newSlide.addClass('is-active').removeClass('is-new');

        activeSlide.removeClass('is-active');

        newSlide.css({display:'',zIndex:''});

        newSlideImage.css({opacity:''});

        slideshow.find('.pagination').trigger('check');

        slideshow.data('wait',false);

        if(auto){

          timeout=setTimeout(function(){

            slideshowNext(slideshow,false,true);

          },slideshowDuration);

          slideshow.data('timeout',timeout);}}});

  } else {

    if(newSlide.index()>activeSlide.index()){

      var newSlideRight=0;

      var newSlideLeft='auto';

      var newSlideImageRight=-slideshow.width()/8;

      var newSlideImageLeft='auto';

      var newSlideImageToRight=0;

      var newSlideImageToLeft='auto';

      var newSlideContentLeft='auto';

      var newSlideContentRight=0;

      var activeSlideImageLeft=-slideshow.width()/4;

    } else {

      var newSlideRight='';

      var newSlideLeft=0;

      var newSlideImageRight='auto';

      var newSlideImageLeft=-slideshow.width()/8;

      var newSlideImageToRight='';

      var newSlideImageToLeft=0;

      var newSlideContentLeft=0;

      var newSlideContentRight='auto';

      var activeSlideImageLeft=slideshow.width()/4;

    }



    newSlide.css({

      display:'block',

      width:0,

      right:newSlideRight,

      left:newSlideLeft

      ,zIndex:2

    });



    newSlideImage.css({

      width:slideshow.width(),

      right:newSlideImageRight,

      left:newSlideImageLeft

    });



    newSlideContent.css({

      width:slideshow.width(),

      left:newSlideContentLeft,

      right:newSlideContentRight

    });



    activeSlideImage.css({

      left:0

    });



    TweenMax.set(newSlideElements,{y:20,force3D:true});

    TweenMax.to(activeSlideImage,1,{

      left:activeSlideImageLeft,

      ease:Power3.easeInOut

    });



    TweenMax.to(newSlide,1,{

      width:slideshow.width(),

      ease:Power3.easeInOut

    });



    TweenMax.to(newSlideImage,1,{

      right:newSlideImageToRight,

      left:newSlideImageToLeft,

      ease:Power3.easeInOut

    });



    TweenMax.staggerFromTo(newSlideElements,0.8,{alpha:0,y:60},{alpha:1,y:0,ease:Power3.easeOut,force3D:true,delay:0.6},0.1,function(){

      newSlide.addClass('is-active').removeClass('is-new');

      activeSlide.removeClass('is-active');

      newSlide.css({

        display:'',

        width:'',

        left:'',

        zIndex:''

      });



      newSlideImage.css({

        width:'',

        right:'',

        left:''

      });



      newSlideContent.css({

        width:'',

        left:''

      });



      newSlideElements.css({

        opacity:'',

        transform:''

      });



      activeSlideImage.css({

        left:''

      });



      slideshow.find('.pagination').trigger('check');

      slideshow.data('wait',false);

      if(auto){

        timeout=setTimeout(function(){

          slideshowNext(slideshow,false,true);

        },slideshowDuration);

        slideshow.data('timeout',timeout);

      }

    });

  }

}



function slideshowNext(slideshow,previous,auto){

  var slides=slideshow.find('.slide');

  var activeSlide=slides.filter('.is-active');

  var newSlide=null;

  if(previous){

    newSlide=activeSlide.prev('.slide');

    if(newSlide.length === 0) {

      newSlide=slides.last();

    }

  } else {

    newSlide=activeSlide.next('.slide');

    if(newSlide.length==0)

      newSlide=slides.filter('.slide').first();

  }



  slideshowSwitch(slideshow,newSlide.index(),auto);

}



function homeSlideshowParallax(){

  var scrollTop=$(window).scrollTop();

  if(scrollTop>windowHeight) return;

  var inner=slideshow.find('.slideshow-inner');

  var newHeight=windowHeight-(scrollTop/2);

  var newTop=scrollTop*0.8;



  inner.css({

    transform:'translateY('+newTop+'px)',height:newHeight

  });

}



$(document).ready(function() {

 $('.slide').addClass('is-loaded');



 $('.slideshow .arrows .arrow').on('click',function(){

  slideshowNext($(this).closest('.slideshow'),$(this).hasClass('prev'));

});



 $('.slideshow .pagination .item').on('click',function(){

  slideshowSwitch($(this).closest('.slideshow'),$(this).index());

});



 $('.slideshow .pagination').on('check',function(){

  var slideshow=$(this).closest('.slideshow');

  var pages=$(this).find('.item');

  var index=slideshow.find('.slides .is-active').index();

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



var timeout=setTimeout(function(){

  slideshowNext(slideshow,false,true);

},slideshowDuration);



slideshow.data('timeout',timeout);

});



if($('.main-content .slideshow').length > 1) {

  $(window).on('scroll',homeSlideshowParallax);

}

	</script>

	

	

	

		 <!-- sticky menu -->
     <script type="text/javascript">
    $(function(){
      var navbar = $('.header');
      $(window).scroll(function(){
        if($(window).scrollTop() <=40){
          navbar.removeClass('navbar-scroll');
        }else{
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>
  <!--// sticky menu -->

	

  <script>
	$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
</script>

<a id="back-to-top" href="#" class="back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
	





</body>

</html>