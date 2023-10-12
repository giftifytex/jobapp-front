<?php

use App\Livewire\Home;
use App\Livewire\Jobs;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Backend\NewJob;
use App\Livewire\Backend\Dashboard;
use App\Livewire\Backend\Applicants;
use App\Livewire\Backend\ManageJobs;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\CompanyProfile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);

Route::get('/jobs', Jobs::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/company-profile', CompanyProfile::class);
Route::get('/new-job', NewJob::class);
Route::get('/manage-jobs', ManageJobs::class);
Route::get('/applicants', Applicants::class);
