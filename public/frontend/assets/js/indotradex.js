$(document).ready(function (e) {
    /* active start */
    $("#tabs-lnk > li > a").click(function (e) {
            $("#tabs-lnk > li > a").removeClass('active');
            $(this).addClass('active');
    });
    $(".pro-link-box").hover(function (e) {
        $(".pro-link-box").removeClass('active');
            $(this).addClass('active');
    });

    $(".label > input[type='checkbox']").click(function (e) {
        $(this).toggleClass('active');
    })
    /* active end */
    /* mobile menu start */
    $("#menu-icon").click(function() {
        $('.nav-div').toggleClass('active');
    });
    $("#agro-div-filter-mobile").click(function() {
        $('.filter-div').addClass('active');
    });
    $(".filter-close").click(function() {
        $('.filter-div').removeClass('active');
    });
    $(".profile-menu").click(function() {
        $(".profile-navbar").addClass('active');
    });

    $(".profile-close").click(function() {
        $(".profile-navbar").removeClass('active');
    });

    /* mobile menu end */
    /* password eye start */
    $(".password-icn").click(function(e) {
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
          $(this).addClass('ri-eye-line').removeClass('ri-eye-off-line');
        } else {
          input.attr("type", "password");
          $(this).removeClass('ri-eye-line').addClass('ri-eye-off-line');
        }
    });
    /* password eye end */

    /* icon start */
    $("#pro-link-div").owlCarousel({
        pagination: false,
        autoPlay: true,
        responsiveClass:true,
            responsive:{
                0:{
                    items:3,
                    nav:true
                },
                768:{
                    items:4,
                    nav:false
                },
                991:{
                    items:5,
                    nav:false,
                },
                1200:{
                    items:6,
                    nav:false,
                }
        }
    });
    /* icon end */
    /* tranding start   */
    $("#agro-div-box, #mining-div-box, #metal-div-box, #sea-div-box, #precious-div-box, #tre-div-gal-carousel").owlCarousel({
        loop: true,
        autoPlay: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1.4,
                nav:false
            },
            768:{
                items:2,
                nav:false
            },
            991:{
                items:3,
                nav:false
            },
            1200:{
                items:4,
                nav:false
            }
        }
    });

    $("#tra-div-box, #tre-div-box").owlCarousel({
        pagination: false,
        loop: true,
        autoPlay: true,
        navText: ['<i class="ri-arrow-left-line"></i>','<i class="ri-arrow-right-line"></i>'],
        responsive:{
            0:{
                items:1.4,
                nav:true
            },
            768:{
                items:3,
                nav:true
            },
            991:{
                items:3,
                nav:true
            },
            1200:{
                items:3,
                nav:true
            }
        }
    });
    $("#bus-div-box").owlCarousel({
        responsive:{
            0:{
                items:1.4,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            991:{
                items:3,
                nav:false,
            },
            1200:{
                items:3,
                nav:false,
            }
        },
        loop: true,
        pagination: true,
        center: true,
        Infinity: true,
        autoPlay: true
    });

    $("#rel-div-box").owlCarousel({
        responsive:{
            0:{
                items:1.5,
                nav:true
            },
            768:{
                items:3,
                nav:false
            },
            991:{
                items:3,
                nav:false,
            },
            1200:{
                items:3,
                nav:false,
            }
        },
        pagination: true,
        loop: true,
        Infinity: true,
        autoPlay: true
    });
    /* tranding end */
    
});