

<?php get_header(); ?>

<div class="main main--home main--flex-c">

<?php include 'partials/featured-slider.php'; ?>

<!-- START HOME CONTENT-->
<div class="home">

  <!-- START PITCH -->
  <div class="home-pitch">

    <!-- START BACKGROUND VIDEO -->
    <div class="home-pitch__video">
      <video class="home-pitch__video-content" autoplay muted loop>
        <source src=" <?php echo get_theme_file_uri('img/splash/nevada.mp4') ?>" type="video/mp4">
        Your browser is not supported!
      </video>
    </div>
    <!-- END BACKGROUND VIDEO -->

    <div class="home-pitch__composition">
      <img src="<?php echo get_theme_file_uri('img/tornflag2.png') ?>" alt="" class="home-pitch__composition-img1">
    </div>

    <div class="home-pitch__logo-box">
      <img src="<?php echo get_theme_file_uri('img/shopsmart-logo-sm.png')?>" alt="" class="home-pitch__logo">
    </div>

    <!-- START TEXT BOX -->
    <div class="home-pitch__text-box">
      <h1 class="home-pitch__heading">Shop wisely friends.</h1>
      <p class="home-pitch__text">
        We show you the best products, made right here in the USA, that are available on the most
        convenient and accessible online market places
      </p>
    </div>
    <!-- END TEXT BOX -->

  </div>
  <!-- END PITCH -->

  <!-- START CARDS ROW -->
  <div class="row row--flex-r">

    <!-- START CARD-BRANDS -->
    <div class="card-lg">

      <div class="card-lg__heading-box">
        <a href="<?php echo site_url('/ga-brands') ?>" class="card-lg__heading-link"><h3>Brands</h3></a>
      </div>
      <div class="card-lg__content">

      <?php
  
        $brandsPage = new WP_Query(array(
          'post_type' => 'brand',
        ));

        while($brandsPage->have_posts()){
          $brandsPage->the_post();
          ?>

          <a href="#" class="card-lg__link">
            <div class="card-lg__img-box">
              <img class="card-lg__img card-lg__img--logo" src="<?php the_field('brand_logo'); ?>"
                alt="<?php the_title(); ?> logo">
            </div>
          </a>

      <?php } wp_reset_postdata(); ?>

      </div>

    </div>
    <!-- END CARD-BRANDS -->

    <!-- START CARD-DEPARTMENTS -->
    <div class="card-lg">

      <div class="card-lg__heading-box">
        <h3>Departments</h3>
      </div>

      <div class="card-lg__content">

        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <svg class="card-lg__icon">
              <use xlink:href="<?php echo get_theme_file_uri('icons/symbol-defs.svg#icon-apparel') ?>"></use>
            </svg>
            <h4 class="card-lg__icon-label">Clothing</h4>
          </div>
        </a>

        <?php
  
        $brandsPage = new WP_Query(array(
          'post_type' => 'department',
        ));

        while($brandsPage->have_posts()){
          $brandsPage->the_post();
          ?>

          <a href="#" class="card-lg__link">
            <div class="card-lg__img-box">
              <img class="card-lg__img card-lg__img--logo" src="<?php the_field('brand_logo'); ?>"
                alt="<?php the_title(); ?> logo">
            </div>
          </a>

      <?php } wp_reset_postdata(); ?>
 
      </div>

    </div>
    <!-- END CARD-DEPARTMENTS -->

  </div>
  <!-- END CARDS ROW -->

</div>
<!-- END HOME CONTENT -->

<?php include 'partials/recent.php'; ?>
<?php include 'partials/recommended.php'; ?>

</div>


<?php get_footer(); ?>