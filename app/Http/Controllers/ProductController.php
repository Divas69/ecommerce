<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('product.index',compact('products'));
    }

    public function create(){
        $categories = Category::orderBy('priority')->get();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required|integer|min:0',
            'discounted_price' => 'nullable|integer|lt:price',
            'description' => 'required',
            'stock' => 'required|integer|min:0',
            'photopath' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('photopath');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        $data['photopath'] = $filename;

        Product::create($data);
        return redirect()->route('product.index');
    }
}