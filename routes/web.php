<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/appointment', [App\Http\Controllers\AppointmentController::class, 'store'])->name('store_appointment');


// Route::get('/test', function () {
//     return view("submission");
// });



/*===========================================================================
========== Admin Routes =====================================================
===========================================================================*/

Route::group([ "prefix" => "admin" , "as" => "admin." ] , function(){


    // Dashboard
    Route::get('/dashboard' , [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


    // profile
    Route::get('profile/edit' , [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name("profile.edit");
    Route::put('profile/update' , [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name("profile.update");


    // categories
    Route::get('category/perPage/{num}' , [App\Http\Controllers\Admin\CategoryController::class, 'perPage'])->name("category.perPage");
    Route::post('category/search' , [App\Http\Controllers\Admin\CategoryController::class, 'search'])->name("category.search");
    Route::post('category/multiAction' , [App\Http\Controllers\Admin\CategoryController::class, 'multiAction'])->name("category.multiAction");
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
    Route::get('category/destroy/{id}' , [App\Http\Controllers\Admin\CategoryController::class, 'destroy'] )->name("category.destroy");


    // articles
    Route::get('article/perPage/{num}' , [App\Http\Controllers\Admin\ArticleController::class, 'perPage'])->name("article.perPage");
    Route::post('article/search' , [App\Http\Controllers\Admin\ArticleController::class, 'search'])->name("article.search");
    Route::post('article/multiAction' , [App\Http\Controllers\Admin\ArticleController::class, 'multiAction'])->name("article.multiAction");
    Route::resource('article', App\Http\Controllers\Admin\ArticleController::class);
    Route::get('article/destroy/{id}' , [App\Http\Controllers\Admin\ArticleController::class, 'destroy'] )->name("article.destroy");



    // members
    Route::get('member/perPage/{num}' , [App\Http\Controllers\Admin\MemberController::class, 'perPage'])->name("member.perPage");
    Route::post('member/search' , [App\Http\Controllers\Admin\MemberController::class, 'search'])->name("member.search");
    Route::post('member/multiAction' , [App\Http\Controllers\Admin\MemberController::class, 'multiAction'])->name("member.multiAction");
    Route::resource('member', App\Http\Controllers\Admin\MemberController::class);
    Route::get('member/destroy/{id}' , [App\Http\Controllers\Admin\MemberController::class, 'destroy'] )->name("member.destroy");



    // service
    Route::get('service/perPage/{num}' , [App\Http\Controllers\Admin\ServiceController::class, 'perPage'])->name("service.perPage");
    Route::post('service/search' , [App\Http\Controllers\Admin\ServiceController::class, 'search'])->name("service.search");
    Route::post('service/multiAction' , [App\Http\Controllers\Admin\ServiceController::class, 'multiAction'])->name("service.multiAction");
    Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);
    Route::get('service/destroy/{id}' , [App\Http\Controllers\Admin\ServiceController::class, 'destroy'] )->name("service.destroy");


    // Appointment
    Route::get('appointment/perPage/{num}' , [App\Http\Controllers\Admin\AppointmentController::class, 'perPage'])->name("appointment.perPage");
    Route::post('appointment/search' , [App\Http\Controllers\Admin\AppointmentController::class, 'search'])->name("appointment.search");
    Route::post('appointment/multiAction' , [App\Http\Controllers\Admin\AppointmentController::class, 'multiAction'])->name("appointment.multiAction");
    Route::resource('appointment', App\Http\Controllers\Admin\AppointmentController::class);
    Route::get('appointment/destroy/{id}' , [App\Http\Controllers\Admin\AppointmentController::class, 'destroy'] )->name("appointment.destroy");


    // testimonial
    Route::get('testimonial/perPage/{num}' , [App\Http\Controllers\Admin\TestimonialController::class, 'perPage'])->name("testimonial.perPage");
    Route::post('testimonial/search' , [App\Http\Controllers\Admin\TestimonialController::class, 'search'])->name("testimonial.search");
    Route::post('testimonial/multiAction' , [App\Http\Controllers\Admin\TestimonialController::class, 'multiAction'])->name("testimonial.multiAction");
    Route::resource('testimonial', App\Http\Controllers\Admin\TestimonialController::class);
    Route::get('testimonial/destroy/{id}' , [App\Http\Controllers\Admin\TestimonialController::class, 'destroy'] )->name("testimonial.destroy");


    // setting
    Route::get('setting/edit' , [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name("setting.edit");
    Route::put('setting/update' , [App\Http\Controllers\Admin\SettingController::class, 'update'])->name("setting.update");




    // subscriber
    Route::get('subscriber/perPage/{num}' , [App\Http\Controllers\Admin\SubscriberController::class, 'perPage'])->name("subscriber.perPage");
    Route::post('subscriber/search' , [App\Http\Controllers\Admin\SubscriberController::class, 'search'])->name("subscriber.search");
    Route::post('subscriber/multiAction' , [App\Http\Controllers\Admin\SubscriberController::class, 'multiAction'])->name("subscriber.multiAction");
    Route::resource('subscriber', App\Http\Controllers\Admin\SubscriberController::class);
    Route::get('subscriber/destroy/{id}' , [App\Http\Controllers\Admin\SubscriberController::class, 'destroy'] )->name("subscriber.destroy");



    // newsletter
    Route::get('newsletter/perPage/{num}' , [App\Http\Controllers\Admin\NewsletterController::class, 'perPage'])->name("newsletter.perPage");
    Route::post('newsletter/search' , [App\Http\Controllers\Admin\NewsletterController::class, 'search'])->name("newsletter.search");
    Route::post('newsletter/multiAction' , [App\Http\Controllers\Admin\NewsletterController::class, 'multiAction'])->name("newsletter.multiAction");
    Route::resource('newsletter', App\Http\Controllers\Admin\NewsletterController::class);
    Route::get('newsletter/destroy/{id}' , [App\Http\Controllers\Admin\NewsletterController::class, 'destroy'] )->name("newsletter.destroy");




});
