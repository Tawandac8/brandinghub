<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- SEO Meta Tags --}}
    <title>@yield('title', 'Branding Hub - Premium Printing & Branding Solutions')</title>
    <meta name="description" content="@yield('description', 'We bring your brand to life – professionally, fast, and affordably. High-quality printing, branding, and corporate solutions.')">
    <meta name="keywords"
        content="printing, branding, business cards, banners, signage, corporate branding, t-shirt printing, vehicle branding">
    <meta name="author" content="Branding Hub">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="@yield('og_title', 'Branding Hub - Premium Printing & Branding Solutions')">
    <meta property="og:description" content="@yield('og_description', 'We bring your brand to life – professionally, fast, and affordably.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Branding Hub - Premium Printing & Branding Solutions')">
    <meta name="twitter:description" content="@yield('twitter_description', 'We bring your brand to life – professionally, fast, and affordably.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-image.jpg'))">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')
</head>

<body class="antialiased">
    {{-- Header --}}
    @include('components.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- WhatsApp Floating Button --}}
    @include('components.whatsapp-button')

    {{-- Quote Request Modal --}}
    @include('components.modal')

    {{-- Exit Intent Popup --}}
    <div id="exit-intent-popup" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 relative animate-scale-in">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl"
                onclick="closeExitPopup()">×</button>
            <h3 class="text-2xl font-bold mb-4">Need a Quick Quote?</h3>
            <p class="text-gray-600 mb-6">Chat with us on WhatsApp and get an instant response!</p>
            <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quick%20quote"
                class="btn-primary w-full text-center block">
                Chat on WhatsApp
            </a>
        </div>
    </div>

    @yield('scripts')
</body>

</html>
