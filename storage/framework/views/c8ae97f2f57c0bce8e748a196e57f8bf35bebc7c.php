

<?php
$title = $detail->json_params->title->{$locale} ?? $detail->title;
$brief = $detail->json_params->brief->{$locale} ?? null;
$content = $detail->json_params->content->{$locale} ?? null;
$image = $detail->image != '' ? $detail->image : null;
$image_thumb = $detail->image_thumb != '' ? $detail->image_thumb : null;
$date = date('H:i d/m/Y', strtotime($detail->created_at));

// For taxonomy
$taxonomy_json_params = json_decode($detail->taxonomy_json_params);
$taxonomy_title = $taxonomy_json_params->title->{$locale} ?? $detail->taxonomy_title;
$image_background = $taxonomy_json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? null);
$taxonomy_alias = Str::slug($taxonomy_title);
$alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $taxonomy_alias, $detail->taxonomy_id);

$seo_title = $detail->json_params->seo_title ?? $title;
$seo_keyword = $detail->json_params->seo_keyword ?? null;
$seo_description = $detail->json_params->seo_description ?? $brief;
$seo_image = $image ?? ($image_thumb ?? null);

?>



<?php $__env->startSection('content'); ?>

<div class="row row-large row-divided " style="
    padding-top: 20px;
