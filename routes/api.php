<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ClintController;
use App\Http\Controllers\api\TeamsController;
use App\Http\Controllers\api\SkillsController;
use App\Http\Controllers\api\TitlesController;

use App\Http\Controllers\api\MessageController;
use App\Http\Controllers\api\QuestionController;
use App\Http\Controllers\api\ServicesController;
use App\Http\Controllers\api\PortfolioController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/team',               [TeamController::class, 'index']);
// Route::post('/team',               [TeamController::class, 'store']);
// Route::put('/team/update/{{id}}', [TeamController::class, 'update']);


Route::group(['middleware' => ['jwt.verify']], function () {



    Route::resource('/team', TeamsController::class);
    Route::resource('/clint', ClintController::class);
    Route::resource('/massage', MessageController::class);
    Route::resource('/portfolio', PortfolioController::class);
    Route::resource('/question', QuestionController::class);
    Route::resource('/service', ServicesController::class);
    Route::resource('/skill', SkillsController::class);
    Route::resource('/title', TitlesController::class);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});