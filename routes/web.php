<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile Route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Member Route
    Route::get('/members', [MemberController::class, 'index'])->name('member.index');
    Route::get('/members/create', [MemberController::class, 'create'])->name('member.create');
    Route::post('/members', [MemberController::class, 'adding'])->name('member.adding');
    Route::get('/member/{member}', [MemberController::class, 'update'])->name('member.update');
    Route::put('/member/{member}', [MemberController::class, 'updating'])->name('member.updating');
    Route::delete('/member/{member}', [MemberController::class, 'destroy'])->name('member.destroy');
});

require __DIR__.'/auth.php';
