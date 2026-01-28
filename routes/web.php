<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/', function () {

    $ideas = Idea::query()
        ->when(request('state'), function ($query, $state) {
            $query->where('state', $state);
        })
        ->get();
    //send the data to views
    return view('ideas', [
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function () {

    $idea = request('idea');

    Idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);

    //Go back to home page
    return redirect('/');
});
