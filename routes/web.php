<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ViewController;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Service;
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
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/about', function (){
    $categories = Category::all();
    return view('about', compact('categories'));
})->name('about');

Route::get('/about/faqs', function (){
    return view('faqs');
})->name('faqs');

Route::get('/contact', function (){
    $categories = Category::all();
    $clients =  Partners::all();
    return view('contact', compact('categories', 'clients'));
})->name('contact');

Route::get('/about/clients', [PartnersController::class, 'index'])->name('partners');

Route::get('/services', function () {
    $services = Service::all();
    $categories = Category::all();
    return view('services', compact('services', 'categories'));
})->name('services');

Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');
Route::get('/achievements/{categorySlug}', [AchievementController::class, 'show'])->name('achievement.show');

Route::get('/testimonials', [ViewController::class, 'testimonials'])->name('testimonials');
//Route::get('/about/team/member/{id}', [TeamController::class, 'show'])->name('team.show');
//Route::get('/about/team', [TeamController::class, 'index'])->name('team');

