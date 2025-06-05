@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-12">
    <div class="bg-white shadow-md rounded-lg p-8 text-center">
        <h1 class="text-2xl font-bold text-brown-700">Tentang Kami</h1>
        <p class="mt-4 text-brown-600">Kami adalah tim yang berdedikasi untuk memberikan pengalaman terbaik kepada pelanggan dengan produk dan layanan berkualitas.</p>

        <div class="grid md:grid-cols-2 gap-6 mt-8">
            <div class="bg-brown-50 p-6 rounded-lg shadow flex flex-col items-center">
                <img src="/images/team-photo.jpg" alt="Tim Kami" class="w-32 h-32 rounded-full">
                <h2 class="mt-4 font-semibold text-brown-700">Tim Profesional</h2>
                <p class="mt-2 text-brown-600">Kami terdiri dari para ahli di bidang masing-masing yang siap membantu Anda.</p>
            </div>

            <div class="bg-brown-50 p-6 rounded-lg shadow flex flex-col items-center">
                <img src="/images/mission.jpg" alt="Misi Kami" class="w-32 h-32 rounded-full">
                <h2 class="mt-4 font-semibold text-brown-700">Misi Kami</h2>
                <p class="mt-2 text-brown-600">Menyediakan produk berkualitas tinggi dan layanan terbaik untuk kepuasan pelanggan.</p>
            </div>
        </div>
    </div>
</div>
@endsection