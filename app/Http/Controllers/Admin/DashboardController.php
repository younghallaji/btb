<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ensure only authenticated admins can access
        if (Auth::guard('admin')->check()) {
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }
}
