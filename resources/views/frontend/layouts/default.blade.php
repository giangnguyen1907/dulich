<!DOCTYPE html>
<html lang="{{ $locale ?? 'vi' }}">

<head>

  <meta charset="UTF-8" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  
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
{{-- bcrypt(123456) --}}
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


      </div>



    </main>

    @include('frontend.blocks.footer.styles.default')

  </div>


  {{-- Include scripts --}}
  @include('frontend.panels.scripts')

</body>

</html>