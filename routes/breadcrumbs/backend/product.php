<?php
Breadcrumbs::for('admin.product.product.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push(__('labels.backend.product.product.management'), route('admin.product.product.index'));
});

Breadcrumbs::for('admin.product.product.create', function ($trail) {
    $trail->parent('admin.product.product.index');
    $trail->push(__('labels.backend.product.product.create'), route('admin.product.product.create'));
});