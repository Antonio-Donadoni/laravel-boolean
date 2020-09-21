<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $data = config('data.data', []);

    return view('home', compact('data'));
});
