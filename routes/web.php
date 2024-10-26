<?php

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


Route::prefix('/admin')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [App\Http\Controllers\Auth\AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth:admin'])->group(function () {
        // Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/', [App\Http\Controllers\Backend\DashboardController::class, 'Dashboard'])->name('Dashboard');

        // Route::get('/',[App\Http\Controllers\Backend\DashboardController::class,'Dashboard'])->name('Dashboard');

        // event
        Route::get('/event', [App\Http\Controllers\Backend\EventController::class, 'Event'])->name('view.event');
        Route::get('/create-event', [App\Http\Controllers\Backend\EventController::class, 'Create'])->name('create.event');
        Route::post('/store-event', [App\Http\Controllers\Backend\EventController::class, 'Store'])->name('store.event');
        Route::get('/edit-event/{id}', [App\Http\Controllers\Backend\EventController::class, 'edit'])->name('edit.event');
        Route::post('/update-event/{id}', [App\Http\Controllers\Backend\EventController::class, 'update'])->name('update.event');
        Route::get('/delete-event/{id}', [App\Http\Controllers\Backend\EventController::class, 'delete'])->name('delete.event');


        // category
        Route::get('/category', [App\Http\Controllers\Backend\CategoryController::class, 'Category'])->name('view.category');
        Route::get('/create-category', [App\Http\Controllers\Backend\CategoryController::class, 'Create'])->name('create.category');
        Route::post('/store-category', [App\Http\Controllers\Backend\CategoryController::class, 'Store'])->name('store.category');
        Route::get('/edit-category/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('edit.category');
        Route::post('/update-category/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('update.category');
        Route::get('/delete-category/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('delete.category');

        // Attendee
        Route::get('/attendee', [App\Http\Controllers\Backend\AttendeeController::class, 'Attendee'])->name('view.attendee');
        Route::get('/create-attendee', [App\Http\Controllers\Backend\AttendeeController::class, 'Create'])->name('create.attendee');
        Route::post('/store-attendee', [App\Http\Controllers\Backend\AttendeeController::class, 'Store'])->name('store.attendee');
        Route::get('/edit-attendee/{id}', [App\Http\Controllers\Backend\AttendeeController::class, 'edit'])->name('edit.attendee');
        Route::post('/update-attendee/{id}', [App\Http\Controllers\Backend\AttendeeController::class, 'update'])->name('update.attendee');
        Route::get('/delete-attendee/{id}', [App\Http\Controllers\Backend\AttendeeController::class, 'delete'])->name('delete.attendee');


    });
});
