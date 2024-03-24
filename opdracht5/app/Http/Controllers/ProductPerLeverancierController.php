<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductPerLeverancier;
use App\Models\Magazijn;

class ProductPerLeverancierController extends Controller
{
    public function index($product_id = null)
    {
        $magazijn = Magazijn::where('product_id', $product_id)->first();
        $leveranciers = ProductPerLeverancier::with('leverancier')
            ->where('product_id', $product_id)
            ->orderBy('datumLevering', 'asc')
            ->get();
        $products = ProductPerLeverancier::with('product')->where('product_id', $product_id)->get();

        return view('leveranciers.index', compact('leveranciers', 'products', 'magazijn'));
    }
}
