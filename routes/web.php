<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //get the ideas from session
    $ideas = session()->get('ideas', []);

    //send the data to views
    return view('ideas', [
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');

    //store the data from form to session since we don't have db yet
    session()->push('ideas', $idea);

    //Go back to home page
    return redirect('/');
});
