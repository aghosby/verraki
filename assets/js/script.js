// JavaScript Document
$(document).ready(function() {
	_route();
	var d = $('.header');
	d.scrollToFixed({
		zIndex: 999
	});
	
	$(".avail_pos").each(function () {
		var l = $(this);
		l.click(function (e) {
			e.preventDefault();
			$('html, body').stop().animate({scrollTop: $("#offset").offset().top-140}, 500)
			window.location = $(this).attr("data-url");
			var hashTag = window.location.hash,
			    newPath = hashTag.replace("#/",""),
				newArr = newPath.split("/"),
				pageID = newArr[0],
				url = newArr[1];
				
			if (url) {
				$.ajax({
					type: "POST",
					url: "careers_ajax.php",
					data: "url=" + url,
					success: function (data) {
						$("#content").html(data);
					}
				});
			}
			return false;
		});
	
	});
	
	$(window).scroll(function () {
		scroll = $(window).scrollTop();
		
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			d.addClass('smheader');
		} else {
			if (scroll >= 60) d.addClass('smheader');
			else d.removeClass('smheader');
		}
	});

    $(".menu_icon").click(function(e){
		e.preventDefault();
		$(".menu").fadeToggle(700);
		$(".menu").toggleClass("open");
		($(".menu_text").text() === "Close") ? $(".menu_text").text("Menu") : $(".menu_text").text("Close");
	});   
		
	$("body").delegate(".ic", "click", function (e) {
		e.stopPropagation();
		var c = $(this).parents(".faq_hld"),
			m = c.find('.faq_det');
		$(".faq_hld .faq_det").not(m).slideUp();
		m.slideToggle();
		$(this).find(".sp-1").toggleClass('sh');
        $(this).find(".sp-2").toggleClass('sh');
	});
	$("body").delegate(".ic", "click", function (e) {
		e.stopPropagation();
		var c = $(this).parents(".car_wrap"),
			m = c.find('.car_det');
		$(".car_wrap .car_det").not(m).slideUp();
		m.slideToggle();
	});
	
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


