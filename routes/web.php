<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\SimpleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partner-und-mitmacher-gesucht', function () {
    return view('partner-und-mitmacher-gesucht');
})->name('partner');

Route::get('/buecher', function () {
    return view('buecher');
})->name('buecher');

Route::get('/achrichten-aerztezeitung', [SimpleController::class, 'getAchrichtenNews'])->name('achrichten');
Route::get('/nachrichten-aerztenachichtendienst', [SimpleController::class, 'getNachrichten'])->name('nachrichten');
Route::get('/nachrichten-bundesministerium-fuer-gesundheit', [SimpleController::class, 'nachrichtenBundesministeriumFuerGesundheit'])->name('nachrichten.bundesministerium');

//finanzierung-der-pflege
Route::get('/finanzierung-der-pflege', function () {
    return view('news_ratgeber.ratgeber.finanzierung-der-pflege');
})->name('ratgeber');

Route::get('/portal-anschreiben', function () {
    return view('musteranschreiben.index');
})->name('musteranschreiben');

Route::get('/portal-anschreiben/fur-pflegende-angehorige', function () {
    return view('fur_pflegebedurftige.index');
})->name('fur_pflegebedurftige');

////// CHECKLISTEN ---- ///////
Route::get('/portal_checklisten', function () {
    return view('checklisten.index');
})->name('checklisten');

Route::get('/checkliste-arzttermine-und-facharztbesuche', function () {
    return view('checklisten.subpages.checkliste-arzttermine-und-facharztbesuche');
})->name('checklist.1');

Route::get('/checkliste-körperpflege-baden-anziehen-hygiene', function () {
    return view('checklisten.subpages.checkliste-körperpflege-baden-anziehen-hygiene');
})->name('checklist.2');

Route::get('/checkliste-sozialkontakte-und-freizeitaktivitäten', function () {
    return view('checklisten.subpages.checkliste-sozialkontakte-und-freizeitaktivitäten');
})->name('checklist.3');

Route::get('/checkliste-pflegeversicherung-und-leistungen', function () {
    return view('checklisten.subpages.checkliste-pflegeversicherung-und-leistungen');
})->name('checklist.4');

Route::get('/checkliste-notfallkontakte-und-informationen', function () {
    return view('checklisten.subpages.checkliste-notfallkontakte-und-informationen');
})->name('checklist.5');

Route::get('/checkliste-regelmäßige-gesundheitschecks-und-monitoring-blutdruck-blutzucker', function () {
    return view('checklisten.subpages.checkliste-regelmäßige-gesundheitschecks-und-monitoring-blutdruck-blutzucker');
})->name('checklist.6');

////// END --- CHECKLISTEN ---- ///////


Route::get('/marktplatz', [MarketplaceController::class, 'index'])->name('marketplace.index');


//BLOGs
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.index');
Auth::routes();

// FOr Admin
Route::get('/admin/marketplace', [MarketplaceController::class, 'getAllForAdmin'])->name('admin.marketplace.index');
Route::get('/admin/marketplace/add', [MarketplaceController::class, 'create'])->name('admin.marketplace.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
