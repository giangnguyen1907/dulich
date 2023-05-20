@if ($block)
@php
$title = $block->json_params->title->{$locale} ?? $block->title;
$brief = $block->json_params->brief->{$locale} ?? $block->brief;
$background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
$url_link = $block->url_link != '' ? $block->url_link : '';
$url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;

$params['status'] = App\Consts::POST_STATUS['active'];
$params['is_featured'] = true;
$params['is_type'] = App\Consts::POST_TYPE['post'];

$rows = App\Http\Services\ContentService::getCmsPost($params)->get();
@endphp
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


                  <h2 class="uppercase">{!! $title !!}</h2>

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

                <p>{!! $brief !!}</p>

              </div>
            </div>



          </div>

        </div>
      </div>


      @if ($rows)
      @foreach ($rows as $item)
      @php
      $title = $item->json_params->title->{$locale} ?? $item->title;
      $brief = $item->json_params->brief->{$locale} ?? $item->brief;
      $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
      $date = date('d/m/Y', strtotime($item->created_at));
      // Viet ham xu ly lay slug
      $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
      $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
      @endphp
      <div id="col-1030178715" class="col medium-3 small-12 large-3">
        <div class="col-inner text-center">

          <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

            <div class="box-image">
              <div class="">
                <img width="2560" height="1707" src="{{ $image }}" class="attachment- size-" alt="" decoding="async" loading="lazy"  />
                <div class="overlay" style="background-color:1"></div>
              </div>
            </div>

            <div class="box-text text-center">
              <div class="box-text-inner">


                <div id="text-3410438327" class="text">


                  <p>{{ Str::limit($title, 80) }}</p>

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


      @endforeach
      @endif








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
@endif