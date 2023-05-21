
@extends('frontend.layouts.default')

@php
$page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
@endphp

@section('content')
{{-- Print all content by [module - route - page] without blocks content at here --}}

@if (session('successMessage'))

<script>
  alert(" {{ session('successMessage') }}");
</script>
@endif





      <div class="row row-collapse row-full-width align-middle align-center" id="row-1285744609">


        <div id="col-1432801618" class="col small-12 large-12">
          <div class="col-inner text-center">



            <div class="row row-collapse row-full-width" id="row-907788800">


              <div id="col-1782339353" class="col medium-8 small-12 large-8">
                <div class="col-inner text-center">



                  <div id="text-3200120177" class="text">


                    <h2 class="uppercase">Liên hệ với chúng tôi</h2>

                    <style>
                      #text-3200120177 {
                        color: rgb(2, 145, 63);
                      }

                      #text-3200120177>* {
                        color: rgb(2, 145, 63);
                      }
                    </style>
                  </div>

                  <div class="is-divider divider clearfix" style="margin-top:0.4em;margin-bottom:0.4em;max-width:20%;height:4px;background-color:rgb(160, 201, 229);">
                
                </div>
                <p>Lorem ipsum dolor sit amet consectetur. Consequat nec arcu malesuada eu ullamcorper neque odio. Viverra purus venenatis quis lectus et elit sed. Dolor tristique malesuada nunc metus erat cras neque urna cras. Quis.</p>

                 

                </div>
              </div>



            </div>

          </div>
        </div>




        <style>
          #row-1285744609>.col>.col-inner {
            padding: 0px 15px 0px 15px;
          }
        </style>
      </div>
      <div id="gap-1470791083" class="gap-element clearfix" style="display:block; height:auto;">

        <style>
          #gap-1470791083 {
            padding-top: 45px;
          }
        </style>
      </div>


      <div class="row row-collapse row-full-width align-middle" id="row-1238494331">


        <div id="col-152640962" class="col medium-6 small-12 large-6">
          <div class="col-inner">



            <p>Gửi lời nhắn cho chúng tôi:</p>

            <div class="wpcf7 no-js" id="wpcf7-f16-p41-o1" lang="en-US" dir="ltr">
              <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
              </div>
              <form action="{{ route('frontend.contact.store') }}" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                
                @csrf 
                <p><span class="wpcf7-form-control-wrap" data-name="Hvtn"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required hvt" aria-required="true" aria-invalid="false" placeholder="Họ và tên" value="" type="text" name="name" /></span>
                </p>
                <p><span class="wpcf7-form-control-wrap" data-name="tel-954"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel std" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" value="" type="tel" name="phone" /></span>
                </p>
                <p><span class="wpcf7-form-control-wrap" data-name="email-568"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="email" /></span>
                </p>
                <p><span class="wpcf7-form-control-wrap" data-name="textarea-253"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea loinhan" aria-invalid="false" placeholder="Nhập lời nhắn" name="content"></textarea></span>
                </p>
                <p><input class="wpcf7-form-control has-spinner wpcf7-submit button" type="submit" name="is_type" value="Gửi ngay" />
                <input type="hidden" name="is_type" value="contact">
                </p>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
              </form>
            </div>




          </div>
        </div>



        <div id="col-1276733432" class="col medium-6 small-12 large-6">
          <div class="col-inner">



            <div id="text-2359834341" class="text">


              <h1>{!! $web_information->information->site_name ?? '' !!}</h1>

              <style>
                #text-2359834341 {
                  color: rgb(2, 145, 63);
                }

                #text-2359834341>* {
                  color: rgb(2, 145, 63);
                }
              </style>
            </div>

            <p>Được thành lập theo quyết định số 272/QĐ – UBND, trực thuộc Vườn Quốc gia Hoàng Liên, có chức năng tham mưu và thực hiện việc quản lý, tổ chức và phát triển các hoạt động du lịch sinh thái và giáo dục môi trường trong Vườn Quốc gia Hoàng Liên.</p>
            <p>&nbsp;ĐỊA CHỈ: {!! $web_information->information->address ?? '' !!}.</p>
            <p>&nbsp;SỐ ĐIỆN THOẠI: {!! $web_information->information->phone ?? '' !!}.</p>
            <p>&nbsp;EMAIL: {!! $web_information->information->email ?? '' !!}.</p>
            
           

          </div>
        </div>




        <style>
          #row-1238494331>.col>.col-inner {
            padding: 0px 15px 0px 15px;
          }
        </style>
      </div>



 
@endsection