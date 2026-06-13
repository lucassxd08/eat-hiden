@extends('layouts.app')
@section('title', 'Mis Pedidos')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Mis pedidos</h1>
<<<<<<< HEAD
        <a href="{{ route('orders.menu') }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2.5 rounded-lg transition">
=======
        <a href="{{ route('orders.restaurants') }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2.5 rounded-lg transition">
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            + Nuevo pedido
        </a>
    </div>

    @forelse($orders as $order)
    @php
        $statusColors = [
            'pending'    => 'bg-yellow-100 text-yellow-700',
            'confirmed'  => 'bg-blue-100 text-blue-700',
            'preparing'  => 'bg-red-100 text-red-700',
            'ready'      => 'bg-green-100 text-green-700',
            'delivering' => 'bg-indigo-100 text-indigo-700',
            'delivered'  => 'bg-green-200 text-green-800',
            'cancelled'  => 'bg-red-100 text-red-700',
        ];
    @endphp

    <div class="bg-black text-white rounded-2xl shadow mb-4 p-6 flex items-center justify-between">
        <div>
            <p class="font-bold">Pedido #{{ $order->id }}</p>
            <p class="text-gray-400 text-sm mt-1">{{ $order->created_at->format('d/m/Y H:i') }}</p>
            <p class="text-gray-400 text-sm">{{ $order->items->count() }} plato(s)</p>
        </div>

        <div class="text-right">
<<<<<<< HEAD
            <p class="font-bold text-red-500 text-lg">
                S/ {{ number_format($order->total, 2) }}
            </p>

=======
            <p class="font-bold text-red-500 text-lg">S/ {{ number_format($order->total, 2) }}</p>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            <span class="inline-block mt-1 px-3 py-1 rounded-full text-xs font-semibold {{ $statusColors[$order->status] ?? 'bg-gray-100 text-gray-600' }}">
                {{ $order->status_label }}
            </span>

            <div class="mt-2">
                <a href="{{ route('orders.show', $order) }}" class="text-red-400 hover:text-red-300 text-sm">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>

    @empty
    <div class="text-center py-20">
        <div class="text-6xl mb-4">🛵</div>
        <p class="text-xl text-gray-500">Aún no tenés pedidos.</p>
<<<<<<< HEAD

        <a href="{{ route('orders.menu') }}"
           class="inline-block mt-4 bg-red-500 text-white font-semibold px-6 py-3 rounded-xl hover:bg-red-600 transition">
=======
        <a href="{{ route('orders.restaurants') }}" class="inline-block mt-4 bg-red-500 text-white font-semibold px-6 py-3 rounded-xl hover:bg-red-600 transition">
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
            Hacer mi primer pedido
        </a>
    </div>
    @endforelse
</div>
<<<<<<< HEAD
@endsection
=======
@endsection

>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
