<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greetings' => 'Hello',
        'person' => request('person', 'Guest'),
    ]);
});
