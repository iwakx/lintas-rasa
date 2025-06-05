@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-12">
    <div class="bg-white shadow-md rounded-lg p-8 text-center">
        <h1 class="text-2xl font-bold text-brown-700">Tentang Kami</h1>
        <p class="mt-4 text-brown-600">Tim Lintas Rasa siap membantu Anda!</p>

        <div class="grid md:grid-cols-2 gap-6 mt-8">
            <div class="bg-brown-50 p-6 rounded-lg shadow flex flex-col items-center">
                <img src="{{ asset('storage/assets/envelope.png') }}" alt="Phone Icon" class="w-12 h-12">
                <h2 class="mt-4 font-semibold text-brown-700">Email Kami</h2>
                <p class="mt-2 text-brown-600">lintasrasa@gmail.com</p>
                <a href="mailto:lintasrasa@gmail.com" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">Kirim Email KE DARMA</a>
            </div>
            
            <div class="bg-brown-50 p-6 rounded-lg shadow flex flex-col items-center">
                <img src="{{ asset('storage\assets\phone-call.png') }}" alt="Phone Icon" class="w-12 h-12">
                <h2 class="mt-4 font-semibold text-brown-700">Kontak Admin (Haydar)</h2>
                <p class="mt-2 text-brown-600">0838-2411-3430</p>
                <a href="tel:085884633211" class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700 transition">Hubungi Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection