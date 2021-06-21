
<!-- START FOOTER -->
<footer>
      <div class="footer">

        <div class="footer__links">
          <div class="footer__links footer__links--left">
  
            <ul class="footer__links-list">
              <li><a class="footer__link" a href="<?php echo site_url(); ?>">Report Site Issue</a></li>
              <li><a class="footer__link" a href="<?php echo site_url(); ?>">Report Non-American product</a></li>
              <li><a class="footer__link" a href="<?php echo site_url(); ?>">Report Product not Available</a></li>
            </ul>
          </div>
          <div class="footer__links footer__links--right">

  <?php
  // This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
  wp_nav_menu(array(
    'theme_location' => 'footerMenu'
  ));
  ?>
  
            <!-- <ul class="footer__links-list">
            <li><a class="footer__link" a href="<?php echo site_url('/departments'); ?>">Departments</a></li>
              <li><a class="footer__link" a href="<?php echo site_url('/brands'); ?>">Brands</a></li>
              <li><a class="footer__link" a href="<?php echo site_url(); ?>">issa link</a></li>
              <li><a class="footer__link" a href="<?php echo site_url(); ?>">issa notha link</a></li>
            </ul> -->
          </div>
        </div>

        <div class="footer__logos">
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
        </div>
        <div class="footer__logos">
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
          <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
        </div>
        <div class="footer__copy-box">
          <p class="footer__copy">shopSmart &copy; 2021</p>
        </div>

      </div>
    </footer>
    <!-- END FOOTER -->

  </div>

  <?php wp_footer(); ?>
</body>

</html>