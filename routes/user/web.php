<?php


use Illuminate\Support\Facades\Route;

Route::get('/home',[App\Http\Controllers\Web\User\Home\HomeController::class,'index'])->name('user.home');
Route::get('/messages',[App\Http\Controllers\Web\User\Home\HomeController::class,'index'])->name('user.messages');
Route::get('/profile/edit',[App\Http\Controllers\Web\User\Profile\ProfileController::class,'edit'])->name('user.profile.edit');
Route::resource('/profile',App\Http\Controllers\Web\User\Profile\ProfileController::class,['names'=>'user.profile','except'=>['edit']]);
Route::get('/profile/reset-password',[App\Http\Controllers\Web\User\Profile\ProfileController::class,'resetPassword'])->name('user.profile.reset-password');
Route::resource('/orders', \App\Http\Controllers\Web\User\OrderController::class, ['names' => 'user.orders']);
