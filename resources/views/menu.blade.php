@extends('layouts.app')
@section('title', 'Restaurantes')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-gray-900 mb-2">Nuestros Restaurantes</h1>
    <p class="text-gray-500 mb-10">Elegí una dark kitchen y explorá su menú</p>

<<<<<<< HEAD
    @if($categories->count())
        @foreach($categories as $category)
            @if($category->dishes->count())
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-red-500 pb-2">
                    {{ $category->name }}
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($category->dishes as $dish)
                    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
                        <div class="bg-red-50 h-36 flex items-center justify-center text-5xl">🍽</div>
                        <div class="p-5">
                            <h3 class="font-bold text-lg">{{ $dish->name }}</h3>
                            @if($dish->description)
                                <p class="text-gray-500 text-sm mt-1">{{ $dish->description }}</p>
                            @endif
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-red-600 font-bold text-lg">S/ {{ number_format($dish->price, 2) }}</span>
                                <a href="{{ route('orders.menu') }}" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded-lg transition">
                                    Agregar
                                </a>
                            </div>
                        </div>
=======
    @if($restaurants->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($restaurants as $restaurant)
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
                <div class="bg-red-50 h-36 flex items-center justify-center text-5xl">🍽️</div>
                <div class="p-5">
                    <h3 class="font-bold text-lg text-gray-800">{{ $restaurant->name }}</h3>
                    @if($restaurant->description)
                        <p class="text-gray-500 text-sm mt-1">{{ $restaurant->description }}</p>
                    @endif
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-gray-400 text-sm">{{ $restaurant->dishes_count }} platos</span>
                        @auth
                            <a href="{{ route('orders.menu', $restaurant) }}" class="bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded-lg transition">
                                Ver menú
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded-lg transition">
                                Iniciar sesión
                            </a>
                        @endauth
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-20 text-gray-400">
            <div class="text-6xl mb-4">🏪</div>
            <p class="text-xl">No hay restaurantes disponibles en este momento.</p>
        </div>
    @endif
</div>
@endsection
