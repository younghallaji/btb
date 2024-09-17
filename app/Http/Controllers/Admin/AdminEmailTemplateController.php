<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;

class AdminEmailTemplateController extends Controller
{
    // Display the form to create a new email template
    public function create()
    {
        return view('admin.email-templates.create');
    }

    // Store the new email template in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'body' => 'required', // email body can be HTML
        ]);

        EmailTemplate::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.email-templates.index')
            ->with('success', 'Email template created successfully.');
    }

    // List all email templates
    public function index()
    {
        $templates = EmailTemplate::all(); // Fetch all templates
        return view('admin.email-templates.index', compact('templates'));
    }
}

