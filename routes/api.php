<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('ziemska/310848/add-human',[PeopleController::class, 'adding']);
Route::put('ziemska/310848/edit-human',[PeopleController::class, 'edit']);
Route::delete('ziemska/310848/remove-record',[PeopleController::class, 'removing']);
Route::get('ziemska/310848/get-human/{id}', [PeopleController::class, 'getOne']);
Route::get('ziemska/310848/get-humans', [PeopleController::class, 'getAll']);

//Illuminate\Database\QueryException: SQLSTATE[HY000] [2002] Nie można nawiązać połączenia, ponieważ komputer docelowy aktywnie go odmawia (Connection: mysql, SQL: select * from `people`) in file C:\Users\fasol\Desktop\studia_repozytorium\laravel-API\vendor\laravel\framework\src\Illuminate\Database\Connection.php on line 822
