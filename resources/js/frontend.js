;(function () {
    "use strict";

    var $window, $document, $body;

    $window = $(window);
    $document = $(document);
    $body = $("body");


    /*==============================================
     Pre loader init
     ===============================================*/
    $window.on("load", function () {
        $body.imagesLoaded(function () {
            $(".tb-preloader-wave").fadeOut();
            $("#tb-preloader").delay(200).fadeOut("slow").remove();
        });
    });

})(jQuery);
