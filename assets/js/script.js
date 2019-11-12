// JavaScript Document
$(document).ready(function() {
	_route();
	var d = $('.header');
	d.scrollToFixed({
		zIndex: 999
	});
	
	var vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', '${vh}px');
	
	$(window).scroll(function () {
		scroll = $(window).scrollTop();
			if (scroll >= 80) d.addClass('smheader');
			else d.removeClass('smheader');
	});

    $(".menu_icon").click(function(e){
		e.preventDefault();
		$(".menu").fadeToggle(700);
		$(".menu").toggleClass("open");
	});
	
	$('.scroll_click').on("click",function(){
        $(".menu").fadeToggle(700);
		$(".menu").toggleClass("open");
    })
	
	
	
	var $animation_elements = $('.-js_anime');
	var $window = $(window);
	
	function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);
		
		$.each($animation_elements, function() {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = (element_top_position + element_height);
			
			if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
				$element.addClass('in-view');
			} else {
				$element.removeClass('in-view');
			}
		});
	}
	
	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
	
	
	
	
	
		
	$("body").delegate(".ic", "click", function (e) {
		e.stopPropagation();
		var c = $(this).parents(".faq_hld"),
			m = c.find('.faq_det');
		$(".faq_hld .faq_det").not(m).slideUp(1000);
		m.slideToggle(1000);
		$(this).find(".sp-1").toggleClass('sh');
        $(this).find(".sp-2").toggleClass('sh');
	});
	
	
	$("body").delegate(".ic", "click", function (e) {
		e.stopPropagation();
		var c = $(this).parents(".car_wrap"),
			m = c.find('.car_det');
		$(".car_wrap .car_det").not(m).slideUp(1000);
		m.slideToggle(1000);
	});
	
	
	$("#all").click(function(e) {
		e.preventDefault();
		
		$(".news_wrap").css("margin","0");
		
		$(".news_wrap:nth-child(3n)").css("margin-left","5%");
		$(".news_wrap:nth-child(3n-1)").css("margin-left","5%");
		
		var category = $(this).attr("id");
		if(category == "all"){
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.news_wrap').removeClass('hide');
			}, 300);
			
		} else {
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.' + category).removeClass('hide');
			}, 300);
		

		}
	});
	
	
	
	$("#blog").click(function(e) {
		e.preventDefault();

		var category = $(this).attr("id");
		if(category == "all"){
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.news_wrap').removeClass('hide');
			}, 300);
			
		} else {
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.' + category).removeClass('hide');
			}, 300);
		    $(".news_wrap.hide").css("margin","0");
		$(".blog").css("margin-right","5%");

		}
	});
	
	
	$("#media").click(function(e) {
		e.preventDefault();
		var category = $(this).attr("id");
		if(category == "all"){
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.news_wrap').removeClass('hide');
			}, 300);
			
		} else {
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.' + category).removeClass('hide');
			}, 300);
		$(".news_wrap.hide").css("margin","0");
		$(".media").css("margin-right","5%");

		}
	});
	
	
	$("#insight").click(function(e) {
		e.preventDefault();
		
		var category = $(this).attr("id");
		if(category == "all"){
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.news_wrap').removeClass('hide');
			}, 300);
			
		} else {
			$('.news_wrap').addClass('hide');
			setTimeout(function(){
				$('.' + category).removeClass('hide');
			}, 300);
		$(".news_wrap.hide").css("margin","0");
		$(".insight").css("margin-right","5%");

		}
	});
	
	
	
	var page_url = window.location.href;
	var page_id = page_url.substring(page_url.lastIndexOf("#") + 1);
	if ("page_id") {
		$("html, body").animate({scrollTop: $("#" + page_id).offset().top-130}, 3000);
	};
			
});

function _route() {
    "use strict";
	var hashTag = window.location.hash;
	var newPath = hashTag.replace("#/", "");
	var newArr = newPath.split("/");
	var pageID = newArr[0];
		
			if (pageID !== 'content') {
				var url = $(".avail_pos:first").attr("id");
			} else {
				var url = newArr[1];
		$('html, body').stop().animate({scrollTop: $("#offset").offset().top-140}, 500)
			}
				
		$("#content").load('careers_ajax.php?url=' + url);
}


