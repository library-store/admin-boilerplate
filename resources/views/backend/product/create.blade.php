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
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse" data-target="#collapseStatus" aria-expanded="true">
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
                        <a class="card-header-action btn-minimize" href="#" data-toggle="collapse" data-target="#collapseClassify" aria-expanded="true">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div>
                </div>
                <div class="collapse show" id="collapseClassify" style="">
                    <div class="card-body">
                        <label for="product_vendor" class="form-control-label">Nhà cung cấp</label>

                        <select class="form-control js-example-tags">
                            <option selected="selected">orange</option>
                            <option>white</option>
                            <option>purple</option>
                        </select>
                    </div>
                </div>
            </div><!--product-classify-->

        </div>

    </div>
    {{ html()->form()->close() }}
@endsection