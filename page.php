

<?php get_header(); ?>

<!-- START PAGE CONTENT-->
<div class="page">

  <?php the_content(); ?>

  <!-- START CARD-BRANDS -->
  <div class="card-lg">

    <div class="card-lg__heading-box">
      <h3><?php the_title(); ?></h3>
    </div>

    <!-- START CARD CONTENT -->
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
    <!-- END CARD CONTENT -->

  </div>
  <!-- END CARD-BRANDS -->

  <!-- START CARD-DEPARTMENTS -->
  <div class="card-lg">

    <div class="card-lg__heading-box">
      <h3><?php the_title(); ?></h3>
    </div>

    <!-- START CARD CONTENT -->
    <div class="card-lg__content">

      <?php
        $departmentsQuery = new WP_Query(array(
          'post_type' => 'department',
        ));

        while($departmentsQuery->have_posts()){
          $departmentsQuery->the_post();
          ?>

          <a href="#" class="card-lg__link">
            <div class="card-lg__img-box">
              <img class="card-lg__img card-lg__img--logo" src="<?php the_field('department_icon'); ?>"
                alt="<?php the_title(); ?> logo">
            </div>
          </a>
      <?php } wp_reset_postdata(); ?>

    </div>
    <!-- END CARD CONTENT -->

  </div>
  <!-- END CARD-DEPARTMENTS -->




















  <!-- START CARD-DEPARTMENTS -->
  <div class="card-lg">

    <div class="card-lg__heading-box">
      <h3>Report a problem</h3>
    </div>

    <!-- START CARD CONTENT -->
    <div class="card-lg__content">

      <div class="report">
        <form action="" class="report__form">
          <div class="report__group">
            <input  class="report__url" name="report__product" type="url" placeholder="Enter URL of item here">
          </div>

          <p class="report__instruction">
            Please select at least one option below
          </p>
        
          <div class="report__group">
            <label class="report__label" for="report__notUSA">Item is not made in the USA</label>
            <input class="report__checkbox" name="report__notUSA" type="checkbox" >
          </div>

          <div class="report__group">
            <label class="report__label" for="report__notAvailable">Item is no longer available</label>
            <input class="report__checkbox" name="report__notAvailable" type="checkbox" > 
          </div>

          <div class="report__group">
            <label class="report__label" for="report__priceChange">Item price has changed</label>
            <input class="report__checkbox" name="report__priceChange" type="checkbox">            
          </div>

          <textarea class="report__textarea" name="" id="" >Tell us more (optional)</textarea>
          <input class="report__submit" type="submit" value="Submit">
        </form>
      </div>

    </div>
    <!-- END CARD CONTENT -->

  </div>
  <!-- END CARD-DEPARTMENTS -->


















</div>
<!-- END PAGE CONTENT-->

<?php include 'partials/recent.php'; ?>
<?php include 'partials/recommended.php'; ?>


<?php get_footer(); ?>
