<?php
  /* Template Name: Morocco */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>unwpa-morocco-ambassador</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/Bangladesh.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/ambassador_style.css">
  <script src="<?php echo get_template_directory_uri(); ?>///cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/homepage/logo.png" rel="icon">
  
  <!--<script src="bootstrap-5.1.3-dist/js/paging.js"></script>-->
  <link href="<?php echo get_template_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="<?php echo get_template_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<!-- Header Section -->
<?php include 'includes/header.php'?>



<!-- UNWPA intro -->
<main>
  <div class="container-fluid bg-white">
    <section class="section">
      <div class="mt-md-4 pt-md-0 mb-5">
            <div class="card card-cascade narrower bg-dark pt-0">
              <!-- COUNTRIES CATEGORY LIST -->
              <div class="d-flex align-self-center">
                <div class="container-dropdown btn-group">
                  <button type="button" class="drop-btn btn btn-secondary btn-lg dropdown-toggle-split badge rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="choose-country fw-normal lh-base">Choose Country</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Bangladesh.php">BANGLADESH</a></li>
                    <li><a class="dropdown-item" href="India.php">INDIA</a></li>
                    <li><a class="dropdown-item" href="Kenya.php">KENYA</a></li>
                    <li><a class="dropdown-item" href="Korea.php">KOREA</a></li>
                    <li><a class="dropdown-item" href="Malaysia.php">MALAYSIA</a></li>
                    <li><a class="dropdown-item" href="Mexico.php">MEXICO</a></li>
                    <li><a class="dropdown-item" href="Morocco.php">MOROCCO</a></li>
                    <li><a class="dropdown-item" href="Myanmar.php">MYANMAR</a></li>
                    <li><a class="dropdown-item" href="Nepal.php">NEPAL</a></li>
                    <li><a class="dropdown-item" href="Philippines.php">PHILIPPINES</a></li>
                    <li><a class="dropdown-item" href="Spain.php">SPAIN</a></li>
                    <li><a class="dropdown-item" href="SriLanka.php">SRI LANKA</a></li>
                    <li><a class="dropdown-item" href="Thailand.php">THAILAND</a></li>
                    <li><a class="dropdown-item" href="UnitedKingdom.php">UNITED KINGDOM OF GREAT BRITAIN <br>AND NORTHERN IRELAND</a></li>
                  </ul>
                </div>
                <!-- COUNTRIES CATEGORY LIST END-->
                <div class="container country-name">
                  <h1 class="responsive-font" style="background-image: linear-gradient(blue, orange);"><div class="spinner-grow text-light mb-md-1 mb-lg-2 mb-xl-2.8" style="animation-duration: 2s;" role="status"></div>MOROCCO<div class="spinner-grow text-light mb-md-1 mb-lg-2 mb-xl-2.8" style="animation-duration: 2s;" role="status"></div></h1>
                </div>
              </div>
              <div style="text-align-left"> 
                <!--<div class="hr-line bg-warning flex-fill rounded">
                </div>-->
                <div class="image-top text-white" style="font-size:2vw;">
                  <p class="intro bg-gradient">UNWPA MOROCCO AMBASSADOR</p> 
                </div>
              </div>
        

        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="column col-lg-4 col-md-12 mb-4">
              <div class="card bg-dark">
                <!-- Card image -->
                <div class="view overlay text-center">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/my-logo/Morocco.png" class="card-img-top"
                    alt="">
                  <a>
                    <div class="mask"></div>
                  </a>
                  <div class="text-white mt-5">
                      <div class="ambassador-1">H.E LAHOUCINE GOGHROD</div>
                      <div class="bg-warning rounded p-1 flex-fill"></div>
                    <p class="card-text fs-6 fst-italic">大統領</p>
                  </div>
                </div>
              </div>
          </div>
          <!-- Grid column end-->
</main>   
  <?php include 'includes/footer.php' ?>
  </body>
</html>
