<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('home');
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts-url');

Route::get('/vakansii', function () {
    return view('vakansii');
})->name('vakansii-url');

Route::get('/contacts/all', [ContactController::class, 'allContactData'])->name('contact-data');

Route::get('/contacts/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-single');

Route::get('/contacts/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-data-update');
Route::post('/contacts/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-data-update-submit');
Route::get('/contacts/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-data-delete');

Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('contact-form');
// Route::post('/contacts/submit', function () {
//     dd(request()->all());
// })->name('contact-form');
