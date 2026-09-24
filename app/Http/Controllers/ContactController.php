<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::send('emails.contact', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'body' => $validated['message'],
        ], function ($mail) use ($validated) {

            $mail->to('info@axeartdeco.com')
                 ->subject('Nouveau message : ' . $validated['subject'])
                 ->replyTo($validated['email'], $validated['name']);
        });

        return back()->with('success', 'Votre message a bien été envoyé.');
    }
}