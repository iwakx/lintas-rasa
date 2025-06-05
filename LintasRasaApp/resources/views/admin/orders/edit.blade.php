@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto py-10">
    <h2 class="text-2xl font-bold mb-4">Ubah Status Pesanan</h2>

    <div class="mb-4">
        <p><strong>Total:</strong> Rp{{ number_format($order->total, 0, ',', '.') }}</p>
        <p><strong>Status Saat Ini:</strong> <span class="capitalize">{{ $order->status }}</span></p>
        <p><strong>Bukti Pembayaran:</strong> 
            <a href="{{ asset('storage/' . $order->payment_proof) }}" target="_blank"
               class="text-blue-600 hover:underline">Lihat Bukti</a>
        </p>
    </div>

    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="status" class="block font-semibold mb-2">Status Baru</label>
            <select name="status" id="status" class="w-full border p-2 rounded" required>
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ $order->status == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $order->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded font-semibold">
            Simpan Perubahan
        </button>
    </form>
</div>
@endsection
