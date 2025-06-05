@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Konfirmasi Pembayaran</h2>

    <div class="bg-white shadow-md rounded-lg p-6">
        @if (count($orderDetails) > 0)
            <table class="w-full mb-6">
                <thead>
                    <tr class="text-left border-b">
                        <th class="pb-2">Menu</th>
                        <th class="pb-2">Jumlah</th>
                        <th class="pb-2">Harga</th>
                        <th class="pb-2">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderDetails as $item)
                        <tr class="border-b text-sm text-gray-700">
                            <td class="py-2">{{ $item['name'] }}</td>
                            <td class="py-2">x{{ $item['qty'] }}</td>
                            <td class="py-2">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                            <td class="py-2 font-semibold text-red-500">Rp {{ number_format($item['subtotal'], 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-right text-lg font-bold text-red-600 mb-4">
                Total: Rp {{ number_format($total, 0, ',', '.') }}
            </div>

            <form action="{{ route('payment.qris') }}" method="GET">
                @csrf
                <input type="hidden" name="order" value="{{ json_encode($orderDetails) }}">
                <input type="hidden" name="total" value="{{ $total }}">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg">
                    Bayar Sekarang
                </button>
            </form>
        @else
            <p class="text-gray-600">Tidak ada item dalam pesanan.</p>
        @endif

        <a href="{{ route('menu.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">
            ← Kembali ke Menu
        </a>
    </div>
</div>
@endsection
