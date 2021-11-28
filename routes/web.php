<?php

use App\Http\Controllers\AssistantController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/', [AssistantController::class, 'index']);
Route::middleware('auth')->group(function(){
    Route::get('/assistants/create', [AssistantController::class, 'create']);
    Route::post('/assistants/save', [AssistantController::class, 'store']);
    Route::post('/assistants/delete/{id}', [AssistantController::class, 'destroy']);
});
Route::get('/newMem');
