<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Magazijn;
use App\Models\ProductPerLeverancier;
use App\Models\ProductPerAllergeen;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'barcode'
    ];
    // belongsto magazijn
    public function magazijn(): BelongsTo
    {
        return $this->belongsTo(Magazijn::class);
    }
    // belongs to productperleverancier
    public function productPerLeverancier(): BelongsTo
    {
        return $this->belongsTo(ProductPerLeverancier::class);
    }

    public function productPerAllergeen(): BelongsTo
    {
        return $this->belongsTo(ProductPerAllergeen::class);
    }
}
