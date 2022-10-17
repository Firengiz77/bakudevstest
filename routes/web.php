<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Home\HomeController;
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

// Page routeleri
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/change_password',[HomeController::class,'change_password'])->name('change_password');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/courses',[HomeController::class,'courses'])->name('courses');
Route::get('/forgot_password',[HomeController::class,'forgot_password'])->name('forgot_password');
Route::get('/invoice',[HomeController::class,'invoice'])->name('invoice');
Route::get('/member_area_abune',[HomeController::class,'member_area_abune'])->middleware('all_users')->name('member_area_abune');
Route::get('/member_area_profil',[HomeController::class,'member_area_profil'])->middleware('all_users')->name('member_area_profil');
Route::get('/sign_in',[HomeController::class,'sign_in'])->name('sign_in');
Route::get('/sign_up',[HomeController::class,'sign_up'])->name('sign_up');
Route::get('/single_page/{kurs_id}/{id}',[HomeController::class,'single_page'])->name('single_page');
Route::get('/wish_list',[HomeController::class,'wish_list'])->name('wish_list');
Route::get('/seperal_courses/{id}',[HomeController::class,'seperal_courses'])->name('seperal_courses');




// user auth
Route::post('/sendqeyd',[MainController::class,'sendqeyd'])->name('sendqeyd');
Route::get('logout',[MainController::class,'logout'])->name('logout');



Route::get('/qeydiyyat',[MainController::class,'qeydiyyat'])->name('qeydiyyat');
Route::get('/kursun_dersleri/{kurs_id}',[MainController::class,'kursun_dersleri'])->name('kursun_dersleri');
Route::post('/login',[MainController::class,'login'])->name('login');
Route::get('profile',[MainController::class,'profile'])->middleware('all_users')->name('profile');
Route::post('updatepassword',[MainController::class,'updatepassword'])->name('updatepassword');
Route::get('logout',[MainController::class,'logout'])->name('logout');
Route::get('single/{kurs_id}/{id}',[MainController::class,'single'])->name('single');

// wishlist routeleri
Route::get('wishlist',[MainController::class,'wishlist'])->middleware('all_users')->name('wishlist');

Route::post('addtowish',[MainController::class, 'addtowish'])->name('addtowish');
Route::post('deletewish',[MainController::class, 'deletewish'])->name('deletewish');


// kurslar ve dersler
Route::get('kurslar',[MainController::class,'kurslar'])->middleware('all_users')->name('kurslar');
Route::get('/password/forgot',[MainController::class,'showforgotpassword'])->name('forgot.password.form');
Route::post('/password/forgot',[MainController::class,'sendresetlink'])->name('forgot.password.link');
Route::get('password/reset/{token}',[MainController::class,'showresetform'])->name('reset.password.form');
Route::post('/check',[MainController::class,'resetpass'])->name('resetpass');

// login with google
Route::get('/auth/redirect',[SocialController::class,'redirect']);
Route::get('/auth/google/callback',[SocialController::class,'callback']);



// emaile msj getmesi ve dbda oturmasi toastr ve custom requiredle birge
Route::get('/form',[MainController::class,'form'])->middleware('all_users')->name('form');
Route::post('/sendemail',[MainController::class,'sendemail'])->name('sendemail');


// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
