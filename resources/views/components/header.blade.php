{{-- Header Navigation Component --}}
<header class="fixed top-0 left-0 right-0 z-40 bg-white/90 backdrop-blur-md border-b border-gray-200">
    <nav class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <div
                    class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-xl">BH</span>
                </div>
                <span class="text-2xl font-bold text-gray-900">Branding<span class="text-cyan-500">Hub</span></span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('services') }}"
                    class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('gallery') }}"
                    class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                <a href="{{ route('contact') }}"
                    class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote"
                    class="btn-primary">
                    Get a Quote
                </a>
            </div>

            <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-cyan-500 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-3">
                <a href="{{ route('home') }}"
                    class="nav-link-mobile {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('services') }}"
                    class="nav-link-mobile {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('gallery') }}"
                    class="nav-link-mobile {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                <a href="{{ route('contact') }}"
                    class="nav-link-mobile {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote"
                    class="btn-primary text-center">
                    Get a Quote
                </a>
            </div>
        </div>
    </nav>
</header>

{{-- Spacer to prevent content from hiding under fixed header --}}
<div class="h-20"></div>
