<?php

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/contact', function(ContactFormRequest $request) {
    
    return;
})->name('contact.store')->middleware('throttle:2');