<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get( 'info', function () {
    return response()->json( [
       'massage' => 'test successful'
    ]);
  });

  Route::post( 'info-store', function () {
    return response()->json( [
       'massage' => 'test successful'
    ]);
  });
