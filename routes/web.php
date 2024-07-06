<?php

use Squarenetmedia\Auth\Register;
use Squarenetmedia\Auth\Login;

Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
