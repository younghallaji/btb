<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PaymentGatewayController extends Controller
{
    // List all payment gateways
    public function index()
    {
        $gateways = PaymentGateway::all();
        return view('admin.payment-gateways.index', compact('gateways'));
    }

    // Show form for creating a new payment gateway
    public function create()
    {
        return view('admin.payment-gateways.create');
    }

    // Store a new payment gateway
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'wallet_address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate logo as an image
            'qrcode' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate qrcode as an image
        ]);

        // Handle logo upload
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        // Handle QR code upload
        $qrcodePath = null;
        if ($request->hasFile('qrcode')) {
            $qrcodePath = $request->file('qrcode')->store('qrcodes', 'public');
        }

        PaymentGateway::create([
            'name' => $request->name,
            'wallet_address' => $request->wallet_address,
            'description' => $request->description,
            'logo' => $logoPath,
            'qrcode' => $qrcodePath,
        ]);

        return redirect()->route('admin.payment-gateways.index')->with('success', 'Payment Gateway created successfully.');
    }

    // Show form for editing a payment gateway
    public function edit(PaymentGateway $paymentGateway)
    {
        return view('admin.payment-gateways.edit', compact('paymentGateway'));
    }

    // Update an existing payment gateway
    public function update(Request $request, PaymentGateway $paymentGateway)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'wallet_address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'qrcode' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            if ($paymentGateway->logo) {
                Storage::disk('public')->delete($paymentGateway->logo);
            }
            $logoPath = $request->file('logo')->store('logos', 'public');
            $paymentGateway->logo = $logoPath;
        }

        // Handle QR code upload
        if ($request->hasFile('qrcode')) {
            if ($paymentGateway->qrcode) {
                Storage::disk('public')->delete($paymentGateway->qrcode);
            }
            $qrcodePath = $request->file('qrcode')->store('qrcodes', 'public');
            $paymentGateway->qrcode = $qrcodePath;
        }

        $paymentGateway->update([
            'name' => $request->name,
            'wallet_address' => $request->wallet_address,
            'description' => $request->description,
            'logo' => $paymentGateway->logo,
            'qrcode' => $paymentGateway->qrcode,
        ]);

        return redirect()->route('admin.payment-gateways.index')->with('success', 'Payment Gateway updated successfully.');
    }

    // Delete a payment gateway
    public function destroy(PaymentGateway $paymentGateway)
    {
        $paymentGateway->delete();
        return redirect()->route('admin.payment-gateways.index')->with('success', 'Payment Gateway deleted successfully.');
    }
}

