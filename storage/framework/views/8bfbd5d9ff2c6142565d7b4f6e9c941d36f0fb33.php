<?php if($block): ?>
<?php
$title = $block->json_params->title->{$locale} ?? $block->title;
$brief = $block->json_params->brief->{$locale} ?? $block->brief;
$content = $block->json_params->content->{$locale} ?? $block->content;
$image = $block->image != '' ? $block->image : '';
$image_background = $block->image_background != '' ? $block->image_background : '';
$url_link = $block->url_link != '' ? $block->url_link : '';
$url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
$style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';

// Filter all blocks by parent_id
$block_childs = $blocks->filter(function ($item, $key) use ($block) {
return $item->parent_id == $block->id;
});
?>
<section class="section" id="section_87972038">
  <div class="bg section-bg fill bg-fill  bg-loaded">





  </div>



  <div class="section-content relative">


    <div class="row row-small row-full-width align-middle align-center" id="row-141992655">


      <div id="col-268887419" class="col small-12 large-12">
        <div class="col-inner text-center">



          <div class="row row-full-width" id="row-1376474982">


            <div id="col-1150760639" class="col medium-6 small-12 large-6">
              <div class="col-inner text-center">



                <div id="text-133627078" class="text">


                  <h2 class="uppercase">Đánh giá của khách hàng</h2>

                  <style>
                    #text-133627078 {
                      color: rgb(2, 145, 63);
                    }

                    #text-133627078>* {
                      color: rgb(2, 145, 63);
                    }
                  </style>
                </div>

                <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:40%;height:4px;background-color:rgb(160, 201, 229);"></div>


              </div>
            </div>



          </div>

        </div>
      </div>




      <style>
        #row-141992655>.col>.col-inner {
          padding: 0px 20px 0px 20px;
        }
      </style>
    </div>
    <div class="slider-wrapper relative" id="slider-1239455432">
      <div class="slider slider-nav-dots-simple slider-nav-circle slider-nav-normal slider-nav-dark slider-style-container slider-show-nav" data-flickity-options='{
"cellAlign": "left",
"imagesLoaded": true,
"lazyLoad": 1,
"freeScroll": false,
"wrapAround": true,
"autoPlay": 4000,
"pauseAutoPlayOnHover" : false,
"prevNextButtons": false,
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

       
        <div class="row row-full-width baoton_row" id="row-1523001912">

        <?php
        $params2['status'] = 'active';
        $rows2 = App\Http\Services\ContentService::getFeedback($params2)->limit(2)->get();
    
        ?>
        <?php $__currentLoopData = $rows2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php 
        $params3['id'] = $fb->tour_id;
        $tour = App\Http\Services\ContentService::getCmsTour($params3)->first();
        ?>
          <div id="col-867900854" class="col medium-6 small-12 large-6 tip-top" title="colbaoton_row">
            <div class="col-inner" style="background-color:rgb(240, 240, 240);">



              <div class="row row-collapse rowcolbaoton_row" id="row-1957659102">


                <div id="col-1139041433" class="col small-12 large-12">
                  <div class="col-inner">



                    <div class="row row-collapse row2_baoton_row" id="row-2104006599">


                      <div id="col-1490375016" class="col medium-2 small-4 large-2">
                        <div class="col-inner">



                          <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1314977363">
                            <div class="img-inner dark">
                              <img width="75" height="75" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-54.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                            </div>

                            <style>
                              #image_1314977363 {
                                width: 100%;
                              }
                            </style>
                          </div>



                        </div>
                      </div>



                      <div id="col-418849744" class="col medium-10 small-8 large-10 tip-top" title="colbaoton_row2">
                        <div class="col-inner">



                          <p><span style="color: #00a859;"><strong><?php echo e($fb->name); ?></strong></span></p>
                          <p><?php echo e($tour->title); ?></p>
                          <p><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"></p>

                        </div>

                        <style>
                          #col-418849744>.col-inner {
                            margin: 0px 0px 0px 15px;
                          }
                        </style>
                      </div>



                    </div>

                  </div>

                  <style>
                    #col-1139041433>.col-inner {
                      padding: 15px 0px 0px 0px;
                    }
                  </style>
                </div>



                <div id="col-1008258555" class="col small-12 large-12">
                  <div class="col-inner">



                    <p><?php echo e($fb->content); ?></p>

                  </div>
                </div>



              </div>

            </div>

            <style>
              #col-867900854>.col-inner {
                padding: 10px 0px 0px 0px;
              }
            </style>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 



         




          <style>
            #row-1523001912>.col>.col-inner {
              padding: 0px 20px 0px 20px;
            }
          </style>
        </div>
    

       

      </div>

      <div class="loading-spin dark large centered"></div>

    </div>



  </div>


  <style>
    #section_87972038 {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    #section_87972038 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
    }

    #section_87972038 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
    }
  </style>
</section>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/blocks/custom/styles/comment.blade.php ENDPATH**/ ?>