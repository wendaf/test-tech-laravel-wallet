<?php

declare(strict_types=1);

use App\Http\Controllers\Api\V1\RecurringTransferController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendMoneyController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::post('/send-money', [SendMoneyController::class, '__invoke'])->name('send-money');

    Route::get('recurring-transfer', [RecurringTransferController::class, 'index'])->name('recurring-transfer');
    Route::post('recurring-transfer', [RecurringTransferController::class, 'create'])->name('recurring-transfer-create');
    Route::get('recurring-transfer/add', [RecurringTransferController::class, 'add'])->name('recurring-transfer-add');
    Route::delete('recurring-transfer', [RecurringTransferController::class, 'delete'])->name('recurring-transfer-delete');
});

require __DIR__.'/auth.php';
