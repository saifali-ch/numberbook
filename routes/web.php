<?php

use App\Http\Controllers\FAQController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');


Route::controller(FAQController::class)->group(function () {
    Route::get('what-is-the-saudi-number-book', 'index')->name('q1');

    Route::get('find-out-the-caller-name-in-saudi-arabia', 'index')->name('q2');

    Route::get('an-alternative-to-ksa-numbers-online-for-all-arab-countries-and-the-arab-gulf-countries', 'index')
        ->name('q3');

    Route::get('ksa-numbers-website-saudi-numbers-directory', 'index')->name('q4');
});
