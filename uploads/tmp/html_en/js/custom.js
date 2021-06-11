$(document).ready(function(){


    // stick menu
	 $(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 1);
	});


    $(".salons").owlCarousel({
        margin:10,
        dots:false,
        nav: true,
        navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    $(".banner_slider").owlCarousel({
        margin:10,
        autoplay:true,
        animateOut: 'fadeOut',
        loop:true,
        dots:false,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".offers").owlCarousel({
        margin:10,
        autoplay:true,
        dots:false,
        nav: true,
        navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $(".gallwrap").owlCarousel({
        center:true,
        items:3,
        loop:true,
        margin:10,
        dots:false,
        autoplay:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $(".testwrap").owlCarousel({
        loop:true,
    margin:10,
    nav:true,
    dots:true,
        autoplay:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

  });