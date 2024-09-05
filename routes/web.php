<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index');
})->name('home');

Route::get('/shop', function () {
    return view('frontend.shop.index');
})->name('shop');

Route::get('/shopping-card', function () {
    return view('frontend.shopping-card.index');
})->name('card');

Route::get('/checkout', function () {
    return view('frontend.checkout.index');
})->name('check');

Route::get('/contact', function () {
    return view('frontend.contact.index');
})->name('contact');


Route::middleware('auth')->group(function(){

    Route::get('/dashboard', function(){
        return view('backend.dashboard.index');
    })->name('dashboard');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/test', function(){
    return view('welcome');
});
