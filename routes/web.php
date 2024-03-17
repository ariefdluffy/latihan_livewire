<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', App\Livewire\Faq\Index::class)->name('faq.index');

Route::get('/create', App\Livewire\Faq\Create::class)->name('faq.create');

Route::get('/faq', App\Livewire\Front\Index::class)->name('front.index');
