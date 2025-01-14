<?php

use App\Http\Middleware\Admin;
use App\Livewire\Admin\Admin\AdminIndex;
use App\Livewire\Admin\CashReceived\CashReceivedIndex;
use App\Livewire\Admin\Role\RoleIndex;
use App\Livewire\Admin\User\UserIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cash-received', function () {
    return view('cash-received');
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

Route::middleware(['auth', Admin::class])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/', AdminIndex::class)->name('index');
    Route::get('/user', UserIndex::class)->name('user.index')->can('viewAny', \App\Models\User::class);
    Route::get('/role', RoleIndex::class)->name('role.index')->can('viewAny', \App\Models\Role::class);
    Route::get('/cash-received', CashReceivedIndex::class)->name('cash-received.index');
});