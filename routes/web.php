<?php

use App\Http\Controllers\Web\WebPagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebPagesController::class, 'index'])->name('web.pages.index');
Route::get('/about', [WebPagesController::class, 'about'])->name('web.pages.about');
Route::get('/contact', [WebPagesController::class, 'contact'])->name('web.pages.contact');
