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
          <a href="<?php the_permalink(); ?>" class="page-card__buy-link">Buy it now!</a>

        </div>
        <!-- END CARD -->

      <?php
      }
      ?>

    </div>
    <!-- END CARDS BOX -->

  </div>
  <!-- END CARD VIEWPORT -->

</div>
<!-- END SLIDER CONTAINER -->

</div>
<!-- END RECOMMENDED ROW -->