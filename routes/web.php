<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\DedicatedController;

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
    return view('welcome');
});


Route::middleware(['usersession'])->group(function () {
   
    // Route::get('/chat', function () {
        // return view('chatbot');
        Route::get('/chat/{id?}',[TasksController::class,'get']);
    // });
    Route::post('/chatc',[TasksController::class,'chat']);
    
    Route::get('/dedicate',[DedicatedController::class,'search']);

});

Route::middleware(['assistantsession'])->group(function () {
    
    Route::get('/intro', function () {
        return view('assistant/intro');
    });

    Route::any('/quizc/{sid?}/{id?}',[AssistantController::class,'answer']);

    Route::get('/doquiz',[AssistantController::class,'ses']);

    Route::post('/profilec',[AssistantController::class,'profile']);

    Route::post('/chata',[AssistantController::class,'chat']);

});

Route::middleware(['profiledone'])->group(function () {
    
    Route::get('/test', function () {
        return view('assistant/test');
    });

    Route::get('/assistantchat', function () {
        return view('assistant/assistantchat');
    });

});

Route::get('/login', function () {
    return view('classiclogin');
});

Route::get('/signup', function () {
    return view('classicsignup');
});

Route::post('/rigsterc',[UserController::class,'Register']);

Route::post('/loginc',[UserController::class,'Login']);

