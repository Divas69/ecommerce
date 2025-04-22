@extends('layouts.app')
@section('title', 'Categories')
@section('content')

<div class="flex justify-end my-4">
    <a href="{{route('category.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Create Category</a>
</div>

<table class="w-full">
    <tr class="bg-gray-200">
        <th class="p-3 border border-gray-300">Order</th>
        <th class="p-3 border border-gray-300">Category Name</th>
        <th class="p-3 border border-gray-300">Action</th>
    </tr>
    @foreach($categories as $category)
    <tr class="text-center">
        <td class="p-3 border">{{$category->priority}}</td>
        <td class="p-3 border">{{$category->name}}</td>
        <td class="p-3 border">
            <a href="{{route('category.edit', $category->id)}}" class="bg-green-600 text-white px-4 py-2 rounded-lg">Edit</a>
            <a onclick="deletefunction('{{$category->id}}')" class="bg-red-600 text-white px-4 py-2 rounded-lg cursor-pointer">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<div id= "deletepopup"class="hidden fixed inset-0 bg-blue-600 bg-opacity-60 backdrop-blur-sm items-center justify-center">
  <form action="{{route('category.destroy')}}" method ="Post"class="bg-white px-10 py-6 rounded-lg shadow text-center">
    @csrf
    <input type="hidden" name="id" id="detailed">
    <p class="font-bold text-lg">Are you sure to Delete?</p>
    <div class="flex gap-4 mt-4">
      <button type="submit" class="bg-blue-600 text-white px-10 py-2 rounded-lg">Yes</button>
      <button onclick="hidepopup()" type="button" class="bg-red-600 text-white px-10 py-2 rounded-lg cursor-pointer">No</button>
    </div>
  </form>
</div>
<script>
    function deletefunction(id){
        document.getElementById('deletepopup').classList.remove('hidden');
        document.getElementById('deletepopup').classList.add('flex');
        document.getElementById('detailed').value = id;
    }
    function hidepopup(){
        document.getElementById('deletepopup').classList.remove('flex');
        document.getElementById('deletepopup').classList.add('hidden');
       
    }
</script>

@endsection