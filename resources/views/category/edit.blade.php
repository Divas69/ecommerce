@extends('layouts.app')
@section('title', 'Edit Category')
@section('content')
    <form action="{{route('category.update',$category->id)}}" method="POST">
        @csrf
        <input type="text" name="priority" placeholder="Priority" class="border border-gray-300 p-2 rounded-lg w-full mb-4" value="{{$category->priority}}">
        @error('priority')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror
        <input type="text" name="name" placeholder="Category Name" class="border border-gray-300 p-2 rounded-lg w-full mb-4" value="{{$category->name}}">
        @error('name')
            <div class="text-red-500 text-sm mb-2 -mt-4">{{ $message }}</div>
        @enderror
        <div class="flex justify-center gap-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Update Category</button>
            <a href="{{route('category.index')}}" class="bg-red-600 text-white px-4 py-2 rounded-lg">Cancel</a>
        </div>
    </form>
@endsection
