<!-- START RECENTS ROW -->
<div class="row row--flex-r">

<!-- START SLIDER CONTAINER -->
<div id="page-slider-recent" class="page-slider">
  <h2 class="page-slider__heading">Recently viewed</h2>

  <!-- START SLIDER ARROWS -->
  <div id="recent-arrow-left" class="page-slider__arrow page-slider__arrow--left">
  </div>

  <div id="recent-arrow-right" class="page-slider__arrow page-slider__arrow--right">
  </div>
  <!-- END SLIDER ARROWS -->

  <!-- START CARD VIEWPORT -->
  <div class="page-slider__display">

    <!-- START CARDS BOX -->
    <div id="page-slide-recent" class="page-slider__cards-box">

    <?php
          $recentPosts = new WP_Query(array(
            'posts_per_page' => 10,
            'category_name' => 'Accessories'
          ));

          while(have_posts()) {
            the_post(); ?>


            <!-- START CARD -->
            <div class="page-card">

              <a href="<?php the_permalink(); ?>"><h2 class="page-card__heading"><?php the_field('shortname'); ?></h2></a>
              <div class="page-card__img-box">
                <div class="page-card__img">
                  <?php the_field('thumb'); ?>
                </div>
              </div>
              
              <p class="page-card__price">$<?php the_field('price'); ?></p>
              <a href="<?php the_field('afflinks'); ?>" class="page-card__buy-link">Buy it now!</a>

            </div>
            <!-- END CARD -->

        <?php
            } wp_reset_postdata();
        ?>

    </div>
    <!-- END CARDS BOX -->

  </div>
  <!-- END CARD VIEWPORT -->

</div>
<!-- END SLIDER CONTAINER -->

</div>
<!-- END RECENTS ROW -->

<!-- CODE BELOW MAY BE USED LATER -->

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