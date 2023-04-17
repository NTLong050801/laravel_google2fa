<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','2fa','verified'])->group(function (){
    Route::post('/2fa', function () {
        return redirect(route('dashboard'));
    })->name('2fa');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/confirmPassword', [ProfileController::class, 'confirmPassword'])->name('profile.confirm_password');
    Route::post('/confirmPassword', [ProfileController::class, 'confirmPasswordStore'])->name('profile.confirm_password.store');
    Route::get('/showForm2fa',[ProfileController::class,'showForm2fa'])->name('profile.showForm2fa');
    Route::post('/showForm2fa',[ProfileController::class,'showForm2faStore'])->name('profile.showForm2fa.store');
    Route::get('/notEnable2fa',[ProfileController::class,'notEnable2fa'])->name('profile.notEnable2fa');

});

require __DIR__ . '/auth.php';
