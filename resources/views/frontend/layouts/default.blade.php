<!DOCTYPE html>
<html lang="{{ $locale ?? 'vi' }}">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HTZCCFD4BD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-HTZCCFD4BD');
  </script>
  <meta charset="UTF-8" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="pingback" href="https://hoanglienpark.com/xmlrpc.php" />

  <script>
    (function(html) {
      html.className = html.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement);
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    {{ $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? '')) }}
  </title>
  <link rel="icon" href="{{ $web_information->image->favicon ?? '' }}" type="image/x-icon">
  {{-- Print SEO --}}
  @php
  $seo_title = $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''));
  $seo_keyword = $seo_keyword ?? ($page->keyword ?? ($web_information->information->seo_keyword ?? ''));
  $seo_description = $seo_description ?? ($page->description ?? ($web_information->information->seo_description ?? ''));
  $seo_image = $seo_image ?? ($page->json_params->og_image ?? ($web_information->image->seo_og_image ?? ''));
  @endphp
  <meta name="description" content="{{ $seo_description }}" />
  <meta name="keywords" content="{{ $seo_keyword }}" />
  <meta name="news_keywords" content="{{ $seo_keyword }}" />
  <meta property="og:image" content="{{ $seo_image }}" />
  <meta property="og:title" content="{{ $seo_title }}" />
  <meta property="og:description" content="{{ $seo_description }}" />
  <meta property="og:url" content="{{ Request::fullUrl() }}" />
  {{-- End Print SEO --}}
  {{-- Include style for app --}}
  @include('frontend.panels.styles')
  {{-- Styles custom each page --}}
  @stack('style')
</head>