">

  <div class="large-9 col">



    <article id="post-1662" class="post-1662 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
      <div class="article-inner ">
        <header class="entry-header">
          <div class="entry-header-text entry-header-text-top text-center">
            <h6 class="entry-category is-xsmall">
              <a href="<?php echo e($alias_category); ?>" rel="category tag"><?php echo e($taxonomy_title ?? ''); ?></a>
            </h6>

            <h1 class="entry-title"><?php echo e($title); ?></h1>
            <div class="entry-divider is-divider small"></div>

            <div class="entry-meta uppercase is-xsmall">
              <span class="posted-on">Posted on <a href="#" rel="bookmark"><time class="entry-date published" datetime="2023-04-26T07:56:46+00:00"><?php echo e($date); ?></time><time class="updated" datetime="2023-04-26T08:00:21+00:00"><?php echo e($date); ?></time></a></span><span class="byline"></span>
            </div>
          </div>
          <div class="entry-image relative">
            <a href="https://hoanglienpark.com/luu-tru/1662">
              <img src="<?php echo $image ?? ''; ?>" class="attachment-large size-large wp-post-image" alt="" decoding="async" /></a>
            <div class="badge absolute top post-date badge-outline">
              <!-- <div class="badge-inner">
                <span class="post-date-day">26</span><br>
                <span class="post-date-month is-small">Th4</span>
              </div> -->
            </div>
          </div>
        </header>
        <div class="entry-content single-page">


          <?php echo $content ?? ''; ?>

        </div>


        <!-- 
        <div class="entry-author author-box">
          <div class="flex-row align-top">
            <div class="flex-col mr circle">
              <div class="blog-author-image">
                <img alt='' src='https://secure.gravatar.com/avatar/75d23af433e0cea4c0e45a56dba18b30?s=90&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/75d23af433e0cea4c0e45a56dba18b30?s=180&#038;d=mm&#038;r=g 2x' class='avatar avatar-90 photo' height='90' width='90' loading='lazy' decoding='async' />
              </div>
            </div>
            <div class="flex-col flex-grow">
              <h5 class="author-name uppercase pt-half">
                admin </h5>
              <p class="author-desc small"></p>
            </div>
          </div>
        </div>

        <nav role="navigation" id="nav-below" class="navigation-post">
          <div class="flex-row next-prev-nav bt bb">
            <div class="flex-col flex-grow nav-prev text-left">
              <div class="nav-previous"><a href="https://hoanglienpark.com/luu-tru/1650" rel="prev"><span class="hide-for-small"><i class="icon-angle-left"></i></span> Những “bóng hồng” giữa đại ngàn</a></div>
            </div>
            <div class="flex-col flex-grow nav-next text-right">
              <div class="nav-next"><a href="https://hoanglienpark.com/luu-tru/1672" rel="next">Ghi nhận loài chim quý, hiếm ngoài tự nhiên ở Vườn quốc gia Hoàng Liên <span class="hide-for-small"><i class="icon-angle-right"></i></span></a></div>
            </div>
          </div>

        </nav> -->

      </div>
    </article>




    <div id="comments" class="comments-area">




      <!-- <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="/luu-tru/1662#respond" style="display:none;">Hủy</a></small></h3>
        <form action="https://hoanglienpark.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
          <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> <span class="required-field-message">Các trường bắt buộc được đánh dấu <span class="required">*</span></span></p>
          <p class="comment-form-comment"><label for="comment">Bình luận <span class="required">*</span></label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea></p>
          <p class="comment-form-author"><label for="author">Tên <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required /></p>
          <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email" required /></p>
          <p class="comment-form-url"><label for="url">Trang web</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200" autocomplete="url" /></p>
          <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label></p>
          <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Phản hồi" /> <input type='hidden' name='comment_post_ID' value='1662' id='comment_post_ID' />
            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
          </p>
        </form>
      </div> -->

    </div>
  </div>
  <div class="post-sidebar large-3 col">
    <div id="secondary" class="widget-area " role="complementary">
      <!-- <aside id="text-13" class="widget widget_text"><span class="widget-title "><span>About</span></span>
        <div class="is-divider small"></div>
        <div class="textwidget">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</div>
      </aside> -->
      <?php if(isset($latestPosts) && count($latestPosts) > 0): ?>
      <aside id="flatsome_recent_posts-17" class="widget flatsome_recent_posts"> <span class="widget-title "><span>Latest Posts</span></span>
        <div class="is-divider small"></div>
        <ul>
          <?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $title = $item->json_params->title->{$locale} ?? $item->title;
          $brief = $item->json_params->brief->{$locale} ?? $item->brief;
          $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
          $date = date('d/m/Y', strtotime($item->created_at));
          // Viet ham xu ly lay slug
          $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
          $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
          ?>
          <li class="recent-blog-posts-li">
            <div class="flex-row recent-blog-posts align-top pt-half pb-half">
              <div class="flex-col mr-half">
                <div class="badge post-date badge-small badge-outline">
                  <div class="badge-inner bg-fill">
                    <!-- <span class="post-date-day">26</span><br>
                    <span class="post-date-month is-xsmall">Th4</span> -->
                    <a href="<?php echo e($alias); ?>"><img src="<?php echo e($image); ?>" ></a>
                  </div>
                </div>
              </div>
              <div class="flex-col flex-grow">
                <a href="<?php echo e($alias); ?>" title="<?php echo e(Str::limit($title, 70)); ?>"><?php echo e(Str::limit($title, 70)); ?></a>
                <span class="post_comments op-7 block is-xsmall"><a href="<?php echo e($alias); ?>"></a></span>
              </div>
            </div>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </ul>
      </aside>
      <?php endif; ?>

      <!-- <aside id="recent-comments-5" class="widget widget_recent_comments"><span class="widget-title "><span>Recent Comments</span></span>
        <div class="is-divider small"></div>
        <ul id="recentcomments"></ul>
      </aside> -->
      <!-- <aside id="categories-14" class="widget widget_categories"><span class="widget-title "><span>Chuyên mục</span></span>
        <div class="is-divider small"></div>
        <ul>
          <li class="cat-item cat-item-33"><a href="https://hoanglienpark.com/luu-tru/category/tin-tuc">Cẩm nang du lịch</a> (18)
          </li>
          <li class="cat-item cat-item-1"><a href="https://hoanglienpark.com/luu-tru/category/khong-phan-loai">Chưa phân loại</a> (14)
          </li>
        </ul>

      </aside> -->
      <!-- <aside id="archives-7" class="widget widget_archive"><span class="widget-title "><span>Lưu trữ</span></span>
        <div class="is-divider small"></div>
        <ul>
          <li><a href='https://hoanglienpark.com/luu-tru/date/2023/04'>Tháng Tư 2023</a>&nbsp;(30)</li>
          <li><a href='https://hoanglienpark.com/luu-tru/date/2022/03'>Tháng Ba 2022</a>&nbsp;(1)</li>
        </ul>

      </aside> -->
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/pages/post/detail.blade.php ENDPATH**/ ?>