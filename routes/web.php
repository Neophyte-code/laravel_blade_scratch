<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

//index (Main Page)
Route::get('/ideas', function () {

    $ideas = Idea::all();

    //send the data to views
    return view('/ideas.index', [
        'ideas' => $ideas
    ]);
});

//show record
Route::get('/ideas/{idea}', function (Idea $idea) {

    //send the data to views
    return view('/ideas.show', [
        'idea' => $idea
    ]);
});

//edit/show the specific record
Route::get('/ideas/{idea}/edit', function (Idea $idea) {

    return view('/ideas.edit', [
        'idea' => $idea
    ]);
});

//update record
Route::patch('/ideas/{idea}', function (Idea $idea) {

    $idea->update([
        'description' => request('description'),
    ]);

    return redirect("/ideas/{$idea->id}");
});

//create/store a record
Route::post('/ideas', function () {

    $idea = request('description');

    Idea::create([
        'description' => $idea,
        'state' => 'pending',
    ]);

    //Go back to home page
    return redirect('/ideas');
});

//destroy/delete record
Route::delete('/ideas/{idea}', function (Idea $idea) {

    $idea->delete();

    return redirect('/ideas');
});
