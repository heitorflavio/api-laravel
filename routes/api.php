<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::apiResource('produtos', 'ProdutosController')->middleware('jwt.auth');
Route::prefix('v1')->middleware('jwt.auth')->group(function () {
    Route::apiResource('produtos', 'ProdutosController');
    Route::post('me', 'AuthController@me');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('logout', 'AuthController@logout');
});
Route::prefix('v1')->middleware('jwt.auth')->group(function () {
    Route::apiResource('pedidos', 'PedidosController');
});
Route::post('pedido', 'PedidosController@store');


Route::get('produtos', 'ProdutosController@index');
Route::get('produtos/{id}', 'ProdutosController@show');
Route::post('login', 'AuthController@login');
