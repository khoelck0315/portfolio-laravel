<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class MessageController extends Controller
{
    public function compose() {
        //return view to compose new message
        return view("contact")
        ->with('page', 'contact');
    }
    
    public function send(Request $request): RedirectResponse {
        //logic to store the message in the database
        $resume = (isset($request->resume)) ? true : false;
        $message = Message::create([
            'message_type' => $request->type,
            'name' => $request->name,
            'company' => $request->company ?? 'Not provided',
            'phone' => $request->phone ?? 'Not provided',
            'email' => $request->email ?? 'Not provided',
            'message' => $request->message,
            'resume_requested' => $resume
        ]);
        $message->save();

        //logic to send the actual email
        // https://laravel.com/docs/10.x/mail#sending-mail
        $to_address = env('MAIL_WEBADMIN_ADDRESS');
        Mail::to($to_address)->send(new ContactMessage($request));
        return redirect('/thankyou');
    }
}
