<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';
    
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
    
    $total_tracker = DB::table('tb_trackers')->sum('hits');
  ?>
  <div class="policy-wrap" style="background-image: url('<?php echo e($image_background); ?>');">
    <div class="container policy-container">
      <div class="row align-items-stretch">
        <?php if($block_childs): ?>
          <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $title_child = $item->json_params->title->{$locale} ?? $item->title;
              $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
              $content_child = $item->json_params->content->{$locale} ?? $item->content;
              $image_child = $item->image != '' ? $item->image : null;
              $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
              $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
              $icon = $item->icon != '' ? $item->icon : '';
              $style = $item->json_params->style ?? '';
            ?>
            <div class="col-xl col-lg-4 col-md-6 policy-item">
              <div class="feature-box fbox-plain">
                <div class="fbox-icon">
                  <a href="<?php echo e($url_link); ?>"><img src="<?php echo e($image_child); ?>" alt="<?php echo e($title_child); ?>" /></a>
                </div>
                <div class="fbox-content policy-title">
                  <h3><?php echo e($title_child); ?></h3>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl col-lg-4 col-md-6 policy-item">
            <div class="feature-box fbox-plain">
              <div class="fbox-icon">
                <a href="<?php echo e($url_link); ?>"><img src="<?php echo e($image_child); ?>" alt="<?php echo e($title_child); ?>" /></a>
              </div>
              <div class="fbox-content policy-title">
                <h3><?php echo e($total_tracker); ?> Lượt truy cập</h3>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\phanlong\resources\views/frontend/blocks/custom/styles/why_choose.blade.php ENDPATH**/ ?>