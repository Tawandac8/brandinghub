@extends('layouts.app')

@section('title', 'Our Gallery - Branding Hub')
@section('description', 'Browse our portfolio of premium printing and branding work. See the quality that sets us
    apart.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-gradient-to-br from-gray-50 to-cyan-50">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h1 class="section-title mb-6">Our Portfolio</h1>
            <p class="section-subtitle mb-8">See the quality that sets us apart</p>
        </div>
    </section>

    {{-- Filter Buttons --}}
    <section class="py-8 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="filterGallery('all')"
                    class="filter-btn active px-6 py-2 rounded-lg font-semibold transition-all duration-300 bg-cyan-500 text-white"
                    data-category="all">
                    All Work
                </button>
                <button onclick="filterGallery('print')"
                    class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-cyan-500 hover:text-white"
                    data-category="print">
                    Print
                </button>
                <button onclick="filterGallery('apparel')"
                    class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-cyan-500 hover:text-white"
                    data-category="apparel">
                    Apparel
                </button>
                <button onclick="filterGallery('signage')"
                    class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-cyan-500 hover:text-white"
                    data-category="signage">
                    Signage
                </button>
                <button onclick="filterGallery('corporate')"
                    class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-cyan-500 hover:text-white"
                    data-category="corporate">
                    Corporate
                </button>
            </div>
        </div>
    </section>

    {{-- Gallery Grid --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($portfolioItems as $index => $item)
                    <div class="gallery-item group cursor-pointer transition-all duration-300"
                        data-category="{{ $item['category'] }}" onclick="openLightbox({{ $index }})">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <h3 class="text-white font-semibold text-lg">{{ $item['title'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Add more placeholder items --}}
                @for ($i = 0; $i < 6; $i++)
                    <div class="gallery-item group cursor-pointer transition-all duration-300" data-category="print">
                        <div
                            class="relative overflow-hidden rounded-lg aspect-square bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                            <svg class="w-20 h-20 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- Lightbox --}}
    <div id="lightbox" class="hidden fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-4">
        <button onclick="closeLightbox()"
            class="absolute top-4 right-4 text-white hover:text-cyan-400 text-4xl z-10">×</button>
        <button onclick="prevImage()"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-cyan-400 text-4xl">‹</button>
        <button onclick="nextImage()"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-cyan-400 text-4xl">›</button>
        <img id="lightbox-img" src="" alt="Gallery Image" class="max-w-full max-h-full object-contain">
    </div>

    {{-- CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-red-600 to-rose-700 text-white">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">Like What You See?</h2>
            <p class="text-xl text-cyan-100 mb-10 max-w-2xl mx-auto">
                Let's create something amazing for your brand!
            </p>
            <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%20love%20your%20work!%20Let%27s%20discuss%20my%20project"
                class="btn-white btn-lg">
                Chat With Us on WhatsApp
            </a>
        </div>
    </section>

    @push('scripts')
        <script>
            // Update filter button styles
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn').forEach(b => {
                        b.classList.remove('active', 'bg-cyan-500', 'text-white');
                        b.classList.add('bg-gray-200', 'text-gray-700');
                    });
                    this.classList.add('active', 'bg-cyan-500', 'text-white');
                    this.classList.remove('bg-gray-200', 'text-gray-700');
                });
            });
        </script>
    @endpush
@endsection
