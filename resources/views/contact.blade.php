@extends('layouts.app')

@section('title', 'Contact Us - Branding Hub')
@section('description', 'Get in touch with Branding Hub. We\'re here to help with all your printing and branding
    needs.')

@section('content')
    {{-- Hero Section --}}
    <section class="py-20 bg-gradient-to-br from-gray-50 to-cyan-50">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h1 class="section-title mb-6">Get In Touch</h1>
            <p class="section-subtitle mb-8">We're here to help bring your vision to life</p>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <div>
                    <h2 class="text-3xl font-bold mb-6">Send Us a Message</h2>
                    <form id="contact-form" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone *</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent"></textarea>
                        </div>

                        <div class="flex gap-4">
                            <button type="submit" class="btn-primary flex-1">
                                Send Message
                            </button>
                            <a href="https://wa.me/+263777754077?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20to%20get%20in%20touch"
                                class="btn-secondary flex-1 text-center">
                                Chat on WhatsApp
                            </a>
                        </div>
                    </form>
                </div>

                {{-- Contact Information --}}
                <div>
                    <h2 class="text-3xl font-bold mb-6">Contact Information</h2>

                    <div class="space-y-6 mb-8">
                        {{-- WhatsApp --}}
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">WhatsApp</h3>
                                <p class="text-gray-600">+263 777 754 077</p>
                                <p class="text-sm text-gray-500">Typically replies within minutes</p>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                <p class="text-gray-600">info@brandinghub.co.zw</p>
                                <p class="text-sm text-gray-500">We'll respond within 24 hours</p>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Address</h3>
                                <p class="text-gray-600">Suite 101, 1<sup>st</sup> Floor,<br>Masiye Business Suites,<br>CNR 9<sup>th</sup> Ave/Fort Street,<br>Bulawayo</p>
                            </div>
                        </div>
                    </div>

                    {{-- Business Hours --}}
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h3 class="font-semibold text-gray-900 mb-4">Business Hours</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Monday - Friday</span>
                                <span class="font-medium text-gray-900">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Saturday</span>
                                <span class="font-medium text-gray-900">8:00 AM - 12:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Sunday</span>
                                <span class="font-medium text-gray-900">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <h2 class="text-3xl font-bold mb-8 text-center">Find Us</h2>
            <div class="rounded-xl overflow-hidden shadow-lg h-96">
                <iframe
                    src="https://maps.google.com/maps?width=600&height=400&hl=en&q=branding%20hub&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection
