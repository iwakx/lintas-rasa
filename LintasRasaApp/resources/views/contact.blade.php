@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Batik-inspired header with decorative elements -->
    <div class="relative bg-gradient-to-b from-amber-900 to-amber-950 rounded-t-xl overflow-hidden shadow-2xl">
        <div class="absolute inset-0 opacity-20" style="background-image: url('{{ asset('storage/assets/batik-pattern.png') }}'); background-size: 300px;"></div>
            <div class="relative z-10 px-6 py-12 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-amber-50 mb-2 tracking-wide" style="font-family: Helvetica, Arial, sans-serif">
                Hubungi Kami
            </h1>
            <p class="text-amber-100 text-lg max-w-2xl mx-auto" style="font-family: Helvetica, Arial, sans-serif">
                Tim Lintas Rasa siap membantu Anda dengan segala kebutuhan. Kami senang mendengar dari Anda!
            </p>
            </div>
        <div class="absolute bottom-0 left-0 right-0 h-4 bg-gradient-to-t from-amber-800 to-transparent"></div>
    </div>

    <!-- Main content container with decorative border -->
    <div class="bg-white shadow-2xl rounded-b-xl overflow-hidden relative border-t-0">
        <!-- Decorative corner elements -->
        <div class="absolute top-0 left-0 w-16 h-16 border-l-4 border-t-4 border-amber-700 rounded-tl-xl opacity-30"></div>
        <div class="absolute top-0 right-0 w-16 h-16 border-r-4 border-t-4 border-amber-700 rounded-tr-xl opacity-30"></div>
        
        <div class="grid md:grid-cols-2 gap-0">
            <!-- Left column - Contact information -->
            <div class="bg-amber-50 p-8 md:p-12 relative overflow-hidden">
                <!-- Subtle batik pattern in background -->
                <div class="absolute inset-0 opacity-5 batik-texture"></div>
                
                <div class="relative z-10 space-y-8">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-amber-900 mb-2 font-serif">Informasi Kontak</h2>
                        <div class="w-24 h-1 bg-amber-600 mx-auto rounded-full"></div>
                    </div>
                    
                    <!-- Email card -->
                    <div class="bg-white p-6 rounded-xl shadow-lg border-l-8 border-amber-600 transform transition-all duration-300 hover:shadow-xl hover:scale-[1.02] group">
                        <div class="flex items-center">
                            <div class="bg-amber-100 p-3 rounded-full shadow-inner group-hover:bg-amber-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h2 class="ml-4 font-bold text-amber-900 text-xl group-hover:text-amber-800 transition-colors duration-300">Email Kami</h2>
                        </div>
                        <p class="mt-4 text-amber-800 font-medium">lintasrasa@gmail.com</p>
                        <a href="mailto:lintasrasa@gmail.com" class="mt-4 inline-flex items-center px-6 py-2 bg-gradient-to-r from-amber-600 to-amber-700 text-white rounded-full hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg group-hover:shadow-amber-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Kirim Email
                        </a>
                    </div>

                    <!-- WhatsApp card -->
                    <div class="bg-white p-6 rounded-xl shadow-lg border-l-8 border-green-600 transform transition-all duration-300 hover:shadow-xl hover:scale-[1.02] group">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-3 rounded-full shadow-inner group-hover:bg-green-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <h2 class="ml-4 font-bold text-green-900 text-xl group-hover:text-green-800 transition-colors duration-300">WhatsApp Admin</h2>
                        </div>
                        <p class="mt-4 text-amber-800 font-medium">Haydar: 0838-2411-3430</p>
                        <a href="https://wa.me/6283824113430" target="_blank" class="mt-4 inline-flex items-center px-6 py-2 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-full hover:from-green-700 hover:to-green-800 transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg group-hover:shadow-green-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Chat via WhatsApp
                        </a>
                    </div>

                    <!-- Location card with interactive map -->
                    <div class="bg-white p-6 rounded-xl shadow-lg border-l-8 border-amber-600 transform transition-all duration-300 hover:shadow-xl hover:scale-[1.02] group">
                        <div class="flex items-center">
                            <div class="bg-amber-100 p-3 rounded-full shadow-inner group-hover:bg-amber-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h2 class="ml-4 font-bold text-amber-900 text-xl group-hover:text-amber-800 transition-colors duration-300">Lokasi Kami</h2>
                        </div>
                        <p class="mt-4 text-amber-800">
                            <span class="font-medium">Kantor Lintas Rasa</span><br>
                            Jl. H. R. Rasuna Said No.Kav. C 22, Karet Kuningan,<br>
                            Kecamatan Setiabudi, DKI Jakarta,<br>
                            Daerah Khusus Ibukota Jakarta 12940
                        </p>
                        
                        <!-- Interactive Map Preview -->
                        <div class="mt-4 rounded-lg overflow-hidden border-2 border-amber-200 shadow-inner group-hover:border-amber-300 transition-colors duration-300">
                            <div id="miniMap" class="h-48 w-full"></div>
                        </div>
                        
                        <button id="openMapBtn" class="mt-4 w-full inline-flex items-center justify-center px-6 py-2 bg-gradient-to-r from-amber-700 to-amber-800 text-white rounded-full hover:from-amber-800 hover:to-amber-900 transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                            Buka Peta Lebar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right column - Contact form -->
            <div class="bg-white p-8 md:p-12 relative">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-amber-100 rounded-bl-full opacity-10"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-amber-200 rounded-tr-full opacity-10"></div>
                
                <div class="relative z-10 max-w-md mx-auto">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-amber-900 mb-2 font-serif">Kirim Pesan Langsung</h2>
                        <div class="w-16 h-1 bg-amber-600 mx-auto rounded-full mb-4"></div>
                        <p class="text-amber-700">Isi formulir berikut dan kami akan segera merespons pesan Anda</p>
                    </div>
                    
                    <form id="contactForm" class="space-y-6">
                        <div class="relative">
                            <label for="name" class="block text-sm font-medium text-amber-800 mb-1">Nama Lengkap</label>
                            <input type="text" id="name" name="name" 
                                   class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 placeholder-amber-400" 
                                   placeholder="Nama Anda" required>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none mt-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>
                        
                        <div class="relative">
                            <label for="email" class="block text-sm font-medium text-amber-800 mb-1">Alamat Email</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 placeholder-amber-400" 
                                   placeholder="email@contoh.com" required>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none mt-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        
                        <div class="relative">
                            <label for="subject" class="block text-sm font-medium text-amber-800 mb-1">Subjek Pesan</label>
                            <input type="text" id="subject" name="subject" 
                                   class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 placeholder-amber-400" 
                                   placeholder="Apa yang bisa kami bantu?" required>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none mt-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-amber-800 mb-1">Pesan Anda</label>
                            <textarea id="message" name="message" rows="4" 
                                      class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 placeholder-amber-400" 
                                      placeholder="Tulis pesan Anda secara detail..." required></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full flex items-center justify-center px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-bold rounded-lg hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Kirim Pesan
                        </button>
                    </form>
                    
                    <div id="formSuccess" class="hidden mt-6 p-6 bg-green-50 border-2 border-green-100 text-green-800 rounded-lg text-center animate-fade-in">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Pesan Terkirim!</h3>
                        <p class="text-sm">Terima kasih telah menghubungi kami. Tim kami akan segera merespons pesan Anda dalam 1-2 hari kerja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Full-screen Map Modal -->
