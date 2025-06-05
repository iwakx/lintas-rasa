<nav x-data="{ open: false }" class="bg-cream border-b border-brown-300 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('dashboard') }}" aria-label="Home">
                        <img src="{{ asset('storage/assets/LOGO1.png') }}" alt="Your Logo" class="block h-20 w-auto text-brown-700 hover:text-brown-900 transition-colors duration-300" />
                    </a>
                </div>
                <!-- Navigation Links (Desktop) -->
                <div class="hidden sm:flex space-x-10 font-semibold text-brown-700">
                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        class="relative group"
                    >
                        {{ __('Dashboard') }}
                        <span
                            class="absolute left-0 -bottom-1 w-0 group-hover:w-full transition-all duration-300 h-0.5 bg-brown-500 rounded"
                            :class="{'w-full bg-brown-700': request()->routeIs('dashboard')}"
                        ></span>
                    </x-nav-link>

                    <x-nav-link
                        :href="route('menu.index')"
                        :active="request()->routeIs('menu.index')"
                        class="relative group"
                    >
                        {{ __('Menu') }}
                        <span
                            class="absolute left-0 -bottom-1 w-0 group-hover:w-full transition-all duration-300 h-0.5 bg-brown-500 rounded"
                            :class="{'w-full bg-brown-700': request()->routeIs('menu.index')}"
                        ></span>
                    </x-nav-link>

                    <x-nav-link
                        :href="route('about')"
                        :active="request()->routeIs('about')"
                        class="relative group"
                    >
                        {{ __('About Us') }}
                        <span
                            class="absolute left-0 -bottom-1 w-0 group-hover:w-full transition-all duration-300 h-0.5 bg-brown-500 rounded"
                            :class="{'w-full bg-brown-700': request()->routeIs('about')}"
                        ></span>
                    </x-nav-link>

                    <x-nav-link
                        :href="route('contact')"
                        :active="request()->routeIs('contact')"
                        class="relative group"
                    >
                        {{ __('Contact Us') }}
                        <span
                            class="absolute left-0 -bottom-1 w-0 group-hover:w-full transition-all duration-300 h-0.5 bg-brown-500 rounded"
                            :class="{'w-full bg-brown-700': request()->routeIs('contact')}"
                        ></span>
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:space-x-4">
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-brown-600 bg-cream hover:bg-brown-100 focus:outline-none focus:ring-2 focus:ring-brown-400 focus:ring-opacity-50 transition duration-300"
                            aria-haspopup="true"
                        >
                            <span>{{ Auth::user()->name }}</span>
                            <svg
                                class="ml-2 h-5 w-5 text-brown-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="hover:bg-brown-50">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="hover:bg-brown-50"
                            >
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="flex items-center sm:hidden">
                <button
                    @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-brown-600 hover:text-brown-900 hover:bg-brown-200 focus:outline-none focus:bg-brown-200 focus:text-brown-900 transition duration-300"
                    aria-label="Toggle menu"
                >
                    <svg
                        class="h-6 w-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            :class="{'hidden': open, 'inline-flex': !open}"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{'hidden': !open, 'inline-flex': open}"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div
        :class="{'block': open, 'hidden': !open}"
        class="hidden sm:hidden bg-cream border-t border-brown-300"
    >
        <div class="pt-4 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-brown-700 hover:bg-brown-100">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('menu.index')" :active="request()->routeIs('menu.index')" class="text-brown-700 hover:bg-brown-100">
                {{ __('Menu') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" class="text-brown-700 hover:bg-brown-100">
                {{ __('About Us') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-brown-700 hover:bg-brown-100">
                {{ __('Contact Us') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t border-brown-300 px-4">
            <div class="font-medium text-base text-brown-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-brown-600">{{ Auth::user()->email }}</div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="hover:bg-brown-100">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        class="hover:bg-brown-100"
                    >
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Colors */
    .bg-cream { background-color: #f5f1e9; }
    .text-brown-600 { color: #7c4a1f; }
    .text-brown-700 { color: #5d341a; }
    .text-brown-800 { color: #4a2c14; }
    .hover\:bg-brown-100:hover { background-color: #e1d6c0; }
    .border-brown-300 { border-color: #cbb494; }
    .hover\:text-brown-900:hover { color: #3e1d00; }
    .bg-brown-100 { background-color: #e1d6c0; }
    .bg-brown-50 { background-color: #f2ece5; }
    .focus\:ring-brown-400:focus { --tw-ring-color: #a67c4a; }
</style>
