<?php
  /* Template Name: Articles and News*/
?>

<!DOCTYPE html>

<html lang="en">
  <body>
    <!-- Header Section -->
  <?php include 'includes\header.php' ?>
 
  <!-- Articles and News Contents -->
  
  <div class="desktop-view">
  <div class="container-fluid">
    <h1 class="fs-1 fw-bolder my-5 text-center" style="color: #07327C;">Articles and News</h1>
    <div class="row">
      <!-- <div class="col-sm-2">
        <div class="d-flex flex-column bd-highlight  mb-3">
          <div class="p-2 bd-highlight">
            <div class="activities-post">
              <img src="<?php echo get_template_directory_uri(); ?>/assets\Tokyo_news 1.png" alt="" class="img-fluid">
              <div class=" d-flex align-items-end ">
                <p class="fw-bold ms-2 px-2">Private Meeting about International Conference in Tokyo</p>
              </div>
            </div>
          </div>
          <div class="p-2 bd-highlight">
            <div class="activities-post">
              <img src="<?php echo get_template_directory_uri(); ?>/assets\bangladesh_news1 1.png" alt="" class="img-fluid">
              <div class=" d-flex align-items-end ">
                <p class="fw-bold ms-2 px-2">TUNWPA USA President Visits UNWPA Bangladesh Office</p>
              </div>
            </div>
          </div>
          <div class="p-2 bd-highlight">
            <div class="activities-post">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/bangladesh_news 2.png" alt="" class="img-fluid">
              <div class=" d-flex align-items-end ">
                <p class="fw-bold ms-2 px-2">Official Meeting on 30/01/2021 UNWPA Bangladesh</p>
              </div>
            </div>
          </div>
          <div class="p-2 bd-highlight">
            <div class="activities-post">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Thailand_SmartChild 1.png" alt="" class="img-fluid">
              <div class=" d-flex align-items-end ">
                <p class="fw-bold ms-2 px-2">Smart Child Program</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <?php
											$args = array(
												'post_type' => 'Articles-and-News',
												'posts_per_page' => 5,
												'orderby' => 'post_date',
												'order' => 'DESC',
												'post_status' => 'publish',
												);
												$posts = get_posts( $args );
												foreach ( $posts as $post ):
												setup_postdata( $post );
										?>  

      <div class="col-sm-9 articles">
          <?php the_post_thumbnail(); ?>
          <div class="col-sm-3 contents">
            <h2 class="fs-5 fw-bold ps-3" style="border-left: 5px solid #F4B63C;"><?php the_title(); ?></h2>
            <div class="context">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: grey;">Read More...</a>
          </div>
      </div>

      <?php endforeach; wp_reset_postdata(); ?> 
    </div>
  </div>
  </div>

  
<div class="mobile-and-tablet-view">
  <div class="container">
    <h1 class="fs-1 fw-bolder my-5 text-center" style="color: #07327C;">Previous Events and Activities</h1>
    <div class="row mb-3">
      <div class="col-sm-6">
        <div class="card p-3" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/japan_news 4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ps-2 mb-4 fw-bold fs-5">Japan Regional Council and the ASEAN Regional Council held a Conference.</h5>
            <p class="card-text">Last October 30,2020 on SNS,</p>
            <a href="#" class="">Read More...</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card p-3" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/News 6.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ps-2 mb-4 fw-bold fs-5">UNWPA International Conference “ONE HEART FOR PEACE”</h5>
            <p class="card-text">An international conference</p>
            <a href="#" class="">Read More...</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-6">
        <div class="card p-3" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/Tokyo_news 2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ps-2 mb-4 fw-bold fs-5">Private Meeting about International Conference in Tokyo</h5>
            <p class="card-text">Meeting with Mr. Flavio Gori</p>
            <a href="#" class="">Read More...</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card p-3" style="width: 18rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/bangladesh_news1 2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ps-2 mb-4 fw-bold fs-5">UNWPA USA President Visits UNWPA Bangladesh Office</h5>
            <p class="card-text">In 07th February 2021, UNWPA</p>
            <a href="#" class="">Read More...</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
     <!-- Footer Section -->
  <?php include 'includes/footer.php' ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
