<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AdminblogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\checkUserStatus;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Persons\PersonsController;
use App\Http\Controllers\Companies\CompaniesController;
use App\Http\Controllers\Error\ContactAdminController;
use App\Models\User;

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

// Auth::routes();
$userCount = User::count();
if ($userCount === 0) {
    Auth::routes(['register' => true]);
} else {
    Auth::routes(['register' => false]);
}

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['auth', checkUserStatus::class]], function () {
        // admin
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
                    '/user-data',
                    [UsersController::class, 'userData']
                )->name('userData');

                Route::post(
                    '/add-user',
                    [UsersController::class, 'registerUser']
                )->name('adduserdata');

                Route::get(
                    '/view-user/{user}',
                    [UsersController::class, 'view']
                )->name('viewuser');

                Route::post(
                    '/edit-user/{user}',
                    [UsersController::class, 'editUser']
                )->name('edituserdata');

                Route::delete(
                    '/delete-user/{user}',
                    [UsersController::class, 'deleteUser']
                )->name('deleteUser');
            });

            // command just use admin
            Route::get('/clear', function () {
                Artisan::call('cache:clear');
                Artisan::call('config:cache');
                Artisan::call('view:clear');
                return "Cleared!";
            });

            Route::get('/migrate', function () {
                Artisan::call('migrate');
                return "Database Migrated!";
            });

            Route::get('/rollback', function () {
                Artisan::call('migrate:rollback');
                return "Database Rollback!";
            });

            Route::get('/fresh', function () {
                Artisan::call('migrate:fresh');
                return "Database fresh!";
            });

            Route::get('/seed', function () {
                Artisan::call('db:seed');
                return "Database Seeded!";
            });
        });

        // user
        Route::group(['middleware' => ['auth', CheckRole::class . ':user']], function () {
            Route::prefix('user')->group(function () {
                Route::get(
                    '/dashboard',
                    [AdminController::class, 'view']
                )->name('user');

                Route::get('/Status', function () {
                    return "Sttatus Inactive";
                });
            });

        });

        // Persons
        Route::prefix('persons')->group(function () {
            Route::get(
                '/person-list',
                [PersonsController::class, 'listView']
            )->name('personList');

            Route::get(
                '/personData',
                [PersonsController::class, 'PersonData']
            )->name('personData');

            Route::get(
                '/add-person',
                [PersonsController::class, 'addPersonView']
            )->name('addPerson');

            Route::post(
                '/add-person',
                [PersonsController::class, 'registerPerson']
            )->name('addPersonData');

            Route::get(
                '/view-person/{id}',
                [PersonsController::class, 'view']
            )->name('viewPerson');

            Route::get(
                '/edit-person/{person}',
                [PersonsController::class, 'viewEdit']
            )->name('editPerson');
            Route::get(
                '/get-pdf/{filename}',
                [PersonsController::class, 'getPDF']
            )->name('getPDF');

            Route::post(
                '/edit-person/{id}',
                [PersonsController::class, 'editPerson']
            )->name('editPersonData');

            Route::delete(
                '/delete-person/{id}',
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
                '/company-data',
                [CompaniesController::class, 'companyData']
            )->name('companyData');

            Route::post(
                '/add-company',
                [CompaniesController::class, 'registerCompany']
            )->name('addCompanyData');

            Route::get(
                '/view-company/{company}',
                [CompaniesController::class, 'view']
            )->name('viewCompany');

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
});