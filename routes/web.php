<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view('test')->with(['skills' => ['HTML', 'Javascript', 'PHP']]);
// });



// Route::get('/comments', function () {

// });

// Route::get('/test', [TestController::class, 'Action']);



Route::get('/posts', [PostController::class, 'index']);



// Route::resource(['posts' => PostController::class]);
