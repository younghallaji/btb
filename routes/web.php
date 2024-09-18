<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminDepositController;
use App\Http\Controllers\Admin\PaymentGatewayController;
use App\Http\Controllers\Admin\AdminEmailTemplateController;

// Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

        // Email Template
        Route::get('/email-templates', [AdminEmailTemplateController::class, 'index'])->name('admin.email-templates.index');
        Route::get('/email-templates/create', [AdminEmailTemplateController::class, 'create'])->name('admin.email-templates.create');
        Route::post('/email-templates', [AdminEmailTemplateController::class, 'store'])->name('admin.email-templates.store');
        Route::get('/email-templates/{template}/edit', [AdminEmailTemplateController::class, 'edit'])->name('admin.email-templates.edit');
        Route::patch('/email-templates/{template}', [AdminEmailTemplateController::class, 'update'])->name('admin.email-templates.update');
        Route::delete('/email-templates/{template}', [AdminEmailTemplateController::class, 'destroy'])->name('admin.email-templates.destroy');


        // Payment GateWay
        Route::get('/payment-gateways', [PaymentGatewayController::class, 'index'])->name('admin.payment-gateways.index');
        Route::get('/payment-gateways/create', [PaymentGatewayController::class, 'create'])->name('admin.payment-gateways.create');
        Route::post('/payment-gateways', [PaymentGatewayController::class, 'store'])->name('admin.payment-gateways.store');
        Route::get('/payment-gateways/{paymentGateway}/edit', [PaymentGatewayController::class, 'edit'])->name('admin.payment-gateways.edit');
        Route::patch('/payment-gateways/{paymentGateway}', [PaymentGatewayController::class, 'update'])->name('admin.payment-gateways.update');
        Route::delete('/payment-gateways/{paymentGateway}', [PaymentGatewayController::class, 'destroy'])->name('admin.payment-gateways.destroy');

        // Deposit System
        Route::get('deposits', [AdminDepositController::class, 'index'])->name('admin.deposits.index');
        Route::get('deposits/approved', [AdminDepositController::class, 'approved'])->name('admin.deposits.approved');
        Route::get('deposits/rejected', [AdminDepositController::class, 'rejected'])->name('admin.deposits.rejected');
        Route::get('deposits/{deposit}', [AdminDepositController::class, 'show'])->name('admin.deposits.show');
        Route::patch('deposits/{deposit}/approve', [AdminDepositController::class, 'approve'])->name('admin.deposits.approve');
        Route::patch('deposits/{deposit}/reject', [AdminDepositController::class, 'reject'])->name('admin.deposits.reject');

    });
});




// Users Route
Route::get('/', function () { return view('auth.login'); });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/deposits/option', [DepositController::class, 'option'])->name('deposits.option');
    Route::get('/deposits/create', [DepositController::class, 'create'])->name('deposits.create');
    Route::post('/deposits/store', [DepositController::class, 'store'])->name('deposits.store');
    Route::get('/deposits/history', [DepositController::class, 'depositHistory'])->name('deposits.history');

    Route::get('/send-mail', [MailController::class, 'single'])->name('mail.single');
    Route::post('/send-mail', [MailController::class, 'send'])->name('mail.send');
    Route::get('/send-multiple-mail', [MailController::class, 'multiple'])->name('mail.multiple');
    Route::post('/send-multiple-mail', [MailController::class, 'sendMultiple'])->name('mail.multiple');  
    Route::get('/mail-logs', [MailController::class, 'mailLog'])->name('mail.logs');

    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});

require __DIR__.'/auth.php';
