<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26/12/2018
 * Time: 10:09 AM
 */

namespace App\Repositories\Backend\Product;


use App\Exceptions\GeneralException;
use App\Models\Product\Product;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository
{
    public function model()
    {
        return Product::class;
    }

    /**
     * @param array $data
     * @return Product
     * @throws \Throwable
     */
    public function create(array $data): Product
    {
        return DB::transaction(function () use ($data) {
            $product = parent::create([
                'name'    => $data['name'],
                'content' => $data['content'],
            ]);

            if ($product) {
                return $product;
            }

            throw new GeneralException('');
        });
    }
}