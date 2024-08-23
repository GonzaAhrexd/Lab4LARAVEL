<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Practico1Controller;

Route::get('/', function () {
    return view('welcome');
    // echo "Hola soy Gonza";
});

Route::get('/practico1', [Practico1Controller::class, 'practico1'])->name('practico1');
Route::post('/calculate', [Practico1Controller::class, 'calcularPromedio'])->name('calculate.result');
Route::post('/contacto', [Practico1Controller::class, 'contacto'])->name('calculate.contacts');