@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::TAXONOMY_STATUS['active'];
    $params['taxonomy'] = App\Consts::TAXONOMY['product'];
    
    $taxonomys = App\Http\Services\ContentService::getCmsTaxonomy($params)->get();
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['product'];
    $params['order_by'] = 'price';
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();

  @endphp

  @isset($taxonomys)
    @foreach ($taxonomys as $item_taxonomy)
      @php
        $title_taxonomy = $item_taxonomy->json_params->title->{$locale} ?? $item_taxonomy->title;
        $brief_taxonomy = $item_taxonomy->json_params->brief->{$locale} ?? null;
        $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title_taxonomy, $item_taxonomy->id);
      @endphp
      <div class="container clearfix">
        <div class="fancy-title title-center title-border topmargin">
          <h3 class="text-uppercase">{{ $title_taxonomy }}</h3>
        </div>

        <div class="row grid-6">
          @foreach ($rows as $item)
            @if ($item->taxonomy_id == $item_taxonomy->id)
              @php
                $title = $item->json_params->title->{$locale} ?? $item->title;
                $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                $date = date('H:i d/m/Y', strtotime($item->created_at));
                // Viet ham xu ly lay slug
                // $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $item->taxonomy_title, $item->taxonomy_id);
                $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title, $item->id, 'detail');
              @endphp
              <div class="col-lg-3 col-md-4 px-2">
                <div class="product">
                  <div class="product-image">
                    <a href="{{ $alias }}"><img src="{{ $image }}" alt="{{ $title }}" /></a>
                    <a href="{{ $alias }}"><img src="{{ $image }}" alt="{{ $title }}" /></a>
                    <div class="bg-overlay">
                      <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn"
                        data-hover-speed="400">
                        <a href="javascript:void(0)" title="@lang('Add to cart')" class="btn btn-dark me-2 add-to-cart"
                          data-id="{{ $item->id }}" data-quantity="1"><i class="icon-shopping-basket"></i></a>
                        <a href="{{ $alias }}" class="btn btn-dark" title="@lang('Detail')"><i
                            class="icon-line-expand"></i></a>
                      </div>
                      <div class="bg-overlay-bg bg-transparent"></div>
                    </div>

                  </div>
                  <div class="product-desc">
                    <div class="product-title mb-1">
                      <h3>
                        <a href="{{ $alias }}">{{ $title }}</a>
                      </h3>
                      @isset($item->json_params->promotion)
                        <p>
                          {!! $item->json_params->promotion !!}
                        </p>
                      @endisset
                    </div>
                    <div class="product-price font-primary">
                      @if (isset($item->json_params->price_old) && $item->json_params->price_old > 0)
                        <del class="me-1">
                          {{ number_format($item->json_params->price_old, 0, ',', '.') }} đ
                        </del>
                      @endif
                      <ins>
                        {{ isset($item->json_params->price) && $item->json_params->price > 0 ? number_format($item->json_params->price, 0, ',', '.') . ' đ' : __('Contact') }}
                      </ins>

                    </div>
                    <div class="product-rating">
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          @endforeach

        </div>
      </div>
    @endforeach
  @endisset
@endif
