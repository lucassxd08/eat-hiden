@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

{{-- Hero --}}
<section class="bg-black text-white">
    <div class="max-w-7xl mx-auto px-4 py-24 flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1">
            <span class="text-red-400 font-semibold text-sm uppercase tracking-wider">Plataforma de delivery</span>
            <h1 class="text-4xl md:text-6xl font-bold mt-3 leading-tight">
                Las mejores<br>
                <span class="text-red-400">dark kitchens,</span><br>
                en un solo lugar.
            </h1>
            <p class="mt-6 text-gray-300 text-lg max-w-xl">
                EatHidden reúne varias cocinas ocultas especializadas. Chefs profesionales,
                sin local, sin esperas innecesarias. Solo sabor directo a tu puerta.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
<<<<<<< HEAD
                <a href="{{ route('orders.menu') }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-xl transition">
                    Pedir ahora
                </a>
                <a href="{{ route('menu') }}" class="border border-white hover:border-red-400 hover:text-red-400 text-white font-semibold px-8 py-3 rounded-xl transition">
                    Ver menú completo
=======
                @auth
                    <a href="{{ route('orders.restaurants') }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-xl transition">
                        Pedir ahora
                    </a>
                @else
                    <a href="{{ route('register') }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-xl transition">
                        Pedir ahora
                    </a>
                @endauth
                <a href="{{ route('menu') }}" class="border border-white hover:border-red-400 hover:text-red-400 text-white font-semibold px-8 py-3 rounded-xl transition">
                    Ver restaurantes
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                </a>
            </div>
        </div>
        <div class="flex-1 flex justify-center">
            <div class="bg-black rounded-2xl p-10 text-center shadow-2xl w-72 border border-red-500">
                <div class="text-7xl mb-4">🍽</div>
<<<<<<< HEAD
                <p class="text-red-400 font-semibold text-lg">Múltiples cocinas</p>
=======
                <p class="text-red-400 font-semibold text-lg">Múltiples dark kitchens</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                <p class="text-gray-400 text-sm mt-1">Un solo pedido, un solo delivery</p>
                <div class="mt-4 flex justify-center gap-4 text-3xl">🍔 🌮 🍜 🍕</div>
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="bg-red-500 text-white py-10">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
<<<<<<< HEAD
            <p class="text-4xl font-bold">{{ $categories->count() }}+</p>
            <p class="text-red-100 mt-1">Categorías</p>
        </div>
        <div>
            <p class="text-4xl font-bold">{{ $featuredDishes->count() }}+</p>
=======
            <p class="text-4xl font-bold">{{ $restaurants->count() }}+</p>
            <p class="text-red-100 mt-1">Restaurantes</p>
        </div>
        <div>
            <p class="text-4xl font-bold">{{ $restaurants->sum('dishes_count') }}+</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            <p class="text-red-100 mt-1">Platos disponibles</p>
        </div>
        <div>
            <p class="text-4xl font-bold">30</p>
            <p class="text-red-100 mt-1">Min. de entrega</p>
        </div>
        <div>
            <p class="text-4xl font-bold">7</p>
            <p class="text-red-100 mt-1">Días a la semana</p>
        </div>
    </div>
</section>

