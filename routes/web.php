<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EsewaController;
use App\Http\Controllers\BookingController;


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
Route::get('/', function () {
    return view('Home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/Home',function(){
	return view('Home');
})->middleware(['auth'])->name('home');
Route::get('/Futsal-List', function(){
	return view('Futsal-List');
});
//auth route for both  
Route::group(['middleware'=>['auth']],function(){
	Route::get('/aa','App\Http\Controllers\DashboardController@index');
	Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

						/*For Admin*/

Route::group(['middleware'=>['auth', 'role:Admin']], function(){
	Route::get('/dashboard/addfutsal','App\Http\Controllers\DashboardController@addfutsal')->name('dashboard.addfutsal');
	Route::get('/viewdatadashboard','App\Http\Controllers\FutsalController@index');
});
 //add futsal for admin
Route::group(['middleware'=>['auth', 'role:Admin']], function(){
    Route::get('/futsal/add','App\Http\Controllers\FutsalController@futsalAdd')->name('futsal.add');
	Route::post('/dashboard/storefutsal','App\Http\Controllers\FutsalController@store')->name('dashboard.storefutsal');
});

Route::get('/editfutsal/{id}','App\Http\Controllers\FutsalController@edit')->name('editfutsal');
Route::post('/updatefutsal/{id}','App\Http\Controllers\FutsalController@update')->name('updatefutsal');
	Route::get('/delete/{id}','App\Http\Controllers\FutsalController@destroy');
Route::get('/futsaluser','App\Http\Controllers\FutsalController@create');
Route::get('/bookingview','App\Http\Controllers\FutsalController@viewbookfutsal');

Route::group(['middleware'=>['auth', 'role:Admin']], function(){  		
	Route::get('/dashboard/user','App\Http\Controllers\DashboardController@user')->name('dashboard.user');
});
//delete user for admin
Route::get('/delete-user/{id}', 'App\Http\Controllers\Auth\RegisteredUserController@destroy');


//for users
Route::group(['middleware'=>['auth', 'role:user', 'verified']], function(){
	Route::get('/dashboard/myprofile','App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

Route::group(['middleware'=>['auth', 'role:user']], function(){
	Route::get('/dashboard/userdashboard','App\Http\Controllers\BookingController@create')->name('userdashboard');
});

// for FUTSAL 
//Route::group(['middleware'=>['auth', 'role:FUTSAL']],function(){
//	Route::get('dashboard/(desired page)', 'App\Http\Controllers\DashboardController@nameoffunction')->name(
//		dashboard.FUTSAL);

//});

// for register-user
Route::get('/register-user',function(){
	return view('register-user');
});

Route::group(['middleware'=>['auth']],function(){
Route::get('/futsaldetails/booking/{pid}', 'App\http\Controllers\BookingController@checkout');
});
Route::get('/futaldetails','App\Http\Controllers\FutsalController@getallfutsal');
Route::get('futsaldetails/{id}','App\Http\Controllers\FutsalController@fetchfutsal');






//payment portion

Route::any('check', [EsewaController::class,'check']);
    Route::any('esewa/success', [EsewaController::class,'success'])->name('esewa.success');
    Route::any('esewa/fail', [EsewaController::class,'fail'])->name('esewa.fail');
    Route::get('payment/response', [EsewaController::class,'payment_response'])->name('payment.response');
    Route::get('payment/error', [EsewaController::class,'payment_error'])->name('payment.error');
    Route::any('fonepay/return', [FonepayController::class,'fonepay_response'])->name('fonepay.return');

require __DIR__.'/auth.php';


