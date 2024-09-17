<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\EmailTemplate; // Assuming you have a model for email templates

class MailController extends Controller
{
    public function single()
    {
        // Fetch all email templates from the database
        $templates = EmailTemplate::all();

        // Return the view with the templates
        return view('mail.single-mail', compact('templates'));
    }

    public function send(Request $request)
    {
        // Validate the form data
        $request->validate([
            'recipient_email' => 'required|email',
            'template_id' => 'required',
            'coin' => 'required|string',
            'quantity' => 'required|numeric|min:1',
            'min_balance' => 'required|numeric|min:0',
        ]);

        // Get the selected template
        $template = EmailTemplate::findOrFail($request->template_id);

        // Prepare the email data
        $emailData = [
            'coin' => $request->coin,
            'quantity' => $request->quantity,
            'min_balance' => $request->min_balance,
            'body' => $template->body // Assuming the template has a body field
        ];

        // Send the email (you'll need to configure the email settings in Laravel)
        // Mail::send([], [], function($message) use ($request, $emailData) {
        //     $message->to($request->recipient_email)
        //         ->subject($emailData['coin'] . " Airdrop Notification")
        //         ->setBody(view('emails.template', $emailData), 'text/html');
        // });

        // Redirect back with success message
        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
