
<?php get_header(); ?>

<!-- START MAIN -->
<div class="main">

<!-- START CARD -->
<div class="single__card">

  <!-- START IMAGE DISPLAY -->
  <div class="single-image-display">

    <img src="<?php echo get_theme_file_uri('/img/nitecore-light.jpg'); ?>" alt="placeholder" class="single-image-display__featured">

    <div class="single-image-display__slider">
      <img src="<?php echo get_theme_file_uri('/img/dummy/1.png'); ?>" alt="placeholder" class="single-image-display__thumb">
      <img src="<?php echo get_theme_file_uri('/img/dummy/2.png'); ?>" alt="placeholder" class="single-image-display__thumb">
      <img src="<?php echo get_theme_file_uri('/img/dummy/3.png'); ?>" alt="placeholder" class="single-image-display__thumb">
    </div>

  </div>
  <!-- END IMAGE DISPLAY -->

  <!-- START BUY SECTION -->
  <div class="single-buy">
    <h2 class="single-buy__name"><?php the_title(); ?></h2>
    <h4 class="single-buy__distributor">Featured on <?php echo 'Insert seller here'; ?></h4>
    <h3 class="single-buy__price"> $<?php echo 'The price'; ?> </h3>
    <p class="single-buy__stocked"><?php echo 'inventory status'; ?></p>
    <a href="#" class="single-buy__link">Buy it now!</a>
    <div class="single-buy__disclaimer">
      <a href="#" class="single-buy__disclaimer-link">What's an affiliate link?</a>
      <p class="single-buy__disclaimer-text">An affiliate link is a specific URL that contains the affiliate's ID or username. In affiliate programs, advertisers use affiliate links to record the traffic that is sent to the advertiser's website.</p>
    </div>
  </div>
  <!-- END BUY SECTION -->

  <!-- START PRODUCT INFO -->
  <div class="single-info">

    <h3 class="single-info__heading">Product Information</h3>

    <ul class="single-info__list">
      <li class="single-info__item">
        <h4 class="single-info__sub-heading">Description</h4>
        <p class="single-info__text">
          <?php echo 'put the product description here' ?>
        </p>
      </li>
      <li class="single-info__item">
        <h4 class="single-info__sub-heading">Rating</h4>
        <div class="single-info__rating">
          <h3 class="single-info__number"><?php echo '5.0' ?></h3>
          <div class="single-info__icon-box">
            <svg class="single-info__icon">
              <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
            </svg>
            <svg class="single-info__icon">
              <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
            </svg>
            <svg class="single-info__icon">
              <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
            </svg>
            <svg class="single-info__icon">
              <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
            </svg>
            <svg class="single-info__icon">
              <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
            </svg>
          </div>
        </div>
      </li>
      <li class="single-info__item">
        <h4 class="single-info__sub-heading">Production</h4>
        <p class="single-info__text">
          Distributed by <?php echo 'Manufacturer' ?><br>
          <?php echo 'Made in America' ?>
        </p>
      </li>
      <li class="single-info__item">
        <h4 class="single-info__sub-heading">Categories</h4>
        <p class="single-info__text">
          <?php echo 'insert list of categories' ?>
        </p>
      </li>
      <li class="single-info__item">
        <h4 class="single-info__sub-heading">Features</h4>
        <p class="single-info__text">
          <?php echo 'insert list of features' ?>
        </p>
      </li>
    </ul>

  </div>
  <!-- END PRODUCT INFO -->

</div>
<!-- END CARD -->

</div>
<!-- END MAIN -->

<?php include 'recent.php'; ?>
<?php include 'recommended.php'; ?>

<?php get_footer(); ?>