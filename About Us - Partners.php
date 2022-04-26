<?php
  /* Template Name: Partnership*/
?>
<html>
<body>
  <!-- Header Section -->
  <?php include 'includes/header.php' ?>

  <!-- Title -->
  <div class="container-fluid m-0 p-0 partnersTitleContainer" >
    <div class="container-fluid row m-0 p-0 d-flex justify-content-center align-items-center partnersTitleImgCont">
        <div class="col-sm-6 p-5 d-flex justify-content-center align-items-center partnersTitle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/about us/heart-hands.png" alt="" class="img-fluid hearthands">
            <div class="overlayTitle">
            <h1> Partnership</h1>
          </div>
        </div>
    </div>    
  </div>

  <!-- Mission -->
    <div class="container-fluid m-0 p-0">

        <div class="col-sm-12 m-0 py-5 seperatorBg1">
            <div class= "position-absolute top-75 start-50 translate-middle px-5 py-2 missionTitleBg"> 
                <h2 class="text-center fw-bold">Partners</h2>  
            </div>
        </div>

        <div class="col-sm-12 p-5 pb-0 container-fluid partnersBg">
            <div class="container-fluid row m-0 p-0"> 

                <div class="card col-sm-6 m-0 p-0 pb-5 d-flex justify-content-center align-items-center partnersCard1">
                    <div class="card-body ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/about us/CNADH.png" alt="CNADH" class="img-fluid partnersImg1"> 
                        <h5 class="text-center"> ENTRE NATIONAL DES DROITS DE L`HOMME IS
                            AN AUTHORIZED PARTNER OF UNWPA
                        </h5>
                    </div>                
                </div>

                <div class="card col-sm-6 m-0 pb-5 d-flex justify-content-center align-items-center partnersCard">                
                    <div class="card-body ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/about us/SCM-ITC.png" alt="SCM-ITC" class="img-fluid partnersImg2"> 
                            <h5 class="text-center scmtxt"> SCM-ITC INTERNATIONAL TRAINING CENTER 
                                IS AN AUTHORIZED PARTNER OF UNWPA
                            </h5>
                        </div>     
                </div>
            </div>
        </div>
    </div>




    <!-- Footer Section -->
    <?php include 'includes/footer.php' ?>
</body>
</html>