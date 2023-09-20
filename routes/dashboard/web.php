<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard.dashboard');
});

Route::get('orders/successful',[\App\Http\Controllers\Web\Dashboard\Orders\SuccessfulOrdersController::class,'index'])->name('dashboard.orders.successful');
Route::get('orders/with-driver',[\App\Http\Controllers\Web\Dashboard\Orders\WithDriverOrdersController::class,'index'])->name('dashboard.orders.withDriver');
Route::get('orders/client-not-responding',[\App\Http\Controllers\Web\Dashboard\Orders\ClientNotRespondingOrdersController::class,'index'])->name('dashboard.orders.clientNotResponding');
Route::get('orders/has-issues',[\App\Http\Controllers\Web\Dashboard\Orders\HasIssueOrdersController::class,'index'])->name('dashboard.orders.hasIssue');
Route::get('orders/returned-to-shipper',[\App\Http\Controllers\Web\Dashboard\Orders\ReturnedToShipperOrdersController::class,'index'])->name('dashboard.orders.returnedToShipper');
Route::get('orders/postponed',[\App\Http\Controllers\Web\Dashboard\Orders\PostponedOrdersController::class,'index'])->name('dashboard.orders.postponed');
Route::get('orders/to-resend',[\App\Http\Controllers\Web\Dashboard\Orders\ToResendOrdersController::class,'index'])->name('dashboard.orders.toResend');
Route::get('orders/drivers',[\App\Http\Controllers\Web\Dashboard\Drivers\DriverController::class,'index'])->name('dashboard.drivers.index');
Route::get('orders/clents',[\App\Http\Controllers\Web\Dashboard\Clients\ClientController::class,'index'])->name('dashboard.clients.index');
