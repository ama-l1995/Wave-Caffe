<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BeverageController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Middleware\Admin;
use App\Models\User;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/e', function () {
//     return view('email.contactUs');
// });

// Auth
Auth::routes();
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

// Admin-only routes here
Route::group(['middleware' => Admin::class], function () {
    // Users
    Route::get('/usersList', [UserController::class, 'index'])->middleware(('auth'))->name('usersList');
    Route::get('/editUser/{id}', [UserController::class, 'editUser']    )->name("editUser");
    Route::post('/updateUser/{id}', [UserController::class, 'updateUser']    )->name("updateUser");
    Route::get('/insertUser', [UserController::class, 'insertUser']    )->name("insertUser");
    Route::post('/userStore', [UserController::class, 'userStore']    )->name("userStore");

    // Category
    Route::get('/categoriesList', [CategoryController::class, 'index'])->name('categoriesList');
    Route::get('/createCat', [CategoryController::class, 'createCat'])->name('createCat');
    Route::post('/catStore', [CategoryController::class, 'catStore']    )->name("catStore");
    Route::get('/editCat/{id}', [CategoryController::class, 'editCat']    )->name("editCat");
    Route::post('/updateCat/{id}', [CategoryController::class, 'updateCat']    )->name("updateCat");
    Route::get('/deleteCat/{id}', [CategoryController::class, 'deleteCat']    );

    // Beverages
    Route::get('/beveragesList', [BeverageController::class, 'index'])->name('beveragesList');
    Route::get('/creatBever', [BeverageController::class, 'creatBever'])->name('creatBever');
    Route::post('/beverStore', [BeverageController::class, 'beverStore'])->name('beverStore');
    Route::get('/editBever/{id}', [BeverageController::class, 'editBever'])->name('editBever');
    Route::put('/updateBever/{id}', [BeverageController::class, 'updateBever']    )->name("updateBever");
    Route::post('imageUpload',[ContactController::class, 'upload'])->name('imageUpload');
    Route::get('/deleteBever/{id}', [BeverageController::class, 'deleteBever']    );
    Route::get('/user_beveragesR/{id}', [BeverageController::class, 'user_beverages'])->name('user_beverages');

    // Special
    Route::get('/indexSpecial', [BeverageController::class, 'indexSpecial'])->name('indexSpecial');

    // 1-Messages List
    Route::get('indexMsg',[ContactController::class, 'indexMsg'])->name('indexMsg');
    Route::get('/showMsg/{id}', [ContactController::class, 'showMsg'])->name("showMsg");
    Route::post('/storeMsg', [ContactController::class, 'storeMsg']    )->name("storeMsg");
    Route::get('/deleteMsg/{id}', [ContactController::class, 'deleteMsg']    );
});
Route::get('/', [BeverageController::class, 'beverDrink'])->name('beverDrink');






// Route::get('/admin', function () {
    // $users = User::all();

    // return view('admin.users', ['users' => $users]);
// })->middleware('auth')->name('users');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout', function () {
    return redirect('/');
})->name('logout');


// Route::group(['middleware' => 'unreadNotificationsCount'], function () {
//     // Routes that need the unread notifications count
//     return view('layouts.home');
// });









Auth::routes(['verify'=>true]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send_mail', [MessageController::class, 'send_mail']);


// Messages


    //  Send Message
    Route::get('/sendMsg', [ContactController::class, 'sendMsg']    )->name("sendMsg");
    Route::post('submit',[ContactController::class, 'submit'])->name('submit');

Route::get('/unreadCount', [ContactController::class, 'unreadCount'])->name('unreadCount');
Route::get('/showDashboard', [MessageController::class, 'showDashboard'])->name('showDashboard');


// Route::get('/', [BeverageController::class, 'catDrink'])->name('catDrink');

