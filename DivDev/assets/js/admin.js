; (function ($) {
    $(document).ready(function () {
        $("#post-formats-select .post-format").on("click", function () {
            if ($(this).attr("id") == "post-format-image") {
                $("#_divdev_image_information").show();
            } else {
                $("#_divdev_image_information").hide();
            }
        });
        if (divdev_pf.format != "image") {
            $("#_divdev_image_information").hide();
        }
    });
})(jQuery);