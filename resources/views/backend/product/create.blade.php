@extends('backend.layouts.app')

@section('title', __('labels.backend.product.product.management') . ' | ' . __('labels.backend.product.product.create'))

@section('content')
    {{ html()->form('POST', route('admin.product.product.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.product.product.management')
                        <small class="text-muted">@lang('labels.backend.product.product.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.product.product.name'))->class('col-md-2 form-control-label')->for('name') }}

                        <div class="col-md-10">
                            {{ html()->text('name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.product.product.name'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.product.product.content'))->class('col-md-2 form-control-label')->for('product_content') }}

                        <div class="col-md-10">
                            {{ html()->textarea('content')
                            ->id('product_content')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.product.product.content')) }}
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
    {{ html()->form()->close() }}
@endsection