<main id="main-content">
	<div class="section-box masthead moor-fade">
		<div class="container">
			<h1 class="section-box-heading-w">Contact Us</h1>
			<p class="lead">
			You can reach our team in a variety of ways. If you want to reach someone specifically, go to the <a href="//civte.ch/team" class="underline" aria-label="Go to the team page">Team</a> page. Otherwise please contact us by email or via one of our social channels.
			</p>
			<p class="lead">
      			<a id="email-button" href="#" class="btn btn-lg gold" onclick="ga('send', 'event', 'Contact Us', 'Contact', 'Contact us at hello email CivTe.ch');">
					<my-email class="my-email" data-user="hello" data-domain="civte.ch"></my-email>
      			</a>
    			</p>
    		</div>
    	</div>
    	<div class="section-box">
    		<div class="container">
    			<a href="https://twitter.com/civictechwr" class="btn btn-block btn-social btn-twitter">
   				 <span class="fa fa-twitter"></span> Read our latest Tweets
  			</a>
  			<a href="#" class="btn btn-block btn-social btn-facebook">
   				 <span class="fa fa-facebook"></span> Join us on Facebook
  			</a>
  			<a href="https://github.com/CivicTechWR" class="btn btn-block btn-social btn-github">
   				 <span class="fa fa-github"></span> Fork us on GitHub
  			</a>
  			<a href="https://linkedin.com" class="btn btn-block btn-social btn-linkedin">
   				 <span class="fa fa-linkedin"></span> Connect on LinkedIn
  			</a>
        <br>
        <p style="text-align:center;"><span class="fa fa-slack"></span> Get invited to our <a href="https://civictechwrslack.herokuapp.com/" target="_blank">Slack Group</a></p>
  		</div>
	</div>

</main>

<script>
$(document).ready(function(){


	$('#email-button').on('click', function(e){
		e.preventDefault();
		$this = $(this);
		$this.addClass('clicked');
	
		var copied = true;
		//copyToClipboard(document.getElementById(""));
		if (copied){
			$this.append('<div class="alert alert-warning" role="alert">Copied to clipboard. Just paste it.</div>');
  		} else {
  			$this.append('<div class="alert alert-warning" role="alert">Copy this:  hello@civte.ch</div>');
  		}

		
	});
});
</script>