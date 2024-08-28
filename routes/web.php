<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/** Debug */
Route::get('/debug/dbinfo' , function(){
    dd( env( 'DB_DATABASE' ) );
});