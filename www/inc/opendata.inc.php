<main id="main-content">

	<div class="section-box masthead meadow-fade">
		<div class="container">
			<h1 class="main-heading">Open Data</h1>
			<p class="lead">Finding open data catalogues, sets and files from official government sources can be difficult. We have compiled a list from municipalities, regions and countries below.</p>
			<i class="fa fa-circle-o-notch icon-heading rotate-once" aria-hidden="true"></i>

		</div>
	</div>
<div class="section-box">
		<div class="container">


<?
  include('data/opendataJSON.php');
// I want to while loop by first array and get key for name and create nav-tabs

// then I want to while loop the first array (create tab content section) and then while loop that region into cards
  $active_on_first = 1;
  echo '<ul class="nav nav-tabs">';
  while (list ($key, $val) = each ($open_data) ) {
    echo '<li class="nav-item"><a class="nav-link ';
    if ($active_on_first){
      $active_on_first = 0;
      echo 'active';
    }
    echo '" href="#' . str_replace(" ", "-", strtolower($key)) . '-tab">'.$key.'</a></li>'; 
  }
  echo '</ul>';

  $active_on_first = 1;
  $i = 1;
  $accordion = 1;
  echo '<div class="tab-content">';
  foreach ($open_data as $key => $value) {
      echo '<div class="tab-pane ';
      if ($active_on_first){
        echo 'active';
        $active_on_first = 0;
      }
      echo '" id="'.str_replace(" ", "-", strtolower($key)).'-tab" role="tabpanel">';
      echo '<div id="accordion-'.$accordion.'" role="tablist" aria-multiselectable="true">';
      $active_on_second = 1; 
      foreach ($value as $resource) {
          echo '<div class="card"><div class="card-header" role="tab" id="headingOne"><h5 class="mb-0">
          <a data-toggle="collapse" data-parent="#accordion-'.$accordion.'" href="#slide-'.$i.'" aria-expanded="true" aria-controls="collapseOne">';
          echo $resource['title'];
          echo '</a></h5></div>';
          echo '<div id="slide-'.$i.'" class="collapse ';
          if ($active_on_second){
            $active_on_second = 0; 
            echo 'show';           
          }
          echo '" role="tabpanel" aria-labelledby="headingOne"><div class="card-block">';
          echo '<p>'.$resource['description'].'</p>';
          echo '<a class="btn btn-primary btn-lg" href="'.$resource['url'].'" target="_blank" role="button">Go to Site</a>';
          echo '</div></div></div>';
          $i = $i + 1;
      }
      $accordion = $accordion + 1;
      echo '</div></div>';
  }
  echo '</div>';


?>



		</div>
	</div>

</main>

<script>
	$(document).ready(function(){
		$('.nav-tabs a').click(function (e) {
  			e.preventDefault()
  			$(this).tab('show')
		});
	});
</script>