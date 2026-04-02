<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SeoMeta;

class ContactController extends Controller
{
     public function index()
    {

    $data['seo_meta'] = SeoMeta::where('id',8)->first();

    return view('pages.contact',$data);
        
    }



    public function submit(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'text'     => 'required|string|max:20',
            'message'  => 'nullable|string|max:2000',
        ], [
            'username.required' => 'Please enter your full name.',
            'email.required'    => 'Please enter a valid email address.',
            'email.email'       => 'The email address is not valid.',
            'text.required'     => 'Please enter your contact number.',
        ]);

        try {
            // Send email to site admin
            Mail::to(config('mail.contact_to', env('CONTACT_MAIL_TO', 'info@learnestate.com')))
                ->send(new ContactMail($validated));

            return response()->json([
                'success' => true,
                'message' => 'Message sent! We will contact you soon.',
            ]);

        } catch (\Exception $e) {
            \Log::error('Contact form mail error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.',
            ], 500);
        }
    }



}
