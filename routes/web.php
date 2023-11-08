<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AdminblogController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Persons\PersonsController;
use App\Http\Controllers\Companies\CompaniesController;

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

Route::get(
    '/',
    [PageController::class, 'index']
)->name('home');


Route::get(
    'partner-with-us',
    [PageController::class, 'partner']
)->name('partner');

Route::get(
    'data-collection',
    [PageController::class, 'datacollection']
)->name('datacollection');

Route::get(
    'research',
    [PageController::class, 'research']
)->name('research');

Route::get(
    'insight',
    [PageController::class, 'insight']
)->name('insight');

Route::get(
    '/profile',
    [DownloadsController::class, 'index']
)->name('caps');

Route::get(
    '/zambia',
    [CountryController::class, 'zambia']
)->name('zambia');

Route::get(
    '/about',
    [PageController::class, 'about']
)->name('about');

Route::get(
    '/team',
    [PageController::class, 'team']
)->name('team');

Route::get(
    '/careers',
    [PageController::class, 'careers']
)->name('careers');

Route::get(
    '/our-work',
    [PageController::class, 'work']
)->name('work');

Route::get(
    '/our-work/{slug}',
    [PageController::class, 'article']
)->name('work.show');

Route::resource('adminblog', AdminblogController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get(
//     '/admin',
//     [AdminController::class, 'index']
// )->name('admin');

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['auth', CheckRole::class . ':user']], function () {
        Route::prefix('user')->group(function () {
            Route::get(
                '/dashboard',
                [AdminController::class, 'view']
            )->name('user');
        });
    });

    Route::group(['middleware' => ['auth', CheckRole::class . ':admin']], function () {
        Route::prefix('admin')->group(function () {
            Route::get(
                '/dashboard',
                [AdminController::class, 'view']
            )->name('admin');

            // user
            Route::get(
                '/user-list',
                [UsersController::class, 'listView']
            )->name('userList');

            Route::get(
                '/add-user',
                [UsersController::class, 'addUserView']
            )->name('adduser');

            Route::post(
                '/add-user',
                [UsersController::class, 'registerUser']
            )->name('adduserdata');

            Route::get(
                '/view-user/{user}',
                [UsersController::class, 'view']
            )->name('viewuser');

            Route::get(
                '/edit-user/{user}',
                [UsersController::class, 'viewEdit']
            )->name('edituser');

            Route::post(
                '/edit-user/{user}',
                [UsersController::class, 'editUser']
            )->name('edituserdata');

            Route::delete(
                '/delete-user/{user}',
                [UsersController::class, 'deleteUser']
            )->name('deleteUser');
        });
    });

    // Persons
    Route::prefix('persons')->group(function () {
        Route::get(
            '/person-list',
            [PersonsController::class, 'listView']
        )->name('personList');

        Route::get(
            '/add-person',
            [PersonsController::class, 'addPersonView']
        )->name('addPerson');

        Route::post(
            '/add-person',
            [PersonsController::class, 'registerPerson']
        )->name('addPersonData');

        Route::get(
            '/view-person/{person}',
            [PersonsController::class, 'view']
        )->name('viewPerson');

        Route::get(
            '/edit-person/{person}',
            [PersonsController::class, 'viewEdit']
        )->name('editPerson');

        Route::post(
            '/edit-person/{person}',
            [PersonsController::class, 'editPerson']
        )->name('editPersonData');

        Route::delete(
            '/delete-person/{person}',
            [PersonsController::class, 'deletePerson']
        )->name('deletePerson');
    });

    // company
    Route::prefix('companies')->group(function () {
        Route::get(
            '/company-list',
            [CompaniesController::class, 'listView']
        )->name('companyList');

        Route::get(
            '/add-company',
            [CompaniesController::class, 'addCompanyView']
        )->name('addCompany');

        Route::post(
            '/add-company',
            [CompaniesController::class, 'registerCompany']
        )->name('addCompanyData');

        Route::get(
            '/view-company/{company}',
            [CompaniesController::class, 'view']
        )->name('viewCompany');

        Route::get(
            '/edit-company/{company}',
            [CompaniesController::class, 'viewEdit']
        )->name('editCompany');

        Route::post(
            '/edit-company/{company}',
            [CompaniesController::class, 'editCompany']
        )->name('editCompanyData');

        Route::delete(
            '/delete-company/{company}',
            [CompaniesController::class, 'deleteCompany']
        )->name('deleteCompany');
    });
});