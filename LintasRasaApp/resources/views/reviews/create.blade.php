@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Beri Ulasan untuk Pesanan Anda</h2>

    <form action="{{ route('reviews.store', $order->id) }}" method="POST">
        @csrf

        @foreach ($orderData as $menuId => $qty)
    @php
        $menu = \App\Models\Menu::find($menuId);
    @endphp

    @if ($menu)
        <div class="mb-6 p-4 border rounded shadow">
            <h3 class="font-semibold text-lg mb-2">{{ $menu->name }}</h3>

            <input type="hidden" name="reviews[{{ $menuId }}][menu_id]" value="{{ $menu->id }}">
            <input type="hidden" name="reviews[{{ $menuId }}][order_id]" value="{{ $order['id'] }}">

            <label for="rating_{{ $menuId }}" class="block font-medium mb-1">Rating (1–5)</label>
            <select name="reviews[{{ $menuId }}][rating]" id="rating_{{ $menuId }}" required class="w-full border p-2 rounded mb-3">
                <option value="">Pilih rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }} ⭐</option>
                @endfor
            </select>

            <label for="comment_{{ $menuId }}" class="block font-medium mb-1">Komentar</label>
            <textarea name="reviews[{{ $menuId }}][comment]" id="comment_{{ $menuId }}" rows="3" class="w-full border p-2 rounded" placeholder="Tuliskan ulasan..."></textarea>
        </div>
    @endif
@endforeach

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 font-semibold">
            Kirim Ulasan
        </button>
    </form>
</div>
@endsection
