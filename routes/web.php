<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', App\Livewire\Faq\Index::class)->name('faq.index');