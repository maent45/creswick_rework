$(document).ready(function() {

    //remove 'banner' link from navbar
    $('li.BannerPage').css("display", "none");

    // only show first elements onload
    $('div.services_middle_detail:first').css("display", "block");
    $('div.services_points_wrapper:first').css("display", "block");
    $('span.about_img_wrapper:first').css("display", "block");

    // services section text toggling
    $('.services_left_title').each(function () {
        var current_services_title = $(this);

        $(current_services_title).on('click', function() {
            $('.services_middle_detail').css("display", "none");
            $('.services_points_wrapper').css("display", "none");

            $('.services_middle_detail').each(function() {
                if ($(this).attr('id') == current_services_title.attr('id')) {
                    $(this).fadeIn();
                }
            });

            $('.services_points_wrapper').each(function() {
                if ($(this).attr('id') == current_services_title.attr('id')) {
                    $(this).fadeIn();
                }
            });
        });
    });

    // about section image toggling
    $('.about_info_details').each(function () {
        var current_details = $(this);

        $(current_details).on('click', function () {
            $('.about_img_wrapper').css("display", "none");

            $('.about_img_wrapper').each(function () {

                if ($(this).attr('id') == current_details.attr('id')) {
                    $(this).fadeIn();
                }
            });
        });
    });

});