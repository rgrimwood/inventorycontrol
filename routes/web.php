<?php

use Illuminate\Support\Facades\Route;

/*
|-----------------------------------------------------------
| Contollers List (use statements)
|-----------------------------------------------------------
|
| Add location of all controllers that are needed within the project here
*/

use App\Http\Controllers\PartController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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



// Auth is not an error -to fix see https://stackoverflow.com/questions/59149877/visual-studio-code-php-intelephense-keep-showing-not-necessary-error
Auth::routes(); 


// Account
Route::get('/account', [PagesController::class, 'accountPage'])->name('account')->middleware('auth');


// Edit Part
Route::get('edit_part', function () {
    $part = App\Models\Part::all();
    return view('pages.edit_part', [
        'part' => $part
    ]);
})->name('edit part')->middleware('auth');


// Employees
Route::get('employees', function () {
    $employee = App\Models\Employee::paginate(12);
    return view('pages.employees', [
        'employee' => $employee
    ]);
})->name('employees')->middleware('auth');


// Home
Route::get('home', [HomeController::class, 'index'])->name('home');


// Inventory
Route::get('inventory', function () {
    $part = App\Models\Part::paginate(12);
    return view('pages.inventory', [
        'part' => $part
    ]);
})->name('inventory')->middleware('auth');


// Landing
Route::get('/', [PagesController::class, 'landingPage'])->name('landing');


// Part
Route::get('part/{part}', [PartController::class, 'show'])->name('part')->middleware('auth');


// States
Route::get('states', [PagesController::class, 'statesPage'])->name('states')->middleware('auth');


// -------------------------- Below Routes may not be used ----------------

// Route::get('finished', function () {
//     return view('pages.finished');
// });


// Route::get('in_process', function () {
//     return view('pages.in_process');
// });


// Route::get('raw_material', function () {
//     return view('pages.raw_material');
// });


Route::get('/user/{id}', [UserController::class, 'show']);