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
        items: 6,
        itemsDesktop: [1000, 6],
        itemsDesktopSmall: [980, 4],
        itemsTablet: [768, 3],
        itemsMobile: [568, 3],
        pagination: false,
        navigation: false,
        autoPlay: false,
        navigationText: ['<i class="ri-arrow-left-line"></i>', '<i class="ri-arrow-right-line"></i>']
    });
    /* icon end */
    /* tranding start   */
    $("#agro-div-box, #mining-div-box, #metal-div-box, #sea-div-box, #precious-div-box, #tre-div-gal-carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        
        itemsMobile: [568, 1.5],
        pagination: false,
        navigation: false,
        autoPlay: true,
        navigationText: ['<i class="ri-arrow-left-line"></i>', '<i class="ri-arrow-right-line"></i>']
    });

    $("#tra-div-box, #tre-div-box").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [568, 1.2],
        pagination: false,
        navigation: true,
        autoPlay: true,
        navigationText: ['<i class="ri-arrow-left-line"></i>', '<i class="ri-arrow-right-line"></i>']
    });
    $("#bus-div-box").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [568, 1.5],
        pagination: true,
        navigation: false,
        autoPlay: true,
        navigationText: ['<i class="ri-arrow-left-line"></i>', '<i class="ri-arrow-right-line"></i>']
    });

    $("#rel-div-box").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [568, 1.5],
        pagination: true,
        navigation: true,
        autoPlay: true,
        navigationText: ['<i class="ri-arrow-left-line"></i>', '<i class="ri-arrow-right-line"></i>']
    });
    /* tranding end */
    
});