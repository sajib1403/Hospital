<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function() {
    return view('admin.index');
});


Route::get('doctors', function() {
    return view('admin.doctor.add');
})->name('doctor.add');

Route::get('/view/doctors', function() {
    return view('admin.doctor.view');
})->name('doctor.view');


Route::get('/add/patient', function() {
    return view('admin.patient.add');
})->name('patient.add');

Route::get('/view/patient', function() {
    return view('admin.patient.view');
})->name('patient.view');