<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $oProductos = Product::all();

        if($oProductos->isEmpty())
            return response()->json(['message' => 'No hay productos'], 200); 
        else
            return response()->json($oProductos); 
    }

    public function store(Request $request)
    {
        
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        //$product = Product::create($request->all());
        return response()->json('Registro Guardado correctamente', 201);
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(null, 204);
    }
}
