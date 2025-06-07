<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-center text-white" 
             style="background-image: url('{{ asset('storage/assets/Screenshot 2025-06-05 143007.png') }}');">
        <h1 class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-4xl font-bold">
            Selamat Datang di Lintas Rasa – Nikmati Kelezatan Nasi Kuning & Nasi Ulam Otentik
        </h1>
    </section>

    <!-- USP Section -->
    <div class="max-w-7xl mx-auto py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
        <div class="p-6 bg-yellow-100 rounded-lg shadow-lg hover:scale-105 transition transform duration-300">
            <h3 class="text-xl font-semibold text-yellow-700">Cita Rasa Otentik</h3>
            <p class="mt-2 text-gray-600">Kami menghadirkan cita rasa asli dengan bahan-bahan berkualitas terbaik.</p>
        </div>
        <div class="p-6 bg-green-100 rounded-lg shadow-lg hover:scale-105 transition transform duration-300">
            <h3 class="text-xl font-semibold text-green-700">Bahan Higienis</h3>
            <p class="mt-2 text-gray-600">Semua bahan dipilih dengan standar kualitas dan kebersihan terbaik.</p>
        </div>
        <div class="p-6 bg-blue-100 rounded-lg shadow-lg hover:scale-105 transition transform duration-300">
            <h3 class="text-xl font-semibold text-blue-700">Pengiriman Cepat</h3>
            <p class="mt-2 text-gray-600">Pesananmu sampai dengan cepat dan sesuai jadwal!</p>
        </div>
        <div class="p-6 bg-red-100 rounded-lg shadow-lg hover:scale-105 transition transform duration-300">
            <h3 class="text-xl font-semibold text-red-700">Kemasan Ramah</h3>
            <p class="mt-2 text-gray-600">Kami menggunakan kemasan yang aman dan ramah lingkungan.</p>
        </div>
    </div>
</x-app-layout>
