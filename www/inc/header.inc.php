<body>

<a id="skip-to-main-content" href="#main-content" style="display:none;">Skip to main content</a>


<div id="navbar-space-holder"></div>
<header class="navbar navbar-light navbar-toggleable-md bd-navbar">
  <nav class="container">
  	<a href="/"><img id="logo" src="../images/logo.png" alt="logo" ></a>
    <div class="d-flex justify-content-between hidden-lg-up">

      <a class="navbar-brand" href="/">

      	CivTe.ch
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bd-main-nav" aria-controls="bd-main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bd-main-nav">
      <ul class="nav navbar-nav">
        <li class="nav-item <?=($content?'':'active')?>">
          <a class="nav-item nav-link " href="/" onclick="ga('send', 'event', 'Navbar', 'Community Links', 'CivTe.ch');">CivTe.ch</a>
        </li>
        <li class="nav-item <?=($content=='projects'?'active':'')?>">
          <a class="nav-item nav-link " href="/projects/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Projects');">Projects</a>
        </li>
        <li class="nav-item <?=($content=='opendata'?'active':'')?>">
          <a class="nav-item nav-link" href="/opendata/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Open Data');">Open Data</a>
        </li>
        <li class="nav-item <?=($content=='resources'?'active':'')?>">
          <a class="nav-item nav-link" href="/resources/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Resources');">Resources</a>
        </li>
        <li class="nav-item <?=($content=='team'?'active':'')?>">
          <a class="nav-item nav-link" href="/team/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Team');">Team</a>
        </li>
       
        <li class="nav-item <?=($content=='events'?'active':'')?>">
          <a class="nav-item nav-link" href="https://civte.ch/events" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Contact');">Events</a>
        </li>
        <li class="nav-item <?=($content=='about'?'active':'')?>">
          <a class="nav-item nav-link" href="https://civte.ch/about" onclick="ga('send', 'event', 'Navbar', 'Community links', 'About');">About</a>
        </li>
        <li class="nav-item <?=($content=='contact'?'active':'')?>">
          <a class="nav-item nav-link" href="https://civte.ch/contact" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Contact');">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
	</header>

	<?

        include ('inc/notification_banner.inc.php');

?>