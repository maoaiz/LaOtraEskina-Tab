
$(document).ready(function () {
	if (typeof video == "undefined"){
		$(".scrollable").scrollable({circular: true});}
	else{
		$(".scrollable").scrollable({circular: false});}
	// initialize scrollable with mousewheel support
	$(".scrollablev").scrollable({ vertical: true, mousewheel: true });	
	$("#slideshow").css("overflow", "hidden");
	$("ul#slides").cycle({
		fx: 'fade',
		pause: 1,
		timeout:3000,
		prev: '#prev',
		next: '#next'
	});
	
	$("#slideshow").hover(function() {
    	$("ul#nav").fadeIn();
  	},
  		function() {
    	$("ul#nav").fadeOut();
  	});
	
	$("#slideshow2").css("overflow", "hidden");
	$("ul#slides2").cycle({
		fx: 'scrollRight',
		timeout:0,
		prev: '#prev2',
		next: '#next2'
	});
	
	
	
	
	
	
		//Set the height of the block
		$('#menu .block').height($('#menu li').height());

		//go to the default selected item
		topval = $('#menu .selected').position()['top'];
		$('#menu .block').stop().animate({top: topval}, {easing: '', duration:500});

		$('#menu li').hover(
			
			function() {
				
				//get the top position
				topval = $(this).position()['top'];
				
				//animate the block
				//you can add easing to it
				$('#menu .block').stop().animate({top: topval}, {easing: '', duration:500});
				
				//add the hover effect to menu item
				$(this).addClass('hover');	
			},
			
			function() {		
				//remove the hover effect
				$(this).removeClass('hover');	
			}
		);
		
		//Select all anchor tag with rel set to tooltip
	$('a[rel=tooltip]').mouseover(function(e) {
		
		//Grab the title attribute's value and assign it to a variable
		var tip = $(this).attr('title');	
		
		//Remove the title attribute's to avoid the native tooltip from the browser
		$(this).attr('title','');
		
		//Append the tooltip template and its value
		$(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');		
				
		//Show the tooltip with faceIn effect
		$('#tooltip').fadeIn('500');
		$('#tooltip').fadeTo('10',0.9);
		
	}).mousemove(function(e) {
	
		//Keep changing the X and Y axis for the tooltip, thus, the tooltip move along with the mouse
		$('#tooltip').css('top', e.pageY + 10 );
		$('#tooltip').css('left', e.pageX + 20 );
		
	}).mouseout(function() {
	
		//Put back the title attribute's value
		$(this).attr('title',$('.tipBody').html());
	
		//Remove the appended tooltip template
		$(this).children('div#tooltip').remove();
		
	});
		
		
		
	});
	
