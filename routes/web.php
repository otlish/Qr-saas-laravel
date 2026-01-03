<?php

use Illuminate\Support\Facades\Route;
use App\Models\Restaurant;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/restaurants', function () {
    $restaurants = Restaurant::all();
    return view('restaurants.index', ['restaurants' => $restaurants]);
});