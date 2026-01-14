@extends('layouts.app')

@section('title', 'Our Services - Branding Hub')
@section('description', 'Professional printing and branding services including business cards, banners, apparel
    printing, corporate branding, and more.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-gradient-to-br from-gray-50 to-cyan-50">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h1 class="section-title mb-6">Our Services</h1>
            <p class="section-subtitle mb-8">Professional printing and branding solutions tailored to your needs</p>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="service-card group" id="{{ $service['id'] }}">
                        <div class="service-image-wrapper">
                            @if ($service['image'])
                                <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['name'] }}"
                                    class="service-image">
                            @else
                                <div
                                    class="w-full h-48 bg-gradient-to-br from-cyan-100 to-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-20 h-20 text-cyan-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                        </path>
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <h3 class="service-title">{{ $service['name'] }}</h3>
                        <p class="service-description">{{ $service['description'] }}</p>

                        <ul class="mb-4 space-y-2">
                            @foreach ($service['features'] as $feature)
                                <li class="flex items-start text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-cyan-500 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <a href="https://wa.me/1234567890?text={{ urlencode('Hi Branding Hub, I\'d like a quote for ' . $service['name']) }}"
                            class="service-link">
                            Order via WhatsApp →
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Don't See What You Need?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                We handle custom requests and specialty projects. Get in touch and let's discuss your unique needs!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%20have%20a%20custom%20request"
                    class="btn-primary">
                    Chat on WhatsApp
                </a>
                <a href="{{ route('contact') }}" class="btn-secondary">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
