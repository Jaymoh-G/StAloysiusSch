<?php

use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Updates;
use App\Livewire\Frontend\ContactUs;
use Illuminate\Support\Facades\Route;
use App\Livewire\Frontend\UpdatesSinglePage;


Route::get('/', Home::class);
Route::get('/contact-us', ContactUs::class)->name('contact');
Route::get('/updates', Updates::class)->name('updates');
Route::get('/updates-single', UpdatesSinglePage::class)->name('updates-single');
