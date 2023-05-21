@if ($block)
@php
$title = $block->json_params->title->{$locale} ?? $block->title;
$brief = $block->json_params->brief->{$locale} ?? $block->brief;
$background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
$url_link = $block->url_link != '' ? $block->url_link : '';
$url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;

$params['status'] = App\Consts::POST_STATUS['active'];
$rows = App\Http\Services\ContentService::getCmsTour($params)->limit(4)->get();
@endphp
<div class="row row-collapse row-full-width align-middle align-center" id="row-997777990">


    <div id="col-1566917298" class="col small-12 large-12">
        <div class="col-inner text-center">



            <div class="row row-collapse row-full-width" id="row-684631184">


                <div id="col-883265983" class="col medium-6 small-12 large-6">
                    <div class="col-inner text-center">



                        <div id="text-4147173131" class="text">


                            <h2 class="uppercase">{!! $title !!}</h2>

                            <style>
                                #text-4147173131 {
                                    color: rgb(2, 145, 63);
                                }

                                #text-4147173131>* {
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
    $alias = 'tour/'.$title ;
    @endphp

    <div id="col-1300702196" class="col medium-3 small-12 large-3">
        <div class="col-inner text-center">



            <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                <div class="box-image">
                    <div class="">
                        <a href="#">
                        <img width="334" height="460" src="{{ $image }}" class="attachment- size-" alt="" decoding="async" loading="lazy" />
                        </a>
                        <div class="overlay" style="background-color:1"></div>
                    </div>
                </div>

                <div class="box-text text-center">
                    <div class="box-text-inner">


                        <div id="text-2714021628" class="text">


                            <p>{{ $title }}</p>

                            <style>
                                #text-2714021628 {
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


    <style>
        #row-997777990>.col>.col-inner {
            padding: 0px 15px 0px 15px;
        }
    </style>
</div>


<div id="gap-268529846" class="gap-element clearfix" style="display:block; height:auto;">

    <style>
        #gap-268529846 {
            padding-top: 45px;
        }
    </style>
</div>
@endif