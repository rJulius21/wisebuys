

<?php get_header(); ?>

<!-- START PAGE CONTENT-->
<div class="page">



  <!-- START MAIN GRID -->
  <div class="page__main-grid">

  <?php
  while(have_posts()){
    the_post();
  ?>

    <div class="page-content">
    <h3 class="page-content__heading"><?php the_title(); ?></h3>
  <?php the_content(); ?>

  <?php
  }
  ?>

  </div>
  <!-- END MAIN GRID -->

  

</div>

  

</div>
<!-- END PAGE CONTENT-->

<?php include 'partials/recent.php'; ?>
<?php include 'partials/recommended.php'; ?>


<?php get_footer(); ?>