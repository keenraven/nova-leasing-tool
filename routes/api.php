<?php

use Illuminate\Support\Facades\Route;
use Variantgroup\LeasingCalculator\Http\DownloadController;
use Variantgroup\LeasingCalculator\Http\CalculatorController;

Route::post('/leasing/packages',     CalculatorController::class);
Route::get( '/leasing/application',  DownloadController::class);