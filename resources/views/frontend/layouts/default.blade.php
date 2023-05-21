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





     

       

        <!-- <section class="section" id="section_1173408859">
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
        </section> -->

 



      </div>



    </main>

    @include('frontend.blocks.footer.styles.default')

  </div>


  {{-- Include scripts --}}
  @include('frontend.panels.scripts')

</body>

</html>