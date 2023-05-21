


<footer id="footer" class="footer-wrapper">

  <section class="section sectionft" id="section_1425599113">
    <div class="bg section-bg fill bg-fill  bg-loaded">





    </div>



    <div class="section-content relative">


      <div class="row row-small row-full-width" id="row-939497924">


        <div id="col-1822483116" class="col row_sectionft medium-4 small-12 large-3">
          <div class="col-inner">



            <div class="row" id="row-195423266">


              <div id="col-308498473" class="col small-12 large-12">
                <div class="col-inner text-center">



                  <div id="text-3582077213" class="text">


                    <h5><?php echo $web_information->information->site_name ?? ''; ?></h5>

                    <style>
                      #text-3582077213 {
                        text-align: left;
                        color: rgb(1, 87, 38);
                      }

                      #text-3582077213>* {
                        color: rgb(1, 87, 38);
                      }
                    </style>
                  </div>

                  <div id="text-1358548746" class="text">


                    <p>
                      <?php echo app('translator')->get('address'); ?>:
                      <?php echo $web_information->information->address ?? ''; ?>

                    </p>

                    <p>
                      <?php echo app('translator')->get('Email'); ?>:
                      <?php echo $web_information->information->email ?? ''; ?>

                    </p>

                    <p>
                      <?php echo app('translator')->get('Phone'); ?>:
                      <?php echo $web_information->information->phone ?? ''; ?>

                    </p>

                    <style>
                      #text-1358548746 {
                        text-align: left;
                      }
                    </style>
                  </div>

                  
             
                <div class="col-inner" style="text-align:start">

                  <div class="social-icons follow-icons">
                    <a href="#" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook"></i></a>
                    <a href="#" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon primary button circle  twitter tooltip" title="Follow on Twitter" aria-label="Follow on Twitter"><i class="icon-twitter"></i></a>
                    <a href="/cdn-cgi/l/email-protection#97b4" data-label="E-mail" rel="nofollow" class="icon primary button circle  email tooltip" title="Send us an email" aria-label="Send us an email"><i class="icon-envelop"></i></a>
                  </div>


                </div>
        


                </div>
              </div>



            </div>

          </div>
        </div>



        <div id="col-1357048813" class="col row2_sectionft medium-8 small-12 large-9">
          <div class="col-inner">



            <div class="row row-small" id="row-308437753">


              <!-- <div id="col-1742599892" class="col medium-12 small-12 large-8">
                <div class="col-inner">



                  <p>Theo dõi tin tức mới nhất qua email:</p>

                  <div class="wpcf7 no-js" id="wpcf7-f15-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                      <p role="status" aria-live="polite" aria-atomic="true"></p>
                      <ul></ul>
                    </div>
                    <form action="/#wpcf7-f15-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="15" />
                        <input type="hidden" name="_wpcf7_version" value="5.7.6" />
                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f15-o1" />
                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                      </div>
                      <div class="flex-row form-flat medium-flex-wrap">
                        <div class="flex-col flex-grow">
                          <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email (required)" value="" type="email" name="your-email" /></span>
                          </p>
                        </div>
                        <div class="flex-col ml-half">
                          <p><input class="wpcf7-form-control has-spinner wpcf7-submit button" type="submit" value="Sign Up" />
                          </p>
                        </div>
                      </div>
                      <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                  </div>



                </div>
              </div> -->






              <div id="col-1464477471" class="col small-12 large-12">
                <div class="col-inner">



                  <div class="row row-small" id="row-1727434403">


                    <?php if(isset($menu)): ?>
                    <?php
                    $footer_menu = $menu->filter(function ($item, $key) {
                    return $item->menu_type == 'footer' && ($item->parent_id == null || $item->parent_id == 0);
                    });

                    $content = '';
                    foreach ($footer_menu as $main_menu) {
                    $url = $title = '';
                    $title = isset($main_menu->json_params->title->{$locale}) && $main_menu->json_params->title->{$locale} != '' ? $main_menu->json_params->title->{$locale} : $main_menu->name;
                    $content .= '';
                    $content .= '
                    <div id="col-2095831440" class="col medium-4 small-6 large-2">
                      <div class="col-inner">
                        <h3><a href="' . $url . '">' . $title . '</a></h3>';
                        $content .= ' <div class="ux-menu stack stack-col justify-start">';
                          foreach ($menu as $item) {
                          if ($item->parent_id == $main_menu->id) {
                          $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                          $url = $item->url_link;

                          $active = $url == url()->current() ? 'active' : '';

                          $content .= '<div class="ux-menu-link flex menu-item">
                            <a class="ux-menu-link__link flex" href="' . $url . '">
                              <span class="ux-menu-link__text">

                                ' . $title . ' </span>
                            </a>
                          </div>';

                          }
                          }
                          $content .= '
                        </div>';
                        $content .= '
                      </div>
                    </div>';
                    }
                    echo $content;
                    ?>
                    <?php endif; ?>





                  </div>

                </div>
              </div>

              



            </div>

          </div>
        </div>




        <style>
          #row-939497924>.col>.col-inner {
            padding: 0px 20px 0px 20px;
          }
        </style>
      </div>

    </div>


    <style>
      #section_1425599113 {
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: rgb(246, 250, 252);
      }

      #section_1425599113 .ux-shape-divider--top svg {
        height: 150px;
        --divider-top-width: 100%;
      }

      #section_1425599113 .ux-shape-divider--bottom svg {
        height: 150px;
        --divider-width: 100%;
      }
    </style>
  </section>

  <div class="absolute-footer dark medium-text-center text-center">
    <div class="container clearfix">


      <div class="footer-primary pull-left">
        <div class="copyright-footer">
          © 2023-2030 Vuonquocgiahoanglien. All rights reserved. </div>
      </div>
    </div>
  </div>

  <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link" aria-label="Go to top"><i class="icon-angle-up"></i></a>

</footer><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/blocks/footer/styles/default.blade.php ENDPATH**/ ?>