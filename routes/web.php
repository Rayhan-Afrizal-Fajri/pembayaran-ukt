<?php

use App\Http\Controllers\AdminController;
use App\Livewire\Profile\DetailUserInformation;
use App\Livewire\Users\DaftarPembayaran;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('Home');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// masih ada kekurangan terkait middleware login

Route::get('/daftar-mahasiswa', [AdminController::class , "index"])->name('daftar-mahasiswa');

Route::get('/pembayaran-mahasiswa', function () {
    return view('pembayaran-mahasiswa');
})->name('pembayaran-mahasiswa');

// Route::get('/daftar-pembayaran', function () {
//     return view('livewire.users.daftar-pembayaran');
// })->name('daftar');

Route::get('/daftar-pembayaran', DaftarPembayaran::class)->name('daftar-pembayaran');
