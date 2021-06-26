

<?php get_header(); ?>

<!-- START PAGE -->
<div class="page">

  <?php include 'partials/breadcrumb.php'; ?>

  <!-- START MAIN GRID -->
  <div class="page__main-grid"> 
    
  <?php
      while(have_posts()){
        the_post();
        ?>

        <!-- START CARD -->
        <div class="page-card">

          <a href="<?php the_permalink(); ?>"><h2 class="page-card__heading"><?php the_title(); ?></h2></a>
          <div class="page-card__img-box">
            <img src="<?php echo get_theme_file_uri('img/shopsmart-logo-md.png') ?>" alt="placeholder" class="page-card__img">
          </div>
          <div class="page-card__rating">
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
          </div>
          <p class="page-card__price">$<?php echo'the price'; ?></p>
          <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
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