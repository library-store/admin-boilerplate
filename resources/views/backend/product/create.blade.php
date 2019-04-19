@extends('backend.layouts.app')

@section('title', __('labels.backend.product.product.management') . ' | ' . __('labels.backend.product.product.create'))

@section('content')
    {{ html()->form('POST', route('admin.product.product.store'))->class('form-horizontal')->open() }}
    <div class="row mb-4">
        <div class="col-md-12">
            <h4 class="card-title mb-0">
                @lang('labels.backend.product.product.management')
                <small class="text-muted">@lang('labels.backend.product.product.create')</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-group row">
                                {{ html()->label(__('validation.attributes.backend.product.product.name'))->class('col-md-12 form-control-label')->for('name') }}

                                <div class="col-md-12">
                                    {{ html()->text('name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.backend.product.product.name'))
                                        ->attribute('maxlength', 191)
                                        ->required()
                                        ->autofocus() }}
                                </div><!--col-->
                            </div><!--form-group-->

                            <div class="form-group row">
                                {{ html()->label(__('validation.attributes.backend.product.product.content'))->class('col-md-12 form-control-label')->for('product_content') }}

                                <div class="col-md-12">
                                    {{ html()->textarea('content')
                                    ->id('product_content')
                                        ->class('form-control summernote')
                                        ->placeholder(__('validation.attributes.backend.product.product.excerpt')) }}
                                </div><!--col-->
                            </div><!--form-group-->

                            <div class="form-group row">
                                {{ html()->label(__('validation.attributes.backend.product.product.excerpt'))->class('col-md-12 form-control-label')->for('product_excerpt') }}

                                <div class="col-md-12">
                                    {{ html()->textarea('excerpt')
                                    ->id('product_excerpt')
                                        ->class('form-control summernote')
                                        ->placeholder(__('validation.attributes.backend.product.product.excerpt')) }}
                                </div><!--col-->
                            </div><!--form-group-->
                        </div>
                    </div>

                </div>

                <div class="card-footer clearfix">
                    <div class="row">
                        <div class="col">
                            {{ form_cancel(route('admin.product.product.index'), __('buttons.general.cancel')) }}
                        </div><!--col-->

                        <div class="col text-right">
                            {{ form_submit(__('buttons.general.crud.create')) }}
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-footer-->
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">

                <div class="card-header">Hoạt động
                    <div class="card-header-actions">
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse"
                           data-target="#collapseStatus" aria-expanded="true">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div>
                </div>
                <div class="collapse show" id="collapseStatus" style="">
                    <div class="card-body">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="inputStatus">
                            <input class="switch-input" type="checkbox" name="status" id="inputStatus" value="1">
                            <span class="switch-slider" data-checked="Yes" data-unchecked="No"></span>
                        </label>
                    </div>
                </div>
            </div><!--product-status-->

            <div class="card">
                <div class="card-header">Phân loại
                    <div class="card-header-actions">
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse"
                           data-target="#collapseClassify" aria-expanded="true">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="collapseClassify" style="">
                    <div class="card-body">
                        <label for="product_vendor" class="form-control-label">Nhà cung cấp</label>

                        <select product_vendor class="form-control">
                            <option selected="selected">orange</option>
                            <option>white</option>
                            <option>purple</option>
                        </select>
                    </div>

                    <div class="card-body">
                        <label class="form-control-label">Danh mục</label>

                        <div id="product_cat-all">
                            <ul id="product_catchecklist" class="list-group">
                                <li id="product_cat-15" class="list-item d-flex">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my
                                            preference</label>
                                    </div>
                                </li>
                                <li id="product_cat-15" class="list-item d-flex">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my
                                            preference</label>
                                    </div>
                                </li>
                                <li id="product_cat-15" class="list-item d-flex">
                                    <ul class="list-group children">
                                        <li id="product_cat-15" class="list-item d-flex">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customControlAutosizing">
                                                <label class="custom-control-label" for="customControlAutosizing">Remember
                                                    my preference</label>
                                            </div>
                                        </li>
                                        <li id="product_cat-15" class="list-item d-flex">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customControlAutosizing">
                                                <label class="custom-control-label" for="customControlAutosizing">Remember
                                                    my preference</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="product_cat-15" class="list-item d-flex">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my
                                            preference</label>
                                    </div>
                                </li>
                                <li id="product_cat-15" class="list-item d-flex">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my
                                            preference</label>
                                    </div>
                                </li>
                                <li id="product_cat-15" class="list-item d-flex">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my
                                            preference</label>
                                    </div>
                                </li>
                                <li id="product_cat-15" class="list-item d-flex">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my
                                            preference</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body">
                        <label for="product_tags" class="form-control-label">Thẻ</label>

                        <select id="product_tags" class="form-control" multiple="multiple">
                            <option selected="selected">orange</option>
                            <option>white</option>
                            <option>purple</option>
                            <option>white</option>
                            <option>purple</option>
                            <option>white</option>
                            <option>purple</option>
                        </select>
                    </div>

                </div>
            </div><!--product-classify-->

            <div class="card">
                <div class="card-header">Hình ảnh sản phẩm
                    <div class="card-header-actions">
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse"
                           data-target="#collapseImages" aria-expanded="true">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="collapseImages" style="">
                    <div class="card-body">
                        <label for="product_vendor" class="form-control-label">Ảnh đại diện</label>
                        <div>
                            <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200"
                                 src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16a34b7fcd3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16a34b7fcd3%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                 data-holder-rendered="true" style="width: 200px; height: 200px;">
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="product_gallery_images" class="form-control-label">Album ảnh đại diện</label>
                        <div class="d-flex">
                            <ui id="product_gallery_images">
                                <li class="image">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2019/04/net-cuoi-be-gai-150x150.jpg">
                                    <ul class="actions"><li><a href="#" class="delete" title="Xóa ảnh"><i class="fa fa-fw fa-times-circle"></i></a></li></ul>
                                </li>
                                <li class="image">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2019/04/net-cuoi-be-gai-150x150.jpg">
                                    <ul class="actions"><li><a href="#" class="delete" title="Xóa ảnh"><i class="fa fa-fw fa-times-circle"></i></a></li></ul>
                                </li>
                                <li class="image">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2019/04/net-cuoi-be-gai-150x150.jpg">
                                    <ul class="actions"><li><a href="#" class="delete" title="Xóa ảnh"><i class="fa fa-fw fa-times-circle"></i></a></li></ul>
                                </li>
                                <li class="image">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2019/04/net-cuoi-be-gai-150x150.jpg">
                                    <ul class="actions"><li><a href="#" class="delete" title="Xóa ảnh"><i class="fa fa-fw fa-times-circle"></i></a></li></ul>
                                </li>
                                <li class="image">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2019/04/net-cuoi-be-gai-150x150.jpg">
                                    <ul class="actions"><li><a href="#" class="delete" title="Xóa ảnh"><i class="fa fa-fw fa-times-circle"></i></a></li></ul>
                                </li>
                                <li class="image">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2019/04/net-cuoi-be-gai-150x150.jpg">
                                    <ul class="actions"><li><a href="#" class="delete" title="Xóa ảnh"><i class="fa fa-fw fa-times-circle"></i></a></li></ul>
                                </li>
                            </ui>
                        </div>
                        <p class="add_product_images">
                            <a href="#" data-choose="Thêm ảnh vào thư viện" data-update="Thêm vào thư viện" data-delete="Xóa ảnh" data-text="Xoá"><u>Thêm ảnh thư viện sản phẩm</u></a>
                        </p>
                    </div>
                </div>
            </div><!--Images-->

        </div>

    </div>
    {{ html()->form()->close() }}
@endsection
