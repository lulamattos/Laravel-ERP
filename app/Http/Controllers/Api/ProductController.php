<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Busca todos os produtos do banco
        $products = Product::all();
        
        // Retorna como JSON (exatamente o que o Node.js/React esperam)
        return response()->json($products);
    }
}