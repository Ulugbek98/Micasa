"use strict"; var $ = jQuery;
module.exports = function($context, isRemoved){
	if(isRemoved){
		$context.find(".carousel, .slider").each(function(){
			$(this).slick('unslick');
		});
		return;
	}
	var tools = require('../tools/tools.js');
	$context.find(".slider").each(function(){
		var $this = $(this)
		$this.slick({
			autoplay: true,
			dots: false,
		});
	});
	$context.find(".carousel").each(function(){
		var $this = $(this)
		$this.slick({
			autoplay: false,
			dots: false,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
				{
					breakpoint: 1000,
					settings: {
						dots: false,
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						dots: false,
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});
}