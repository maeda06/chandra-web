$( function() {
    $('.flow__contents').slick({
        centerMode: true,
        centerPadding: '25%',
        infinite: false,
        variableWidth: true,
        prevArrow: '<i class="prev-arrow fa-solid fa-square-caret-left"></i>',
        nextArrow: '<i class="next-arrow fa-solid fa-square-caret-right"></i>',
    });

    $('.column__slider').slick({
        slidesToShow: 3,
        infinite: true,
        variableWidth: true,
        arrow: true,
        prevArrow: '<i class="prev-arrow fa-solid fa-circle-chevron-left"></i>',
        nextArrow: '<i class="next-arrow fa-solid fa-circle-chevron-right"></i>',
    })
} )