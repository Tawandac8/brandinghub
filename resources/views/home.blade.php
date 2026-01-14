@extends('layouts.app')

@section('title')
    Branding Hub - Premium Printing & Branding Solutions
@endsection
@section('description')
    We bring your brand to life – professionally, fast, and affordably. High-quality printing,
    branding, and corporate solutions.
@endsection

@section('content')
    Hero Section
    <section
        class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-cyan-900">
        {{-- Background Image with Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero.png') }}" alt="Premium Printing Services"
                class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-blue-600/20"></div>
        </div>

        {{-- Hero Content --}}
        <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center">
            <h1 class="hero-title text-white mb-6 animate-fade-in-up">
                Premium Printing &<br>Branding Solutions
            </h1>
            <p class="hero-subtitle text-gray-200 mb-10 animate-fade-in-up animation-delay-200">
                We bring your brand to life – professionally, fast, and affordably.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-400">
                <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote"
                    class="btn-primary btn-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                    </svg>
                    Get a Quote on WhatsApp
                </a>
                <a href="{{ route('gallery') }}" class="btn-secondary btn-lg">
                    View Our Work
                </a>
            </div>

            {{-- Trust Indicators --}}
            <div class="grid grid-cols-3 gap-8 mt-20 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl font-bold text-cyan-400 mb-2">10+</div>
                    <div class="text-gray-300">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-cyan-400 mb-2">5000+</div>
                    <div class="text-gray-300">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-cyan-400 mb-2">98%</div>
                    <div class="text-gray-300">Client Satisfaction</div>
                </div>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    {{-- Services Preview Section --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title mb-4">Our Services</h2>
                <p class="section-subtitle">Professional printing and branding solutions for every need</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Business Cards --}}
                <div class="service-card group">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('images/service-business-cards.png') }}" alt="Business Cards"
                            class="service-image">
                    </div>
                    <h3 class="service-title">Business Cards</h3>
                    <p class="service-description">Premium quality business cards that make a lasting impression</p>
                    <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote%20for%20Business%20Cards"
                        class="service-link">
                        Order via WhatsApp →
                    </a>
                </div>

                {{-- Banners & Signage --}}
                <div class="service-card group">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('images/service-banners.png') }}" alt="Banners & Signage" class="service-image">
                    </div>
                    <h3 class="service-title">Banners & Signage</h3>
                    <p class="service-description">Eye-catching banners and signage for maximum visibility</p>
                    <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote%20for%20Banners%20%26%20Signage"
                        class="service-link">
                        Order via WhatsApp →
                    </a>
                </div>

                {{-- T-Shirt Printing --}}
                <div class="service-card group">
                    <div class="service-image-wrapper">
                        <div
                            class="w-full h-48 bg-gradient-to-br from-cyan-100 to-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-24 h-24 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title">T-Shirt & Apparel</h3>
                    <p class="service-description">Custom apparel printing with vibrant, long-lasting designs</p>
                    <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote%20for%20T-Shirt%20Printing"
                        class="service-link">
                        Order via WhatsApp →
                    </a>
                </div>

                {{-- Corporate Branding --}}
                <div class="service-card group">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('images/service-branding.png') }}" alt="Corporate Branding"
                            class="service-image">
                    </div>
                    <h3 class="service-title">Corporate Branding</h3>
                    <p class="service-description">Complete branding solutions for your business identity</p>
                    <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote%20for%20Corporate%20Branding"
                        class="service-link">
                        Order via WhatsApp →
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="btn-primary">View All Services</a>
            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title mb-4">Why Choose Branding Hub?</h2>
                <p class="section-subtitle">We're committed to delivering excellence in every project</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="feature-card">
                    <div class="feature-icon bg-cyan-100 text-cyan-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">High Quality Materials</h3>
                    <p class="feature-description">We use only premium materials to ensure exceptional results</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon bg-blue-100 text-blue-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Fast Turnaround</h3>
                    <p class="feature-description">Quick delivery without compromising on quality</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon bg-purple-100 text-purple-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Expert Team</h3>
                    <p class="feature-description">Experienced professionals dedicated to your success</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon bg-green-100 text-green-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Competitive Pricing</h3>
                    <p class="feature-description">Affordable rates without hidden costs</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title mb-4">What Our Clients Say</h2>
                <p class="section-subtitle">Don't just take our word for it</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card">
                    <div class="flex items-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        @endfor
                    </div>
                    <p class="testimonial-text">"Exceptional quality and service! Our business cards turned out perfect.
                        Highly recommend Branding Hub for all printing needs."</p>
                    <div class="testimonial-author">
                        <p class="font-semibold text-gray-900">Sarah Johnson</p>
                        <p class="text-sm text-gray-600">CEO, Tech Innovations</p>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="flex items-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        @endfor
                    </div>
                    <p class="testimonial-text">"Fast turnaround and amazing results! They printed our event banners in
                        record time without compromising quality."</p>
                    <div class="testimonial-author">
                        <p class="font-semibold text-gray-900">Michael Chen</p>
                        <p class="text-sm text-gray-600">Event Coordinator</p>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="flex items-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        @endfor
                    </div>
                    <p class="testimonial-text">"Professional team that truly cares about their clients. Our complete
                        branding package exceeded expectations!"</p>
                    <div class="testimonial-author">
                        <p class="font-semibold text-gray-900">Emily Rodriguez</p>
                        <p class="text-sm text-gray-600">Founder, Bloom Boutique</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8 max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="section-title mb-4">Frequently Asked Questions</h2>
                <p class="section-subtitle">Everything you need to know</p>
            </div>

            <div class="space-y-4">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is your turnaround time?</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Our standard turnaround time is 3-5 business days for most printing services. Rush orders are
                            available for an additional fee, with same-day or next-day delivery options depending on the
                            project.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Do you offer design services?</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Yes! We have an in-house design team that can help create custom designs for your project.
                            Whether you need a complete brand identity or just a simple layout, we've got you covered.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What file formats do you accept?</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>We accept PDF, AI, EPS, PSD, and high-resolution JPG/PNG files. For best results, we recommend
                            vector formats (AI, EPS, PDF) for logos and graphics.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is your minimum order quantity?</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>We don't have a strict minimum order quantity for most services. Whether you need 10 business
                            cards or 10,000, we're happy to help. Contact us for specific pricing based on your quantity.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How do I get a quote?</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Getting a quote is easy! Simply click the "Get a Quote" button to chat with us on WhatsApp, or
                            fill out our contact form. We'll respond with a detailed quote within a few hours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-cyan-600 to-blue-700 text-white">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Bring Your Brand to Life?</h2>
            <p class="text-xl text-cyan-100 mb-10 max-w-2xl mx-auto">
                Get in touch today and let's create something amazing together!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20to%20get%20started"
                    class="btn-white btn-lg">
                    Chat on WhatsApp
                </a>
                <a href="{{ route('contact') }}" class="btn-outline-white btn-lg">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
