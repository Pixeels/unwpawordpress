<?php
  /* Template Name: Homepage*/
?>

<html>
<body>
  <!-- Header Section -->
  <?php include 'includes/header.php' ?>

  <!-- Carousel Section -->
  <div class="container-fluid m-0 p-0 pageCarousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/carousel/01.jpg" style="opacity: 0.9;" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="fs-2 mb-5 fw-lighter">For people who need help from all over the world, we provide various support and activities such as fundraising and volunteer activities.</p>
            <button class=" fw-bold fs-5 rounded-pill py-2 px-3 bg-light border-0">READ MORE</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/carousel/02.jpg" style="opacity: 0.9;" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="fs-2 mb-5 fw-lighter">For people who need help from all over the world, we provide various support and activities such as fundraising and volunteer activities.</p>
            <button class=" fw-bold fs-5 rounded-pill py-2 px-3 bg-light border-0">READ MORE</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/carousel/03.jpg" style="opacity: 0.9;" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="fs-2 mb-5 fw-lighter">For people who need help from all over the world, we provide various support and activities such as fundraising and volunteer activities.</p>
            <button class=" fw-bold fs-5 rounded-pill py-2 px-3 bg-light border-0">READ MORE</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/carousel/04.jpg" style="opacity: 0.9;" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="fs-2 mb-5 fw-lighter">For people who need help from all over the world, we provide various support and activities such as fundraising and volunteer activities.</p>
            <button class=" fw-bold fs-5 rounded-pill py-2 px-3 bg-light border-0">READ MORE</button>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/carousel/05.jpg" style="opacity: 0.9;" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="fs-2 mb-5 fw-lighter">For people who need help from all over the world, we provide various support and activities such as fundraising and volunteer activities.</p>
            <button class=" fw-bold fs-5 rounded-pill py-2 px-3 bg-light border-0">READ MORE</button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Section 1 -->
  <div class="container-fluid relative mt-5 section-1">
    <img class="img-fluid absolute overlay-logo" src="<?php echo get_template_directory_uri(); ?>/assets/homepage/logo.png">
    <div class="row my-5 py-5">
      <div class="col-sm-12 p-5 fs-4">
          <h1 class="text-center text-light fw-bold">United Nation World Peace Assocation (WPA)</h1>
          <p class="text-center px-5 text-light fw-light my-4 fs-4 w-75 mx-auto">UNWPA is confident that the world as a whole will be improve though activities that protect the right of people to live in peace, solving real world problems not reported in the Japanese mass media.</p>
      </div>
    </div>
  </div>
  <!-- Latest News and Updates -->
  <div class="container latest-news-and-events">
  <a href="#"><h3 class="fw-bolder my-5 fs-2">LATEST NEWS AND UPDATES</h3></a>
    <div class="row news-and-events-container">
      <div class="col-sm-6">
        <div class="row" style="height:97.5%">
          <div class="col-sm-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/latest news and updates/la-consolacion.png" alt="" class="img-fluid">
          </div>
          <div class="col-sm-8">
            <p>UNWPA INTERS La Consolacion University Philippines</p>
            <p>United Nation World Peace Assocation welcomes the third batch of student interns from La Consolacion University Philippines, Malolos, Bulacan. The interns will be trained virtually for 12 months in events planning and social media marketing.</p>
            <button class="btn btn-primary news-button">VIEW MORE</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 section-right">
        <div class="row">
          <div class="col-sm-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/latest news and updates/la-consolacion.png" alt="" class="img-fluid">
          </div>
          <div class="col-sm-8">
            <p>UNWPA INTERS La Consolacion University Philippines</p>
            <p>United Nation World Peace Assocation welcomes the third batch of student interns from La Consolacion University Philippines, Malolos, Bulacan. The interns will be trained virtually for 12 months in events planning and social media marketing.</p>
            <button class="btn btn-primary news-button" href="/unwpa/newsAndUpdates.php">VIEW MORE</button>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/latest news and updates/sdg-yep.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-sm-8">
            <p>UNWPA INTERS La Consolacion University Philippines</p>
            <p>United Nation World Peace Assocation welcomes the third batch of student interns from La Consolacion University Philippines, Malolos, Bulacan. The interns will be trained virtually for 12 months in events planning and social media marketing.</p>
            <button class="btn btn-primary news-button">VIEW MORE</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Recent Events -->
  <div class="container-fluid d-flex justify-content-center align-item-center recent-events my-5 p-0">
    <div class="container m-5 py-2 px-5">
      <h3 class="my-4 text-light fw-bold">RECENT EVENTS</h3>
      <!-- recent event post database connect-->
      <div class="row mb-5">
                   <?php
											$args = array(
												'post_type' => 'post',
												'posts_per_page' => 3,
												'orderby' => 'post_date',
												'order' => 'DESC',
												'post_status' => 'publish',
												);
												$posts = get_posts( $args );
												foreach ( $posts as $post ):
												setup_postdata( $post );
										?>  
                          <!-- start post box -->
                          <div class="col-md-4 d-flex">
                            <div class="card" style="width: 25rem;">
                            <div class="card-img-top">
                                <?php the_post_thumbnail(); ?>
                            </div>
                              <div class="card-body bg-light">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary events-button">VIEW MORE</a>
                              </div>
                            </div>
                          </div>
                          <!-- end post box -->
                      <?php endforeach; wp_reset_postdata(); ?>  
					




        <!-- <div class="col-md-4 d-flex">
          <div class="card" style="width: 25rem;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/recent events/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary events-button">VIEW MORE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="card" style="width: 25rem;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/recent events/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary events-button">VIEW MORE</a>
            </div>
          </div>
        </div> -->
      </div> 
      <!-- end db -->
    </div>
  </div>

  <!-- Footer Section -->
  <?php include 'includes/footer.php' ?>
</body>
</html>