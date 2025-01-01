<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/Signup', function () {
    return view('login.SingUp');
})->name('signup');



Route::get('/login', function () {
    return view('login.login');
})->name('login');



Route::get('/Donate', function () {
    return view('donation.donation');
})->name('donate');



Route::get('/DonateInfo', function () {
    return view('donation.donationInfo');
})->name('donateInfo');



Route::get('/DonatePayment', function () {
    return view('donation.donationPayment');
})->name('donatePayment');



Route::get('/aboutUs', function () {
    return view('abuot.about');
})->name('aboutUs');


Route::get('/store', function () {
    return view('store.storePayment');
})->name('store');


Route::get('/store.card', function () {
    return view('store.store');
})->name('storeCard');


Route::get('/Adoption', function () {
    return view('Adoption.Adoption');
})->name('adoption');