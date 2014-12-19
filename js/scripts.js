
$(window).resize(function() {
	/** Calculate the height of the box depending on the width **/
	
	var boxWidth = $('.Box').width();
	$('.BoxImage').css("height",boxWidth);


	var songRelatedWidth = $('.SongRelated li').width();
	$('.SongRelated ul li').css("height",songRelatedWidth);


	// var sliderWidth = $('.slider').width() ;
	// $('.slider').css("height",sliderWidth / 2.5);
	// $('.sliderDiapos').css("height",sliderWidth / 2.5);

	/** Calculate the height of the song depending on the width **/

	var songAvatarWidth = $('.SongAvatar').width() ;
	$('.SongAvatar').css("height",songAvatarWidth);

});

// Executes this when the ajax finish
$( document ).ajaxComplete(function( event,request, settings ) {
  	
	var ls = localStorage;

	$('#close_banner').click(function(){
		ls.twitter = 10;
	}); 

	if ((ls.twitter == undefined) || (ls.twitter == 0)) {  
		ls.twitter = 0; 
		$('.header_advise').addClass('header_adviseFixed');
		$('.header_advise').delay(500).slideDown(1000); 
	} 
	else if (ls.twitter == 10) {
		// A la decima vez que el usuario entra, se cierra
		$('.Header').removeClass('headerMarginAdvise');
		$('.header_advise').removeClass('header_adviseFixed');
		$('.header_advise').hide(0);
		$('.containerMarginAdvise').removeClass('containerMarginAdvise');
	}   
	else {
		$('.header_advise').addClass('header_adviseFixed');
		$('.header_advise').delay(500).slideDown(1000); 
	}

	
	$('.sliderDiapos').DDSlider({

	  nextSlide: '.sliderButtonNext',
	  prevSlide: '.sliderButtonPrev',
	  selector: '.sliderSelector'

	});



	$(".shareTwitter").click(function() {
		var shareContent = $(this).siblings('.twitterLink');  
		var twitterUrl = $(shareContent).find('span').html();
		
		var windowTop = (window.screen.availWidth/2) - 500;
		var windowLeft = (window.screen.availHeight/2) + 150;
		// var w = 500, h = 300;
		// var left = (screen.width/2)-(w/2);
  // 		var top = (screen.height/2)-(h/2);

		// window.open(twitterUrl, 'Share on twitter', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);

		window.open(twitterUrl, '_blank', 'location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,height=250,width=520, top='+windowTop+', left='+windowLeft+' ');

		return false;
	});

	$(".shareFacebook").click(function() {
		var shareContent = $(this).siblings('.facebookLink');  
		var facebookUrl = $(shareContent).find('span').html();
		
		var windowTop = (window.screen.availWidth/2) - 550;
		var windowLeft = (window.screen.availHeight/2) + 170;
 
		window.open(facebookUrl, '_blank', 'location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,height=300,width=560, top='+windowTop+', left='+windowLeft+' ');

		return false;
	});



  	$( "#open_mobile" ).click(function() {
  		$('.HeaderMenu').show(0);
  		$('.HeaderWhiteBg').show(0);
  		$('#closemobile').show(0);
  	}); 

  	$( "#closemobile" ).click(function() {
  		$('.HeaderMenu').hide(0);
  		$('.HeaderWhiteBg').hide(0);
  		$('#closemobile').hide(0);
  	}); 

  	if(navigator.userAgent.match(/Android/i)
  	  	|| navigator.userAgent.match(/webOS/i)
  	  	|| navigator.userAgent.match(/iPhone/i)
  	  	|| navigator.userAgent.match(/iPad/i)
  	  	|| navigator.userAgent.match(/iPod/i)
  	  	|| navigator.userAgent.match(/BlackBerry/i)
  	  	|| navigator.userAgent.match(/Windows Phone/i)) {

  		// Open the menu

  		$( ".HeaderMenu" ).click(function() {
  			$('.HeaderMenu-submenu').show(0); 
  			$( ".HeaderMenu" ).addClass('menu_pulsado');
  		});

  		$( ".menu_pulsado" ).click(function() {
  			$('.HeaderMenu-submenu').hide(0); 
  			$( ".HeaderMenu" ).removeClass('menu_pulsado');
  		});
  	 
  	}
  	else
  	{   

  		$( ".HeaderMenu" ).hover(
  		  function() {
  		    $('.HeaderMenu-submenu').show();
  		  }, function() {
  		    $('.HeaderMenu-submenu').hide();
  		  }
  		);

  	}

  	// Añadir clase a la impaginación
  	$('.page-numbers').addClass("button");


	/** Calculate the height of the box depending on the width **/

	var boxWidth = $('.Box').width();
	$('.BoxImage').css("height",boxWidth);

	/** Calculate the height of the slider depending on the width **/

	// var sliderWidth = $('.slider').width() ;
	// $('.slider').css("height",sliderWidth / 2.8);
	// $('.sliderDiapos').css("height",sliderWidth / 2.8);

	/** Calculate the height of the song depending on the width **/

	var totalElements = $('.trendingList .wpp-list li').length;

	for ( var i = 1; i <= totalElements; i++ ) {
	// Logs "try 0", "try 1", ..., "try 4".
		$('.trendingList .wpp-list li:nth-child(' + i + ')').prepend('<p>' + i + '</p>');
	}

});


