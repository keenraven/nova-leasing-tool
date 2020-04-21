<?php

use Illuminate\Support\Facades\Route;
use Variantgroup\NovaLeasingTool\Http\DownloadController;

// Route::post('/leasing/packages',     CalculatorController::class);
Route::get( '/leasing/application',  DownloadController::class);