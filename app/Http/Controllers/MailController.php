<?php

namespace App\Http\Controllers;

use App\Models\MailLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailTemplate; 
use App\Jobs\SendEmailJob;

class MailController extends Controller
{
    public function mailLog(Request $request)
    {
        // Fetch mail logs for the authenticated user, 10 logs per page
        $mailLogs = MailLog::where('user_id', Auth::id())
            ->with('template')
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Paginate with 10 logs per page

        return view('mail.mail-logs', compact('mailLogs'));
    }
    
    public function single()
    {
        // Fetch all email templates from the database
        $templates = EmailTemplate::all();

        // Return the view with the templates
        return view('mail.single-mail', compact('templates'));
    }

    public function multiple()
    {
        // Fetch all email templates from the database
        $templates = EmailTemplate::all();

        // Return the view with the templates
        return view('mail.multi-mail', compact('templates'));
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
        $user = Auth::user();
        $balance = $user->balance;
        $charges = 5.0;
        if($balance < $charges){
            return redirect()->back()->with('success', 'Insufficient Balance');
        }
        // Get the selected template
        $template = EmailTemplate::findOrFail($request->template_id);


        $body = str_replace(['{{ quantity }}', '{{ coin }}'], [$request->quantity, $request->coin], $template->body);


        $is_mail_sent = Mail::send([], [], function ($message) use ($request, $body, $template) {
            $message->to($request->recipient_email)
                ->subject($template->subject) 
                ->html($body); 
        });

        if ($is_mail_sent) {
            
            $newBalance = $balance -5 ;
            $createLog = MailLog::create([
                'user_id' => $user->id,
                'recipient_email' => $request->recipient_email,
                'template_id' => $request->template_id,
                'coin' => $request->coin,
                'quantity' => $request->quantity,
                'body' => '',
                'amount_charged' => 5
            ]);
            $user->balance = $newBalance;
            $user->save();

            return redirect()->back()->with('success', 'Email sent successfully!');
        } else {
            return redirect()->back()->with('success', 'Error sending mail');
        }
        

        // Redirect back with success message
        return redirect()->back()->with('success', 'Email sent successfully!');
    }

    public function sendMultiple(Request $request)
    {
        // Validate the form data
        $request->validate([
            'number_of_emails' => 'required',
            'recipient_emails' => 'required|string', 
            'template_id' => 'required',
            'coin' => 'required|string',
            'quantity' => 'required|numeric|min:1',
            'min_balance' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();
        $balance = $user->balance;
        

        // Get the selected template
        $template = EmailTemplate::findOrFail($request->template_id);

        // Replace placeholders in the template body
        $body = str_replace(
            ['{{ quantity }}', '{{ coin }}'],
            [$request->quantity, $request->coin],
            $template->body
        );

        // Split the recipient emails into an array
        $recipient_emails = explode(',', $request->recipient_emails);
        $recipient_emails = array_map('trim', $recipient_emails); 
        
        $total_recipients = count($recipient_emails);

        $number_of_emails = $request->number_of_emails;
        $charges = 5.0 * $number_of_emails;
        if($balance < $charges){
            return redirect()->back()->with('success', 'Insufficient Balance');
        }

        // Iterate over each recipient email
        foreach ($recipient_emails as $email) {
            // Queue a job for each email
            SendEmailJob::dispatch($email, $template->subject, $body);

            // Optionally log each email being sent
            $user = Auth::user();
            MailLog::create([
                'user_id' => $user->id,
                'recipient_email' => $email,
                'template_id' => $request->template_id,
                'coin' => $request->coin,
                'quantity' => $request->quantity,
                'body' => '', // You can save the body if needed
                'amount_charged' => 5
            ]);
        }

        // Update user balance
        $user = Auth::user();
        $newBalance = $user->balance - 5; // Adjust for mailing fee
        $user->balance = $newBalance;
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Emails sent successfully!');

    }

}