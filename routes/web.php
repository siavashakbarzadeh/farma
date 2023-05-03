<?php

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
//Route::get('settings-language/{alias}', [SystemController::class, 'getLanguage'])->name('settings.language');
Route::get('change-language/{lang}', [\App\Http\Middleware\AdminLanguageManager::class, 'adminswitchLang'])->name('Admin.lang.switch');
