<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        $services = [
            [
                'id' => 'business-cards',
                'name' => 'Business Cards',
                'description' => 'Premium quality business cards that make a lasting first impression. Available in various finishes including matte, glossy, and textured options.',
                'image' => 'service-business-cards.png',
                'features' => ['High-quality cardstock', 'Multiple finish options', 'Custom designs', 'Fast turnaround']
            ],
            [
                'id' => 'flyers',
                'name' => 'Flyers & Brochures',
                'description' => 'Eye-catching flyers and brochures perfect for promotions, events, and marketing campaigns.',
                'image' => null,
                'features' => ['Various sizes available', 'Full-color printing', 'Folding options', 'Bulk discounts']
            ],
            [
                'id' => 'banners',
                'name' => 'Banners & Signage',
                'description' => 'Large format banners and signage for maximum visibility at events, storefronts, and outdoor advertising.',
                'image' => 'service-banners.png',
                'features' => ['Weather-resistant materials', 'Custom sizes', 'Indoor & outdoor options', 'Easy installation']
            ],
            [
                'id' => 'apparel',
                'name' => 'T-Shirt & Apparel Printing',
                'description' => 'Custom apparel printing with vibrant, long-lasting designs. Perfect for teams, events, and promotional merchandise.',
                'image' => null,
                'features' => ['Screen printing & DTG', 'Quality fabrics', 'All sizes available', 'Bulk orders welcome']
            ],
            [
                'id' => 'branding',
                'name' => 'Corporate Branding & Stationery',
                'description' => 'Complete corporate branding solutions including letterheads, envelopes, folders, and complete stationery sets.',
                'image' => 'service-branding.png',
                'features' => ['Complete brand packages', 'Consistent design', 'Premium materials', 'Professional finish']
            ],
            [
                'id' => 'vehicle',
                'name' => 'Vehicle Branding',
                'description' => 'Turn your vehicle into a mobile billboard with professional vehicle wraps and decals.',
                'image' => null,
                'features' => ['Full & partial wraps', 'Durable vinyl', 'Professional installation', 'Custom designs']
            ],
            [
                'id' => 'stickers',
                'name' => 'Stickers & Labels',
                'description' => 'Custom stickers and labels for products, packaging, promotions, and more.',
                'image' => null,
                'features' => ['Die-cut options', 'Waterproof materials', 'Any shape/size', 'Low minimums']
            ],
            [
                'id' => 'custom',
                'name' => 'Custom Requests',
                'description' => 'Have a unique printing need? We handle custom requests and specialty projects.',
                'image' => null,
                'features' => ['Flexible solutions', 'Expert consultation', 'Unique materials', 'Creative approaches']
            ]
        ];

        return view('services', compact('services'));
    }

    /**
     * Display the gallery page.
     */
    public function gallery()
    {
        // In a real application, this would fetch from database
        $portfolioItems = [
            ['category' => 'print', 'image' => 'service-business-cards.png', 'title' => 'Business Cards'],
            ['category' => 'signage', 'image' => 'service-banners.png', 'title' => 'Banner Design'],
            ['category' => 'corporate', 'image' => 'service-branding.png', 'title' => 'Corporate Branding'],
            // Add more portfolio items as needed
        ];

        return view('gallery', compact('portfolioItems'));
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
}
