@if ($block)
  @php
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
  @endphp
  <div class="container" id="partner">
    <div class="fancy-title title-center title-border topmargin">
      <h3>{!! $title !!}</h3>
    </div>

    <ul class="clients-grid grid-2 grid-sm-3 grid-md-4 mb-0">
      @if ($block_childs)
        @foreach ($block_childs as $item)
          @php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $image = $item->image != '' ? $item->image : null;
            $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
            $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
            $icon = $item->icon != '' ? $item->icon : '';
            $style = $item->json_params->style ?? '';
          @endphp
          <li class="grid-item">
            <a href="{{ $url_link }}"><img src="{{ $image }}" alt="{{ $title }}"></a>
          </li>
        @endforeach
      @endif
    </ul>
  </div>

@endif
