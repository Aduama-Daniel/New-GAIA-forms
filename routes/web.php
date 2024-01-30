<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;


Route::get('/', function () {
    return redirect()-> route('groups.store');
});


// Route::middleware([\App\Http\Middleware\LocalizationMiddleware::class])
//     ->group(function () {
//         Route::get('/form', [MembershipController::class, 'showForm'])->name('membership.form');
//         // Other routes...
//     });


Route::get('/form', [MembershipController::class, 'showForm'])->name('membership.form');
Route::post('/store/{step}', [MembershipController::class, 'storePageData'])->name('membership.store');
Route::post('/submit', [MembershipController::class, 'submitForm'])->name('membership.submit');
Route::get('/confirmation', [MembershipController::class, 'showConfirmation'])->name('membership.confirmation');
Route::get('/next_page', [MembershipController::class, 'showNextPage'])->name('membership.next_page');

Route::get('/memberships', [MembershipController::class, 'showMemberships'])->name('membership.memberships');

Route::post('/groups/submit', [GroupController::class, 'registerGroup'])->name('groups.create');
Route::get('/groups/form', [GroupController::class, 'showForm'])->name('groups.store');

Route::get('/userform', [GroupController::class, 'getAvailableGroups'])->name('userform');

Route::get('/language', function () {
    return view('membership.language');
})->name('language');

Route::get('/extra', function () {
    return view('membership.extra');
})->name('extra');

Route::get('/individual', function () {
    
    $groups = session('groups', []);
    return view('membership.individual', ['groups' => $groups]);
})->name('individual');

Route::get("locale/{lang}", [LocalizationController::class, 'setLang'])->name('lang.set');


Route::get('/test', function (){
    App::setLocale('en');

    
        dd(App::getLocale());
   
});



Route::get('/members', [MembersController::class, 'index'])->name('members.index');



Route::get('/user-details/{userId}', [UserController::class, 'showDetails'])->name('user.details');
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/adminchartdashboard', [ChartController::class, 'dashboard'])->name('adminchart.dashboard');


Route::get('/search', 'SearchController@search')->name('search');







