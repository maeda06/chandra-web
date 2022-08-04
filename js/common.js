$( function() {
	$('.flow__contents').slick({
		centerMode: true,
		centerPadding: '25%',
		infinite: false,
		variableWidth: true,
		prevArrow: '<i class="prev-arrow fa-solid fa-square-caret-left"></i>',
		nextArrow: '<i class="next-arrow fa-solid fa-square-caret-right"></i>',
		dots: true,
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

$(function() {
	window.onload = function(){
		$(".main-area__text").addClass("visible");
		}
	// コンテンツの近くにスクロールされたら、ふんわり表示する
	$(window).scroll(function() {
	 const $winHeight = $(window).height(); // ウィンドウ画面の高さを取得
	 $(".fade-in").each(function() {
		const $scrollTop = $(window).scrollTop(); // スクロールした現在のtopの位置を取得
		const $scrollBottom = $scrollTop + $winHeight; // スクロールした現在のtopの位置にウィンドウ画面の高さを加算してbottomの位置を算出
		const $offsetTop = $(this).offset().top+300; // コンテンツの位置を取得
		console.log($scrollTop);
		console.log($scrollBottom);
		if ( $scrollBottom > $offsetTop) { // ふんわり表示させたいコンテンツにスクロールが及べば表示する
		 $(this).addClass("visible");
		}
	 });
	});
	$(window).scroll(); // 中途半端な位置でリロードされたときも、ふんわり表示する
 });