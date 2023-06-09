<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|----------------------------------`----------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// php artisan make:mail MyEmail
// php artisan make:controller EmailController
// php artisan make:mail MyEmail --markdown=emails.myemail
// php artisan make:mail MyEmail --markdown=emails.myemail --subject="This is my email"

// use App\Http\Controllers\EmailController;
// Route::get('/send-email', [EmailController::class, 'sendEmail']);

use App\Http\Controllers\SendMailController;
Route::get('/send-email', [SendMailController::class, 'sendEmail']);
