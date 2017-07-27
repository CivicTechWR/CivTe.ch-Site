<main id="main-content">

	<div class="section-box masthead sky-fade">
		<div class="container">
			<h1 class="main-heading">Project List</h1>
			<p class="lead">Below we list our current and active civic tech projects, as well as discuss and vote on future possibilities. We also provide links to civic tech projects created by similar organizations.</p>
			<i class="fa fa-users icon-heading" aria-hidden="true"></i>
		</div>
	</div>
	<div class="section-box">
		<div class="container">



<?
  include('data/projectlistJSON.php');
// I want to while loop by first array and get key for name and create nav-tabs

// then I want to while loop the first array (create tab content section) and then while loop that region into cards

  echo '<ul class="nav nav-tabs">';
  echo '<li class="nav-item"><a class="nav-link active" href="#our-projects-tab">Our Projects</a></li>';
  while (list ($key, $val) = each ($open_data) ) {
    echo '<li class="nav-item"><a class="nav-link" href="#' . str_replace(" ", "-", strtolower($key)) . '-tab">'.$key.'</a></li>'; 
  }
  echo '</ul>';
?>

<div class="tab-content">

    <div class="tab-pane active" id="our-projects-tab" role="tabpanel">
      <div id="accordion-1" role="tablist" aria-multiselectable="true">

      <div class="card">
          <img class="card-img-top" src="../images/communitech.jpg" alt="Image of communitech">
          <div class="card-block">
              <h4 class="card-title">Next Bus App</h4>
              <p class="card-text">When is your next bus ride? With your next bus app, you can get up to the minute information on the bus you are waiting for. Avoid the anxiety. Know exactly when they're coming so you make alternative plans when they are delayed.</p>
              <a class="btn btn-social-icon btn-github" href="https://github.com/CivicTechWR" target="_blank"><span class="fa fa-github"></span></a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      
          </div>
      </div>
      <div class="card">
          <img class="card-img-top" src="../images/communitech.jpg" alt="Image of communitech">
          <div class="card-block">
              <h4 class="card-title">Budget Master</h4>
              <p class="card-text">Dive deep into the financial data in the Waterloo region.</p>
              <a class="btn btn-social-icon btn-github" href="https://github.com/CivicTechWR" target="_blank"><span class="fa fa-github"></span></a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      

          </div>
      </div>  
    </div>
  </div>




<?
  
  $i = 1;
  $accordion = 2;
  foreach ($open_data as $key => $value) {
      echo '<div class="tab-pane" id="'.str_replace(" ", "-", strtolower($key)).'-tab" role="tabpanel">';
      echo '<div id="accordion-'.$accordion.'" role="tablist" aria-multiselectable="true">';
      $active_on_second = 1; 
      foreach ($value as $resource) {
          echo '<div class="card"><div class="card-header" role="tab" id="heading-'.$i.'"><h5 class="mb-0">
          <a data-toggle="collapse" data-parent="#accordion-'.$accordion.'" href="#slide-'.$i.'" aria-expanded="true" aria-controls="collapseOne">';
          echo $resource['title'];
          echo '</a></h5></div>';
          echo '<div id="slide-'.$i.'" class="collapse ';
          if ($active_on_second){
            $active_on_second = 0; 
            echo 'show';           
          }
          echo '" role="tabpanel" aria-labelledby="heading-'.$i.'"><div class="card-block">';
          echo '<p>'.$resource['description'].'</p>';
          echo '<a class="btn btn-primary btn-lg" href="'.$resource['url'].'" target="_blank" role="button">Go to Site</a>';
          echo '</div></div></div>';
          $i = $i + 1;
      }
      $accordion = $accordion + 1;
      echo '</div></div>';
  }

?>
      </div>
			
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