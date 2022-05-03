<html>

<body>
    <!-- Header Section -->
    <?php include 'includes/header.php' ?>
        <div class="container">

        <!-- start post box -->
        <div class="col-md-12 d-flex">
            <div class="card" style="width: 25rem;">
                <div class="card-img-top">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="card-body bg-light">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
        
        <!-- end post box -->
    <?php wp_reset_postdata(); 
        ?>

    </div>
    
    <?php include 'includes/footer.php' ?>
</body>

</html>