<body class="home page-template page-template-page-transparent-header-light page-template-page-transparent-header-light-php page page-id-35 lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">

  {{-- Include svg for app --}}
  @include('frontend.panels.svg')



  <div id="wrapper">


    @include('frontend.blocks.header.styles.default')

    <main id="main" class="">


      <div id="content" role="main">


      
        
              {{-- Foreach and print block content by current page --}}
                @if (isset($blocks_selected))
                  @foreach ($blocks_selected as $block)
                    @if (\View::exists('frontend.blocks.' . $block->block_code . '.index'))
                      @include('frontend.blocks.' . $block->block_code . '.index')
                    @else
                      {{ 'View: frontend.blocks.' . $block->block_code . '.index do not exists!' }}
                    @endif
                  @endforeach
                @endif

      

        <section class="section" id="section_860146813">
          <div class="bg section-bg fill bg-fill  bg-loaded">





          </div>



          <div class="section-content relative">


            <div class="row row-small row-full-width align-middle align-center" id="row-606409096">


              <div id="col-1665759566" class="col small-12 large-12">
                <div class="col-inner text-center">



                  <div class="row row-full-width" id="row-25438782">


                    <div id="col-1217733112" class="col medium-6 small-12 large-6">
                      <div class="col-inner text-center">



                        <div id="text-2758428658" class="text">


                          <h2 class="uppercase">TIn tức</h2>

                          <style>
                            #text-2758428658 {
                              color: rgb(2, 145, 63);
                            }

                            #text-2758428658>* {
                              color: rgb(2, 145, 63);
                            }
                          </style>
                        </div>

                        <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:20%;height:4px;background-color:rgb(160, 201, 229);"></div>

                        <p>Vườn quốc gia Hoàng Liên</p>

                      </div>
                    </div>



                  </div>

                </div>
              </div>



              <div id="col-1030178715" class="col medium-3 small-12 large-3">
                <div class="col-inner text-center">



                  <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                    <div class="box-image">
                      <div class="">
                        <img width="2560" height="1707" src="https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5225-scaled.jpg" class="attachment- size-" alt="" decoding="async" loading="lazy" srcset="https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5225-scaled.jpg 2560w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5225-600x400.jpg 600w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5225-1200x800.jpg 1200w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5225-768x512.jpg 768w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5225-1536x1024.jpg 1536w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5225-2048x1365.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" />
                        <div class="overlay" style="background-color:1"></div>
                      </div>
                    </div>

                    <div class="box-text text-center">
                      <div class="box-text-inner">


                        <div id="text-3410438327" class="text">


                          <p>Lorem ipsum dolor sit amet consectetur.</p>

                          <style>
                            #text-3410438327 {
                              text-align: left;
                            }
                          </style>
                        </div>


                      </div>
                    </div>
                  </div>


                </div>
              </div>



              <div id="col-59055847" class="col medium-3 small-12 large-3">
                <div class="col-inner text-center">



                  <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                    <div class="box-image">
                      <div class="">
                        <img width="1707" height="2560" src="https://hoanglienpark.com/wp-content/uploads/2023/04/ban-sua-2-scaled.jpg" class="attachment- size-" alt="" decoding="async" loading="lazy" srcset="https://hoanglienpark.com/wp-content/uploads/2023/04/ban-sua-2-scaled.jpg 1707w, https://hoanglienpark.com/wp-content/uploads/2023/04/ban-sua-2-267x400.jpg 267w, https://hoanglienpark.com/wp-content/uploads/2023/04/ban-sua-2-533x800.jpg 533w, https://hoanglienpark.com/wp-content/uploads/2023/04/ban-sua-2-768x1152.jpg 768w, https://hoanglienpark.com/wp-content/uploads/2023/04/ban-sua-2-1024x1536.jpg 1024w, https://hoanglienpark.com/wp-content/uploads/2023/04/ban-sua-2-1365x2048.jpg 1365w" sizes="(max-width: 1707px) 100vw, 1707px" />
                        <div class="overlay" style="background-color:1"></div>
                      </div>
                    </div>

                    <div class="box-text text-center">
                      <div class="box-text-inner">


                        <div id="text-281639322" class="text">


                          <p>Lorem ipsum dolor sit amet consectetur.</p>

                          <style>
                            #text-281639322 {
                              text-align: left;
                            }
                          </style>
                        </div>


                      </div>
                    </div>
                  </div>


                </div>
              </div>



              <div id="col-1277011103" class="col medium-3 small-12 large-3">
                <div class="col-inner text-center">



                  <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                    <div class="box-image">
                      <div class="">
                        <img width="2560" height="1707" src="https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5215-scaled.jpg" class="attachment- size-" alt="" decoding="async" loading="lazy" srcset="https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5215-scaled.jpg 2560w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5215-600x400.jpg 600w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5215-1200x800.jpg 1200w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5215-768x512.jpg 768w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5215-1536x1024.jpg 1536w, https://hoanglienpark.com/wp-content/uploads/2023/04/IMG_5215-2048x1365.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" />
                        <div class="overlay" style="background-color:1"></div>
                      </div>
                    </div>

                    <div class="box-text text-center">
                      <div class="box-text-inner">


                        <div id="text-45908216" class="text">


                          <p>Lorem ipsum dolor sit amet consectetur.</p>

                          <style>
                            #text-45908216 {
                              text-align: left;
                            }
                          </style>
                        </div>


                      </div>
                    </div>
                  </div>


                </div>
              </div>



              <div id="col-633211482" class="col medium-3 small-12 large-3">
                <div class="col-inner text-center">



                  <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                    <div class="box-image">
                      <div class="">
                        <img width="334" height="460" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-46-2.png" class="attachment- size-" alt="" decoding="async" loading="lazy" />
                        <div class="overlay" style="background-color:1"></div>
                      </div>
                    </div>

                    <div class="box-text text-center">
                      <div class="box-text-inner">


                        <div id="text-104975993" class="text">


                          <p>Lorem ipsum dolor sit amet consectetur.</p>

                          <style>
                            #text-104975993 {
                              text-align: left;
                            }
                          </style>
                        </div>


                      </div>
                    </div>
                  </div>


                </div>
              </div>



            </div>

          </div>


          <style>
            #section_860146813 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_860146813 .ux-shape-divider--top svg {
              height: 150px;
              --divider-top-width: 100%;
            }

            #section_860146813 .ux-shape-divider--bottom svg {
              height: 150px;
              --divider-width: 100%;
            }
          </style>
        </section>

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


                          <h2 class="uppercase">Bảo tồn và di sản</h2>

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

                        <p>Lorem ipsum dolor sit amet consectetur. Nisi integer orci nisl mi in. Tortor rhoncus et urna sed arcu lacus in. Tempus justo donec ornare blandit dolor viverra. Vitae.</p>

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


                <div class="row row-collapse row-full-width baoton" id="row-700326467">


                  <div id="col-997063821" class="col small-12 large-12">
                    <div class="col-inner" style="background-color:rgb(240, 240, 240);">



                      <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                        <div class="box-image">
                          <div class="">
                            <img width="944" height="400" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-55.png" class="attachment- size-" alt="" decoding="async" loading="lazy" />
                            <div class="overlay" style="background-color:1"></div>
                          </div>
                        </div>

                        <div class="box-text text-left">
                          <div class="box-text-inner">


                            <p><strong>Trâm ổi</strong></p>

                          </div>
                        </div>
                      </div>

                      <div class="row rowbaoton" id="row-1421258673">


                        <div id="col-698650207" class="col medium-10 small-9 large-10">
                          <div class="col-inner text-left">



                            <div id="text-2100151482" class="text">


                              <p>▷ Giá trị về khoa học<br> ▷ Giá trị về bảo tồn<br> ▷ Giá trị về văn hóa, lịch sử<br> ▷ Giá trị về mỹ quan</p>

                              <style>
                                #text-2100151482 {
                                  text-align: left;
                                }
                              </style>
                            </div>

                            <a class="button primary">
                              <span>Xem chi tiết</span>
                              <i class="icon-angle-right"></i></a>



                          </div>
                        </div>



                        <div id="col-1367068308" class="col medium-2 small-3 large-2">
                          <div class="col-inner">



                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1920278370">
                              <div class="img-inner dark">
                                <img width="501" height="800" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Bia-da-VQG-Hoang-Lien-Do-Quyen.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                              </div>

                              <style>
                                #image_1920278370 {
                                  width: 100%;
                                }
                              </style>
                            </div>



                          </div>
                        </div>




                        <style>
                          #row-1421258673>.col>.col-inner {
                            padding: 10px 15px 0px 15px;
                          }
                        </style>
                      </div>

                    </div>
                  </div>



                </div>
                <div class="row row-collapse row-full-width baoton" id="row-2025032075">


                  <div id="col-486113640" class="col small-12 large-12">
                    <div class="col-inner" style="background-color:rgb(240, 240, 240);">



                      <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                        <div class="box-image">
                          <div class="">
                            <img width="944" height="400" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-55.png" class="attachment- size-" alt="" decoding="async" loading="lazy" />
                            <div class="overlay" style="background-color:1"></div>
                          </div>
                        </div>

                        <div class="box-text text-left">
                          <div class="box-text-inner">


                            <p><strong>Trâm ổi</strong></p>

                          </div>
                        </div>
                      </div>

                      <div class="row rowbaoton" id="row-826309923">


                        <div id="col-654456256" class="col medium-10 small-9 large-10">
                          <div class="col-inner text-left">



                            <div id="text-1489665022" class="text">


                              <p>▷ Giá trị về khoa học<br> ▷ Giá trị về bảo tồn<br> ▷ Giá trị về văn hóa, lịch sử<br> ▷ Giá trị về mỹ quan</p>

                              <style>
                                #text-1489665022 {
                                  text-align: left;
                                }
                              </style>
                            </div>

                            <a class="button primary">
                              <span>Xem chi tiết</span>
                              <i class="icon-angle-right"></i></a>



                          </div>
                        </div>



                        <div id="col-622920534" class="col medium-2 small-3 large-2">
                          <div class="col-inner">



                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2033116851">
                              <div class="img-inner dark">
                                <img width="501" height="800" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Bia-da-VQG-Hoang-Lien-Do-Quyen.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
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


                <div class="row row-full-width align-middle" id="row-1398400038">


                  <div id="col-1482593696" class="col medium-1 small-12 large-1">
                    <div class="col-inner">



                      <div id="text-1989939176" class="text">


                        <h1>01</h1>

                        <style>
                          #text-1989939176 {
                            color: rgb(2, 145, 63);
                          }

                          #text-1989939176>* {
                            color: rgb(2, 145, 63);
                          }
                        </style>
                      </div>

                      <div class="is-divider divider clearfix" style="margin-top:0.3em;margin-bottom:0.3em;background-color:rgb(160, 201, 229);"></div>


                    </div>
                  </div>



                  <div id="col-1972579741" class="col medium-5 small-12 large-5">
                    <div class="col-inner">



                      <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_241075376">
                        <div class="img-inner dark">
                          <img width="536" height="700" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-49.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
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


                        <h1>Khám phá rừng già Sín Chải</h1>

                        <style>
                          #text-2644840536 {
                            color: rgb(2, 145, 63);
                          }

                          #text-2644840536>* {
                            color: rgb(2, 145, 63);
                          }
                        </style>
                      </div>

                      <p><strong>40.000đ/người</strong></p>
                      <p>Lorem ipsum dolor sit amet consectetur. Neque aliquam augue pretium mauris ipsum non sodales amet dignissim. Turpis quisque a netus at cursus sed varius. Egestas orci ac lorem vulputate ut quis.
                        Auctor sodales at in hac pharetra etiam eleifend sit in. Nunc a eget in egestas leo consectetur bibendum eget id. Et auctor quam at accumsan mi semper.</p>
                      </p>
                      <div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_1_container">
                        <form enctype="multipart/form-data" method="post" class="frm-show-form " id="form_contact-form">
                          <div class="frm_form_fields ">
                            <fieldset>
                              <legend class="frm_screen_reader">Contact Us</legend>

                              <div class="frm_fields_container">
                                <input type="hidden" name="frm_action" value="create" />
                                <input type="hidden" name="form_id" value="1" />
                                <input type="hidden" name="frm_hide_fields_1" id="frm_hide_fields_1" value="" />
                                <input type="hidden" name="form_key" value="contact-form" />
                                <input type="hidden" name="item_meta[0]" value="" />
                                <input type="hidden" id="frm_submit_entry_1" name="frm_submit_entry_1" value="ba36456585" /><input type="hidden" name="_wp_http_referer" value="/" />
                                <div id="frm_field_1_container" class="frm_form_field form-field  frm_top_container frm12 frm_first">
                                  <label for="field_qh4icy" id="field_qh4icy_label" class="frm_primary_label">
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="text" id="field_qh4icy" name="item_meta[1]" value="" placeholder="Họ và tên" data-invmsg="Name is invalid" aria-invalid="false" />


                                </div>
                                <div id="frm_field_7_container" class="frm_form_field form-field  frm_top_container frm6 frm_first">
                                  <label for="field_6drb3" id="field_6drb3_label" class="frm_primary_label">
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="tel" id="field_6drb3" name="item_meta[7]" value="" placeholder="Số điện thoại" data-invmsg="Phone is invalid" aria-invalid="false" pattern="((\+\d{1,3}(-|.| )?\(?\d\)?(-| |.)?\d{1,5})|(\(?\d{2,6}\)?))(-|.| )?(\d{3,4})(-|.| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" />


                                </div>
                                <div id="frm_field_3_container" class="frm_form_field form-field  frm_top_container frm6">
                                  <label for="field_29yf4d" id="field_29yf4d_label" class="frm_primary_label">
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="email" id="field_29yf4d" name="item_meta[3]" value="" placeholder="Email" data-invmsg="Please enter a valid email address" aria-invalid="false" />


                                </div>
                                <div id="frm_field_12_container" class="frm_form_field form-field  frm_top_container frm3 frm_first">
                                  <label for="field_zk44t" id="field_zk44t_label" class="frm_primary_label">Địa điểm
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <select name="item_meta[12]" id="field_zk44t" data-invmsg="Địa điểm is invalid" aria-invalid="false">
                                    <option value="Fansipan">
                                      Fansipan </option>
                                    <option value="Nam Kang Ho Tao">
                                      Nam Kang Ho Tao </option>
                                    <option value="Rừng già Sín Chải">
                                      Rừng già Sín Chải </option>
                                    <option value="Suối vang thác tình yêu">
                                      Suối vang thác tình yêu </option>
                                    <option value="Canyoning">
                                      Canyoning </option>
                                  </select>



                                </div>
                                <div id="frm_field_14_container" class="frm_form_field form-field  frm_top_container frm3">
                                  <label for="field_8ho5o" id="field_8ho5o_label" class="frm_primary_label">Date
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="text" id="field_8ho5o" name="item_meta[14]" value="" data-invmsg="Date is invalid" aria-invalid="false" />


                                </div>
                                <div id="frm_field_15_container" class="frm_form_field form-field  frm_top_container frm3">
                                  <label for="field_mye6q" id="field_mye6q_label" class="frm_primary_label">Time
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="text" id="field_mye6q" name="item_meta[15]" value="" data-invmsg="Time is invalid" aria-invalid="false" />


                                </div>
                                <div id="frm_field_17_container" class="frm_form_field form-field  frm_top_container frm6 frm_first">
                                  <label for="field_1pbe7" id="field_1pbe7_label" class="frm_primary_label">Người lớn
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="number" id="field_1pbe7" name="item_meta[17]" value="" data-invmsg="Number is invalid" aria-invalid="false" min="0" max="9999999" step="any" />


                                </div>
                                <div id="frm_field_18_container" class="frm_form_field form-field  frm_top_container frm6">
                                  <label for="field_escis" id="field_escis_label" class="frm_primary_label">Trẻ em
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="number" id="field_escis" name="item_meta[18]" value="" data-invmsg="Number is invalid" aria-invalid="false" min="0" max="9999999" step="any" />


                                </div>
                                <div id="frm_field_20_container" class="frm_form_field form-field  frm_top_container">
                                  <label for="field_bg3xc" id="field_bg3xc_label" class="frm_primary_label">Total
                                    <span class="frm_required" aria-hidden="true"></span>
                                  </label>
                                  <input type="text" id="field_bg3xc" name="item_meta[20]" value="" data-invmsg="Total is invalid" aria-invalid="false" />


                                </div>
                                <input type="hidden" name="item_key" value="" />
                                <div class="frm_verify" aria-hidden="true">
                                  <label for="frm_email_1">
                                    If you are human, leave this field blank. </label>
                                  <input type="text" class="frm_verify" id="frm_email_1" name="frm_verify" value="" />
                                </div>
                                <div class="frm_submit">

                                  <button class="frm_button_submit" type="submit">Submit</button>


                                </div>
                              </div>
                            </fieldset>
                          </div>
                        </form>
                      </div>


                    </div>
                  </div>



                </div>

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

        <section class="section" id="section_1173408859">
          <div class="bg section-bg fill bg-fill  bg-loaded">





          </div>



          <div class="section-content relative">


            <div class="row row-small row-full-width" id="row-1468400075">


              <div id="col-1702932315" class="col small-12 large-12">
                <div class="col-inner text-center">



                  <div id="text-3394294279" class="text">


                    <h1 class="uppercase" style="text-align: center;">Hình ảnh và Video</h1>

                    <style>
                      #text-3394294279 {
                        color: rgb(2, 145, 63);
                      }

                      #text-3394294279>* {
                        color: rgb(2, 145, 63);
                      }
                    </style>
                  </div>

                  <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:20%;height:4px;background-color:rgb(160, 201, 229);"></div>


                </div>
              </div>



              <div id="col-1796766508" class="col medium-8 small-12 large-8">
                <div class="col-inner">




                  <div class="banner has-hover" id="banner-754767826">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill">
                        <div class="bg fill bg-fill "></div>

                      </div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>

                        <div id="text-box-1336434892" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                          <div class="text-box-content text dark">

                            <div class="text-inner text-center">


                              <div class="video-button-wrapper" style="font-size:140%"><a href="https://www.youtube.com/watch?v=f3Hh_qSkpaA" class="button open-video icon circle is-outline is-xlarge"><i class="icon-play" style="font-size:1.5em;"></i></a></div>


                            </div>
                          </div>

                          <style>
                            #text-box-1336434892 {
                              width: 60%;
                            }

                            #text-box-1336434892 .text-box-content {
                              font-size: 100%;
                            }
                          </style>
                        </div>


                      </div>
                    </div>


                    <style>
                      #banner-754767826 {
                        padding-top: 400px;
                      }

                      #banner-754767826 .bg.bg-loaded {
                        background-image: url(https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-59.png);
                      }

                      #banner-754767826 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                      }

                      #banner-754767826 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                      }
                    </style>
                  </div>



                </div>
              </div>



              <div id="col-601989572" class="col medium-4 small-12 large-4">
                <div class="col-inner">




                  <div class="banner has-hover" id="banner-490228954">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill">
                        <div class="bg fill bg-fill "></div>

                      </div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>

                        <div id="text-box-870672713" class="text-box banner-layer x100 md-x100 lg-x100 y0 md-y0 lg-y0 res-text">
                          <div class="text-box-content text dark">

                            <div class="text-inner text-center">


                              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_887948879">
                                <a class="" href="#">
                                  <div class="img-inner dark">
                                    <img width="88" height="88" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Frame-91.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                  </div>
                                </a>
                                <style>
                                  #image_887948879 {
                                    width: 100%;
                                  }
                                </style>
                              </div>



                            </div>
                          </div>

                          <style>
                            #text-box-870672713 {
                              width: 20%;
                            }

                            #text-box-870672713 .text-box-content {
                              font-size: 100%;
                            }
                          </style>
                        </div>


                      </div>
                    </div>


                    <style>
                      #banner-490228954 {
                        padding-top: 400px;
                      }

                      #banner-490228954 .bg.bg-loaded {
                        background-image: url(https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-60.png);
                      }

                      #banner-490228954 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                      }

                      #banner-490228954 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                      }
                    </style>
                  </div>



                </div>
              </div>



              <div id="col-485510486" class="col medium-4 small-12 large-4">
                <div class="col-inner">




                  <div class="banner has-hover" id="banner-1790433643">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill">
                        <div class="bg fill bg-fill "></div>

                      </div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>

                        <div id="text-box-1418499030" class="text-box banner-layer x100 md-x100 lg-x100 y0 md-y0 lg-y0 res-text">
                          <div class="text-box-content text dark">

                            <div class="text-inner text-center">


                              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_966405905">
                                <a class="" href="#">
                                  <div class="img-inner dark">
                                    <img width="88" height="88" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Frame-91.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                  </div>
                                </a>
                                <style>
                                  #image_966405905 {
                                    width: 100%;
                                  }
                                </style>
                              </div>



                            </div>
                          </div>

                          <style>
                            #text-box-1418499030 {
                              width: 20%;
                            }

                            #text-box-1418499030 .text-box-content {
                              font-size: 100%;
                            }
                          </style>
                        </div>


                      </div>
                    </div>


                    <style>
                      #banner-1790433643 {
                        padding-top: 300px;
                      }

                      #banner-1790433643 .bg.bg-loaded {
                        background-image: url(https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-61.png);
                      }

                      #banner-1790433643 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                      }

                      #banner-1790433643 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                      }
                    </style>
                  </div>



                </div>
              </div>



              <div id="col-392388011" class="col medium-4 small-12 large-4">
                <div class="col-inner">




                  <div class="banner has-hover" id="banner-551651034">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill">
                        <div class="bg fill bg-fill "></div>

                      </div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>

                        <div id="text-box-1584564326" class="text-box banner-layer x100 md-x100 lg-x100 y0 md-y0 lg-y0 res-text">
                          <div class="text-box-content text dark">

                            <div class="text-inner text-center">


                              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_361128791">
                                <a class="" href="#">
                                  <div class="img-inner dark">
                                    <img width="88" height="88" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Frame-91.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                  </div>
                                </a>
                                <style>
                                  #image_361128791 {
                                    width: 100%;
                                  }
                                </style>
                              </div>



                            </div>
                          </div>

                          <style>
                            #text-box-1584564326 {
                              width: 20%;
                            }

                            #text-box-1584564326 .text-box-content {
                              font-size: 100%;
                            }
                          </style>
                        </div>


                      </div>
                    </div>


                    <style>
                      #banner-551651034 {
                        padding-top: 300px;
                      }

                      #banner-551651034 .bg.bg-loaded {
                        background-image: url(https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-62.png);
                      }

                      #banner-551651034 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                      }

                      #banner-551651034 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                      }
                    </style>
                  </div>



                </div>
              </div>



              <div id="col-723197458" class="col medium-4 small-12 large-4">
                <div class="col-inner">




                  <div class="banner has-hover" id="banner-1937299464">
                    <div class="banner-inner fill">
                      <div class="banner-bg fill">
                        <div class="bg fill bg-fill "></div>

                      </div>

                      <div class="banner-layers container">
                        <div class="fill banner-link"></div>

                        <div id="text-box-1659769772" class="text-box banner-layer x100 md-x100 lg-x100 y0 md-y0 lg-y0 res-text">
                          <div class="text-box-content text dark">

                            <div class="text-inner text-center">


                              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_511301236">
                                <a class="" href="#">
                                  <div class="img-inner dark">
                                    <img width="72" height="72" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Frame-94.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                  </div>
                                </a>
                                <style>
                                  #image_511301236 {
                                    width: 100%;
                                  }
                                </style>
                              </div>



                            </div>
                          </div>

                          <style>
                            #text-box-1659769772 {
                              width: 16%;
                            }

                            #text-box-1659769772 .text-box-content {
                              font-size: 100%;
                            }
                          </style>
                        </div>


                      </div>
                    </div>


                    <style>
                      #banner-1937299464 {
                        padding-top: 300px;
                      }

                      #banner-1937299464 .bg.bg-loaded {
                        background-image: url(https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-60.png);
                      }

                      #banner-1937299464 .ux-shape-divider--top svg {
                        height: 150px;
                        --divider-top-width: 100%;
                      }

                      #banner-1937299464 .ux-shape-divider--bottom svg {
                        height: 150px;
                        --divider-width: 100%;
                      }
                    </style>
                  </div>



                </div>
              </div>



              <div id="col-1925313153" class="col small-12 large-12">
                <div class="col-inner text-center">



                  <a class="button primary">
                    <span>Xem thêm</span>
                  </a>



                </div>
              </div>



            </div>

          </div>


          <style>
            #section_1173408859 {
              padding-top: 30px;
              padding-bottom: 30px;
            }

            #section_1173408859 .ux-shape-divider--top svg {
              height: 150px;
              --divider-top-width: 100%;
            }

            #section_1173408859 .ux-shape-divider--bottom svg {
              height: 150px;
              --divider-width: 100%;
            }
          </style>
        </section>

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



                                  <p><span style="color: #00a859;"><strong>Ms.Huong Anh</strong></span></p>
                                  <p>Tour du lịch Trạm biên &#8211; rừng già Sín Chải &#8211; Trạm biên</p>
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



                            <p>Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a
                              aliquet. Facilisi nunc quam commodo at volutpat. At egestas et ut lorem. Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam
                              dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a aliquet.</p>

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



                  <div id="col-2117881098" class="col hide-for-small medium-6 small-12 large-6 tip-top" title="colbaoton_row">
                    <div class="col-inner" style="background-color:rgb(240, 240, 240);">



                      <div class="row row-collapse rowcolbaoton_row" id="row-1463617562">


                        <div id="col-1169624443" class="col small-12 large-12">
                          <div class="col-inner">



                            <div class="row row-collapse row2_baoton_row" id="row-2098953086">


                              <div id="col-1059511824" class="col medium-2 small-4 large-2">
                                <div class="col-inner">



                                  <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_835062293">
                                    <div class="img-inner dark">
                                      <img width="75" height="75" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-54.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                      #image_835062293 {
                                        width: 100%;
                                      }
                                    </style>
                                  </div>



                                </div>
                              </div>



                              <div id="col-1627942098" class="col medium-10 small-8 large-10 tip-top" title="colbaoton_row2">
                                <div class="col-inner">



                                  <p><span style="color: #00a859;"><strong>Ms.Huong Anh</strong></span></p>
                                  <p>Tour du lịch Trạm biên &#8211; rừng già Sín Chải &#8211; Trạm biên</p>
                                  <p><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"></p>

                                </div>

                                <style>
                                  #col-1627942098>.col-inner {
                                    margin: 0px 0px 0px 15px;
                                  }
                                </style>
                              </div>



                            </div>

                          </div>

                          <style>
                            #col-1169624443>.col-inner {
                              padding: 15px 0px 0px 0px;
                            }
                          </style>
                        </div>



                        <div id="col-134409214" class="col small-12 large-12">
                          <div class="col-inner">



                            <p>Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a
                              aliquet. Facilisi nunc quam commodo at volutpat. At egestas et ut lorem. Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam
                              dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a aliquet.</p>

                          </div>
                        </div>



                      </div>

                    </div>

                    <style>
                      #col-2117881098>.col-inner {
                        padding: 10px 0px 0px 0px;
                      }
                    </style>
                  </div>




                  <style>
                    #row-1523001912>.col>.col-inner {
                      padding: 0px 20px 0px 20px;
                    }
                  </style>
                </div>
                <div class="row row-full-width baoton_row" id="row-1196122818">


                  <div id="col-1748295424" class="col medium-6 small-12 large-6 tip-top" title="colbaoton_row">
                    <div class="col-inner" style="background-color:rgb(240, 240, 240);">



                      <div class="row row-collapse rowcolbaoton_row" id="row-698918791">


                        <div id="col-456028539" class="col small-12 large-12">
                          <div class="col-inner">



                            <div class="row row-collapse row2_baoton_row" id="row-12875145">


                              <div id="col-1257417978" class="col medium-2 small-4 large-2">
                                <div class="col-inner">



                                  <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1536576394">
                                    <div class="img-inner dark">
                                      <img width="75" height="75" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-54.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                      #image_1536576394 {
                                        width: 100%;
                                      }
                                    </style>
                                  </div>



                                </div>
                              </div>



                              <div id="col-1762373952" class="col medium-10 small-8 large-10 tip-top" title="colbaoton_row2">
                                <div class="col-inner">



                                  <p><span style="color: #00a859;"><strong>Ms.Huong Anh</strong></span></p>
                                  <p>Tour du lịch Trạm biên &#8211; rừng già Sín Chải &#8211; Trạm biên</p>
                                  <p><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"></p>

                                </div>

                                <style>
                                  #col-1762373952>.col-inner {
                                    margin: 0px 0px 0px 15px;
                                  }
                                </style>
                              </div>



                            </div>

                          </div>

                          <style>
                            #col-456028539>.col-inner {
                              padding: 15px 0px 0px 0px;
                            }
                          </style>
                        </div>



                        <div id="col-453710095" class="col small-12 large-12">
                          <div class="col-inner">



                            <p>Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a
                              aliquet. Facilisi nunc quam commodo at volutpat. At egestas et ut lorem. Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam
                              dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a aliquet.</p>

                          </div>
                        </div>



                      </div>

                    </div>

                    <style>
                      #col-1748295424>.col-inner {
                        padding: 10px 0px 0px 0px;
                      }
                    </style>
                  </div>



                  <div id="col-973973810" class="col hide-for-small medium-6 small-12 large-6 tip-top" title="colbaoton_row">
                    <div class="col-inner" style="background-color:rgb(240, 240, 240);">



                      <div class="row row-collapse rowcolbaoton_row" id="row-606107884">


                        <div id="col-1069011527" class="col small-12 large-12">
                          <div class="col-inner">



                            <div class="row row-collapse row2_baoton_row" id="row-1001432370">


                              <div id="col-1788974986" class="col medium-2 small-4 large-2">
                                <div class="col-inner">



                                  <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1112538612">
                                    <div class="img-inner dark">
                                      <img width="75" height="75" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Rectangle-54.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                      #image_1112538612 {
                                        width: 100%;
                                      }
                                    </style>
                                  </div>



                                </div>
                              </div>



                              <div id="col-2110922265" class="col medium-10 small-8 large-10 tip-top" title="colbaoton_row2">
                                <div class="col-inner">



                                  <p><span style="color: #00a859;"><strong>Ms.Huong Anh</strong></span></p>
                                  <p>Tour du lịch Trạm biên &#8211; rừng già Sín Chải &#8211; Trạm biên</p>
                                  <p><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"><img decoding="async" class="alignnone size-full wp-image-232" src="https://hoanglienpark.com/wp-content/uploads/2023/04/Group.png" alt="" width="16" height="16"></p>

                                </div>

                                <style>
                                  #col-2110922265>.col-inner {
                                    margin: 0px 0px 0px 15px;
                                  }
                                </style>
                              </div>



                            </div>

                          </div>

                          <style>
                            #col-1069011527>.col-inner {
                              padding: 15px 0px 0px 0px;
                            }
                          </style>
                        </div>



                        <div id="col-2105904715" class="col small-12 large-12">
                          <div class="col-inner">



                            <p>Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a
                              aliquet. Facilisi nunc quam commodo at volutpat. At egestas et ut lorem. Lorem ipsum dolor sit amet consectetur. Mauris ut mauris fermentum vitae dictum. Rutrum donec non eget nam
                              dolor augue turpis. Cras ut suscipit velit volutpat feugiat aliquam donec a aliquet.</p>

                          </div>
                        </div>



                      </div>

                    </div>

                    <style>
                      #col-973973810>.col-inner {
                        padding: 10px 0px 0px 0px;
                      }
                    </style>
                  </div>




                  <style>
                    #row-1196122818>.col>.col-inner {
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



      </div>



    </main>

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


                        <h5>Trung tâm Giáo dục môi trường và dịch vụ môi trường Hoàng Liên VƯỜN QUỐC GIA HOÀNG LIÊN</h5>

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


                        <p><img class="alignnone  wp-image-74" src="http://localhost:888/dulichhoanglien/wp-content/uploads/2023/04/Property-1location.png" alt="" width="12" height="12" /> Tổ 1, Phường Cầu Mây, Thị xã
                          Sa Pa, tỉnh Lào.<br /><img class="alignnone  wp-image-82" src="http://localhost:888/dulichhoanglien/wp-content/uploads/2023/04/Property-1phone-call-2.png" alt="" width="12" height="12" /> 0981.141.052 - 02143.872.027<br /><img class="alignnone  wp-image-78" src="http://localhost:888/dulichhoanglien/wp-content/uploads/2023/04/Property-1mail-1.png" alt="" width="12" height="12" /> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="640a12070c0d0a0c491215030c082408050b07050d4a030b124a120a">[email&#160;protected]</a></p>

                        <style>
                          #text-1358548746 {
                            text-align: left;
                          }
                        </style>
                      </div>


                    </div>
                  </div>



                </div>

              </div>
            </div>



            <div id="col-1357048813" class="col row2_sectionft medium-8 small-12 large-9">
              <div class="col-inner">



                <div class="row row-small" id="row-308437753">


                  <div id="col-1742599892" class="col medium-12 small-12 large-8">
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
                  </div>



                  <div id="col-535834409" class="col medium-12 small-12 large-4">
                    <div class="col-inner">



                      <p>Chia sẻ:</p>
                      <div class="social-icons follow-icons">
                        <a href="#" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook"></i></a><a href="#" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon primary button circle  twitter tooltip" title="Follow on Twitter" aria-label="Follow on Twitter"><i class="icon-twitter"></i></a><a href="/cdn-cgi/l/email-protection#97b4" data-label="E-mail" rel="nofollow" class="icon primary button circle  email tooltip" title="Send us an email" aria-label="Send us an email"><i class="icon-envelop"></i></a>
                      </div>


                    </div>
                  </div>



                  <div id="col-1464477471" class="col small-12 large-12">
                    <div class="col-inner">



                      <div class="row row-small" id="row-1727434403">


                        <div id="col-2095831440" class="col medium-4 small-6 large-2">
                          <div class="col-inner">



                            <h3><a href="#">Về chúng tôi</a></h3>
                            <div class="ux-menu stack stack-col justify-start">


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Giới thiệu </span>
                                </a>
                              </div>


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Tuyển dụng </span>
                                </a>
                              </div>



                            </div>


                          </div>
                        </div>



                        <div id="col-1318022828" class="col medium-3 small-6 large-2">
                          <div class="col-inner">



                            <h3><a href="#">Hoạt động</a></h3>
                            <div class="ux-menu stack stack-col justify-start">


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Tin tức du lịch </span>
                                </a>
                              </div>


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Trải nghiệm </span>
                                </a>
                              </div>



                            </div>


                          </div>
                        </div>



                        <div id="col-1412130334" class="col medium-5 small-6 large-3">
                          <div class="col-inner">



                            <h3>Tour du lịch</h3>
                            <div class="ux-menu stack stack-col justify-start">


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Fansipan </span>
                                </a>
                              </div>


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Nam Kang Ho Tao </span>
                                </a>
                              </div>


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Rừng già Sín Chải </span>
                                </a>
                              </div>


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Suối vàng thác tình yêu </span>
                                </a>
                              </div>


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Canyoning </span>
                                </a>
                              </div>



                            </div>


                          </div>
                        </div>



                        <div id="col-137121246" class="col medium-4 small-6 large-3">
                          <div class="col-inner">



                            <h3>Cẩm nang du lịch</h3>
                            <div class="ux-menu stack stack-col justify-start">


                              <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://hoanglienpark.com">
                                  <span class="ux-menu-link__text">
                                    Cẩm nang du lịch </span>
                                </a>
                              </div>



                            </div>


                          </div>
                        </div>



                        <div id="col-316883037" class="col medium-3 small-6 large-2">
                          <div class="col-inner">



                            <h3>Liên hệ</h3>

                          </div>
                        </div>



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

    </footer>

  </div>

  <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">


    <div class="sidebar-menu no-scrollbar ">


      <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="https://hoanglienpark.com/ve-chung-toi">Về chúng tôi</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="https://hoanglienpark.com/hoat-dong">Hoạt động</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="https://hoanglienpark.com/tour-du-lich">Tour du lịch</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107"><a href="https://hoanglienpark.com/cam-nang-du-lich">Cẩm nang du lịch</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="https://hoanglienpark.com/lien-he">Liên hệ</a></li>
      </ul>


    </div>


  </div>
  {{-- Include scripts --}}
  @include('frontend.panels.scripts')

</body>

</html>