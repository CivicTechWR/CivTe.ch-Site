<main id="main-content">
	<div class="section-box masthead blue-fade">
		<div class="container">
			<h1 class="main-heading">Calendar of Events</h1>
			<p class="lead">Below is a calendar of important civic tech events. Sign in to add an event to the calendar.</p>
		<i class="fa fa-calendar icon-heading" aria-hidden="true"></i>
		</div>
	</div>
	<div class="section-box">
		<div class="container">

			<div id='calendar'></div>
		</div>
	</div>
</main>

<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
</script>