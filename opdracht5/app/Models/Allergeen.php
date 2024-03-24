<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ProductPerAllergeen;

class Allergeen extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'omschrijving'
    ];

    // belongs to ProductPerAllergeen
    public function productPerAllergeen(): BelongsTo
    {
        return $this->belongsTo(ProductPerAllergeen::class);
    }
}
