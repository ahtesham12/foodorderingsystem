<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BranchDetailsController;
use App\Http\Controllers\BranchSettingsController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\RestaurantSetupController;
use App\Models\BranchSettings;

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

Route::get('checking',function(){
    return view('checking');
});



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);



//Admin Pannel Routes//

//Restaurant Setting Routes //

Route::get('restaurant_setup',[RestaurantSetupController::class,'resturSetup'])->name('restur.setup')->middleware('auth');
Route::post('restaurant_created',[RestaurantSetupController::class,'resturCreated'])->name('restur.created')->middleware('auth');

// Branch Routes //
Route::resource('branch_details',BranchDetailsController::class);
Route::get('/status/{status}/{id}',[BranchDetailsController::class,'branchStatus']);
Route::get('delivery/{status}/{id}',[BranchDetailsController::class,'deliveryStatus']);
Route::get('takeaway/{status}/{id}',[BranchDetailsController::class,'takeawayStatus']);
Route::get('dine_in/{status}/{id}',[BranchDetailsController::class,'dineIn']);

Route::get('settings',[BranchSettingsController::class,'index']);
Route::post('settings_updated',[BranchSettingsController::class,'submit']);

Route::get('delivery_areas',[BranchSettingsController::class,'index']);



//Catologue Routes//
Route::resource('menu_category',MenuCategoryController::class);
Route::get('menu_category/status/{status}/{id}',[MenuCategoryController::class,'activeStatus']);
Route::get('menu_category/featured/{status}/{id}',[MenuCategoryController::class,'popularStatus']);