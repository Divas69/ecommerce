@extends('layouts.app')
@section('title')
Dashboard
@endsection

@section('content')
 <div class="grid grid-cols-3 gap-5">
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold">Total Products</h2>
        <p class="text-3xl font-bold">150</p>
    </div>
    <div class="bg-red-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold">Pending Orders</h2>
        <p class="text-3xl font-bold">16</p>
    </div>
    <div class="bg-green-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold">Processing Products</h2>
        <p class="text-3xl font-bold">60</p>
    </div>
    <div class="bg-yellow-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold">Total Users</h2>
        <p class="text-3xl font-bold">1500</p>
    </div>
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold">Total Categories</h2>
        <p class="text-3xl font-bold">{{$totalcategories}}</p>
    </div>
    <div class="bg-red-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold">Total Sales</h2>
        <p class="text-3xl font-bold">Rs.15000</p>
    </div>
 </div>
@endsection
