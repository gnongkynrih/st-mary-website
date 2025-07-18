<?php

use App\Livewire\Login;
use App\Livewire\AboutUs;
use App\Livewire\HomePage;
use App\Livewire\ContactUs;
use Illuminate\Http\Request;
use App\Livewire\Registration;
use App\Livewire\ResetPassword;
use App\Livewire\ChangePassword;
use App\Livewire\ForgotPassword;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\AboutManagemewnt;
use App\Livewire\Admin\ServiceManagement;
use App\Livewire\Admin\HeroSliderManagement;
use App\Livewire\Gallery;

Route::get('/', HomePage::class);   

Route::get('/gallery',Gallery::class)->name('gallery');
Route::get('/register',Registration::class)->name('register');
Route::get('/login',Login::class)->name('login');
Route::get('forgot-password',ForgotPassword::class)->name('forgot-password');
Route::get('reset-password',ResetPassword::class)->name('reset-password');
Route::get('contact-us',ContactUs::class)->name('contact-us');
Route::get('about-us',AboutUs::class)->name('about-us');
//only authenticated user should be able to see this page
Route::middleware('auth')->group(function () {
    Route::get('/admin/hero-slider-management', HeroSliderManagement::class)
    ->name('admin.hero-slider-management'); 
    Route::get('/admin/service-management', ServiceManagement::class)
    ->name('admin.service-management');
    Route::get('/admin/about-management', AboutManagemewnt::class)
    ->name('admin.about-management');
    Route::get('change-password',ChangePassword::class)->name('change-password');
});


Route::get('/logout', function(\Illuminate\Http\Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('success', 'You have been logged out.');
})->name('logout');