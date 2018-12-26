<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Requests\Backend\Product\ProductRequest;
use App\Repositories\Backend\Product\ProductRepository;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * @var productRepository
     */
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return view('backend.product.index');
    }

    public function create()
    {
        return view('backend.product.create');
    }

    public function store(ProductRequest $request)
    {
        $this->productRepository->create($request->only(
            'name',
            'content'
        ));

        return redirect()->route('admin.product.product.index')->withFlashSuccess(__('alerts.backend.product.product.created'));
    }
}
