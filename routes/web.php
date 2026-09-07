<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServiceDetail;
use App\Livewire\ShowTeam;
use App\Livewire\ShowArticle;
use App\Livewire\ShowArticleDetail;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowService::class)->name('servicesPage');
Route::get('/service/{id}',ShowServiceDetail::class)->name('showServiceDetail');
Route::get('/teams',ShowTeam::class)->name('showTeams');
Route::get('/articles',ShowArticle::class)->name('articlesPage');
//Route::get('/article-details',ShowArticleDetail::class)->name('showArticleDetail');
Route::get('/article-details/{id}',ShowArticleDetail::class)->name('showArticleDetail');


