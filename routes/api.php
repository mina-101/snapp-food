<?php

use App\Http\Controllers\Api\Vendor\V1\VendorController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1/')->group(function () {
    Route::apiResource('vendors', VendorController::class);
});

