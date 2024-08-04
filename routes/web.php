<?php

use App\Http\Controllers\FournitureController;
use App\Http\Controllers\PageController;
use App\Models\Division;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/app', [PageController::class, 'app']);

//FOURNITURE
Route::get('/fourniture', [PageController::class, 'fourniture']);
Route::get('/ajoutFourniture', [PageController::class, 'ajoutFourniture']);
Route::post('/ajoutFourniture/traitement',[PageController::class, 'ajoutFourniture_traitement']);
Route::get('/modFourniture/{id}', [PageController::class, 'modFourniture']);
Route::post('modFourniture/traitement', [PageController::class, 'modFourniture_traitement']);
Route::get('/supFourniture/{id}', [PageController::class, 'supFourniture']);

//DIVISION
Route::get('/division', [PageController::class, 'division']);
Route::get('/ajoutDivision', [PageController::class, 'ajoutDivision']);
Route::post('/ajoutDivision/traitement',[PageController::class, 'ajoutDivision_traitement']);
Route::get('/modDivision/{id}', [PageController::class, 'modDivision']);
Route::post('modDivision/traitement', [PageController::class, 'modDivision_traitement']);
Route::get('/supDivision/{id}', [PageController::class, 'supDivision']);

//AGENT
Route::get('/agent', [PageController::class, 'agent']);
Route::get('/ajoutAgent', [PageController::class, 'ajoutAgent']);
Route::post('/ajoutAgent/traitement', [PageController::class,'ajoutAgent_traitement']);
Route::get('/modAgent/{id}', [PageController::class, 'modAgent']);
Route::post('modAgent/traitement', [PageController::class, 'modAgent_traitement']);
Route::get('/supAgent/{id}', [PageController::class, 'supAgent']);

//ENTRER
Route::get('/entrer', [PageController::class, 'entrer']);