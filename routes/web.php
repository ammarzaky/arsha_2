<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\ClintsController;
use App\Http\Controllers\admin\QuestionsController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\MassagesController;
use App\Http\Controllers\admin\ContactsController;
use App\Http\Controllers\admin\PServiceController;
use App\Http\Controllers\admin\PricingController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\admin\TypesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewslettersController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/inner_u', [HomeController::class, 'inner'])->name('inner');
Route::post('/sendMassage_u', [ContactController::class, 'sendMassage'])->name('sendMassage');
Route::get('/port_detai_u', [HomeController::class, 'portfolio_details'])->name('port_detai');
Route::get('/team_u', [HomeController::class, 'team'])->name('team');
Route::get('/portfolio_u', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/contact_u', [HomeController::class, 'contact'])->name('contact');
Route::get('/services_u', [HomeController::class, 'services'])->name('services');
Route::get('/about_u', [HomeController::class, 'about'])->name('about');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::post('/newsletter', [NewslettersController::class, 'sendmail'])->name('newsletter');









Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/admin', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware(['auth'])->name('logout');




Route::resource('/team', TeamController::class)->middleware(['auth']);
Route::resource('/services', ServicesController::class)->middleware(['auth']);
Route::resource('/clints', ClintsController::class)->middleware(['auth']);
Route::resource('/questions', QuestionsController::class)->middleware(['auth']);
Route::resource('/massages', MassagesController::class)->middleware(['auth']);
Route::resource('/portfolios', PortfolioController::class)->middleware(['auth']);
Route::resource('/contacts', ContactsController::class)->middleware(['auth']);
Route::resource('/pservice', PServiceController::class)->middleware(['auth']);
Route::resource('/pricing', PricingController::class)->middleware(['auth']);
Route::resource('/skills', SkillsController::class)->middleware(['auth']);
Route::resource('/types', TypesController::class)->middleware(['auth']);
require __DIR__ . '/auth.php';