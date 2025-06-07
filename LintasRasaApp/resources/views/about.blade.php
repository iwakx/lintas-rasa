@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <div class="relative bg-amber-900 rounded-2xl overflow-hidden mb-12">
        <div class="absolute inset-0">
            <img src="{{ asset('storage/assets/webResources/banner.png') }}" alt="Background" class="w-full h-full object-cover opacity-100">
            <div class="absolute inset-0 bg-amber-900 opacity-0"></div> <!-- Optional overlay -->
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-amber-50 sm:text-5xl lg:text-6xl">
                Visi & Misi Lintas Rasa
            </h1>
            <p class="mt-6 max-w-3xl mx-auto text-xl text-amber-100">
                Membangun kuliner pelajar yang kreatif dan menginspirasi
            </p>
        </div>
    </div>

    <!-- Visi & Misi Sections -->
    <div class="space-y-12">
        <!-- Visi Section -->
        <div class="bg-amber-50 rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <div class="md:flex">
                <div class="md:w-1/3 bg-amber-700 flex items-center justify-center p-8">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-amber-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-amber-50">Visi</h2>
                    </div>
                </div>
                <div class="p-12">
                    <blockquote class="relative">
                        <div class="absolute -top-4 -left-4 text-amber-200 text-7xl font-serif">"</div>
                        <p class="relative z-10 text-amber-900 text-xl md:text-2xl font-medium italic">
                            Menjadi perusahaan kuliner pelajar yang kreatif dan inspiratif, serta mampu mengangkat kuliner tradisional ke level yang lebih modern.
                        </p>
                        <div class="absolute -bottom-4 -right-4 text-amber-200 text-7xl font-serif">"</div>
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- Misi Section -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <div class="md:flex flex-row-reverse">
                <div class="md:w-1/3 bg-amber-800 flex items-center justify-center p-8">
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-amber-700 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-amber-50">Misi</h2>
                    </div>
                </div>
                <div class="p-12">
                    <ul class="space-y-6">
                        @foreach([
                            'Melatih jiwa kewirausahaan siswa melalui praktik langsung.',
                            'Menyajikan produk kuliner tradisional berkualitas dan terjangkau.',
                            'Mengemas produk lokal dengan pendekatan visual dan rasa yang kekinian.',
                            'Membangun kerja sama lintas jurusan sebagai tim profesional.'
                        ] as $index => $misi)
                        <li class="flex items-start group">
                            <div class="flex-shrink-0 mt-1 group-hover:bg-amber-200 group-hover:scale-110 transition-all duration-200">
                                <div class="flex items-center justify-center h-6 w-6 rounded-full bg-amber-100 text-amber-800 font-bold">{{ $index + 1 }}</div>
                            </div>
                            <p class="ml-4 text-lg text-amber-900 group-hover:text-amber-700 transition-colors duration-200">{{ $misi }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="relative bg-amber-50 rounded-2xl shadow-xl p-12 mb-12 overflow-hidden">
        <div class="absolute inset-0 opacity-5 bg-[url('https://img.freepik.com/free-vector/hand-painted-batik-pattern-background_23-2149235956.jpg')] bg-cover"></div>
        <div class="relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-amber-900">Tim Profesional Kami</h2>
                <p class="mt-4 text-lg text-amber-700 max-w-2xl mx-auto">
                    Berkolaborasi lintas jurusan untuk menciptakan pengalaman kuliner terbaik
                </p>
            </div>
            
            <!-- Leadership Team -->
            <div class="mb-16">
    <h3 class="text-2xl font-bold text-amber-800 mb-6 text-center border-b-2 border-amber-200 pb-2">Petinggi Tim</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([
            ['Pemimpin', 'Memimpin seluruh tim menuju visi bersama', 'amber-200', 'amber-700', 'storage/assets/Screenshot 2025-06-05 143007.png', true],
            ['Wakil Pemimpin', 'Mendukung pemimpin dalam mengkoordinasikan tim', 'amber-300', 'amber-800', 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', false],
            ['Sekretaris 1', 'Mengelola administrasi dan dokumentasi tim', 'amber-400', 'amber-900', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', false],
            ['Sekretaris 2', 'Mendukung administrasi dan korespondensi tim', 'amber-500', 'amber-950', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', false],
            ['Bendahara 1', 'Mengelola keuangan dan anggaran tim', 'amber-600', 'white', 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', false],
            ['Bendahara 2', 'Mendukung pengelolaan keuangan dan pelaporan', 'amber-700', 'white', 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', false]
        ] as $leader)
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:transform hover:scale-105 hover:shadow-lg group">
            <div class="h-48 bg-{{ $leader[2] }} flex items-center justify-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://img.freepik.com/free-vector/hand-painted-batik-pattern-background_23-2149235956.jpg')] opacity-10"></div>
                @if($leader[5])
                    <img src="{{ asset($leader[4]) }}" class="h-full w-full object-contain p-4 group-hover:scale-110 transition-transform duration-300" alt="{{ $leader[0] }}">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-{{ $leader[3] }} group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="{{ $leader[4] }}" />
                    </svg>
                @endif
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-amber-900">{{ $leader[0] }}</h3>
                <p class="mt-2 text-amber-600">{{ $leader[1] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
            
            <!-- Divisions Accordion -->
            <div>
    <h3 class="text-xl font-bold text-amber-800 mb-4 text-center border-b-2 border-amber-200 pb-2">Divisi Kami</h3>
    
    <div class="space-y-3" x-data="{ openDivision: null }" style="transform: scale(0.9); transform-origin: top center;">
        <!-- Divisi AKL -->
        <div class="border border-amber-200 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-md" 
             :class="{ 'shadow-md': openDivision === 1 }">
            <button @click="openDivision = openDivision === 1 ? null : 1" 
                    class="w-full flex justify-between items-center p-4 bg-amber-100 hover:bg-amber-200 transition-colors duration-200">
                <h4 class="text-lg font-bold text-amber-900">Divisi AKL (11 Orang)</h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-700 transform transition-transform duration-300" 
                     :class="{ 'rotate-180': openDivision === 1 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="openDivision === 1" x-collapse class="p-4 bg-white">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    @foreach([
                        ['Anggota 1 AKL', 'storage/assets/team/akl_1.jpg'],
                        ['Anggota 2 AKL', 'storage/assets/team/akl_2.jpg'],
                        ['Anggota 3 AKL', 'storage/assets/team/akl_3.jpg'],
                        ['Anggota 4 AKL', 'storage/assets/team/akl_4.jpg'],
                        ['Anggota 5 AKL', 'storage/assets/team/akl_5.jpg'],
                        ['Anggota 6 AKL', 'storage/assets/team/akl_6.jpg'],
                        ['Anggota 7 AKL', 'storage/assets/team/akl_7.jpg'],
                        ['Anggota 8 AKL', 'storage/assets/team/akl_8.jpg'],
                        ['Anggota 9 AKL', 'storage/assets/team/akl_9.jpg'],
                        ['Anggota 10 AKL', 'storage/assets/team/akl_10.jpg'],
                        ['Anggota 11 AKL', 'storage/assets/team/akl_11.jpg']
                    ] as $member)
                    <div class="text-center group">
                        <div class="w-full aspect-square mx-auto bg-amber-200 rounded-full overflow-hidden mb-1 flex items-center justify-center">
                            <img src="{{ asset($member[1]) }}" 
                                 class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                 alt="{{ $member[0] }}">
                        </div>
                        <p class="text-xs font-medium text-amber-900 group-hover:text-amber-700 transition-colors">
                            {{ $member[0] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Divisi MP -->
        <div class="border border-amber-200 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-md" 
             :class="{ 'shadow-md': openDivision === 2 }">
            <button @click="openDivision = openDivision === 2 ? null : 2" 
                    class="w-full flex justify-between items-center p-4 bg-amber-100 hover:bg-amber-200 transition-colors duration-200">
                <h4 class="text-lg font-bold text-amber-900">Divisi MP (7 Orang)</h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-700 transform transition-transform duration-300" 
                     :class="{ 'rotate-180': openDivision === 2 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="openDivision === 2" x-collapse class="p-4 bg-white">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach([
                        ['Anggota 1 MP', 'storage/assets/team/mp_1.jpg'],
                        ['Anggota 2 MP', 'storage/assets/team/mp_2.jpg'],
                        ['Anggota 3 MP', 'storage/assets/team/mp_3.jpg'],
                        ['Anggota 4 MP', 'storage/assets/team/mp_4.jpg'],
                        ['Anggota 5 MP', 'storage/assets/team/mp_5.jpg'],
                        ['Anggota 6 MP', 'storage/assets/team/mp_6.jpg'],
                        ['Anggota 7 MP', 'storage/assets/team/mp_7.jpg']
                    ] as $member)
                    <div class="text-center group">
                        <div class="w-full aspect-square mx-auto bg-amber-200 rounded-full overflow-hidden mb-1 flex items-center justify-center">
                            <img src="{{ asset($member[1]) }}" 
                                 class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                 alt="{{ $member[0] }}">
                        </div>
                        <p class="text-xs font-medium text-amber-900 group-hover:text-amber-700 transition-colors">
                            {{ $member[0] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Divisi BD -->
        <div class="border border-amber-200 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-md" 
             :class="{ 'shadow-md': openDivision === 3 }">
            <button @click="openDivision = openDivision === 3 ? null : 3" 
                    class="w-full flex justify-between items-center p-4 bg-amber-100 hover:bg-amber-200 transition-colors duration-200">
                <h4 class="text-lg font-bold text-amber-900">Divisi BD (4 Orang)</h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-700 transform transition-transform duration-300" 
                     :class="{ 'rotate-180': openDivision === 3 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="openDivision === 3" x-collapse class="p-4 bg-white">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach([
                        ['Anggota 1 BD', 'storage/assets/team/bd_1.jpg'],
                        ['Anggota 2 BD', 'storage/assets/team/bd_2.jpg'],
                        ['Anggota 3 BD', 'storage/assets/team/bd_3.jpg'],
                        ['Anggota 4 BD', 'storage/assets/team/bd_4.jpg']
                    ] as $member)
                    <div class="text-center group">
                        <div class="w-full aspect-square mx-auto bg-amber-200 rounded-full overflow-hidden mb-1 flex items-center justify-center">
                            <img src="{{ asset($member[1]) }}" 
                                 class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                 alt="{{ $member[0] }}">
                        </div>
                        <p class="text-xs font-medium text-amber-900 group-hover:text-amber-700 transition-colors">
                            {{ $member[0] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Divisi BR -->
        <div class="border border-amber-200 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-md" 
             :class="{ 'shadow-md': openDivision === 4 }">
            <button @click="openDivision = openDivision === 4 ? null : 4" 
                    class="w-full flex justify-between items-center p-4 bg-amber-100 hover:bg-amber-200 transition-colors duration-200">
                <h4 class="text-lg font-bold text-amber-900">Divisi BR (7 Orang)</h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-700 transform transition-transform duration-300" 
                     :class="{ 'rotate-180': openDivision === 4 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="openDivision === 4" x-collapse class="p-4 bg-white">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach([
                        ['Anggota 1 BR', 'storage/assets/team/br_1.jpg'],
                        ['Anggota 2 BR', 'storage/assets/team/br_2.jpg'],
                        ['Anggota 3 BR', 'storage/assets/team/br_3.jpg'],
                        ['Anggota 4 BR', 'storage/assets/team/br_4.jpg'],
                        ['Anggota 5 BR', 'storage/assets/team/br_5.jpg'],
                        ['Anggota 6 BR', 'storage/assets/team/br_6.jpg'],
                        ['Anggota 7 BR', 'storage/assets/team/br_7.jpg']
                    ] as $member)
                    <div class="text-center group">
                        <div class="w-full aspect-square mx-auto bg-amber-200 rounded-full overflow-hidden mb-1 flex items-center justify-center">
                            <img src="{{ asset($member[1]) }}" 
                                 class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                 alt="{{ $member[0] }}">
                        </div>
                        <p class="text-xs font-medium text-amber-900 group-hover:text-amber-700 transition-colors">
                            {{ $member[0] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Divisi ULW -->
        <div class="border border-amber-200 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-md" 
             :class="{ 'shadow-md': openDivision === 5 }">
            <button @click="openDivision = openDivision === 5 ? null : 5" 
                    class="w-full flex justify-between items-center p-4 bg-amber-100 hover:bg-amber-200 transition-colors duration-200">
                <h4 class="text-lg font-bold text-amber-900">Divisi ULW (4 Orang)</h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-700 transform transition-transform duration-300" 
                     :class="{ 'rotate-180': openDivision === 5 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="openDivision === 5" x-collapse class="p-4 bg-white">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach([
                        ['Anggota 1 ULW', 'storage/assets/team/ulw_1.jpg'],
                        ['Anggota 2 ULW', 'storage/assets/team/ulw_2.jpg'],
                        ['Anggota 3 ULW', 'storage/assets/team/ulw_3.jpg'],
                        ['Anggota 4 ULW', 'storage/assets/team/ulw_4.jpg']
                    ] as $member)
                    <div class="text-center group">
                        <div class="w-full aspect-square mx-auto bg-amber-200 rounded-full overflow-hidden mb-1 flex items-center justify-center">
                            <img src="{{ asset($member[1]) }}" 
                                 class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                 alt="{{ $member[0] }}">
                        </div>
                        <p class="text-xs font-medium text-amber-900 group-hover:text-amber-700 transition-colors">
                            {{ $member[0] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Divisi RPL -->
        <div class="border border-amber-200 rounded-lg overflow-hidden transition-all duration-300 hover:shadow-md" 
             :class="{ 'shadow-md': openDivision === 6 }">
            <button @click="openDivision = openDivision === 6 ? null : 6" 
                    class="w-full flex justify-between items-center p-4 bg-amber-100 hover:bg-amber-200 transition-colors duration-200">
                <h4 class="text-lg font-bold text-amber-900">Divisi RPL (3 Orang)</h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-700 transform transition-transform duration-300" 
                     :class="{ 'rotate-180': openDivision === 6 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="openDivision === 6" x-collapse class="p-4 bg-white">
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    @foreach([
                        ['Anggota 1 RPL', 'storage/assets/team/rpl_1.jpg'],
                        ['Anggota 2 RPL', 'storage/assets/team/rpl_2.jpg'],
                        ['Anggota 3 RPL', 'storage/assets/team/rpl_3.jpg']
                    ] as $member)
                    <div class="text-center group">
                        <div class="w-full aspect-square mx-auto bg-amber-200 rounded-full overflow-hidden mb-1 flex items-center justify-center">
                            <img src="{{ asset($member[1]) }}" 
                                 class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-300" 
                                 alt="{{ $member[0] }}">
                        </div>
                        <p class="text-xs font-medium text-amber-900 group-hover:text-amber-700 transition-colors">
                            {{ $member[0] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- CTA Section -->
    <div class="relative bg-gradient-to-r from-amber-700 to-amber-600 rounded-2xl shadow-xl p-8 md:p-12 text-center overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://img.freepik.com/free-vector/hand-painted-batik-pattern-background_23-2149235956.jpg')] opacity-10"></div>
        <div class="relative z-10">
            <h2 class="text-2xl md:text-3xl font-bold text-amber-50 mb-4">Tertarik dengan produk kami?</h2>
            <p class="text-lg text-amber-100 mb-6 max-w-2xl mx-auto">
                Temukan berbagai kuliner tradisional dengan sentuhan modern yang kami tawarkan
            </p>
            <a href="/menu" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-amber-700 bg-amber-50 hover:bg-amber-100 transition duration-150 ease-in-out transform hover:scale-105">
                Lihat Produk Kami
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection