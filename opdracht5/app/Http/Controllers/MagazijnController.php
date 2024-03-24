<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Magazijn;

class MagazijnController extends Controller
{
    public function index()
    {
        $products = Magazijn::join('products', 'magazijns.product_id', '=', 'products.id')
            ->orderBy('products.barcode', 'asc')
            ->select('magazijns.*')
            ->get();
        //return $products;

        return view('products.index', compact('products'));
    }
}
