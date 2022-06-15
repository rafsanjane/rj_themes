; (function ($) {
    $(document).ready(function () {
        var slider = tns({
            container: '.slider-images',
            speed: 300,
            autoplayTimeout: 3000,
            item: 1,
            autoplay: true,
            autoHeight: true,
            controls: false,
            nav: false,
            autoplayButtonOutput: false

        });
    });

    $(document).ready(function () {
        var slider = tns({
            container: '.testimonials',
            speed: 300,
            autoplayTimeout: 3000,
            item: 1,
            autoplay: true,
            autoHeight: true,
            controls: false,
            nav: true,
            autoplayButtonOutput: false

        });
    });

    $(document).ready(function () {
        var slider = tns({
            container: '.team',
            speed: 300,
            autoplayTimeout: 3000,
            item: 2,
            autoplay: true,
            autoHeight: true,
            controls: false,
            nav: false,
            autoplayButtonOutput: false,
            slideBy: "page",
            mouseDrag: true,
            swipeAngle: false

        });
    });
})(jQuery);