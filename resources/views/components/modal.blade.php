{{-- Reusable Modal Component --}}
<div id="quote-modal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-8 relative animate-scale-in">
        <button class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl"
            onclick="closeQuoteModal()">×</button>

        <h3 class="text-3xl font-bold mb-2">Request a Quote</h3>
        <p class="text-gray-600 mb-6">Fill out the form below and we'll get back to you shortly!</p>

        <form id="quote-form" class="space-y-4">
            @csrf

            <div>
                <label for="quote-name" class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                <input type="text" id="quote-name" name="name" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
            </div>

            <div>
                <label for="quote-email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                <input type="email" id="quote-email" name="email" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
            </div>

            <div>
                <label for="quote-phone" class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                <input type="tel" id="quote-phone" name="phone" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
            </div>

            <div>
                <label for="quote-service" class="block text-sm font-medium text-gray-700 mb-1">Service Needed *</label>
                <select id="quote-service" name="service" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                    <option value="">Select a service...</option>
                    <option value="business-cards">Business Cards</option>
                    <option value="flyers">Flyers & Brochures</option>
                    <option value="banners">Banners & Signage</option>
                    <option value="apparel">T-Shirt & Apparel Printing</option>
                    <option value="branding">Corporate Branding</option>
                    <option value="vehicle">Vehicle Branding</option>
                    <option value="stickers">Stickers & Labels</option>
                    <option value="custom">Custom Request</option>
                </select>
            </div>

            <div>
                <label for="quote-message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea id="quote-message" name="message" rows="3"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent"></textarea>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn-primary flex-1">
                    Submit Request
                </button>
                <a href="https://wa.me/1234567890?text=Hi%20Branding%20Hub%2C%20I%27d%20like%20a%20quote"
                    class="btn-secondary flex-1 text-center">
                    Chat on WhatsApp
                </a>
            </div>
        </form>
    </div>
</div>
