<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Reviews;
use App\Models\Products_filtros;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function mainPage()
    {
        $reviews = Reviews::all();
        $products = Products::all();
        $categories = Category::all();
        return view('paginas.pagina-main', compact('categories','products','reviews'));
    }
    public function cartPage()
    {
        $categories = Category::all();
        return view('paginas.pagina-cart', compact('categories'));
    }
    public function productPage($id)
    {
        $categories = Category::all();
        $reviews = Reviews::all();
        $products = Products::all();
        $product = Products::where('id', $id)->first();
        return view('paginas.pagina-product',["idProduct" => $id] , compact('categories','product','products','reviews'));
    }
    public function productDetails($id)
    {
        $product = Products::findOrFail($id);
        return response()->json($product);
    }
    public function checkoutPage()
    {
        $categories = Category::all();
        return view('paginas.pagina-checkout', compact('categories'));
    }

    public function ofertaPage()
    {
        $categories = Category::all();
        $reviews = Reviews::all();
        $products = Products::all();
        return view('paginas.pagina-oferta', compact('categories','products','reviews'));
    }
    public function filtroProductsPage()
    {
        $reviews = Reviews::all();
        $products_filtros = Products_filtros::all();
        $categories = Category::all();
        return view('paginas.pagina-filtro-products', compact('categories','products_filtros','reviews'));
    }
    public function contactoPage()
    {
        $categories = Category::all();
        return view('paginas.pagina-contacto', compact('categories'));
    }

}

