@extends('admin.layouts.app')

@section('title')
  {{ $module_name }}
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ $module_name }}
      <a class="btn btn-sm btn-warning pull-right" href="{{ route(Request::segment(2) . '.create') }}"><i
          class="fa fa-plus"></i> @lang('Add')</a>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    @if (session('errorMessage'))
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('errorMessage') }}
      </div>
    @endif
    @if (session('successMessage'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('successMessage') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach

      </div>
    @endif

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">@lang('Create form')</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="{{ route(Request::segment(2) . '.store') }}" method="POST">
        @csrf
        <div class="box-body">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tab_1" data-toggle="tab">
                  <h5>Thông tin chính <span class="text-danger">*</span></h5>
                </a>
              </li>
              
              <button type="submit" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-floppy-o"></i>
                @lang('Save')
              </button>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="row">
                  <div class="col-md-6">
                  
                    <div class="form-group">
                      <label>@lang('Title') <small class="text-red">*</small></label>
                      <input type="text" class="form-control" name="title" placeholder="@lang('Title')"
                        value="{{ old('title') }}" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6">
                          <label>@lang('Price')</label>
                          <input type="text" class="form-control" name="gia_ve"
                            placeholder="@lang('Price')" value="{{ old('gia_ve') }}">
                        </div>
                        <div class="col-xs-6">
                          <label>@lang('Giá xe')</label>
                          <input type="text" class="form-control" name="gia_xe"
                            placeholder="@lang('Price Car')" value="{{ old('gia_xe') }}">
                        </div>
                        <div class="col-xs-6">
                          <label>@lang('Giá Hướng dẫn viên')</label>
                          <input type="text" class="form-control" name="gia_hdvien"
                            placeholder="@lang('Giá hướng dẫn viên')" value="{{ old('gia_hdvien') }}">
                        </div>

                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label>@lang('Image')</label>
                      <div class="input-group">
                        <span class="input-group-btn">
                          <a data-input="image" data-preview="image-holder" class="btn btn-primary lfm"
                            data-type="product">
                            <i class="fa fa-picture-o"></i> @lang('choose')
                          </a>
                        </span>
                        <input id="image" class="form-control" type="text" name="image"
                          placeholder="@lang('image_link')...">
                      </div>
                      <div id="image-holder" style="margin-top:15px;max-height:100px;">
                        @if (old('image') != '')
                          <img style="height: 5rem;" src="{{ old('image') }}">
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                   
                    <div class="form-group">
                      <label>@lang('Order')</label>
                      <input type="number" class="form-control" name="iorder" placeholder="@lang('Order')"
                        value="{{ old('iorder') }}">
                    </div>
                    <div class="form-group">
                      <label>@lang('Status')</label>
                      <div class="form-control">
                        <label>
                          <input type="radio" name="status" value="active" checked="">
                          <small>@lang('active')</small>
                        </label>
                        <label>
                          <input type="radio" name="status" value="deactive" class="ml-15">
                          <small>@lang('deactive')</small>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>@lang('Image thumb')</label>
                      <div class="input-group">
                        <span class="input-group-btn">
                          <a data-input="image_thumb" data-preview="image_thumb-holder" class="btn btn-primary lfm"
                            data-type="product">
                            <i class="fa fa-picture-o"></i> @lang('choose')
                          </a>
                        </span>
                        <input id="image_thumb" class="form-control" type="text" name="image_thumb"
                          placeholder="@lang('image_link')...">
                      </div>
                      <div id="image_thumb-holder" style="margin-top:15px;max-height:100px;">
                        @if (old('image_thumb') != '')
                          <img style="height: 5rem;" src="{{ old('image_thumb') }}">
                        @endif
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('Video list')</label>
                      <input class="btn btn-warning btn-sm add-gallery-video" data-toggle="tooltip"
                        title="Nhấn để chọn thêm video" type="button" value="Thêm video" />
                    </div>
                    <div class="list-gallery-video">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('Description')</label>
                      <textarea name="brief" class="form-control" rows="5">{{ old('brief') }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('Lịch trình')</label>
                      <textarea name="lich_trinh" class="form-control" rows="5">{{ old('lich_trinh') }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('Hành trình')</label>
                      <textarea name="hanh_trinh" class="form-control" rows="5">{{ old('hanh_trinh') }}</textarea>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('Giá vé đã bao gồm')</label>
                      <textarea name="gia_baogom" class="form-control" rows="5">{{ old('gia_baogom') }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('Giá vé chưa bao gồm')</label>
                      <textarea name="gia_chuaco" class="form-control" rows="5">{{ old('gia_chuaco') }}</textarea>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                        <label>@lang('Content')</label>
                        <textarea name="content" class="form-control" id="content_vi">{{ old('content') }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <hr style="border-top: dashed 2px #a94442; margin: 10px 0px;">
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('seo_title')</label>
                      <input name="json_params[seo_title]" class="form-control"
                        value="{{ old('json_params[seo_title]') }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('seo_keyword')</label>
                      <input name="json_params[seo_keyword]" class="form-control"
                        value="{{ old('json_params[seo_keyword]') }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>@lang('seo_description')</label>
                      <input name="json_params[seo_description]" class="form-control"
                        value="{{ old('json_params[seo_description]') }}">
                    </div>
                  </div>
                </div>

              </div>
            
            </div><!-- /.tab-content -->
          </div><!-- nav-tabs-custom -->

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <a class="btn btn-success btn-sm" href="{{ route(Request::segment(2) . '.index') }}">
            <i class="fa fa-bars"></i> @lang('List')
          </a>
          <button type="submit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-floppy-o"></i>
            @lang('Save')</button>
        </div>
      </form>
    </div>
  </section>

@endsection

@section('script')
  <script>
    CKEDITOR.replace('content_vi', ck_options);

    $(document).ready(function() {

      // Fill Available Blocks by template
      $(document).on('click', '.btn_search', function() {
        let keyword = $('#search_title_post').val();
        let taxonomy_id = $('#search_taxonomy_id').val();
        let _targetHTML = $('#post_available');
        _targetHTML.html('');
        let checked_post = [];
        $("input:checkbox:checked").each(function() {
          checked_post.push($(this).val());
        });

        let url = "{{ route('cms_posts.search') }}/";
        $.ajax({
          type: "GET",
          url: url,
          data: {
            keyword: keyword,
            taxonomy_id: taxonomy_id,
            other_list: checked_post,
            is_type: "{{ App\Consts::POST_TYPE['product'] }}"
          },
          success: function(response) {
            if (response.message == 'success') {
              let list = response.data || null;
              let _item = '';
              if (list.length > 0) {
                list.forEach(item => {
                  _item += '<tr>';
                  _item += '<td>' + item.id + '</td>';
                  _item += '<td>' + item.title + '</td>';
                  _item += '<td>' + item.taxonomy_title + '</td>';
                  _item += '<td>' + formatDate(item.created_at) + '</td> ';
                  _item +=
                    '<td><input name="json_params[related_post][]" type="checkbox" value="' + item.id +
                    '" class="mr-15 related_post_item cursor" autocomplete="off"></td>';
                  _item += '</tr>';
                });
                _targetHTML.html(_item);
              }
            } else {
              _targetHTML.html('<tr><td colspan="5">' + response.message + '</td></tr>');
            }
          },
          error: function(response) {
            // Get errors
            let errors = response.responseJSON.message;
            _targetHTML.html('<tr><td colspan="5">' + errors + '</td></tr>');
          }
        });
      });

      // Checked and unchecked item event
      $(document).on('click', '.related_post_item', function() {
        let ischecked = $(this).is(':checked');
        let _root = $(this).closest('tr');
        let _targetHTML;

        if (ischecked) {
          _targetHTML = $("#post_related");
        } else {
          _targetHTML = $("#post_available");
        }
        _targetHTML.append(_root);
      });

      /** Add tags */
      $(".btn_add_tags").click(function() {
        var tags = $("#tags_title").val();
        if (tags.trim() == '') return;
        var _url = "{{ route('cms_posts.add_tag') }}";
        $.ajax({
          type: "POST",
          url: _url,
          data: {
            tags: tags,
            _token: "{{ csrf_token() }}"
          },
          cache: false,
          context: document.body,
          success: function(response) {
            var obj = response.data;
            var appendContent;
            if (obj.exist) {
              /** Tags is exist in DB */
              $("#post_tags option[value='" + obj.id + "']").prop('selected', true);
            } else if (!obj.exist) {
              /** Tags is created */
              appendContent = '<option value="' + obj.id + '" selected>' + obj.title + '</option>';
              $("#post_tags").append(appendContent);
            } else {
              console.log("Has error in progress update DB");
            }
            $("#post_tags").select2();
            $("#tags_title").val("");
          },
          error: function(response) {
            // Get errors
            let errors = response.responseJSON.message;
            alert(errors);
          }
        });
      });
      $("#tags_title").keypress(function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
          // Cancel the default action, if needed
          event.preventDefault();
          $(".btn_add_tags").click();
        }
      });

      // Xử lý video input
      $('.add-gallery-video').click(function(event) {
        let keyRandom = new Date().getTime();
        let elementParent = $('.list-gallery-video');
        let elementAppend = '';
        elementAppend += '<div class="row gallery-video border-bottom">';
        elementAppend += '<div class="col-md-6 col-xs-12 py-2 ">';
        elementAppend += '<input type="text" name="json_params[gallery_video][' + keyRandom +
          '][title]" class="form-control" id="gallery_video_title_' + keyRandom +
          '" placeholder="Tiêu đề, giới thiệu ngắn...">';
        elementAppend += '</div>';
        elementAppend += '<div class="col-md-5 col-xs-10 py-2 ">';
        elementAppend += '<div class="input-group">';
        elementAppend += '<span class="input-group-btn">';
        elementAppend += '<a data-input="gallery_video_source_' + keyRandom + '" class="btn btn-primary video">';
        elementAppend += '<i class="fa fa-file-video-o"></i> ';
        elementAppend += '@lang('choose')';
        elementAppend += '</a>';
        elementAppend += '</span>';
        elementAppend += '<input id="gallery_video_source_' + keyRandom +
          '" class="form-control" type="text" name = "json_params[gallery_video][' + keyRandom +
          '][source]" placeholder = "Link video..." required>';
        elementAppend += '</div>';
        elementAppend += '</div>';
        elementAppend += '<div class="col-md-1 col-xs-2 py-2 ">';
        elementAppend +=
          '<span class="btn btn-sm btn-danger btn-remove" data-toggle="tooltip" title="@lang('delete')">';
        elementAppend += '<i class="fa fa-trash"></i>';
        elementAppend += '</span>';
        elementAppend += '</div>';
        elementAppend += '</div>';
        elementParent.append(elementAppend);

        $('.video').filemanager('video', {
          prefix: route_prefix
        });
      });
      // Remove
      $('.list-gallery-video').on('click', '.btn-remove', function() {
        let _root = $(this).closest('.gallery-video');
        _root.remove();
      });

    });
  </script>
@endsection
