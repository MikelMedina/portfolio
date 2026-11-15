<?php

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('index');
});

Route::post('/contact', function(ContactFormRequest $request) {

    $data = $request->validated();
    
    return;
})->name('contact.store');