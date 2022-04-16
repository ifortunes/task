<?php

use App\Http\Controllers\Api\v1\ChartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'guest', 'prefix' => 'v1'], function(){

    Route::group(['prefix' => 'chart'], function(){
        Route::get('/index', [ChartController::class, 'index'])->name('api.chart.index');
        Route::post('/store', [ChartController::class, 'store'])->name('api.chart.store');

        Route::post('/edit/{id}', [ChartController::class, 'edit'])->name('api.chart.edit');
        Route::get('/remove/{id}', [ChartController::class, 'remove'])->name('api.chart.remove');
    });

});
