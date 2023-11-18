<?php

use App\Http\Controllers\MessageController;
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
Route::get('/route/hello', function () {
    return '<h1>Hello from Route!</h1>';
});
Route::get('/view/hello', function () {
    return view('message.hello');
});
Route::get('/view/var', function () {
    return view('message.var', ['variable' => 'Hello from web.php']);
});
Route::get('/view/word/{msg}', function ($msg) {
    return view('message.word', ['msg' => $msg]);
});
Route::get('/view/word/{name}/{msg}', function ($name, $msg) {
    return view('message.word2', ['name' => $name, 'msg' => $msg]);
});
Route::get('/controller/hello', [MessageController::class, 'hello']);
Route::get('/controller/var', [MessageController::class, 'var']);
Route::get('/controller/word/{msg}', [MessageController::class, 'word']);
Route::get('/controller/word/{name}/{msg}', [MessageController::class, 'word2']);
