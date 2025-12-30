$(document).ready(function () {
   $("#news-slider").owlCarousel({
      items: 3,
      itemsDesktop: [1199, 2],
      itemsDesktopSmall: [980, 2],
      itemsMobile: [600, 1],
      navigation: false,
      pagination: false,
      autoPlay: true
   });
});



$(document).ready(function () {
   $("#home-blog-slider").owlCarousel({
      items: 1,
      itemsDesktop: [1199, 1],
      itemsDesktopSmall: [980, 1],
      itemsMobile: [600, 1],
      navigation: false,
      pagination: false,
      autoPlay: true
   });
}); 