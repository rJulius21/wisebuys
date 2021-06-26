

<!-- START TOP BREADCRUMB -->
<div class="page-breadcrumb">

<div class="page-breadcrumb__viewport">
<h2 class="archive-banner">
  <?php 
    if(is_category()) {
      echo "You're browsing in ";
      single_cat_title();
    } else{
      echo "You're browsing all products made in the USA";
    }
  ?>
</h2>
  <ul class="page-breadcrumb__list">
    <li class="page-breadcrumb__item">
      <p class="page-breadcrumb__item-text">first</p> <span> &gt;</span>
    </li>
    <li class="page-breadcrumb__item">
      <p class="page-breadcrumb__item-text">second</p> <span> &gt;</span>
    </li>
    <li class="page-breadcrumb__item">
      <p class="page-breadcrumb__item-text">third</p> <span> &gt;</span>
    </li>
  </ul>
</div>

<ul class="page-breadcrumb__pages-list">

  <a href="#" class="page-breadcrumb__page-arrow-link">
    <p class="page-breadcrumb__page-arrow">&laquo;</p>
  </a>
  <li class="page-breadcrumb__pages-item"><a href="#" class="page-breadcrumb__page-num-link">1</a></li>
  <li class="page-breadcrumb__pages-item"><a href="#" class="page-breadcrumb__page-num-link">2</a></li>
  <li class="page-breadcrumb__pages-item"><a href="#" class="page-breadcrumb__page-num-link">3</a></li>
  <a href="#" class="page-breadcrumb__page-arrow-link">
    <p class="page-breadcrumb__page-arrow">&raquo;</p>
  </a>
</ul>

<div style="margin-left: 40px;" >
<?php echo paginate_links(); ?>
</div>
</div>
<!-- END TOP BREADCRUMB -->

