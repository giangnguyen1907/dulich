<footer id="footer" class="light border-0 bg-light">
  <div class="container">
    <!-- Footer Widgets
    ============================================= -->
    <div class="footer-widgets-wrap">
      <div class="row col-mb-50">
        <div class="col-lg-4">
          <div class="widget clearfix">
            <div class="footer-logo-wrapper">
              <img src="{{ $web_information->image->logo_footer ?? '' }}" width="auto" height="auto" alt="Image"
                style="max-width: 100%" class="footer-logo">
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="widget widget_links">
            @isset($menu)
              @php
                $footer_menu = $menu->filter(function ($item, $key) {
                    return $item->menu_type == 'footer' && ($item->parent_id == null || $item->parent_id == 0);
                });
                
                $content = '';
                foreach ($footer_menu as $main_menu) {
                    $url = $title = '';
                    $title = isset($main_menu->json_params->title->{$locale}) && $main_menu->json_params->title->{$locale} != '' ? $main_menu->json_params->title->{$locale} : $main_menu->name;
                    $content .= '';
                    $content .= '<h4>' . $title . '</h4>';
                    $content .= '<ul>';
                    foreach ($menu as $item) {
                        if ($item->parent_id == $main_menu->id) {
                            $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                            $url = $item->url_link;
                
                            $active = $url == url()->current() ? 'active' : '';
                
                            $content .= '<li><a href="' . $url . '">' . $title . '</a>';
                            $content .= '</li>';
                        }
                    }
                    $content .= '</ul>';
                    $content .= '';
                }
                echo $content;
              @endphp
            @endisset
            <p class="text-start my-2 text-uppercase">
              {!! $web_information->information->site_name ?? '' !!}
            </p>

            <p class="text-start my-2">
              @lang('mst'):
              {!! $web_information->information->mst ?? '' !!}
            </p>
            <p class="text-start my-2">
              @lang('address'):
              {!! $web_information->information->address ?? '' !!}
            </p>
            <p class="text-start my-2">
              @lang('stk'):
              {!! $web_information->information->stk ?? '' !!}
            </p>
            <p class="text-start my-2">
              @lang('Email'):
              {!! $web_information->information->email ?? '' !!}
            </p>
            
            <p class="text-start my-2">
              @lang('Phone'):
              {!! $web_information->information->phone ?? '' !!}
            </p>


          </div>
        </div>
        @isset($web_information->source_code->facebook_fanpage)
          <div class="col-sm-6 col-lg-4">
            <div class="widget clearfix">
              <h4>Facebook fanpage</h4>
              {!! $web_information->source_code->facebook_fanpage !!}
            </div>
          </div>
        @endisset
      </div>
    </div>
    <!-- .footer-widgets-wrap end -->
  </div>

  <!-- #copyrights end -->
</footer>
