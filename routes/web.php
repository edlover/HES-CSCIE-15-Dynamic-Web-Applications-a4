<?php


if (config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

# route to display all ushers
Route::get('/teams', 'UsherSchedulerController@showTeams');

# route to edit a single usher record
Route::get('/ushers/edit/{id}', 'UsherSchedulerController@usherEdit');

# route to save edits to the database
Route::post('/usher/edit', 'UsherSchedulerController@edit_or_delete_Usher');

# route to create new usher in the database
Route::get('/usher/new', 'UsherSchedulerController@newUsher');

Route::get('/', function () {
    return view('welcome');
});
