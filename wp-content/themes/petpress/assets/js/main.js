
$(window).load(function () {
	$('.carousel1').carouFredSel({
		auto: false,
		prev: '.prev',
		next: '.next',
		width: 960,
		items: {
			visible: {
				min: 3,
				max: 3
			},
			height: 'auto',
			width: 300,
		},
		responsive: true,
		scroll: 1,
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
		}
	});
});
