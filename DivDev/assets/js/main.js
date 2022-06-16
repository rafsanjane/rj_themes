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
            fixedWidth: 350,
            speed: 300,
            autoplayTimeout: 3000,
            item: 1,
            autoplay: true,
            autoHeight: true,
            controls: false,
            nav: false,
            autoplayButtonOutput: false,

            mouseDrag: true,
            swipeAngle: false

        });
    });
})(jQuery);