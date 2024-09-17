<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;

class AdminDepositController extends Controller
{
    public function index()
    {
        $deposits = Deposit::where('status', 'pending')->get();
        return view('admin.deposits.index', compact('deposits'));
    }

    public function approved()
    {
        $deposits = Deposit::where('status', 'approved')->get();
        return view('admin.deposits.approved', compact('deposits'));
    }

    public function rejected()
    {
        $deposits = Deposit::where('status', 'rejected')->get();
        return view('admin.deposits.rejected', compact('deposits'));
    }

    public function show(Deposit $deposit)
    {
        return view('admin.deposits.show', compact('deposit'));
    }

    public function approve(Deposit $deposit)
    {
        // Process the deposit (e.g., update user balance)
        $user = $deposit->user;
        $user->balance += $deposit->amount;
        $user->save();

        // Update deposit status
        $deposit->status = 'approved';
        $deposit->save();

        return redirect()->route('admin.deposits.index')->with('success', 'Deposit approved successfully.');
    }

    public function reject(Deposit $deposit)
    {
        // Update deposit status
        $deposit->status = 'rejected';
        $deposit->save();

        return redirect()->route('admin.deposits.index')->with('success', 'Deposit rejected successfully.');
    }
}
