<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('blog/{slug}', function ($slug) {

    $parser = new Parsedown();
    $content = file_get_contents(resource_path('articles/test.md'));


    $parsed = explode('---', $content);

    if (count($parsed) === 1) {
        // no metadata in file
        $content = $parsed[0];
    }

    else if (count($parsed) === 3) {
        // there is metadata 
        $content = $parsed[2];
        $meta = $parsed[1];
    }

    return $slug. ':'. $parser->text($content);
});

