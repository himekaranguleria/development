//swap changes
(function ($) {
// adding class at headder
    $(window).bind('scroll', function () {
        var navHeight = 70;
        if ($(window).scrollTop() > navHeight) {
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }
    });
    //load more
    $(".load-items").slice(0, 3).show();
    if ($(".load-items:hidden").length === 0) {
        $("#ViewMoreListItem").fadeOut('slow');
        $('#ViewMoreListItem').removeClass('loading').html('');
    }
    $("#ViewMoreListItem").on('click', function (e) {
        e.preventDefault();
        $(".load-items:hidden").slice(0, 1).slideDown();
        if ($(".load-items:hidden").length === 0) {
            $("#ViewMoreListItem").fadeOut('slow');
        }
    });
    // block height at home page
    var highestBox = 0;
    $('.work-content').each(function () {
        if ($(this).height() > highestBox) {
            highestBox = $(this).height();
        }
    });
    $('.work-content').height(highestBox);
    // block height at blog and download page
//    $('.blog-row').each(function () {
//        var highestBox = 0;
//        $('.blog-inner', this).each(function () {
//            if ($(this).height() > highestBox) {
//                highestBox = $(this).height();
//            }
////            console.log("highestBox", highestBox, "box", $(this).height());
//        });
////        console.log("final", highestBox);
//        $('.blog-inner', this).height(highestBox);
//    });
}(jQuery));