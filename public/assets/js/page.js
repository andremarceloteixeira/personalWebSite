/*global $, jQuery, document, window, location, redirect*/
var mteixeira = function () {
    var init = function () {
        //remove  active in dropdow
        if ($('.dropdown').hasClass('open')) {
        }
        $("#header .dropdown").on("click", function() {
            $('.nav').find('.active').removeClass('active')
        });
        if ($('.img-404').length > 0) {
            $('.nav').find('.active').removeClass('active');
        }
        /*$(".project").mouseenter(function() {
            
        }).mouseleave(function() {
            
        }); */
       zoom();

    };
    var zoom = function() {
        $(".zoom").elevateZoom();
    };
    return {
        init: init,
        zoom : zoom
    };
}();

$(document).ready(function() {
    mteixeira.init();
});
