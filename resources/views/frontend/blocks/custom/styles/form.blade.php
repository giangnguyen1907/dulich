@if ($block)
@php
$title = $block->json_params->title->{$locale} ?? $block->title;
$brief = $block->json_params->brief->{$locale} ?? $block->brief;
$content = $block->json_params->content->{$locale} ?? $block->content;
$image = $block->image != '' ? $block->image : null;
$background = $block->image_background != '' ? $block->image_background : null;
$url_link = $block->url_link != '' ? $block->url_link : '';
$url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;

$params['status'] = App\Consts::POST_STATUS['active'];
$rows = App\Http\Services\ContentService::getCmsTour($params)->get();

@endphp
<section class="section" id="section_1672644687">
  <div class="bg section-bg fill bg-fill  bg-loaded">

  </div>



  <div class="section-content relative">


    <div class="slider-wrapper relative" id="slider-1718917071">
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


        @if ($rows)
        @foreach ($rows as $item)
        @php
        $title = $item->json_params->title->{$locale} ?? $item->title;
        $brief = $item->json_params->brief->{$locale} ?? $item->brief;
        $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
        $date = date('d/m/Y', strtotime($item->created_at));
        // Viet ham xu ly lay slug
        @endphp

        <div class="row row-full-width align-middle" id="row-1398400038">




          <div id="col-1972579741" class="col medium-5 small-12 large-5">
            <div class="col-inner">



              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_241075376">
                <div class="img-inner dark">
                  <img width="536" height="700" src="{{ $image }}" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                </div>

                <style>
                  #image_241075376 {
                    width: 100%;
                  }
                </style>
              </div>



            </div>
          </div>



          <div id="col-776641350" class="col medium-6 small-12 large-6">
            <div class="col-inner">



              <div id="text-2644840536" class="text">


                <h1>{{ $title }}</h1>

                <style>
                  #text-2644840536 {
                    color: rgb(2, 145, 63);
                  }

                  #text-2644840536>* {
                    color: rgb(2, 145, 63);
                  }
                </style>
              </div>

              <p><strong>{{ number_format($item->gia_ve, 0, ',', '.') }} VNĐ/người</strong></p>
              <p>{{ $brief }}</p>
              </p>
              <div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_1_container">
                <form enctype="multipart/form-data" action="{{ route('frontend.booking.store') }}" method="post" class="frm-show-form " id="form_contact-form">
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
                         
                  
                          <input type="text" id="field_29yf4d" name="tour_id" value="{{ $title }}"  disabled />
                           
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
                          <textarea name="content" rows="6" cols="30" ></textarea>


                        </div>
                    
                        
                        <div class="frm_submit">

                          <button class="frm_button_submit" type="submit" >Đặt vé</button>


                        </div>
                      </div>
                    </fieldset>
                  </div>
                </form>
              </div>


            </div>
          </div>



        </div>
        @endforeach
        @endif



      </div>

      <div class="loading-spin dark large centered"></div>

    </div>



  </div>


  <style>
    #section_1672644687 {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    #section_1672644687 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
    }

    #section_1672644687 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
    }
  </style>
</section>

@endif