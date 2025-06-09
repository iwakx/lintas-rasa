<!-- Navbar -->
<nav x-data="{ open: false }" class="bg-cream border-b border-brown-300 shadow-md">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center space-x-8">
                <div class="flex-shrink-0">
                    <a href="{{ route('dashboard') }}" aria-label="Home">
                        <img src="{{ asset('storage/assets/LOGO1.png') }}" alt="Your Logo" class="block h-20 w-auto text-brown-700 hover:text-brown-900 transition-colors duration-300" />
                    </a>
                </div>

                <div class="hidden sm:flex space-x-10 font-semibold text-brown-700">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> {{ __('Beranda') }} </x-nav-link>
                    <x-nav-link :href="route('menu.index')" :active="request()->routeIs('menu.index')"> {{ __('Menu Produk') }} </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')"> {{ __('Tentang Kami') }} </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')"> {{ __('Kontak') }} </x-nav-link>

                    @auth
                    
                        @csrf
                        <button type="submit" class="text-red-500 font-semibold hover:text-red-700">Logout</button>
                    </form>
                @else
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">Login</x-nav-link>
                @endauth
                </div>
            </div>
        </div>
    </div>    
</nav>