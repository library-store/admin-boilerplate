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
                        </div>
                    </div>
                </div>
            </div><!--Product content-->

            <div class="card">

                <div class="card-header custom">{{ __('validation.attributes.backend.product.product.excerpt') }}
                    <div class="card-header-actions">
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse"
                           data-target="#collapseExcerpt" aria-expanded="true">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div>
                </div>
                <div class="collapse show" id="collapseExcerpt" style="">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                            {{ html()->textarea('excerpt')
                                ->id('product_excerpt')
                                    ->class('form-control summernote')
                                    ->placeholder(__('validation.attributes.backend.product.product.excerpt')) }}
                            </div>
                        </div><!--row-->

                    </div>
                </div>
            </div><!--product-excerpt-->

            <div class="card">

            <div class="card-header custom">
                <span>Dữ liệu sản phẩm</span>
                <select name="" id="">
                    <option value="">Sản phẩm thường</option>
                    <option value="">Sản phẩm có biến thể</option>
                </select>

                <div class="card-header-actions">
                    <a class="card-header-action btn-minimize" href="#" data-toggle="collapse"
                       data-target="#collapseData" aria-expanded="true">
                        <i class="icon-arrow-up"></i>
                    </a>
                </div>
            </div>
            <div class="collapse show form-product-data" id="collapseData" style="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 p-0 m-0">
                            <div class="nav product flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Chung</a>
                                <a class="nav-link" id="v-pills-inventory-tab" data-toggle="pill" href="#v-pills-inventory" role="tab" aria-controls="v-pills-inventory" aria-selected="false">Kiểm kê kho hàng</a>
                                <a class="nav-link" id="v-pills-shipping-tab" data-toggle="pill" href="#v-pills-shipping" role="tab" aria-controls="v-pills-shipping" aria-selected="false">Giao hàng</a>
                                <a class="nav-link" id="v-pills-attribute-tab" data-toggle="pill" href="#v-pills-attribute" role="tab" aria-controls="v-pills-attribute" aria-selected="false">Các thuộc tính</a>
                                <a class="nav-link" id="v-pills-advanced-tab" data-toggle="pill" href="#v-pills-advanced" role="tab" aria-controls="v-pills-advanced" aria-selected="false">Nâng cao</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">Giá bán thường</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="text-input" type="text" name="text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">Giá bán khuyến mãi</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="text-input" type="text" name="text-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-inventory" role="tabpanel" aria-labelledby="v-pills-inventory-tab">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">Mã sản phẩm</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="text-input" type="text" name="text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="select1">Trạng thái kho hàng</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="select1" name="select1">
                                                <option value="0">Còn hàng</option>
                                                <option value="1">Hết hàng</option>
                                                <option value="2">Chờ hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping-tab">
                                    sssssssss
                                </div>
                                <div class="tab-pane fade" id="v-pills-attribute" role="tabpanel" aria-labelledby="v-pills-attribute-tab">
                                    <div class="form-group row">
                                        <div class="form-group mx-sm-3 mb-2">
                                            <select class="form-control" id="select1" name="select1">
                                                <option value="0">Tùy chỉnh thuộc tính sản phẩm</option>
                                                <option value="1">Hết hàng</option>
                                                <option value="2">Chờ hàng</option>
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-primary mb-2 button add_attribute">Thêm</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-advanced" role="tabpanel" aria-labelledby="v-pills-advanced-tab">
                                    <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--product-data-->
        </div>
        <div class="col-md-3">
            <div class="card">

                <div class="card-header custom">Đăng sản phẩm
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
            </div><!--product-status-->

            <div class="card">
                <div class="card-header custom">Phân loại
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
                <div class="card-header custom">Hình ảnh Đại diện
                    <div class="card-header-actions">
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse"
                           data-target="#collapseThumbnail" aria-expanded="true">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="collapseThumbnail" style="">
                    <div class="card-body">
                        <img id="prod-thumbnail" class="hide-if-no-js">

                        <p class="hide-if-no-js howto" id="set-post-thumbnail-desc">Nhấn vào ảnh để sửa hoặc cập nhật</p>
                        <p class="hide-if-no-js"><a href="#" id="remove-post-thumbnail">Xóa ảnh.</a></p>

                        <div id="btn-add-prod-thumbnail" class="image-openfilemanager-plus" title="Thêm ảnh">
                            <div><span>+</span></div>
                        </div>
                    </div>
                </div>
            </div><!--Images-->

            <div class="card">
                <div class="card-header custom">Album ảnh
                    <div class="card-header-actions">
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse"
                           data-target="#collapseImages" aria-expanded="true">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div>
                </div>

                <div class="collapse show" id="collapseImages" style="">
                    <div class="card-body">
                        <div class="d-flex">
                            <ui id="product_gallery_images">

                            </ui>
                        </div>

                        <div id="btn-add-prod-images" class="image-openfilemanager-plus" title="Thêm ảnh">
                            <div><span>+</span></div>
                        </div>
                        {{--<p class="add_product_images">--}}
                            {{--<a href="#" data-choose="Thêm ảnh vào thư viện" data-update="Thêm vào thư viện" data-delete="Xóa ảnh" data-text="Xoá"><u>Thêm ảnh thư viện sản phẩm</u></a>--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div><!--Images-->

        </div>

    </div>
    {{ html()->form()->close() }}
@endsection
