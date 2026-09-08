<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServiceDetail;
use App\Livewire\ShowTeam;
use App\Livewire\ShowArticle;
use App\Livewire\ShowArticleDetail;
use App\Livewire\ShowContact;
use App\Livewire\About;
use App\Livewire\ShowPrivacyPolicy;
use App\Livewire\TermsConditions;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowService::class)->name('servicesPage');
Route::get('/service/{id}',ShowServiceDetail::class)->name('showServiceDetail');
Route::get('/teams',ShowTeam::class)->name('showTeams');
Route::get('/articles',ShowArticle::class)->name('articlesPage');
Route::get('/article-details/{id}',ShowArticleDetail::class)->name('showArticleDetail');
Route::get('/contact',ShowContact::class)->name('showContact');
Route::get('/about',About::class)->name('about');
Route::get('/privacy',ShowPrivacyPolicy::class)->name('policy');
Route::get('/terms',TermsConditions::class)->name('terms');



