

<?php get_header(); ?>

<!-- START PAGE -->
<div class="page">

  <?php include 'partials/breadcrumb.php'; ?>

  <!-- START MAIN GRID -->
  <div class="page__main-grid"> 
    
  <?php
    $productQuery = new WP_Query(array(
      'post_type' => 'product',
    ));

      while($productQuery->have_posts()){
        $productQuery->the_post();
        ?>

        <!-- START CARD -->
        <div class="page-card">

          <a href="<?php the_permalink(); ?>"><h2 class="page-card__heading"><?php the_field('shortname'); ?></h2></a>
          <div class="page-card__img-box">
            <div class="page-card__img"><?php the_field('thumb'); ?></div>
          </div>
         
          <p class="page-card__price">$<?php the_field('price'); ?></p>
          <a href="<?php the_permalink(); ?>" class="page-card__buy-link">Buy it now!</a>

        </div>
        <!-- END CARD -->

      <?php
      }
      ?>
    
</div>
<!-- END MAIN GRID -->

  <?php include 'partials/breadcrumb.php'; ?>

  <?php include 'partials/recent.php'; ?>
  <?php include 'partials/recommended.php'; ?>

</div>
<!-- END PAGE -->


<?php get_footer(); ?>

<!-- CODE MAY BE USED LATER -->
<!-- <div class="page-card__rating">
  <h3 class="page-card__number"><?php echo'5.0'; ?></h3>
  <div class="page-card__icon-box">
  <svg class="page-card__icon">
      <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?> "></use>
    </svg>
    <svg class="page-card__icon">
      <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
    </svg>
    <svg class="page-card__icon">
      <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
    </svg>
    <svg class="page-card__icon">
      <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
    </svg>
    <svg class="page-card__icon">
      <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
    </svg>
  </div>
</div> -->