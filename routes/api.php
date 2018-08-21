<?php

use Illuminate\Http\Request;
Use App\Training;//use Trainings model

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// trainings API
// Let’s create the basic endpoints for our application:
// create, retrieve the list, retrieve a single one, update, and delete.
// On the routes/api.php file, we can simply do these:

Route::get('trainings', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Training::all();
    //this is to list all records
    //available from http://start1.test/api/trainings
});

Route::get('trainings/{id}', function($id) {
    return Training::find($id);
    //this is to list one specific record by id
    //available from http://start1.test/api/trainings/3
});

Route::post('trainings', function(Request $request) {
    return Trainings::create($request->all);
    //to insert a new record
});

Route::put('trainings/{id}', function(Request $request, $id) {
    $training = Trainings::findOrFail($id);
    $training->update($request->all());

    return $training;
    //to search record
});

Route::delete('trainings/{id}', function($id) {
    Training::find($id)->delete();

    return 204;
    //to delete one record with specific id
});

//users authentication
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
