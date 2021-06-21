<!DOCTYPE html>
<html lang="en">

<head>
<?php wp_head(); ?>
</head>

<body>
  <div class="body">

    <!-- START HEADER -->
    <header>
      <div class="header">
        <div class="header__logo-box">
          <img src="<?php echo get_theme_file_uri('img/shopsmart-logo-sm.png')?>" alt="" class="header__logo">
        </div>

        <div class="header__heading-box">
          <a href="<?php echo site_url(); ?>" class="header__heading-link"><h1 class="header__heading">wiseBuysUSA.com</h1></a>
        </div>

        <!-- START HEADER NAV -->
        <div id="header__nav-open">
          <p class="header__nav-open-text">MENU</p>
        </div>
        <div class="header__nav-box" id="header__nav-box">


          <div id="header__nav-close">
            <!-- <p class="header__nav-close-text">CLOSE</p> -->
          </div>

  <?php
  // This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
  wp_nav_menu(array(
    'theme_location' => 'headerMenu'
  ));
  ?>

          <ul class="header__nav-list">

            <!-- START DEPARTMENTS -->
            <li class="header__nav-item">

              <p class="header__nav-link">Departments</p>

              <div class="header__nav-drop-1">
                <ul class="header__nav-drop-1-list">

                  <li class="header__nav-drop-1-item">
                    <a href="#" class="header__nav-drop-1-link">All up in yo grill</a>

                    <div class="header__nav-drop-2">
                      <ul class="header__nav-drop-2-list">
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">One</a>
                        </li>
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">Two</a>
                        </li>
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">Three</a>
                        </li>
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">Four</a>
                        </li>
                      </ul>
                    </div>

                  </li>


                </ul>
              </div>
            </li>
            <!-- END DEPARTMENTS -->

            <!-- START BRANDS -->
            <li class="header__nav-item">

              <p class="header__nav-link">Brands</p>

              <div class="header__nav-drop-1">
                <ul class="header__nav-drop-1-list">

                  <li class="header__nav-drop-1-item">
                    <a href="#" class="header__nav-drop-1-link">One</a>

                    <div class="header__nav-drop-2">
                      <ul class="header__nav-drop-2-list">
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">One</a>
                        </li>
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">Two</a>
                        </li>
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">Three</a>
                        </li>
                      </ul>
                    </div>

                  </li>

                </ul>
              </div>
            </li>
            <!-- END BRANDS -->

            <!-- START OTHER -->
            <li class="header__nav-item">

              <p class="header__nav-link">Other</p>

              <div class="header__nav-drop-1">
                <ul class="header__nav-drop-1-list">

                  <li class="header__nav-drop-1-item">
                    <a href="#" class="header__nav-drop-1-link">One</a>

                    <div class="header__nav-drop-2">
                      <ul class="header__nav-drop-2-list">
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">One</a>
                        </li>
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">Two</a>
                        </li>
                        <li class="header__nav-drop-2-item">
                          <a href="#" class="header__nav-drop-2-link">Three</a>
                        </li>
                      </ul>
                    </div>

                  </li>

                </ul>
              </div>
            </li>
            <!-- END OTHER -->

          </ul>
        </div>
        <!-- END HEADER NAV -->

        <!-- START SEARCH -->
        <div class="search">
          <form action="#" class="search__form">
            <input type="text" class="search__input" placeholder="Search...">
            <button class="search__button">
              <svg class="search__icon">
                <use xlink:href="<?php echo get_theme_file_uri('icons/symbol-defs.svg#icon-search')?>"></use>
              </svg>
            </button>
          </form>
        </div>
        <!-- END SEARCH -->

      </div>
    </header>
    <!-- END HEADER -->