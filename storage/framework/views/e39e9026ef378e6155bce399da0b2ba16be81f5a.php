<?php if($block): ?>
  <?php
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  ?>
  <section id="slider" class="slider-element swiper_wrapper min-vh-75" data-loop="true">

    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <?php if($block_childs): ?>
          <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $content = $item->json_params->content->{$locale} ?? $item->content;
              $image = $item->image != '' ? $item->image : null;
              $image_background = $item->image_background != '' ? $item->image_background : null;
              $video = $item->json_params->video ?? null;
              $video_background = $item->json_params->video_background ?? null;
              $url_link = $item->url_link != '' ? $item->url_link : null;
              $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
              $icon = $item->icon != '' ? $item->icon : '';
              $style = isset($item->json_params->style) && $item->json_params->style == 'd-none' ? 'd-none' : '';
              
              $image_for_screen = null;
              if ($agent->isDesktop() && $image_background != null) {
                  $image_for_screen = $image_background;
              } else {
                  $image_for_screen = $image;
              }
              
            ?>
            <div class="swiper-slide">
              <img src="<?php echo e($image_for_screen); ?>" alt="<?php echo e($title); ?>" style="height: 100%; width:100%;">
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

      </div>
      <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
      <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>

  </section>

<?php endif; ?>
<?php /**PATH D:\project\phanlong\resources\views/frontend/blocks/banner/styles/slide.blade.php ENDPATH**/ ?>