<div id="mapModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4 transition-opacity duration-300 backdrop-blur-sm">
    <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-6xl h-[90vh] overflow-hidden transform transition-all duration-300 scale-95 hover:scale-100">
        <div class="absolute top-0 left-0 right-0 bg-amber-800 px-6 py-4 flex justify-between items-center z-10 shadow-md">
            <h3 class="text-xl font-bold text-white font-serif">Lokasi Kantor Lintas Rasa</h3>
            <button id="closeMap" class="text-white hover:text-amber-200 text-3xl transition-transform duration-300 hover:rotate-90 focus:outline-none">
                &times;
            </button>
        </div>
        <div id="fullMap" class="w-full h-full"></div>
        <div class="absolute bottom-4 left-4 bg-white p-3 rounded-lg shadow-md z-10 border-l-4 border-amber-600">
            <p class="text-sm text-amber-800 font-medium flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-2 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Jl. H. R. Rasuna Said No.Kav. C 22, Jakarta
            </p>
        </div>
    </div>
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<style>
    /* Batik-inspired decorative elements */
    .batik-texture {
        background-image: url('{{ asset('storage/assets/batik-pattern.png') }}');
        background-size: 300px;
        opacity: 0.05;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        background: #f5f5f5;
        border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #d97706, #92400e);
        border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #b45309, #78350f);
    }
    
    /* Animation classes */
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }
    .animate-pulse-slow {
        animation: pulse 3s infinite;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
    
    /* Leaflet map adjustments */
    .leaflet-container {
        background-color: #fef3c7 !important;
    }
    .leaflet-control-attribution {
        background-color: rgba(255,255,255,0.7) !important;
        font-size: 0.8rem !important;
    }
    .leaflet-popup-content {
        font-family: 'Inter', sans-serif !important;
    }
    
    /* Custom gradients */
    .bg-gradient-brown {
        background: linear-gradient(to right, #78350f, #92400e);
    }
    
    /* Form focus effects */
    input:focus, textarea:focus {
        box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.2) !important;
    }
</style>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Initialize mini map
    const miniMap = L.map('miniMap').setView([-6.222893, 106.833005], 17);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(miniMap);
    
    // Add custom marker with shadow
    const officeIcon = L.icon({
        iconUrl: '{{ asset('storage/assets/map-marker.png') }}',
        iconSize: [32, 32],
        iconAnchor: [16, 32],
        popupAnchor: [0, -32],
        shadowUrl: '{{ asset('storage/assets/marker-shadow.png') }}',
        shadowSize: [41, 41],
        shadowAnchor: [12, 41]
    });
    
    L.marker([-6.222893, 106.833005], {icon: officeIcon})
     .addTo(miniMap)
     .bindPopup('<div class="font-bold text-amber-900">Kantor Lintas Rasa</div><div class="text-sm text-amber-700">Jl. H. R. Rasuna Said</div>')
     .openPopup();

    // Initialize full map when modal opens
    let fullMap;
    document.getElementById('openMapBtn').addEventListener('click', function() {
        document.getElementById('mapModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        // Small delay to ensure modal is visible before map init
        setTimeout(() => {
            if (!fullMap) {
                fullMap = L.map('fullMap').setView([-6.222893, 106.833005], 17);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(fullMap);
                
                L.marker([-6.222893, 106.833005], {icon: officeIcon})
                 .addTo(fullMap)
                 .bindPopup('<div class="font-bold text-amber-900 text-lg">Kantor Lintas Rasa</div><div class="text-amber-700">Jl. H. R. Rasuna Said No.Kav. C 22</div>')
                 .openPopup();
                 
                // Add a circle around the marker
                L.circle([-6.222893, 106.833005], {
                    color: '#d97706',
                    fillColor: '#f59e0b',
                    fillOpacity: 0.2,
                    radius: 100
                }).addTo(fullMap);
            } else {
                fullMap.invalidateSize();
            }
        }, 50);
    });

    // Close map modal
    document.getElementById('closeMap').addEventListener('click', function() {
        document.getElementById('mapModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    });

    // Close modal when clicking outside
    document.getElementById('mapModal').addEventListener('click', function(e) {
        if (e.target === this) {
            document.getElementById('mapModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    });

    // Form submission handling
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Mengirim...
        `;
        
        // Simulate form submission with slight delay for better UX
        setTimeout(() => {
            // Reset form
            document.getElementById('contactForm').reset();
            
            // Show success message
            document.getElementById('formSuccess').classList.remove('hidden');
            
            // Reset button
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                document.getElementById('formSuccess').classList.add('hidden');
            }, 5000);
            
            // Scroll to success message
            document.getElementById('formSuccess').scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }, 1500);
    });
</script>
@endsection