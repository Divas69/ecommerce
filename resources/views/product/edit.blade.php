@extends('layouts.app')
@section('title', 'Edit Product')
@section('content')
    <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <select type="text" name="category_id" class="border border-gray-300 p-2 rounded-lg w-full mb-4">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror


        <input type="text" name="name" placeholder="Product Name" class="border border-gray-300 p-2 rounded-lg w-full mb-4" value="{{$product->name}}">
        @error('name')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror

        <input type="text" name="price" placeholder="Price" class="border border-gray-300 p-2 rounded-lg w-full mb-4" value="{{$product->price}}">
        @error('price')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror

        <input type="text" name="discounted_price" placeholder="Discounted Price" class="border border-gray-300 p-2 rounded-lg w-full mb-4" value="{{$product->discounted_price}}">
        @error('discounted_price')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror


        <input type="text" name="stock" placeholder="Stock" class="border border-gray-300 p-2 rounded-lg w-full mb-4" value="{{$product->stock}}">
        @error('stock')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror


        <textarea type="text" rows="5" name="description" placeholder="Product Description" class="border border-gray-300 p-2 rounded-lg w-full mb-4">{{$product->description}}</textarea>
        @error('description')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror

        <p>Current Picture:</p>
        <img src="{{asset('images/'.$product->photopath)}}" alt="" class="w-32">
        <input type="file" name="photopath" class="border border-gray-300 p-2 rounded-lg w-full mb-4">
        @error('photopath')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror

        <div class="flex justify-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Update Product</button>
            <a href="{{route('product.index')}}" class="bg-red-600 text-white px-4 py-2 rounded-lg ml-4">Back</a>

        </div>
    </form>
@endsection