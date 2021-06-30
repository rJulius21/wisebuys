
<?php get_header(); ?>

<!-- START MAIN -->
<div class="main">

  <?php
    while(have_posts()) {
      the_post();
  ?>

  <!-- START CARD -->
  <div class="single__card">

    <!-- START IMAGE DISPLAY -->
    <div class="single-image-display">
      <img src="<?php the_field('image'); ?>" alt="photo of <?php the_title(); ?>" class="single-image-display__featured">
    </div>
    <!-- END IMAGE DISPLAY -->

    <!-- START BUY SECTION -->
    <div class="single-buy">
      <h2 class="single-buy__name"><?php the_title(); ?></h2>
      <h4 class="single-buy__distributor">Featured on <?php the_field('retailers'); ?></h4>
      <h3 class="single-buy__price"> $<?php the_field('price'); ?> </h3>
      <p class="single-buy__stocked">(as of post date)</p>
      <a href="<?php the_field('afflinks'); ?>" class="single-buy__link" target="_blank">Buy it now!</a>
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
            <?php the_field('description'); ?>
          </p>
        </li>
        
        <li class="single-info__item">
          <h4 class="single-info__sub-heading">Production</h4>
          <p class="single-info__text">
            Distributed by <?php the_field('brand'); ?><br>
            <?php echo $origin ?>
          </p>
        </li>
        <li class="single-info__item">
          <h4 class="single-info__sub-heading">Categories</h4>
          <p class="single-info__text">
            <?php the_field('departments'); ?>
          </p>
        </li>
        <li class="single-info__item">
          <h4 class="single-info__sub-heading">Features</h4>
          <p class="single-info__text">
            <?php the_field('features'); ?>
          </p>
        </li>
      </ul>

    </div>
    <!-- END PRODUCT INFO -->

        <?php } wp_reset_postdata(); ?> 

  </div>
  <!-- END CARD -->
          
</div>
<!-- END MAIN -->

<?php include 'partials/recent.php'; ?>
<?php include 'partials/recommended.php'; ?>

<?php get_footer(); ?>