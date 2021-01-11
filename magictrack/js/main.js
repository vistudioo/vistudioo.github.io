$(document).ready(function(){
          $('.block3 a[href^="#"], .block4 a[href^="#"]').click(function (){
        var product_id = $(this).attr("data-id");
        $('.m1-form option[data-id='+product_id+']').attr('selected', true);
    });
    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
    });


  
$('.gallery').slick({
  dots: true,
  infinite: true,
  speed: 400,
  fade: true,
  cssEase: 'linear',
    arrows:false,
     autoplay: true,
  autoplaySpeed: 4000
});

    
$('.reviews').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 976,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 659,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});  
    
    
});

