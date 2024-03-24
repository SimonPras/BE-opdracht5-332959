<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ProductPerLeverancier;

class Leverancier extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'contactPersoon',
        'leverancierNummer',
        'mobiel'
    ];

    // belongs to productperleverancier
    public function productPerLeverancier(): BelongsTo
    {
        return $this->belongsTo(ProductPerLeverancier::class);
    }
}