{{-- Cómo funciona --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">¿Cómo funciona?</h2>
        <p class="text-center text-gray-500 mb-12">De la cocina a tu puerta en simples pasos</p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
<<<<<<< HEAD
            <div class="text-center p-6 bg-black text-white rounded-2xl">
                <div class="text-5xl mb-4">📋</div>
=======
            <div class="text-center p-6 bg-gray-50 rounded-2xl">
                <div class="text-5xl mb-4">🏪</div>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                <h3 class="text-lg font-semibold mb-2">1. Elegís tu cocina</h3>
                <p class="text-gray-300 text-sm">Explorá las distintas dark kitchens y sus especialidades.</p>
            </div>

            <div class="text-center p-6 bg-black text-white rounded-2xl">
                <div class="text-5xl mb-4">🛒</div>
                <h3 class="text-lg font-semibold mb-2">2. Armás tu pedido</h3>
                <p class="text-gray-300 text-sm">Seleccioná los platos que querés y confirmás el pedido.</p>
            </div>

            <div class="text-center p-6 bg-black text-white rounded-2xl">
                <div class="text-5xl mb-4">👨‍🍳</div>
                <h3 class="text-lg font-semibold mb-2">3. La cocina prepara</h3>
                <p class="text-gray-300 text-sm">El equipo de cocina recibe y prepara tu orden.</p>
            </div>

            <div class="text-center p-6 bg-black text-white rounded-2xl">
                <div class="text-5xl mb-4">🛵</div>
                <h3 class="text-lg font-semibold mb-2">4. Lo recibís</h3>
                <p class="text-gray-300 text-sm">El repartidor lleva tu pedido directo a tu domicilio.</p>
            </div>
        </div>
    </div>
</section>

<<<<<<< HEAD
{{-- Restaurantes Destacados --}}
@if($featuredDishes->count())
<section class="py-16 bg-black">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-white mb-4">Restaurantes Destacados</h2>
        <p class="text-center text-gray-300 mb-12">Lo más pedido de nuestras cocinas esta semana</p>
=======
{{-- Restaurantes destacados --}}
@if($restaurants->count())
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Restaurantes destacados</h2>
        <p class="text-center text-gray-500 mb-12">Conocé nuestras dark kitchens disponibles</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($restaurants as $restaurant)
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition group">
<<<<<<< HEAD
                <div class="bg-red-100 h-40 flex items-center justify-center text-6xl group-hover:bg-red-200 transition">
                    🍽
=======
                <div class="bg-red-50 h-40 flex items-center justify-center text-6xl group-hover:bg-red-100 transition">
                    🍽️
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                </div>

                <div class="p-5">
<<<<<<< HEAD
                    <span class="text-xs text-red-500 font-semibold uppercase">{{ $dish->category->name }}</span>

                    <h3 class="font-bold text-lg mt-1">{{ $dish->name }}</h3>

                    @if($dish->description)
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">{{ $dish->description }}</p>
=======
                    <h3 class="font-bold text-lg text-gray-800">{{ $restaurant->name }}</h3>
                    @if($restaurant->description)
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">{{ $restaurant->description }}</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                    @endif

                    <div class="mt-4 flex items-center justify-between">
<<<<<<< HEAD
                        <span class="text-red-500 font-bold text-xl">
                            S/ {{ number_format($dish->price, 2) }}
                        </span>

                        <a href="{{ route('orders.menu') }}" class="bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded-lg transition">
                            Pedir
                        </a>
=======
                        <span class="text-gray-400 text-sm">{{ $restaurant->dishes_count }} platos</span>
                        @auth
                            <a href="{{ route('orders.menu', $restaurant) }}" class="bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded-lg transition">
                                Ver menú
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded-lg transition">
                                Ver menú
                            </a>
                        @endauth
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
<<<<<<< HEAD
            <a href="{{ route('menu') }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-xl transition">
                Ver menú completo
=======
            <a href="{{ route('menu') }}" class="bg-gray-900 hover:bg-gray-700 text-white font-semibold px-8 py-3 rounded-xl transition">
                Ver todos los restaurantes
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            </a>
        </div>
    </div>
</section>
@endif

<<<<<<< HEAD
{{-- Categorías --}}
@if($categories->count())
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Explorá por categoría</h2>
        <p class="text-center text-gray-500 mb-10">Cada categoría es una especialidad de cocina diferente</p>

        <div class="flex flex-wrap justify-center gap-4">
            @foreach($categories as $cat)
            <a href="{{ route('menu') }}" class="bg-red-500 hover:bg-red-600 border border-red-600 text-white font-semibold px-6 py-3 rounded-full transition">
                {{ $cat->name }}
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

=======
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
{{-- Roles informativos --}}
<section class="py-16 bg-black text-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-4">Una plataforma, múltiples roles</h2>
        <p class="text-center text-gray-400 mb-12">EatHidden conecta a todos los actores del ecosistema dark kitchen</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-900 rounded-2xl p-6 text-center">
                <div class="text-4xl mb-3">⚙️</div>
                <h3 class="font-semibold text-red-400 mb-2">Administrador</h3>
<<<<<<< HEAD
                <p class="text-gray-400 text-sm">Gestiona usuarios, menú, categorías y reportes.</p>
=======
                <p class="text-gray-400 text-sm">Gestiona restaurantes, menú, usuarios y categorías.</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            </div>

            <div class="bg-gray-900 rounded-2xl p-6 text-center">
                <div class="text-4xl mb-3">👨‍🍳</div>
                <h3 class="font-semibold text-red-400 mb-2">Personal de cocina</h3>
                <p class="text-gray-400 text-sm">Recibe pedidos y actualiza su estado en tiempo real.</p>
            </div>

            <div class="bg-gray-900 rounded-2xl p-6 text-center">
                <div class="text-4xl mb-3">📱</div>
                <h3 class="font-semibold text-red-400 mb-2">Cliente</h3>
<<<<<<< HEAD
                <p class="text-gray-400 text-sm">Explora el menú, hace pedidos y hace seguimiento.</p>
=======
                <p class="text-gray-400 text-sm">Elige su dark kitchen, hace pedidos y hace seguimiento.</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            </div>

            <div class="bg-gray-900 rounded-2xl p-6 text-center">
                <div class="text-4xl mb-3">🛵</div>
                <h3 class="font-semibold text-red-400 mb-2">Repartidor</h3>
<<<<<<< HEAD
                <p class="text-gray-400 text-sm">Recibe asignaciones y gestiona sus entregas.</p>
=======
                <p class="text-gray-400 text-sm">Elige sus entregas y las gestiona hasta la puerta.</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-red-500 text-white text-center">
    <div class="max-w-2xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">¿Listo para pedir?</h2>
        <p class="text-red-100 mb-8">Creá tu cuenta y hacé tu primer pedido en minutos.</p>
<<<<<<< HEAD
=======
        <div class="flex flex-wrap justify-center gap-4">
            @auth
                <a href="{{ route('orders.restaurants') }}" class="bg-white text-red-500 hover:bg-red-50 font-bold px-8 py-3 rounded-xl transition">
                    Elegir restaurante
                </a>
            @else
                <a href="{{ route('register') }}" class="bg-white text-red-500 hover:bg-red-50 font-bold px-8 py-3 rounded-xl transition">
                    Crear cuenta gratis
                </a>
                <a href="{{ route('login') }}" class="border-2 border-white hover:bg-red-600 font-bold px-8 py-3 rounded-xl transition">
                    Iniciar sesión
                </a>
            @endauth
        </div>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
    </div>
</section>

@endsection