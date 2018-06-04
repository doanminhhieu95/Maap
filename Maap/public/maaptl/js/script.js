"use strict";
$(function(){
	//Page loading
	if ($('#bt_page_loading').length) {
		setTimeout(function(){
			$('#bt_page_loading').hide();
		}, 3000);
	}
	
	//Background effect
	var lFollowX = 0,
    lFollowY = 0,
    y = 0,
    x = 0,
    friction = 1 / 30;

	function moveBackground() {
		x += (lFollowX - x) * friction;
		y += (lFollowY - y) * friction;

		var translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

		$('.effect').css({
			'-webit-transform': translate,
			'-moz-transform': translate,
			'transform': translate
		});

		window.requestAnimationFrame(moveBackground);
	}

	$(window).on('mousemove click', function(e) {
		var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
		var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
		lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
		lFollowY = (10 * lMouseY) / 100;

	});

	moveBackground();
	
	/* Slider */
	$('.scroll-img').scrollbox({
		direction: 'h',
		linear: true,          // Scroll method
		startDelay: 2,          // Start delay (in seconds)
		delay: 2,
	});
	
	/* Logo couter */
	$('.counter').counterUp({
		delay: 1,
		time: 100
	});
	
	/* slide in question */
	/* dot nav */
	$(window).bind('scroll',function(e){
		redrawDotNav();
	});

	function redrawDotNav(){
		var topNavHeight = 60;
		var numDivs = $('section').length;
		
		$('#dotNav li a').removeClass('active').parent('li').removeClass('active');  	
		$('section').each(function(i,item){
			var ele = $(item), nextTop, thisTop;
		  
			//console.log(ele.next().html());
		  
			if (typeof ele.next().offset() != "undefined") {
				nextTop = ele.next().offset().top;
			} else {
				nextTop = $(document).height();
			}
		  
			if (ele.offset() !== null) {
				thisTop = ele.offset().top - ((nextTop - ele.offset().top) / numDivs);
			} else {
				thisTop = 0;
			}
		  
			var docTop = $(document).scrollTop()+topNavHeight;

			if(docTop >= thisTop && (docTop < nextTop)){
				$('#dotNav li').eq(i).addClass('active');
			}
		});   
	}

	/* get clicks working */
	$('#dotNav li').click(function(){
		var id = $(this).find('a').attr("href"),
		posi,
		ele,
		padding = 60;
		ele = $(id);
		posi = ($(ele).offset()||0).top - padding;
		$('html, body').animate({scrollTop:posi}, 'slow');
		return false;
	});
	/* end dot nav */
	
	/* get button clicks working */
	$('#butNav .next').click(function(){
		var id = $('#dotNav li.active').next().find('a').attr("href"),
		posi,
		ele,
		padding = 60;
		ele = $(id);
		posi = ($(ele).offset()||0).top - padding;
		$('html, body').animate({scrollTop:posi}, 'slow');
		return false;
	});
	
	$('#butNav .prev').click(function(){
		var id = $('#dotNav li.active').prev().find('a').attr("href"),
		posi,
		ele,
		padding = 60;
		ele = $(id);
		posi = ($(ele).offset()||0).top - padding;
		$('html, body').animate({scrollTop:posi}, 'slow');
		return false;
	});
	
	$('#butNav .stop').click(function(){
		/* var id = $('#dotNav li.active').next().find('a').attr("href"),
		posi,
		ele,
		padding = 70;
		ele = $(id);
		posi = ($(ele).offset()||0).top - padding; */
		$('html, body').animate({scrollTop:$(document).height()}, 'slow');
		return false;
	});
})