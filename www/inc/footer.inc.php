<footer >
	<div class="container">

		<div class="always-50">
			<a class="btn btn-social-icon btn-twitter" href="https://twitter.com/civictechwr" target="_blank"><span class="fa fa-twitter"></span></a>
			 <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/CivicTechWR" target="_blank"><span class="fa fa-facebook"></span></a> 
			 <a class="btn btn-social-icon btn-github" href="https://github.com/CivicTechWR" target="_blank"><span class="fa fa-github"></span></a>
			 <a class="btn btn-social-icon btn-meetup" href="https://meetup.com/CivicTechWR" target="_blank"><span class="fa fa-meetup"></span></a>
		</div>
		<div class="always-50">
			
			<img id="footer-logo" src="../images/logo_white_large_5.png" alt="logo" >
			<p>Waterloo Region Civic Tech Team</p>
		</div>
	</div>
</footer>

</body>

<script>
$(document).ready(function(){
		var $window = $(window),
			screen_width = $(window).width(),
			$logo_bar = $('header.navbar'),
			$logo_bar_spacer = $('#navbar-space-holder'),
			scroll_top_last = 0, // last place that was scrolled to before this so we can figure out if it is up or down
			scrollHidden = true, // is the scroll activated nav bar hidden?
			timer = false, // delay between turning navbar on and off so it doesn't flash on and off too quickly - 3s on, 1s off
			scroll_top_lowest = 0,
			scrollFixed = false; // mark the lowest point on the page that has been scrolled to

	if (screen_width > 1000){
		$window.scroll(function(){
			var scrollTop = $window.scrollTop();
			if (!scrollFixed && (scrollTop > 300)){  // move the logo bar to fixed position if you go over 300
				$logo_bar_spacer.css({ display:'block'});
				$logo_bar.addClass('fixed');
				scrollFixed = true;
			} else if (scrollFixed && scrollHidden && (scrollTop < 295) && (scrollTop < scroll_top_last)){ // if you scroll up near the top and the logo bar is hidden just un-fix it so it is found at top, rather than having it scroll down
				scrollHidden = false;	
				$logo_bar_spacer.css({ display:'none'});
				$logo_bar.removeClass('fixed').css({ top:0 });
				scrollFixed = false;
			} else if (scrollTop == 0){ // if you are at 0, reset logo bar to initial position
				$logo_bar_spacer.css({ display:'none'});
				$logo_bar.removeClass('fixed').css({top:-75});
				scrollFixed = false;
				scrollHidden = true;
			} else if (scrollTop > 300) {
				
				if ((scrollTop < scroll_top_last) && (scrollTop < (scroll_top_lowest - 60)) && scrollHidden && !timer){
					$logo_bar.css({ top:0 });
					scrollHidden = false;
					timer = true;
					setTimeout(function(){
						timer = false;
					}, 1000);

				} else if ((scrollTop > scroll_top_last) && !scrollHidden && !timer) {
					$logo_bar.css({ top:-75 });
					scrollHidden = true;
					timer = true;
					setTimeout(function(){
						timer = false;
					}, 500);
				}
				if (scrollHidden && (scrollTop > scroll_top_last)) scroll_top_lowest = scrollTop;
			}
			scroll_top_last = scrollTop;
		});
	}

});

</script>


</html>
