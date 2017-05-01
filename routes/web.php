<?php


if (config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

# route to display all ushers
# Route::get('/teams', 'UsherSchedulerController@showTeams');

# route to edit a single usher record
# Route::get('/ushers/edit/{id}', 'UsherSchedulerController@usherEdit');

# route to save edits to the database
# Route::post('/usher/edit', 'UsherSchedulerController@edit_or_delete_Usher');

# route to prompt for information to enter new usher in the database
# Route::get('/usher/new', 'UsherSchedulerController@newUsher');

# route to save new usher in the database
# Route::post('/usher/new', 'UsherSchedulerController@saveUsher');

# route to view services
Route::get('/', 'UsherSchedulerController@showServices');

# route to prompt for information to create new service
Route::get('/service/new', 'UsherSchedulerController@newService');

# route to save new service in the database
Route::post('/service/new', 'UsherSchedulerController@saveService');

# route to edit a single service record
Route::get('/service/edit/{id}', 'UsherSchedulerController@serviceEdit');

# route to save edits to the database
Route::post('/service/edit', 'UsherSchedulerController@edit_or_delete_Service');
