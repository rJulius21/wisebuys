
<?php get_header(); ?>


<div class="main main--home main--flex-c">

<?php include 'featured-slider.php'; ?>

<?php
while(have_posts()){
  the_post();
?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<hr>


<?php  ?>

<?php
}
?>

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
        <h3>Brands</h3>
        <h3 class="card-lg__see-all">See all Brands</h3>
      </div>
      <div class="card-lg__content">
        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <img class="card-lg__img card-lg__img--logo" src="<?php echo get_theme_file_uri('img/brand-logos/leatherman-logo-svg.svg')?>"
              alt="leatherman logo">
          </div>
        </a>
        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <img class="card-lg__img card-lg__img--logo" src="<?php echo get_theme_file_uri('img/brand-logos/zippo-logo-png.png') ?>"
              alt="zippo logo">
          </div>
        </a>
        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <img class="card-lg__img card-lg__img--logo" src="<?php echo get_theme_file_uri('img/brand-logos/grip6-logo-png.png') ?>"
              alt="grip6 logo">
          </div>
        </a>
        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <img class="card-lg__img card-lg__img--logo" src="<?php echo get_theme_file_uri('img/brand-logos/carhartt-logo-webp.webp') ?>"
              alt="carhartt logo">
          </div>
        </a>
      </div>

    </div>
    <!-- END CARD-BRANDS -->

    <!-- START CARD-DEPARTMENTS -->
    <div class="card-lg">

      <div class="card-lg__heading-box">
        <h3>Departments</h3>
        <h3 class="card-lg__see-all">See all Departments</h3>
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
        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <svg class="card-lg__icon">
              <use xlink:href="<?php echo get_theme_file_uri('icons/symbol-defs.svg#icon-sunglasses1')?>"></use>
            </svg>
            <h4 class="card-lg__icon-label">Accessories</h4>
          </div>
        </a>
        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <svg class="card-lg__icon">
              <use xlink:href="<?echo get_theme_file_uri('icons/symbol-defs.svg#icon-home4')?>"></use>
            </svg>
            <h4 class="card-lg__icon-label">Home</h4>
          </div>
        </a>
        <a href="#" class="card-lg__link">
          <div class="card-lg__img-box">
            <svg class="card-lg__icon">
              <use xlink:href="<?php echo get_theme_file_uri('icons/symbol-defs.svg#icon-location-park') ?>"></use>
            </svg>
            <h4 class="card-lg__icon-label">Garden</h4>
          </div>
        </a>
      </div>

    </div>
    <!-- END CARD-DEPARTMENTS -->

  </div>
  <!-- END CARDS ROW -->

</div>
<!-- END HOME CONTENT -->

<?php include 'recent.php'; ?>
<?php include 'recommended.php'; ?>

</div>


<?php get_footer(); ?>