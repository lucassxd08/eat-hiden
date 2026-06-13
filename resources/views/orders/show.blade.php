@extends('layouts.app')
@section('title', 'Pedido #' . $order->id)

@section('content')
<div class="max-w-2xl mx-auto px-4 py-10">
    <div class="mb-6">
        <a href="{{ route('orders.index') }}" class="text-red-500 hover:underline text-sm">&larr; Mis pedidos</a>
<<<<<<< HEAD
        <h1 class="text-3xl font-bold text-black mt-2">Pedido #{{ $order->id }}</h1>
=======
        <h1 class="text-3xl font-bold text-gray-900 mt-2">Pedido #{{ $order->id }}</h1>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
    </div>

    <div class="bg-black text-white rounded-2xl shadow p-8 space-y-6">
        {{-- Estado --}}
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-400">Estado actual</p>
                <p class="text-xl font-bold text-white mt-1">{{ $order->status_label }}</p>
            </div>

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

            <span class="px-4 py-2 rounded-full text-sm font-semibold {{ $statusColors[$order->status] ?? 'bg-black text-white border border-red-500' }}">
                {{ $order->status_label }}
            </span>
        </div>

        <hr class="border-gray-700">

        {{-- Detalles --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
            <div>
                <p class="text-gray-400">Fecha</p>
                <p class="font-medium text-white">{{ $order->created_at->format('d/m/Y H:i') }}</p>
            </div>

            <div>
                <p class="text-gray-400">Dirección de entrega</p>
                <p class="font-medium text-white">{{ $order->delivery_address }}</p>
            </div>

            @if($order->notes)
            <div class="sm:col-span-2">
                <p class="text-gray-400">Notas</p>
                <p class="font-medium text-white">{{ $order->notes }}</p>
            </div>
            @endif

            @if($order->deliveryPerson)
            <div>
                <p class="text-gray-400">Repartidor</p>
                <p class="font-medium text-white">{{ $order->deliveryPerson->name }}</p>
            </div>
            @endif
        </div>

        <hr class="border-gray-700">

        {{-- Items --}}
        <div>
            <h2 class="font-bold text-white mb-3">Detalle del pedido</h2>

            <table class="w-full text-sm">
                <thead class="text-gray-400 border-b border-gray-700">
                    <tr>
                        <th class="pb-2 text-left">Plato</th>
                        <th class="pb-2 text-center">Cant.</th>
                        <th class="pb-2 text-right">Precio unit.</th>
                        <th class="pb-2 text-right">Subtotal</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-700">
                    @foreach($order->items as $item)
                    <tr>
                        <td class="py-2">{{ $item->dish->name }}</td>
                        <td class="py-2 text-center">{{ $item->quantity }}</td>
                        <td class="py-2 text-right">S/ {{ number_format($item->unit_price, 2) }}</td>
                        <td class="py-2 text-right font-medium">S/ {{ number_format($item->subtotal, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot class="border-t border-gray-700">
                    <tr>
<<<<<<< HEAD
                        <td colspan="3" class="pt-3 text-right font-bold text-white">
                            Total
                        </td>
                        <td class="pt-3 text-right font-bold text-red-500 text-lg">
                            S/ {{ number_format($order->total, 2) }}
                        </td>
=======
                        <td colspan="3" class="pt-3 text-right font-bold text-gray-900">Total</td>
                        <td class="pt-3 text-right font-bold text-red-500 text-lg">S/ {{ number_format($order->total, 2) }}</td>
>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection

>>>>>>> 5b8c974b928f3ecd035d68eff01a4f88fe2272d6
