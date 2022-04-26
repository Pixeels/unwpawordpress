<?php
  /* Template Name: Mission and Vision*/
?>
<html>
<body>
  <!-- Header Section -->
  <?php include 'includes/header.php' ?>

  <!-- Title -->
  <div class="container-fluid m-0 p-0 aboutTitleContainer" >
    <div class="row m-0 p-0 align-items-center aboutUsTitle">
        <div class="col-sm-4 p-0 px-0 mt-10 mb-10 blobCont">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/about us/bg-paya1.png" alt="" class="img-fluid float-sm-start bg_blob1">
        </div>
        <div class="col-sm-2 p-0 px-0 mt-10 mb-10 titleCont">
         <h1 class="text-center fw-bold titleDesc"> About Us  </h1>
        </div>
        <div class="col-sm-6 m-0 px-0 py-5 container-fluid d-flex justify-content-center align-items-center titleLogo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/about us/logo.png" alt="" class="img-fluid aboutLogo">
        </div>
    </div>    
  </div>

  <!-- Mission -->
  <div class="container-fluid m-0 p-0 missionContainer ">

    <div class="col-sm-12 m-0 py-5 seperatorBg1">
      <div class= "position-absolute top-75 start-50 translate-middle px-5 py-2 missionTitleBg"> 
        <h1 class="text-center fw-bold">Mission</h1>  
      </div>
    </div>

    <div class="col-sm-12 p-5 fs-4 missionBg">
        <p class="text-center px-5 mt-1 mb-5 fs-4 w-75 mx-auto missionDesc">
          The Mission of United Nation World Peace Association is to allow all the people to profit 
          more from monetary system so that the problems, of environment, social conflicts, poverty 
          find a global solution. Help billions of children living in countries afflicted by armed 
          conflict, crime, prostitution, corruption, delinquency and wrong doing.
        </p>
    </div>
  </div>

  <div class="col-sm-12 m-0 py-5 seperatorBg2">
    <div class= "position-absolute top-75 start-50 translate-middle px-5 py-2 visionTitleBg"> 
      <h1 class="text-center fw-bold">Vision</h1> 
    </div>
  </div>

  <!-- Vision -->
    <div class="col-sm-12 p-5 fs-4 visionBg">
        <p class="text-center px-5 py-2 mt-1 mb-5 fs-4 w-75 mx-auto visionDesc">
              Vision of a world in which every woman, child and adolescent in every setting
              realizes their rights to physical and mental health and well-being and social 
              and economic opportunities, is that the rights and interests of every child and 
              youth are protected and respected and each child and youth has access to all the 
              government services they require and is able to participate fully in shaping prosperous 
              and sustainable societies.
          </p>
    </div>
  </div>
    <!-- Footer Section -->
    <?php include 'includes/footer.php' ?>
</body>
</html>