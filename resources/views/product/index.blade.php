@extends('layouts.app')
@section('title', 'Products')
@section('content')
    <div class="flex justify-end my-4">
        <a href="" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Add Product</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-3 border border-gray-300">Product Image</th>
            <th class="p-3 border border-gray-300">Product Name</th>
            <th class="p-3 border border-gray-300">Description</th>
            <th class="p-3 border border-gray-300">Price</th>
            <th class="p-3 border border-gray-300">Discounted Price</th>
            <th class="p-3 border border-gray-300">Stock</th>
            <th class="p-3 border border-gray-300">Category</th>
            <th class="p-3 border border-gray-300">Action</th>
        </tr>
        <tr class="text-center">
            <td class="p-3 border">Image</td>
            <td class="p-3 border">Product name</td>
            <td class="p-3 border">Product description</td>
            <td class="p-3 border">1000</td>
            <td class="p-3 border">800</td>
            <td class="p-3 border">5</td>
            <td class="p-3 border">Electronics</td>
            <td class="p-3 border">Edit Delete</td>
        </tr>
    </table>
@endsection