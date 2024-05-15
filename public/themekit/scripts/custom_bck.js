/*
 * ===========================================================
 * CUSTOM.JS 
 * ===========================================================
 * This is a custom file and it's used only on this template.
 *
*/

"use strict";
(function ($) {
    $(document).ready(function () {
        var sliders = $("section.alpins-slider");
        $(sliders).on("mouseenter", ".glide__slide:not(.glide__slide--clone)", function () {
            var slider = $(this).closest("section").find(".background-slider");
            $(slider).find(" > div").addClass("remove-active").eq($(this).index()).addClass("active").removeClass("remove-active");

            setTimeout(function () {
                $(slider).find(".remove-active").removeClass("active remove-active");
            }, 800);
        });
        window.slideIndex = 0;
        showSlides();
        // var headerSlider = $(".header-slider");

        // setTimeout(() => {
        //     var headerSliderChildren = $(headerSlider).children();
        //     headerSliderChildren.forEach((a, i) => {
        //         if ($(a).hasClass('active')) {
        //             let j = (i == headerSliderChildren.length) ? 0 : i + 1;
        //             $(headerSliderChildren[j]).addClass('active');
        //             $(a).removeClass('active');
        //             return;
        //         }
        //     });
        // }, 3000);
    });

}(jQuery));

function showSlides() {
    console.log(window.slideIndex);
    let i;
    let slides = $(".section-slider > .slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    window.slideIndex++;
    if (window.slideIndex > slides.length) { window.slideIndex = 1 }
    slides[window.slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000);
}