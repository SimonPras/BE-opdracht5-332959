<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Magazijn extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'verpakkingsEenheid',
        'aantalAanwezig'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
