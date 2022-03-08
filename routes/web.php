<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CheckoutController;
use Psy\Command\ShowCommand;

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

// resours get and post routes 
Route::resource('/', GetController::class);

// Route serviseces page 
Route::get('/services', [ShowController::class, "services"]);
//  Route prieveuas page 
Route::get('/previous', [ShowController::class, "preveous"]);
// Route show page get form page 
Route::get('show/{id}', [ShowController::class, "show"]);
// Route get control page 
Route::get('control', [ShowController::class, "index"])->name("control");
// Route get the control servisces  page 
Route::get('control/servisecs', [ShowController::class, "controlSrv"])->name("controlSrv");
// Route get the control  preveuas page 
Route::get('control/preveuas', [Showcontroller::class, "controlPre"])->name("control.srv");
// Route add new servisce 
Route::get('add/servisce',  [ShowController::class, "addSRV"]);

Route::get('control/add', [ShowController::class, "addProudcut"]);

Route::get('control/add/servisce', [ShowController::class, "addSRV"]);

Route::post("control/add/servisce/create", [GetController::class, "store"]);

Route::post('/create/srv', [ShowController::class, "CreateSrv"])->name("create.srv");

// the edit data route get edit page 
Route::get("{id}/edit", [GetController::class, "edit"])->name("edit.route");

// Request data edit in first id edit box 
Route::post("updata/{id}", [GetController::class, "update"]);

Route::post("/delete/{id}", [GetController::class, "destroy"]);

Route::post('checkoutpage',[CheckoutController::class, "checkout"])->name("chackout.page");
Route::post('checkout',[CheckoutController::class, "afterPayment"])->name('checkout.credit-card');

// this functuion email seend msg 
Route::get("/email", [CheckoutController::class, "afterPayment"]);

Route::post("admen", [ShowController::class, "chackAdmin"])->name("admen");

Route::get("chackadmen", function(){

    return view("main.chackanmin");
});

Route::post("/contactus", [GetController::class, "conuntus"]);