/*!
 * Siboney - Template for personal website
 * Designed and Developed by Wenmin Chen (www.wenminchen.com)
 */

//carousel

jQuery(document).ready(function($){
    $(".carousel-indicators li:first").addClass("active");
    $(".carousel-inner .item:first").addClass("active");

    $('#myCarousel').carousel({
        interval: 2000,
    });

    $('#testiCarousel').carousel({
        interval:   4000
    });
});

