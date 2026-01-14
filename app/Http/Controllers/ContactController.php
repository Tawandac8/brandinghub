<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        // Send email notification (configure your mail settings in .env)
        try {
            Mail::send('emails.contact', $data, function($message) use ($data) {
                $message->to('info@brandinghub.co.zw') // Change to your email
                        ->subject('New Contact Form Submission: ' . ($data['subject'] ?? 'General Inquiry'))
                        ->replyTo($data['email'], $data['name']);
            });

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We\'ll get back to you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'There was an error sending your message. Please try again or contact us on WhatsApp.'
            ], 500);
        }
    }

    /**
     * Handle quote request submission.
     */
    public function quoteRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        // Send email notification
        try {
            Mail::send('emails.quote', $data, function($message) use ($data) {
                $message->to('info@brandinghub.com') // Change to your email
                        ->subject('New Quote Request: ' . $data['service'])
                        ->replyTo($data['email'], $data['name']);
            });

            return response()->json([
                'success' => true,
                'message' => 'Quote request submitted successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'There was an error submitting your request.'
            ], 500);
        }
    }
}
