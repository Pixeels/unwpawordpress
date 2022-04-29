<head>
  <title>United Nation World Peace</title>
  <link href="<?php echo get_template_directory_uri(); ?>/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/homepage/logo.png" rel="icon">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

  <meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/social-thumb.png"/> 
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/socialthumb.png" />
	<meta name="twitter:url" content="">

</head>

<div class="container-fluid m-0 p-0 header-bg">
    
    <div class="row mx-0">
      <div class="col-sm-4 logo-bg mb-2">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" onClick="window.location.reload()">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/homepage/main-logo.png" alt="" srcset="" class="w-75 mt-2">
            </a>
      </div>
      <div class="col-sm-8 h-50 mt-5 header-menu">
        <nav class="navbar navbar-expand-lg navbar-light align-self-end float-end mt-5">
          <span class="fs-3 text-uppercase fw-bolder text-light d-lg-none d-md-block">Menu</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span id="menuIcon" class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ">
              <li class="nav-item">
              <a class="nav-link active text-light fw-bold mx-1" aria-current="page" href="/unwpa/index.php">HOME</a>
              </li>
              <li class="nav-item hoverable_wrap">
                <a class="nav-link text-light fw-bold mx-1 news-and-updates" href="#">NEWS AND UPDATES</a>
                <div class="hoverable-news-and-updates p-3">
                    <span></span>
                    <ul>
                        <li  class="my-2">
                            <a href="/unwpa/Articles and News.php">Articles and News</a>
                        </li>
                        <li  class="my-2">
                            <a href="/unwpa/newsAndUpdates.php">Previous Events and Activities</a>
                        </li>
                    </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fw-bold mx-1" href="/unwpa/ambassadors.php">AMBASSADORS</a>
               
              </li>
              <ul class="navbar-nav">
                <li class="nav-item hoverable_wrap">
                    <a class="nav-link text-light fw-bold mx-1 conferences-nav" aria-current="page" href="#">CONFERENCES</a>
                    <div class="hoverable-conferences p-3">
                        <span></span>
                        <ul>
                            <li class="my-2">
                                <a href="/unwpa/conference-participation.php">Conference Participation</a>
                            </li>
                            <li class="my-2">
                                <a href="/unwpa/upcoming-events.php">Upcoming Events</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fw-bold mx-1" href="/unwpa/structureMembers.php">STRUCTURE MEMBERS</a>
                </li>
                <li class="nav-item hoverable_wrap">
                    <a class="nav-link text-light fw-bold mx-1 about-us-nav" href="#">ABOUT US</a>
                    <div class="hoverable-about-us p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li class="my-2">
                                        <a href="/unwpa/About Us - Landing.php">Mission and Vision</a>
                                    </li>
                                    <li class="my-2">
                                        <a href="/unwpa/About Us - Partner Portal.php">Partnership</a>
                                    </li>
                                    <li class="my-2">
                                        <a href="/unwpa/About Us - What We Do.php">What we do.</a>
                                    </li>
                                    <li class="my-2">
                                        <a href="/unwpa/About Us - Peace Youth Advocacy.php">Peace Youth Advocacy</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li class="my-2">
                                        <a href="/unwpa/About Us - Members.php">UNWPA Japan Board Members</a>
                                    </li>
                                    <li class="my-2">
                                        <a href="/unwpa/About Us - Partner Portal.php">Partner Portal Access.</a>
                                    </li>
                                    <li class="my-2">
                                        <a href="/unwpa/about us - nonprofit.php">Non-Profit Organization United Nation World Peace Association: Articles of Association</a>
                                    </li>                            
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
              </ul>
            </div>
        </nav>
        
      </div>
    </div>
  </div>
</div>