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
<section class="section" id="section_1998510438">
          <div class="bg section-bg fill bg-fill  bg-loaded">





          </div>



          <div class="section-content relative">


            <div class="row row-small row-full-width align-middle" id="row-617906349">


              <div id="col-1476007435" class="col medium-6 small-12 large-6">
                <div class="col-inner">



                  <div id="text-1716578461" class="text">


                    <h2 class="uppercase"><?php echo e($title); ?></h2>

                    <style>
                      #text-1716578461 {
                        color: rgb(2, 145, 63);
                      }

                      #text-1716578461>* {
                        color: rgb(2, 145, 63);
                      }
                    </style>
                  </div>

                  <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:30%;height:4px;background-color:rgb(160, 201, 229);"></div>

                  <a class="button primary" href="<?php echo e($url_link); ?>">
                    <span>Khám phá ngay</span>
                  </a>



                </div>
              </div>



              <div id="col-1187210052" class="col medium-6 small-12 large-6">
                <div class="col-inner">



                  <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_573773397">
                    <div class="img-inner dark">
                      <img width="978" height="400" src="<?php echo e($image); ?>" class="attachment-large size-large" alt="" decoding="async" loading="lazy" sizes="(max-width: 978px) 100vw, 978px" />
                    </div>

                    <style>
                      #image_573773397 {
                        width: 100%;
                      }
                    </style>
                  </div>



                </div>
              </div>




              <style>
                #row-617906349>.col>.col-inner {
                  padding: 0px 20px 0px 20px;
                }
              </style>
            </div>

          </div>


          <style>
            #section_1998510438 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_1998510438 .ux-shape-divider--top svg {
              height: 150px;
              --divider-top-width: 100%;
            }

            #section_1998510438 .ux-shape-divider--bottom svg {
              height: 150px;
              --divider-width: 100%;
            }
          </style>
        </section>
 <?php endif; ?><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/blocks/custom/styles/about_us.blade.php ENDPATH**/ ?>