@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Daftar Pesanan</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-2 border">#</th>
                <th class="p-2 border">User</th>
                <th class="p-2 border">Total</th>
                <th class="p-2 border">Status</th>
                <th class="p-2 border">Bukti</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $index => $order)
                <tr class="border-b">
                    <td class="p-2 border">{{ $index + 1 }}</td>
                    <td class="p-2 border">{{ $order->user->name ?? 'N/A' }}</td>
                    <td class="p-2 border">Rp{{ number_format($order->total, 0, ',', '.') }}</td>
                    <td class="p-2 border capitalize">{{ $order->status }}</td>
                    <td class="p-2 border">
                        <a href="{{ asset('storage/' . $order->payment_proof) }}" target="_blank"
                           class="text-blue-600 hover:underline">Lihat Bukti</a>
                    </td>
                    <td class="p-2 border">
                        <a href="{{ route('admin.orders.edit', $order->id) }}"
                           class="text-white bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">Belum ada pesanan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