$('#open_DrowDown').hover(function () {
	$('#menuDropdown').slideToggle(0); 
	return false;
});

$('#menuDropdown a').click(function () {
	$('#menuDropdown').hide(0); 
});

$('#menu_drop').mouseleave(function () {
	$('#menuDropdown').delay(100);
	$('#menuDropdown').hide(0);
	return false;
});

$('.sectionWrap').click(function () {	
	$('#menuDropdown').delay(100);
	$('#menuDropdown').hide(0); 
	console.log("pressed");
});

if(navigator.userAgent.match(/Android/i)
  	|| navigator.userAgent.match(/webOS/i)
  	|| navigator.userAgent.match(/iPhone/i)
  	|| navigator.userAgent.match(/iPad/i)
  	|| navigator.userAgent.match(/iPod/i)
  	|| navigator.userAgent.match(/BlackBerry/i)
  	|| navigator.userAgent.match(/Windows Phone/i)) {

	// Open the menu
 
}
else
{   
	var scrollHeight;

	// scrollHeight = $('#footer').offset().top - $('#Player').height() - $('#Player').offset().top;
  
	// $(window).scroll(function() {

	// 	// topLimit = ($('.footer').offset().top - window.innerHeight())+ window.scrollY;
	// 	topLimit = 0;
	// 	console.log('offset desde el footer'+$('.footer').offset().top)
	// 	console.log('Scroll'+window.scrollY)
	// 	console.log('Footer - Window'+ ( $('.footer').offset().top - window.innerHeight()) )
	// 	if (topLimit <= 165) {
	// 		console.log("es menor")
	// 	}
	// 	 //    if (scrollHeight <= 160) {
	// 	 //        $('#Player').css({
	// 	 //            'position': 'relative', 
	// 	 //            'margin-top':'100px'
	// 	 //        });
	// 	 //    } else {
	// 	 //        $('#Player').css({
	// 	 //            'position': 'fixed'
	// 	 //        });
	// 	 //    }
	// });


	$('#comment').attr("placeholder", "Enter your number");

	$('#reply-title').click(function () {
		$('#respond').delay(500).toggleClass('respondOpened');	 
		return false;
	});
	$('#cancel-comment-reply-link').click(function () {
		return true;
	});

	$('#comment').attr("placeholder", "Enter your number");

	$('#reply-title').click(function () {
		$('#respond').delay(500).toggleClass('respondOpened');	 
		return false;
	});
	$('#cancel-comment-reply-link').click(function () {
		return true;
	});
 

}