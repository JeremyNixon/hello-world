<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/ultimate-video-online', function()
{
	return View::make('landing');
});

Route::get('/ultimate-video-online/open-club', function(){
	return View::make('open-club');
});

Route::get('/mixed-club', function(){
	return View::make('mixed-club');
});

Route::get('/women-club', function(){
	return View::make('women-club');
});

Route::get('/open-college', function(){
	return View::make('open-college');
});

Route::get('/women-college', function(){
	return View::make('women-college');
});

Route::get('/quotes', function(){
	return View::make('quotes');

});

Route::post('quote', function(){
	$data = Input::all();
	$palestine = $data['Palestine'];
	$palestinedata = Input::file('palestine.ini');
	echo $palestinedata;
	var_dump($palestinedata);

});

# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});