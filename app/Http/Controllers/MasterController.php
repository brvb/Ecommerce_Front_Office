<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function mainPage()
    {
        $products = Products::all();
        $categories = Category::all();
        return view('paginas.pagina-main', compact('categories','products'));
    }
    public function cartPage()
    {
        $categories = Category::all();
        return view('paginas.pagina-cart', compact('categories'));
    }
    public function productPage()
    {
        $categories = Category::all();
        return view('paginas.pagina-product', compact('categories'));
    }
    public function checkoutPage()
    {
        $categories = Category::all();
        return view('paginas.pagina-checkout', compact('categories'));
    }

    public function filtroProductsPage()
    {
        $categories = Category::all();
        return view('paginas.pagina-filtro-products', compact('categories'));
    }

}

