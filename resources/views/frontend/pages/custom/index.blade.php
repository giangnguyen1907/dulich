@extends('frontend.layouts.default')
@php
$page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
$page_brief = $taxonomy->description ?? ($page->description);
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');


@endphp
@section('content')
<section class="section" id="section_1400165350">
    <div class="bg section-bg fill bg-fill  bg-loaded">





    </div>



    <div class="section-content relative">


        <div class="row row-full-width align-center" id="row-1710103540">


            <div id="col-703630796" class="col medium-9 small-12 large-9">
                <div class="col-inner">



                    <div id="text-3114378784" class="text">


                        <h1 class="uppercase" style="text-align: center;"><span style="color: #02913f;">{{ $page_title }}</span></h1>
                        <p>{{ $page_brief }}</p>

                        <style>
                            #text-3114378784 {
                                text-align: center;
                            }
                        </style>
                    </div>


                </div>
            </div>



        </div>


        <div class="row row-full-width align-center" id="row-1163051556">

            @php
            $params['status'] = App\Consts::POST_STATUS['active'];
            $params['taxonomy_id'] = 32;
            $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
            @endphp

            <div id="col-926111171" class="col medium-6 small-12 large-6">
                <div class="col-inner">


                    @if ($rows)
                    @foreach ($rows as $item)
                    @php
                    $title = $item->json_params->title->{$locale} ?? $item->title;
                    $brief = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                    $d = $item->iorder;
                    $date = date('d/m/Y', strtotime($item->created_at));
                    // Viet ham xu ly lay slug
                    $alias = 'tour/'.$title ;
                    @endphp
                    @if($d%2 == 0)
                    <h1 style="text-align: right;"><span style="color: #ed1c24;">{{ $title }} </span></h1>
                    <p style="text-align: right;">{{ $brief }} </p>
                    @if($image!='')
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1246657921">
                        <div class="img-inner dark">
                            <img width="648" height="200" src="{{ $image }}" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                        </div>

                        <style>
                            #image_1246657921 {
                                width: 100%;
                            }
                        </style>
                    </div>
                    @endif
                    @endif
                    @endforeach
                    @endif






                </div>
            </div>



            <div id="col-61095835" class="col medium-6 small-12 large-6">
                <div class="col-inner">

                    @if ($rows)
                    @foreach ($rows as $item)
                    @php
                    $title = $item->json_params->title->{$locale} ?? $item->title;
                    $brief = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                    $d = $item->iorder;
                    $date = date('d/m/Y', strtotime($item->created_at));
                    // Viet ham xu ly lay slug
                    $alias = 'tour/'.$title ;
                    @endphp
                    @if($d%2 != 0)
                    @if($image!='')
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1246657921">
                        <div class="img-inner dark">
                            <img width="648" height="200" src="{{ $image }}" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                        </div>

                        <style>
                            #image_1246657921 {
                                width: 100%;
                            }
                        </style>
                    </div>
                    @endif
                    <h1 style="text-align: left;"><span style="color: #ed1c24;">{{ $title }}</span></h1>
                    <p style="text-align: left;">{{ $brief }}</p>
                    @endif
                    @endforeach
                    @endif







                </div>
            </div>



        </div>
        <!-- <div class="row" id="row-1105079708">


            <div id="col-843975321" class="col medium-6 small-12 large-6">
                <div class="col-inner">



                    <div id="text-953441810" class="text">


                        <h1>Cơ cấu tổ chức bộ máy VQG Hoàng Liên</h1>

                        <style>
                            #text-953441810 {
                                color: rgb(2, 145, 63);
                            }

                            #text-953441810>* {
                                color: rgb(2, 145, 63);
                            }
                        </style>
                    </div>

                    <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:100%;background-color:rgb(160, 201, 229);"></div>

                    <p>Trong suốt quá trình hoạt động, kể từ khi thành lập cho tới khi chuyển hạng thành VQG, Ban quản lý mới chỉ có 14 cán bộ, trong đó có 04 kiểm lâm kiêm nhiệm và 10 cán bộ trực tiếp; trình độ cán bộ gồm 05 kỹ sư lâm nghiệp, còn lại là cán bộ trung cấp. Cơ cấu các phòng ban đơn giản, bao gồm Ban giám đốc 02 người, một Ban quản lý dự án, còn lại là khối văn phòng gồm: Kế hoạch, kỹ thuật, tổ chức hành chính và tài vụ. Cũng trong suốt thời gian này KBTTN không có Hạt Kiểm lâm, vì vậy công tác xử lý các vụ vi phạm luật bảo vệ rừng còn rất hạn chế. Với thực trạng cơ sở hạ tầng được tiếp quản từ một trạm kiểm lâm cũ (nay là Trạm đón tiếp khách du lịch sinh thái Cát Cát) và trang thiết bị phục vụ công tác chuyên môn của KBTTN còn thiếu thốn đã gây khó khăn rất lớn trong công tác quản lý bảo vệ 24.658,0ha rừng, bởi vì trong ranh giới Khu bảo tồn quản lý có 19 thôn bản, đặc biệt có 05 thôn (Séo Mý Tỉ, Dền Thàng, Tả Trung Hồ, Séo Trung Hồ, Ma Quái Hồ) nằm sâu trong vùng lõi của KBT.<br />Trải qua quá trình hình thành và phát triển, hiện nay Vườn Quốc gia Hoàng Liên đã có 123 cán bộ. Trong đó có 16 người có trình độ thạc sĩ, 69 người có bằng đại học, 07 có người bằng cao đẳng, 24 người có bằng trung cấp và 05 người sơ cấp, 02 lái xe. Công tác trong 03 phòng, 03 đơn vị trực thuộc, Công chức, viên chức Vườn Quốc gia Hoàng Liên được đào tạo tại các cơ sở đào tạo trong và ngoài nước, vì vậy khả năng về chuyên môn, ngoại ngữ và tin học về cơ bản đã phần nào đáp ứng được yêu cầu làm việc chuyên môn. Trong giai đoạn này được sự quan tâm của Thường trực, UBND tỉnh Lào Cai, các sở ban ngành và chính quyền địa phương, bằng các nguồn vốn đầu tư từ các chương trình dự án trong nước và quốc tế, hệ thống cơ sở hạ tầng và vật chất trang thiết bị của Vườn Quốc gia Hoàng Liên đã được đầu tư xây dựng phần nào cũng đã đáp ứng được những nhiệm vụ cơ bản trong thời điểm hiện tại.</p>

                </div>
            </div>



            <div id="col-1120794335" class="col medium-6 small-12 large-6">
                <div class="col-inner">



                    <div class="row row-small align-middle" id="row-1572971602">


                        <div id="col-853046525" class="col medium-6 small-12 large-6">
                            <div class="col-inner">



                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1496903495">
                                    <div class="img-inner dark">
                                        <img width="334" height="412" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Rectangle-74.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                        #image_1496903495 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>


                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2012653086">
                                    <div class="img-inner dark">
                                        <img width="334" height="415" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Rectangle-76.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                        #image_2012653086 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>



                            </div>
                        </div>



                        <div id="col-719741238" class="col medium-6 small-12 large-6">
                            <div class="col-inner">



                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1649927954">
                                    <div class="img-inner dark">
                                        <img width="374" height="200" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Rectangle-75.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                        #image_1649927954 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>


                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_9159539">
                                    <div class="img-inner dark">
                                        <img width="374" height="320" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Rectangle-77.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                        #image_9159539 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>


                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1317031323">
                                    <div class="img-inner dark">
                                        <img width="374" height="299" src="https://hoanglienpark.com/wp-content/uploads/2018/01/Rectangle-78.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" />
                                    </div>

                                    <style>
                                        #image_1317031323 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>



                            </div>
                        </div>



                    </div>

                </div>
            </div>



        </div> -->
        <div class="row align-center" id="row-392372565">


            <div id="col-1941108111" class="col medium-8 small-12 large-8">
                <div class="col-inner text-center">



                    <div id="text-2545516632" class="text">


                        <h1>Cơ cấu tổ chức bộ máy VQG Hoàng Liên</h1>

                        <style>
                            #text-2545516632 {
                                color: rgb(2, 145, 63);
                            }

                            #text-2545516632>* {
                                color: rgb(2, 145, 63);
                            }
                        </style>
                    </div>

                    <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:60%;background-color:rgb(160, 201, 229);"></div>

                    <p><?= $page->content ?></p>

                </div>
            </div>



        </div>

        <div class="row" id="row-179170632">
            @php
            $params1['status'] = App\Consts::POST_STATUS['active'];
            $params1['is_type'] = 'service';
            $rows1 = App\Http\Services\ContentService::getCmsPost($params1)->limit(6)->get();
            @endphp
            @if ($rows1)
            @foreach ($rows1 as $item1)
            @php
            $title = $item1->json_params->title->{$locale} ?? $item1->title;
            $image = $item1->image_thumb != '' ? $item1->image_thumb : ($item1->image != '' ? $item1->image : null);
            $date = date('d/m/Y', strtotime($item1->created_at));
            
            @endphp
            <div id="col-2022991642" class="col medium-4 small-12 large-4">
                <div class="col-inner">



                    <div class="box has-hover   has-hover box-overlay dark box-text-bottom">

                        <div class="box-image">
                            <div class="">
                                <img width="448" height="252" src="{{ $image }}" class="attachment- size-" alt="" decoding="async" loading="lazy" />
                                <div class="overlay" style="background-color:1"></div>
                            </div>
                        </div>

                        <div class="box-text text-left">
                            <div class="box-text-inner">


                                <p>{{ $title }}</p>


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
        #section_1400165350 {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        #section_1400165350 .ux-shape-divider--top svg {
            height: 150px;
            --divider-top-width: 100%;
        }

        #section_1400165350 .ux-shape-divider--bottom svg {
            height: 150px;
            --divider-width: 100%;
        }
    </style>
</section>
@endsection