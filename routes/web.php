<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactUsController;


Route::get('/', [InfoController::class, 'welcome']); 
Route::get('/about', [InfoController::class, 'about']); 

Route::get('/single_story/{id}', [InfoController::class, 'story']); 



Route::post('/contactCreate', [ContactUsController::class, 'contactCreate']); 


Route::get('/adminDashboard', [InfoController::class, 'adminDashboard']); 
Route::get('/addCateogries', [InfoController::class, 'admincateogries']); 
Route::get('/viewCateogries', [InfoController::class, 'viewCateogries']); 

Route::post('/store', [CategoryController::class, 'store']); 
// Route::get('/getAllCateogries', [CategoryController::class, 'getAllCateogries']); 
Route::get('/viewCateogries', [CategoryController::class, 'getAllCateogries'])->name('viewCategories');
Route::get('/viewEditCateogries/{id}', [CategoryController::class, 'getCateogriesById'])->name('viewEditCateogries');
Route::get('/viewEditCateogries', [CategoryController::class, 'viewEditCateogries'])->name('viewEditCateogries');
Route::post('/updateCategorie/{id}', [CategoryController::class, 'updateCategorie']); 
Route::get('/destroyCategorie/{id}', [CategoryController::class, 'destroyCategorie'])->name('destroyCategorie');



Route::get('/story', [StoryController::class, 'story']); 
Route::post('/storyCreate', [StoryController::class, 'storyCreate']); 
Route::get('/viewstory', [StoryController::class, 'viewstory']); 
Route::get('/destroyStory/{id}', [StoryController::class, 'destroyStory']); 
Route::get('/show/{id}', [StoryController::class, 'show']); 
Route::post('/storyUpdatebyId/{id}', [StoryController::class, 'storyUpdatebyId'])->name('storyUpdatebyId');
Route::get('/adminDashboard', [StoryController::class, 'adminDashboard']); 


Route::get('/contact', [SettingController::class, 'contactus']); 

Route::get('/setting/{id}', [SettingController::class, 'setting']); 
Route::post('/settingCreate', [SettingController::class, 'settingCreate']); 
Route::post('/settingCreateupdate/{id}', [SettingController::class, 'settingCreateupdate']); 
Route::get('/viewSetting', [SettingController::class, 'viewSetting']); 



Route::get('/infos', [InfoController::class, 'getAllInfos']); 
Route::get('/infos/{id}', [InfoController::class, 'getInfo']); 
Route::post('/infos', [InfoController::class, 'createInfo']); 
Route::put('/infos/{id}', [InfoController::class, 'updateInfo']);

// Route::get('/apiCheck', [InfoController::class, 'apiCheck']); 


Route::get('/viewEvent', [EventController::class, 'viewEvent']); 
Route::post('/storyEvent', [EventController::class, 'storyEvent']); 
Route::get('/addEvent', [EventController::class, 'addEvent']); 
Route::get('/destroyEvent/{id}', [EventController::class, 'destroyEvent']); 
Route::get('/showEvent/{id}', [EventController::class, 'showEvent']); 
Route::post('/storyCreateupdate/{id}', [EventController::class, 'storyCreateupdate'])->name('storyCreateupdate');