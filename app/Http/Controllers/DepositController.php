<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DepositController extends Controller
{
    public function option()
    {
        return view('deposit-option');
    }

    public function create()
    {
        $paymentGateways = \App\Models\PaymentGateway::all();
        return view('deposits.create', compact('paymentGateways'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_gateway_id' => 'required|exists:payment_gateways,id',
        ]);

        $user = Auth::user();

        $ref_no = Str::random(20);

        Deposit::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'status' => 'pending',
            'ref_no' => $ref_no,
            'payment_gateway_id' => $request->payment_gateway_id,
        ]);

        return redirect()->route('dashboard')->with('success', 'Deposit request submitted successfully. Awaiting admin approval.');
    }

    public function depositHistory()
    {
        $deposits = Deposit::where('user_id', Auth::id())->latest()->get();

        return view('deposits.history', compact('deposits'));
    }
}
