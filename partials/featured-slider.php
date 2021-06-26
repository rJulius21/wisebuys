<!-- START SLIDER -->
<div class="slider">

<div id="home-slider__arrow--left" class="page-slider__arrow page-slider__arrow--left"></div>
<div id="home-slider__arrow--right" class="page-slider__arrow page-slider__arrow--right"></div>

<div class="slider__container">

  <div class="slider__slide">

    <!--  START SLIDER CARD  -->
    <div id="lastClone" class="slider__card">

      <div class="slider__card-text-box">
        <a href="<?php  ?>" class="slider__card-heading-link"><h3 class="slider__card-heading">Product THREE</h3></a>
        <div class="slider__card-stars-box">
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?> "></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
        </div>
        <a href="#" class="slider__link">See details!</a>
      </div>

      <div class="slider__card-img">
        <img src="<?php echo get_theme_file_uri('/img/dummy/3.png') ?>" alt="placeholder3" class="slider__img">
      </div>
      <div class="slider__card-img">
        <img src="<?php echo get_theme_file_uri('/img/dummy/3.png') ?>" alt="placeholder" class="slider__img">
      </div>

    </div>
    <!--  END SLIDER CARD  -->


    <?php
          $featuredPosts = new WP_Query(array(
            'posts_per_page' => 5,
            'category_name' => 'Featured'
          ));

          while($featuredPosts->have_posts()) {
            $featuredPosts->the_post(); ?>

            <!--  START SLIDER CARD  -->
            <div class="slider__card">

              <div class="slider__card-text-box">
              <a href="<?php the_permalink(); ?>" class="slider__card-heading-link"><h3 class="slider__card-heading"><?php the_title(); ?></h3></a>
                <div class="slider__card-stars-box">
                  <svg class="slider__card-icon">
                    <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?> "></use>
                  </svg>
                  <svg class="slider__card-icon">
                    <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
                  </svg>
                  <svg class="slider__card-icon">
                    <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
                  </svg>
                  <svg class="slider__card-icon">
                    <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
                  </svg>
                  <svg class="slider__card-icon">
                    <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
                  </svg>
                </div>
                <a href="<?php the_permalink(); ?>" class="slider__link">See details!</a>
              </div>

              <div class="slider__card-img">
                <img src="<?php echo get_theme_file_uri('/img/dummy/1.png') ?>" alt="placeholder" class="slider__img">
              </div>
              <div class="slider__card-img">
                <img src="<?php echo get_theme_file_uri('/img/dummy/1.png') ?>" alt="placeholder" class="slider__img">
              </div>

              </div>
              <!--  END SLIDER CARD  -->

        <?php
            } wp_reset_postdata();
        ?>
    

    <!--  START SLIDER CARD  -->
    <div id="firstClone" class="slider__card">

      <div class="slider__card-text-box">
      <a href="#" class="slider__card-heading-link"><h3 class="slider__card-heading">Product ONE</h3></a>
        <div class="slider__card-stars-box">
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?> "></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
          <svg class="slider__card-icon">
            <use xlink:href="<?php echo get_theme_file_uri('/icons/symbol-defs.svg#icon-star') ?>"></use>
          </svg>
        </div>
        <a href="#" class="slider__link">See details!</a>
      </div>

      <div class="slider__card-img">
        <img src="<?php echo get_theme_file_uri('/img/dummy/1.png') ?>" alt="placeholder" class="slider__img">
      </div>
      <div class="slider__card-img">
        <img src="<?php echo get_theme_file_uri('/img/dummy/1.png') ?>" alt="placeholder" class="slider__img">
      </div>

    </div>
    <!--  END SLIDER CARD  -->

  </div>
  <!-- END SLIDER SLIDE -->

</div>
<!-- END SLIDER CONTAINER -->

</div>
<!-- END SLIDER -->





<?php

  // $featuredProduct = new WP_Query(array(
  //   'posts_per_page' => 2,
  //   'post_type' => 'featured-product',
  // )); 

  // while($featuredProduct->have_posts()){
  //   the_post();


  // }

?>
