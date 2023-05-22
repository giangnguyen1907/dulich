    <header id="header" class="header has-sticky sticky-shrink">
      <div class="header-wrapper">
        <div id="masthead" class="header-main nav-dark toggle-nav-dark">
          <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

            <!-- Logo -->
            <div id="logo" class="flex-col logo">

              <!-- Header logo -->
              <a href="<?php echo e(route('frontend.home')); ?>" title="DU LỊCH HOANG LIEN" rel="home">
                <img width="228" height="228" src="<?php echo e($web_information->image->logo_header ?? ''); ?>" class="header_logo header-logo" alt="DU LỊCH HOANG LIEN" /><img width="228" height="228" src="<?php echo e($web_information->image->logo_header ?? ''); ?>" class="header-logo-dark" alt="DU LỊCH HOANG LIEN" /></a>
            </div>

            <!-- Mobile Left Elements -->
            <div class="flex-col show-for-medium flex-left">
              <ul class="mobile-nav nav nav-left ">
              </ul>
            </div>

            <!-- Left Elements -->
            <div class="flex-col hide-for-medium flex-left flex-grow">

              <?php if(isset($menu)): ?>
              <?php
              $footer_menu = $menu->filter(function ($item, $key) {
              return $item->menu_type == 'header' && ($item->parent_id == null || $item->parent_id == 0);
              });

              $content = '';
              foreach ($footer_menu as $main_menu) {
              $url = $title = '';
              $title = isset($main_menu->json_params->title->{$locale}) && $main_menu->json_params->title->{$locale} != '' ? $main_menu->json_params->title->{$locale} : $main_menu->name;
              $content .= '';
              $content .= '<ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-spacing-large">';
                foreach ($menu as $item) {
                if ($item->parent_id == $main_menu->id) {
                $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                $url = $item->url_link;

                $active = $url == url()->current() ? 'active' : '';

                $content .= '<li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110 menu-item-design-default"><a href="' . $url . '" class="nav-top-link">' . $title . '</a>';
                  $content .= '</li>';
                }
                }
                $content .= '</ul>';
              $content .= '';
              }
              echo $content;
              ?>
              <?php endif; ?>

            </div>

            <!-- Right Elements -->
            <div class="flex-col hide-for-medium flex-right">
              <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-large">
                <li class="header-search-form search-form html relative has-icon">
                  <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                      <form method="get" class="searchform" action="<?php echo e(route('frontend.search.index')); ?>" role="search">
                        <?php echo csrf_field(); ?>
                        <div class="flex-row relative">
                          <div class="flex-col flex-grow">
                            <input type="search" class="search-field mb-0" name="keyword" value="<?php echo e($params['keyword'] ?? ''); ?>" id="s" placeholder="Tìm kiếm" />
                          </div>
                          <div class="flex-col">
                            <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                              <i class="icon-search"></i> </button>
                          </div>
                        </div>
                        <div class="live-search-results text-left z-top"></div>
                      </form>

                    </div>
                  </div>
                </li>
                <li class="html custom html_topbar_left">
                  <div class="gtranslate_wrapper"></div>
                  <script>
                    window.gtranslateSettings = {
                      "default_language": "vi",
                      "url_structure": "sub_directory",
                      "languages": ["vi", "en"],
                      "wrapper_selector": ".gtranslate_wrapper",
                      "flag_size": 24,
                      "alt_flags": {
                        "en": "usa"
                      }
                    }
                  </script>
                  <script src="assets/js/flags.js" defer></script>
                </li>
              </ul>
            </div>

            <!-- Mobile Right Elements -->
            <div class="flex-col show-for-medium flex-right">
              <ul class="mobile-nav nav nav-right ">
                <li class="nav-icon has-icon">
                  <a href="#" data-open="#main-menu" data-pos="right" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                    <i class="icon-menu"></i>
                  </a>
                </li>
              </ul>
            </div>

          </div>

        </div>
        <div class="header-bg-container fill">
          <div class="header-bg-image fill"></div>
          <div class="header-bg-color fill"></div>
        </div>
      </div>
    </header>


    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">


      <div class="sidebar-menu no-scrollbar ">

        <?php if(isset($menu)): ?>
        <?php
        $footer_menu = $menu->filter(function ($item, $key) {
        return $item->menu_type == 'header' && ($item->parent_id == null || $item->parent_id == 0);
        });

        $content = '';
        foreach ($footer_menu as $main_menu) {
        $url = $title = '';
        $title = isset($main_menu->json_params->title->{$locale}) && $main_menu->json_params->title->{$locale} != '' ? $main_menu->json_params->title->{$locale} : $main_menu->name;
        $content .= '';
        $content .= '<ul class="nav nav-sidebar nav-vertical nav-uppercase">';
          foreach ($menu as $item) {
          if ($item->parent_id == $main_menu->id) {
          $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
          $url = $item->url_link;

          $active = $url == url()->current() ? 'active' : '';

          $content .= '<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="' . $url . '" class="nav-top-link">' . $title . '</a>';
            $content .= '</li>';
          }
          }
          $content .= '</ul>';
        $content .= '';
        }
        echo $content;
        ?>
        <?php endif; ?>

      </div>


    </div><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/blocks/header/styles/default.blade.php ENDPATH**/ ?>