<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Admin\HeroSliderManagement;
use App\Livewire\Admin\ServiceManagement;
use App\Livewire\Login;
use App\Livewire\ForgotPassword;
use App\Livewire\ResetPassword;
use App\Livewire\ChangePassword;
use App\Livewire\Register;

Route::get('/', HomePage::class);   

Route::get('/admin/hero-slider-management', HeroSliderManagement::class)
    ->name('admin.hero-slider-management'); 
Route::get('/admin/service-management', ServiceManagement::class)
    ->name('admin.service-management');
Route::get('/register',Register::class)->name('register');
Route::get('/login',Login::class)->name('login');
Route::get('forgot-password',ForgotPassword::class)->name('forgot-password');
Route::get('reset-password',ResetPassword::class)->name('reset-password');
//only authenticated user should be able to see this page
Route::middleware('auth')->group(function () {
    Route::get('change-password',ChangePassword::class)->name('change-password');
});