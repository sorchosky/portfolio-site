var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
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

var today = new Date();
var year = today.getYear() + 1900;
document.getElementById("current-year").innerHTML = year;

var token = '1398178032.9b710e5.050f662f36674f68a390a09d472e893c',
    userid = 1398178032, // User ID - get it in source HTML of your Instagram profile
    num_photos = 20; // how much photos do you want to get
 
$.ajax({
	url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
	dataType: 'jsonp',
	type: 'GET',
	data: {access_token: token, count: num_photos},
	success: function(data){
 		console.log(data);
		for( x in data.data ){
			$('ul.image-list').append('<li class="image-list-item"><img class="image-list-item--image" src="'+data.data[x].images.standard_resolution.url+'"/></li>');

			// data.data[x].images.low_resolution.url - URL of image, 306х306
			// data.data[x].images.thumbnail.url - URL of image 150х150
			// data.data[x].images.standard_resolution.url - URL of image 612х612
			// data.data[x].link - Instagram post URL 
		}
	},
	error: function(data){
		console.log(data); // send the error notifications to console
	}
});
$.fn.scrollView = function () {
  return this.each(function () {
    $('html, body').animate({
      scrollTop: $(this).offset().top
    }, 300);
  });
}

$('#continueButton').click(function (event) {
  event.preventDefault();
  $('#works').scrollView();
});
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.visibility = "visible";
    document.getElementById("myNav").style.opacity = 1;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
	document.getElementById("myNav").style.opacity = 0;
	document.getElementById("myNav").style.visibility = "hidden";
}
window.sr = ScrollReveal();

sr.reveal('.reveal', {
	duration: 1000,
	distance: 0,
	scale: 1
	}, 
	300);

sr.reveal('.project', { duration: 1000 });

sr.reveal('.social-icons i.fa', {
	duration: 1000,
	distance: 0,
	delay: 100,
	scale: 1
	}, 
	100);

sr.reveal('.image-list', {
	duration: 1000,
	distance: 0,
	delay: 1000,
	scale: 1
	}, 
	100);