$('.search-bar > a').on('click', function() {
    $('.search-area').toggle(function() {
       $(this).animate({             
       }, 500);
    });
 }); 
 $('.closebtn').on('click', function() {
    $('.search-area').toggle(function() {
       $(this).animate({              
       }, 500);
    });
 });