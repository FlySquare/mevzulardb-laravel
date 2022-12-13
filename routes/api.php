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

Route::get('/getParties', [\App\Http\Controllers\Api\Party::class, 'getParties']);
Route::get('/getSpeakers', [\App\Http\Controllers\Api\Speaker::class, 'getSpeakers']);
Route::get('/getQuestions', [\App\Http\Controllers\Api\Question::class, 'getQuestions']);
