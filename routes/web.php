<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/sam-ice-creem-truck', function () {
    return view('index');
});

 
Route::get('/contact', [ContactController::class, 'index'])->name('contact.table')->middleware('auth');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy')->middleware('auth');

 
 

require __DIR__.'/auth.php';
