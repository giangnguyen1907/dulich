@if ($block)
@php
// Filter all blocks by parent_id
$block_childs = $blocks->filter(function ($item, $key) use ($block) {
return $item->parent_id == $block->id;
});
@endphp


<div class="slider-wrapper relative" id="slider-735153101">
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



    @if ($block_childs)
    @foreach ($block_childs as $item)
    @php
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

    @endphp
    <div class="banner has-hover is-full-height" id="banner-754311615_{{ $item->iorder }}">
      <div class="banner-inner fill">
        <div class="banner-bg fill">
          <div class="bg fill bg-fill "></div>

        </div>

        <div class="banner-layers container">
          <div class="fill banner-link"></div>

          <div id="text-box-245051808" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
            <div data-parallax="-1" data-parallax-fade="true">
              <div data-animate="bounceIn">
                <div class="text-box-content text dark">

                  <div class="text-inner text-center">


                    <h4 class="thin-font">{{ $title }}</h4>
                    <h1 class="uppercase thin-font"><span data-line-height="xs">{{ $brief }}</span></h1>
                    <p class="lead">{{ $content }}</p>
                    <a class="button primary">
                      <span>Đặt vé ngay</span>
                    </a>



                  </div>
                </div>
              </div>
            </div>
            <style>
              #text-box-245051808 {
                width: 97%;
              }

              #text-box-245051808 .text-box-content {
                font-size: 100%;
              }

              @media (min-width:550px) {
                #text-box-245051808 {
                  width: 84%;
                }
              }
            </style>
          </div>


        </div>
      </div>


      <style>
        #banner-754311615_{{ $item->iorder }} {
          padding-top: 100%;
        }

        #banner-754311615_{{ $item->iorder }} .bg.bg-loaded {
          background-image: url({{ $image_for_screen }});
        }

        #banner-754311615_{{ $item->iorder }} .bg {
          background-position: 68% 27%;
        }

        #banner-754311615_{{ $item->iorder }} .ux-shape-divider--top svg {
          height: 150px;
          --divider-top-width: 100%;
        }

        #banner-754311615_{{ $item->iorder }} .ux-shape-divider--bottom svg {
          height: 150px;
          --divider-width: 100%;
        }
      </style>
    </div>

    @endforeach
    @endif

  </div>

  <div class="loading-spin dark large centered"></div>

</div>

@endif