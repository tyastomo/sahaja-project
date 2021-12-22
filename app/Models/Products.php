<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use App\Models\ProductAdditionalPax;

class Products extends Model
{
    protected $table      = 'products';
    protected $fillable = [
        'uuid',
        'name',
        'category_product_id',
        'price'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'category_product_id', 'uuid');
    }

	public function additional()
	{
		return $this->hasMany(ProductAdditionalPax::class, 'product_id', 'uuid');
	}
}
