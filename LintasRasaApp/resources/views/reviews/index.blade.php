@extends('layouts.app')

@section('content')

    @if($reviews->isEmpty())
        <p class="text-gray-600">Belum ada ulasan untuk produk ini.</p>
    @else
        @foreach ($reviews as $review)
<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Ulasan untuk: {{ $review->menu->name }}</h2>
            <div class="border rounded p-4 mb-4 shadow-sm">
                <div class="flex justify-between items-center mb-2">
                    <div class="font-semibold">{{ $review->user->name ?? 'Anonim' }}</div>
                    <div class="text-yellow-500">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->rating)
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                    </div>
                </div>
                <p class="text-gray-700 whitespace-pre-line">{{ $review->comment }}</p>
                <div class="text-sm text-gray-500 mt-2">
                    {{ $review->created_at->format('d M Y H:i') }}
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
