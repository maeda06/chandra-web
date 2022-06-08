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
		slidesToShow: 4,
		infinite: false,
		//variableWidth: true,
		arrow: true,
		prevArrow: '<i class="prev-arrow fa-solid fa-circle-chevron-left"></i>',
		nextArrow: '<i class="next-arrow fa-solid fa-circle-chevron-right"></i>',
		responsive: [
			{
			  breakpoint: 521,
			  settings: {
			  slidesToShow: 1,
				centerMode: true,
			  },
			},
		  ],
	})
} )

$(function() {
  $('.hamburger').click(function() {
    $(this).toggleClass('active');
    $("section").toggleClass('blur')

    if ($(this).hasClass('active')) {
      $('.globalMenuSp').addClass('active');
    } else {
      $('.globalMenuSp').removeClass('active');
    }
  });
});