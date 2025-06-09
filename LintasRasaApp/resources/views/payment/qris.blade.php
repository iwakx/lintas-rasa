@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Scan QRIS untuk Melanjutkan Pembayaran</h2>

    <img src="{{ asset('images/qris_' . $menu->id . '.png') }}" alt="QRIS {{ $menu->name }}" class="w-full h-auto mb-6 rounded shadow">

    <form action="{{ route('payment.process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="total" value="{{ $total }}">
        <input type="hidden" name="order" value="{{ $order }}">

        <div class="mb-4">
            <label for="payment_proof" class="block font-semibold mb-2">Upload Bukti Pembayaran (Screenshot)</label>
            <input type="file" name="payment_proof" id="payment_proof" accept="image/*" required
                   class="w-full border p-2 rounded">
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-semibold">
                Kirim Bukti Pembayaran
            </button>

            <a href="{{ route('payment.confirm') }}"
               class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded font-semibold">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection
