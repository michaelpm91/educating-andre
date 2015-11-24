<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->get('/', 'AndreismController@show');

$app->get('/andreism', function () { return redirect('/'); });

$app->get('/andreism.json', 'AndreismController@showJson');

$app->get('/andreism/{id:\d+}', 'AndreismController@show');

$app->get('/andreism/{id:\d+}.json', 'AndreismController@showJson');

$app->get('/andreism/submit', function() {
    return view('submit');
});

$app->post('/andreism', 'AndreismController@store');
