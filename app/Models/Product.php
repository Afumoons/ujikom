<?php

namespace App\Models;

use App\Models\ProductCategory;
use Jackiedo\Cart\Traits\CanUseCart;
use Illuminate\Database\Eloquent\Model;
use Jackiedo\Cart\Contracts\UseCartable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements UseCartable
{
    use HasFactory, CanUseCart;

    protected $cartTitleField = 'name';
    protected $cartPriceField = 'price';

    protected $fillable = [
        'product_category_id',
        'name',
        'description',
        'slug',
        'price',
        'image',
        'stock',
    ];

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
