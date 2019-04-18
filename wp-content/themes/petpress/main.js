$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 3,
                max: 3
            },
            height: 'auto',
            width: 300,
        },
        responsive: true,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    });
});
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
