<?php

use App\Http\Controllers\SimpleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partner-und-mitmacher-gesucht', function(){
    return view('partner-und-mitmacher-gesucht');
})->name('partner');

Route::get('/buecher', function(){
    return view('buecher');
})->name('buecher');

Route::get('/achrichten-aerztezeitung', [SimpleController::class, 'getAchrichtenNews'])->name('achrichten');
Route::get('/nachrichten-aerztenachichtendienst', [SimpleController::class, 'getNachrichten'])->name('nachrichten');
Route::get('/nachrichten-bundesministerium-fuer-gesundheit', [SimpleController::class, 'nachrichtenBundesministeriumFuerGesundheit'])->name('nachrichten.bundesministerium');

//finanzierung-der-pflege
Route::get('/finanzierung-der-pflege', function(){
    return view('news_ratgeber.ratgeber.finanzierung-der-pflege');
})->name('ratgeber');