<?php


use Illuminate\Support\Facades\Route;

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

// Route::get('/home', function () {
//     return view('home');
// });



use  App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'login'])->name('login-view');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('logins');
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::post('/register-user', [AuthController::class, 'register'])->name('registeruser');


Route::middleware('loginCheck')->group(function () {
    Route::delete('/carhistory/{car}', [AuthController::class, 'deleteCar'])->name('delete-car');
    Route::get('/carhistory', [AuthController::class, 'CarHistory'])->name('carHistory-view');
    Route::post('/addcar', [AuthController::class, 'addcar'])->name('add-car');
    Route::get('/addcar', [AuthController::class, 'addcarView'])->name('carHistory-add-view');
    Route::post('/edit-car', [AuthController::class, 'editCar'])->name('edit-car');
    Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/', [AuthController::class, 'store'])->name('home.store');
Route::get('/car-maintenance', [AuthController::class, 'carMaintenanceView'])->name('car-maintenance-view');
Route::post('/add-maintenance', [AuthController::class, 'addMaintenance'])->name('add-maintenance');
Route::get('/addcarmaintence', [AuthController::class, 'getCarMaintenance'])->name('add-maintenance-view');
Route::delete('/maintenance/{maintenance}', [AuthController::class, 'deleteMaintenance'])->name('maintenance.delete');

});