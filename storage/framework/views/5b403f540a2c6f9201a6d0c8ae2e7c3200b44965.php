<?php if($block): ?>
<?php
$title = $block->json_params->title->{$locale} ?? $block->title;
$brief = $block->json_params->brief->{$locale} ?? $block->brief;
$background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
$url_link = $block->url_link != '' ? $block->url_link : '';
$url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;

$params['status'] = App\Consts::POST_STATUS['active'];
$params['is_featured'] = true;
$params['is_type'] = App\Consts::POST_TYPE['post'];
$params['taxonomy_id'] = 37;

$rows = App\Http\Services\ContentService::getCmsPost($params)->get();
?>

<section class="section" id="section_1655152950">
  <div class="bg section-bg fill bg-fill  bg-loaded">





  </div>



  <div class="section-content relative">


    <div class="row row-small align-middle align-center" id="row-338857451">


      <div id="col-535427759" class="col small-12 large-12">
        <div class="col-inner text-center">



          <div class="row row-full-width" id="row-2043008871">


            <div id="col-1046518231" class="col medium-7 small-12 large-7">
              <div class="col-inner text-center">



                <div id="text-3757934395" class="text">


                  <h2 class="uppercase"><?php echo e($title); ?></h2>

                  <style>
                    #text-3757934395 {
                      color: rgb(2, 145, 63);
                    }

                    #text-3757934395>* {
                      color: rgb(2, 145, 63);
                    }
                  </style>
                </div>

                <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:30%;height:4px;background-color:rgb(160, 201, 229);"></div>

                <p><?php echo e($brief); ?></p>

              </div>
            </div>



          </div>

        </div>
      </div>



    </div>
    <div class="slider-wrapper relative baotons" id="slider-1565574502">
      <div class="slider slider-nav-dots-dashes-spaced slider-nav-circle slider-nav-normal slider-nav-dark slider-style-container slider-show-nav" data-flickity-options='{
"cellAlign": "left",
"imagesLoaded": true,
"lazyLoad": 1,
"freeScroll": true,
"wrapAround": true,
"autoPlay": false,
"pauseAutoPlayOnHover" : false,
"prevNextButtons": true,
"contain" : true,
"adaptiveHeight" : true,
"dragThreshold" : 10,
"percentPosition": true,
"pageDots": true,
"rightToLeft": false,
"draggable": true,
"selectedAttraction": 0.1,
"parallax" : 0,
"friction": 0.6        }'>

        
      <?php if($rows): ?>
      <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $title = $item->json_params->title->{$locale} ?? $item->title;
      $brief = $item->json_params->brief->{$locale} ?? $item->brief;
      $date = date('d/m/Y', strtotime($item->created_at));
      // Viet ham xu ly lay slug
      $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
      $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
      ?>
        <div class="row row-collapse row-full-width baoton" id="row-2025032075">


          <div id="col-486113640" class="col small-12 large-12">
            <div class="col-inner" style="background-color:rgb(240, 240, 240);">



              <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                <div class="box-image">
                  <div class="">
                    <img width="944" height="400" src="<?php echo e($item->image); ?>" class="attachment- size-" alt="" decoding="async" loading="lazy" />
                    <div class="overlay" style="background-color:1"></div>
                  </div>
                </div>

                <div class="box-text text-left">
                  <div class="box-text-inner">


                    <p><strong><?php echo $brief; ?></strong></p>

                  </div>
                </div>
              </div>

              <div class="row rowbaoton" id="row-826309923">


                <div id="col-654456256" class="col medium-10 small-9 large-10">
                  <div class="col-inner text-left">



                    <div id="text-1489665022" class="text">


                      <p><?php echo e($brief); ?></p>

                      <style>
                        #text-1489665022 {
                          text-align: left;
                        }
                      </style>
                    </div>

                    <a class="button primary" href="<?php echo e($alias); ?>">
                      <span>Xem chi tiết</span>
                      <i class="icon-angle-right"></i></a>



                  </div>
                </div>



                <div id="col-622920534" class="col medium-2 small-3 large-2">
                  <div class="col-inner">



                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2033116851">
                      <div class="img-inner dark">
                        <img width="501" height="800" src="<?php echo e($item->image_thumb); ?>" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                      </div>

                      <style>
                        #image_2033116851 {
                          width: 100%;
                        }
                      </style>
                    </div>



                  </div>
                </div>




                <style>
                  #row-826309923>.col>.col-inner {
                    padding: 10px 15px 0px 15px;
                  }
                </style>
              </div>

            </div>
          </div>



        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      <?php endif; ?>  

      </div>

      <div class="loading-spin dark large centered"></div>

    </div>



  </div>


  <style>
    #section_1655152950 {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    #section_1655152950 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
    }

    #section_1655152950 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
    }
  </style>
</section>

<?php endif; ?><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/blocks/custom/styles/testimonial.blade.php ENDPATH**/ ?>