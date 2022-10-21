<?php
use App\Http\Controllers\RegistrationAppController;
use App\Models\RegistrationApp;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('register', [RegistrationAppController::class, 'formpage']);

Route::post('/register', [RegistrationAppController::class, 'register']);

Route::get('/list', [RegistrationAppController::class, 'show']);
