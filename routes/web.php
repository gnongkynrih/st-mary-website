<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Admin\HeroSliderManagement;
use App\Livewire\Admin\ServiceManagement;

Route::get('/', HomePage::class);   

Route::get('/admin/hero-slider-management', HeroSliderManagement::class)
    ->name('admin.hero-slider-management'); 
Route::get('/admin/service-management', ServiceManagement::class)
    ->name('admin.service-management');
    