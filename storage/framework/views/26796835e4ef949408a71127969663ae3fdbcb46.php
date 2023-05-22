

<?php
$page_title = $taxonomy->title ?? ($page->title ?? $page->name);
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');

$title = $taxonomy->json_params->title->{$locale} ?? ($taxonomy->title ?? null);
$image = $taxonomy->json_params->image ?? null;
$seo_title = $taxonomy->json_params->seo_title ?? $title;
$seo_keyword = $taxonomy->json_params->seo_keyword ?? null;
$seo_description = $taxonomy->json_params->seo_description ?? null;
$seo_image = $image ?? null;
?>
<?php $__env->startPush('style'); ?>
<style>

</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="row row-collapse row-full-width align-center" id="row-1839331453">


  <div id="col-1449939549" class="col medium-9 small-12 large-9">
    <div class="col-inner">



      <div id="text-3956594320" class="text">


        <h1 style="text-align: center;"><span style="color: #02913f;"><?php echo e($page_title); ?></span></h1>
        <p> <?php echo e($page->description); ?> </p>

        <style>
          #text-3956594320 {
            text-align: center;
          }
        </style>
      </div>


    </div>
  </div>



</div>



<div class="row large-columns-3 medium-columns-1 small-columns-1">
  
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
              // $date = date('H:i d/m/Y', strtotime($item->created_at));
              $date = date('d', strtotime($item->created_at));
              $month = date('M', strtotime($item->created_at));
              $year = date('Y', strtotime($item->created_at));
              // Viet ham xu ly lay slug
              $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
              $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
            ?>
<div class="col post-item">
    <div class="col-inner">
      <a href="<?php echo e($alias); ?>" class="plain">
        <div class="box box-normal box-text-bottom box-blog-post has-hover">
          <div class="box-image">
            <div class="image-cover" style="padding-top:56.25%;">
              <img width="300" height="400" src="<?php echo e($image); ?>" class="attachment-medium size-medium wp-post-image" alt="" decoding="async"  />
            </div>
          </div>
          <div class="box-text text-center">
            <div class="box-text-inner blog-post-inner">


              <h5 class="post-title is-large "><?php echo e($title); ?></h5>
              <div class="is-divider"></div>
              <p class="from_the_blog_excerpt "><?php echo e(Str::limit($brief, 100)); ?></p>



            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($posts->withQueryString()->links('frontend.pagination.default')); ?>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/pages/post/category.blade.php ENDPATH**/ ?>