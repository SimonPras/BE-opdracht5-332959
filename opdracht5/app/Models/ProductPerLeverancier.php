<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Leverancier;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    protected $table = 'productperleveranciers';

    protected $fillable = [
        'leverancier_id',
        'product_id',
        'datumLevering',
        'aantal',
        'datumEerstVolgendeLevering'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function leverancier(): HasOne
    {
        return $this->hasOne(Leverancier::class, 'id', 'leverancier_id');
    }
}
