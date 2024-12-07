<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home'); // Matches Welcome.vue
});

Route::get('/users', function () {
    sleep(4);
    return Inertia::render('Users'); // Matches Welcome.vue
});

Route::get('/settings', function () {
    return Inertia::render('Settings'); // Matches Welcome.vue
});
Route::post('/logout', function () {
    dd('User is Logged Out');
});
