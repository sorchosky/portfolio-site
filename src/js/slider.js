$(document).ready(function(){
  // Homepage -- Client Slider
  $('.client-slider').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 4000,
    infinite: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    cssEase: 'linear',
    responsive:[
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1080,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    ]
  });

  // Projects -- Main Slider
  $('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    arrows: false,
    dots: true
  });

  //Tempur-Pedic Landing Page -- Working HTML
  $('.working-examples ul').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 2000,
    centerMode: true,
    responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});
