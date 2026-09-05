<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServiceDetail;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowService::class)->name('servicesPage');
Route::get('/service/{id}',ShowServiceDetail::class)->name('showServiceDetail');

