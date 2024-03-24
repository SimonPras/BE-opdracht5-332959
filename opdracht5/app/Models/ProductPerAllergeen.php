<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Allergeen;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductPerAllergeen extends Model
{
    use HasFactory;

    protected $table = 'productperallergeens';

    protected $fillable = [
        'product_id',
        'allergeen_id'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function allergeen(): HasOne
    {
        return $this->hasOne(Allergeen::class, 'id', 'allergeen_id');
    }
}
