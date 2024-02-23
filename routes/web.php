<?php

use App\Http\Controllers\RegionController;
use App\Models\Post;
use App\Models\Region;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegionController::class, 'index']);

Route::resource('regions', RegionController::class);
