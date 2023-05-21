

<?php
$page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');

$params['status'] = App\Consts::POST_STATUS['active'];
$rows = App\Http\Services\ContentService::getCmsTour($params)->get();
?>

<?php $__env->startSection('content'); ?>

<div class="slider-wrapper relative" id="slider-1114344935">
	<div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 6000,
            "pauseAutoPlayOnHover" : true,
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
		$image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
		$date = date('d/m/Y', strtotime($item->created_at));
		// Viet ham xu ly lay slug
		$alias = 'tour/'.$title ;
		?>
		<div class="row row-collapse row-full-width" id="row-329997347">


			<div id="col-1164883399" class="col small-12 large-12">
				<div class="col-inner">




					<div class="tabbed-content">

						<ul class="nav nav-divided nav-normal nav-size-xlarge nav-left">
							<li class="tab active has-icon"><a href="#tab_Đặt-vé"><span>Đặt vé</span></a></li>
							<li class="tab has-icon"><a href="#tab_tổng-quan"><span>Tổng quan</span></a></li>
							<li class="tab has-icon"><a href="#tab_Đánh-giá-của-khách-du-lịch"><span>Đánh giá của khách du lịch</span></a></li>
						</ul>
						<div class="tab-panels">
							<div class="panel active entry-content" id="tab_Đặt-vé">

								<div class="row row-collapse row-full-width align-middle" id="row-2123881415">


									<div id="col-895248443" class="col medium-6 small-12 large-6">
										<div class="col-inner">



											<div id="text-164661807" class="text">


												<h1>Đặt vé tour <?php echo e($title); ?></h1>

												<style>
													#text-164661807 {
														color: rgb(2, 145, 63);
													}

													#text-164661807>* {
														color: rgb(2, 145, 63);
													}
												</style>
											</div>

											<p> <?php echo e($brief); ?></p>
											<p></p>
											<div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_1_container">
												<form enctype="multipart/form-data" action="<?php echo e(route('frontend.booking.store')); ?>" method="post" class="frm-show-form " id="form_contact-form">
													<?php echo csrf_field(); ?>
													<div class="frm_form_fields ">
														<fieldset>
															<legend class="frm_screen_reader">Contact Us</legend>

															<div class="frm_fields_container">

																<div id="frm_field_1_container" class="frm_form_field form-field  frm_top_container frm12 frm_first">
																	<label for="field_qh4icy" id="field_qh4icy_label" class="frm_primary_label">
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>
																	<input type="text" id="field_qh4icy" name="name" value="" placeholder="Họ và tên" />


																</div>
																<div id="frm_field_7_container" class="frm_form_field form-field  frm_top_container frm6 frm_first">
																	<label for="field_6drb3" id="field_6drb3_label" class="frm_primary_label">
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>
																	<input type="tel" id="field_6drb3" name="phone" value="" placeholder="Số điện thoại" data-invmsg="Phone is invalid" aria-invalid="false" pattern="((\+\d{1,3}(-|.| )?\(?\d\)?(-| |.)?\d{1,5})|(\(?\d{2,6}\)?))(-|.| )?(\d{3,4})(-|.| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" />


																</div>
																<div id="frm_field_3_container" class="frm_form_field form-field  frm_top_container frm6">
																	<label for="field_29yf4d" id="field_29yf4d_label" class="frm_primary_label">
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>
																	<input type="email" id="field_29yf4d" name="email" value="" placeholder="Email" />


																</div>
																<div id="frm_field_12_container" class="frm_form_field form-field  frm_top_container frm3 frm_first">
																	<label for="field_zk44t" id="field_zk44t_label" class="frm_primary_label">Địa điểm
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>


																	<input type="text" id="field_29yf4d" name="tour_id" value="<?php echo e($title); ?>" disabled />

																	</select>



																</div>


																<div id="frm_field_14_container" class="frm_form_field form-field  frm_top_container frm3">
																	<label for="field_8ho5o" id="field_8ho5o_label" class="frm_primary_label">Date
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>
																	<input type="text" id="field_8ho5o" name="booking_date" value="" placeholder="dd-mm-yyyy" />


																</div>
																<div id="frm_field_15_container" class="frm_form_field form-field  frm_top_container frm3">
																	<label for="field_mye6q" id="field_mye6q_label" class="frm_primary_label">Time
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>
																	<input type="text" id="field_mye6q" name="booking_time" value="" placeholder="00:00 AM/PM" />


																</div>
																<div id="frm_field_17_container" class="frm_form_field form-field  frm_top_container frm6 frm_first">
																	<label for="field_1pbe7" id="field_1pbe7_label" class="frm_primary_label">Số lượng
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>
																	<input type="number" id="field_1pbe7" name="soluong" value="" placeholder="số vé" min="0" max="9999999" step="any" />
																</div>
																<!-- <div id="frm_field_18_container" class="frm_form_field form-field  frm_top_container frm6">
                          <label for="field_escis" id="field_escis_label" class="frm_primary_label">Trẻ em
                            <span class="frm_required" aria-hidden="true"></span>
                          </label>
                          <input type="number" id="field_escis" name="item_meta[18]" value="" data-invmsg="Number is invalid" aria-invalid="false" min="0" max="9999999" step="any" />


                        </div> -->
																<div id="frm_field_20_container" class="frm_form_field form-field  frm_top_container">
																	<label for="field_bg3xc" id="field_bg3xc_label" class="frm_primary_label">Ghi chú
																		<span class="frm_required" aria-hidden="true"></span>
																	</label>
																	<textarea name="customer_note" rows="6" cols="30"></textarea>


																</div>


																<div class="frm_submit">

																	<button class="frm_button_submit" type="submit">Đặt vé</button>


																</div>
															</div>
														</fieldset>
													</div>
												</form>
											</div>


										</div>
									</div>



									<div id="col-1266490219" class="col medium-6 small-12 large-6">
										<div class="col-inner">



											<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1242212942">
												<div class="img-inner dark">
													<img width="536" height="700" src=" <?php echo e($image); ?>" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
												</div>

												<style>
													#image_1242212942 {
														width: 100%;
													}
												</style>
											</div>



										</div>
									</div>




									<style>
										#row-2123881415>.col>.col-inner {
											padding: 0px 15px 0px 15px;
										}
									</style>
								</div>

							</div>
							<div class="panel entry-content" id="tab_tổng-quan">

								<div class="row" id="row-270465658">


									<div id="col-1266595418" class="col litexxts medium-6 small-12 large-6">
										<div class="col-inner">



											<h2><span style="color: #02913f;"><?php echo e($title); ?></span></h2>
											<p><?php echo e($brief); ?></p>
											<div class="is-divider divider clearfix" style="margin-top:0.3em;margin-bottom:0.3em;max-width:100%;background-color:rgb(160, 201, 229);"></div>

											<p>Thông tin tour :</p>
											<ul>
												<li><span style="color: #ec3237;">Lịch trình:</span> <?php echo e($item->lich_trinh); ?> Ngày</li>
											</ul>
											<ul>
												<li><span style="color: #ec3237;">Giá tour bao gồm:</span> <?php echo e($item->gia_baogom); ?></li>
											</ul>
											<ul>
												<li><span style="color: #ec3237;">Giá tour chưa bao gồm:</span> <?php echo e($item->gia_chuaco); ?></li>
											</ul>
											<ul>
												<li><span style="color: #ec3237;">Hành trình:</span><?php echo e($item->hanh_trinh); ?></li>
											</ul>
											<ul>
												<li><span style="color: #ec3237;">Giá xe đi lại:</span> <?php echo e(number_format($item->gia_xe, 0, ',', '.')); ?> VNĐ/người </li>
											</ul>
											<ul>
												<li><span style="color: #ec3237;">Hướng dẫn viên du lịch:</span> <?php echo e(number_format($item->gia_hdvien, 0, ',', '.')); ?> VNĐ/ngày</li>
											</ul>

										</div>
									</div>



									<div id="col-1207968441" class="col medium-6 small-12 large-6">
										<div class="col-inner">



											<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_111795914">
												<div class="img-inner dark">
													<img width="604" height="588" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-49-1.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" srcset="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-49-1.png 604w, https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-49-1-411x400.png 411w" sizes="(max-width: 604px) 100vw, 604px" />
												</div>

												<style>
													#image_111795914 {
														width: 100%;
													}
												</style>
											</div>



										</div>
									</div>



									<div id="col-406309879" class="col small-12 large-12">
										<div class="col-inner">



											<div class="row row-small row-full-width align-middle" id="row-2059723945">

<!-- 
												<div id="col-1328897423" class="col medium-6 small-12 large-6">
													<div class="col-inner">



														<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_759964729">
															<div class="img-inner dark">
																<img width="716" height="400" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Rectangle-89-2.png" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" />
															</div>

															<style>
																#image_759964729 {
																	width: 100%;
																}
															</style>
														</div>



													</div>
												</div> -->

                            



											</div>

										</div>
									</div>



								</div>

							</div>
							<div class="panel entry-content" id="tab_Đánh-giá-của-khách-du-lịch">


							</div>
						</div>
					</div>

				</div>
			</div>



		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</div>

	<div class="loading-spin dark large centered"></div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dulich\resources\views/frontend/pages/tour/index.blade.php ENDPATH**/ ?>