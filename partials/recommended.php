<!-- START RECOMMENDED ROW -->
<div class="row row--flex-r">

<!-- START SLIDER CONTAINER -->
<div id="page-slider-recent" class="page-slider">
  <h2 class="page-slider__heading">Others also liked...</h2>

  <!-- START SLIDER ARROWS -->
  <div id="recom-arrow-left" class="page-slider__arrow page-slider__arrow--left">
  </div>

  <div id="recom-arrow-right" class="page-slider__arrow page-slider__arrow--right">
  </div>
  <!-- END SLIDER ARROWS -->

  <!-- START CARD VIEWPORT -->
  <div class="page-slider__display">

    <!-- START CARDS BOX -->
    <div id="page-slide-recom" class="page-slider__cards-box">

    <?php
          $recommendedPosts = new WP_Query(array(
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
<!-- END RECOMMENDED ROW -->