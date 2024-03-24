<?php

namespace App\Http\Controllers;

use App\Models\ProductPerAllergeen;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class ProductPerAllergeenController extends Controller
{
    public function index($product_id = null)
    {
        $allergeens = ProductPerAllergeen::with(['allergeen' => function ($query) {
            $query->orderBy('naam', 'asc');
        }])->where('product_id', $product_id)->get();

        $products = ProductPerAllergeen::with('product')->where('product_id', $product_id)->get();

        return view('allergeens.index', compact('allergeens', 'products'));
    }
}
