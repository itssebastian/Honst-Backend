<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayPaymentController;
use App\Models\User;

Route::get('/', function () {
    return view('auth/login');
});

/*
Route::get('/firebase', function () {
    return view('firebase');
});

Route::get('/BhagavadGita_Kahani_Swaroop', function () {
    return view('BhagavadGita');
});

Route::get('/ViewBook', function () {
    return view('viewBook');
});
*/





Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/firebasecontroller', [App\Http\Controllers\FirebaseController::class, 'getData'])->name('getData');
Route::get('razorpay-payment',[RazorpayPaymentController::class,'index'])->name('razorpay-payment');
Route::post('razorpay-payment',[RazorpayPaymentController::class,'store'])->name('razorpay.payment.store');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/firebase', function () {
    return view('firebase');
});

Route::get('/BhagavadGita_Kahani_Swaroop', function () {
    return view('BhagavadGita');
});


Route::get('/ViewBook', function () {
    $payment_status=Auth::user()->payment_status;
    if ($payment_status==1) {
        return view('viewBook');
    }
    else
    {
        return redirect()->route('razorpay-payment');
    }
});
});