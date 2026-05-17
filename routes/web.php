<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

// Halaman Beranda
Route::get('/', function () {
    return view('welcome');
})->name('home'); // Memberi nama route agar mudah dipanggil di Blade

// Halaman Tentang Saya
Route::get('/about', function () {
    return view('about');
})->name('about');

// Folder Routes untuk Proyek
Route::prefix('projects')->name('projects.')->group(function () {
    // Halaman Daftar Semua Proyek
    Route::get('/', function () {
        return view('projects.index');
    })->name('index');

    // Halaman Detail SIM UMKM Pancer Door
    Route::get('/pancerpos', function () {
        return view('projects.pancerpos');
    })->name('pancerpos');
    Route::get('/watupatok', function () {
        return view('projects.watupatok');
    })->name('watupatok');
    Route::get('/gns-digital-opinion', function () {
        return view('projects.gns-digital-opinion');
    })->name('gns-digital-opinion');
});

// Halaman Kontak
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk menangani form kontak (POST request)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route untuk halaman admin melihat pesan masuk
Route::prefix('admin')->group(function () {
    Route::get('/messages', [ContactController::class, 'indexAdmin'])->name('admin.messages');

    // Route untuk memeriksa pesan baru secara berkala (AJAX)
    Route::get('/messages/check', [ContactController::class, 'checkNewMessages'])->name('admin.messages.check');
});

// Rute untuk Login & Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Admin (Dilindungi oleh Middleware 'auth')
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/messages', [ContactController::class, 'indexAdmin'])->name('admin.messages');
    Route::get('/messages/check', [ContactController::class, 'checkNewMessages'])->name('admin.messages.check');
});