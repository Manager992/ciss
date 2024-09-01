<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route web Auth*/

Route::group(['prefix' => 'auth'], function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/login', 'auth.login')->name('login');
});
/*Route Web Auth End*/

/*Route Details Models*/

Route::view('/details-models', 'details-models')->name('details-models');
/*Route Details Models End*/

/*Routes Admin Advertiser Edit*/
Route::group(['prefix' => 'admin'], function () {
    Route::view('/services', 'admin.services.my-services');
    Route::view('/services/edit', 'admin.services.edit.edit-services');
    Route::view('/services/edit/work-specifics', 'admin.services.edit.work-specifics');
    Route::view('/services/edit/details', 'admin.services.edit.details-services');
    Route::view('/services/edit/biography', 'admin.services.edit.edit-biography');
    Route::view('/services/edit/additional-info-service', 'admin.services.edit.additional-info');
    Route::view('/services/edit/gallery-picks', 'admin.services.edit.gallery-picks');
    Route::view('/services/edit/extra-services', 'admin.services.edit.extra-services');
    Route::view('/services/edit/enhance-ad', 'admin.services.edit.enhance-ad');
    Route::view('/services/edit/vip-services', 'admin.services.edit.vip-services');
    Route::view('/services/edit/preview', 'admin.services.edit.preview');
    /*Routes Admin Advertiser Create*/
    Route::view('/services/create', 'admin.services.create.create-advertiser');
    Route::view('/services/create/create-ad-window', 'admin.services.create.create-ad-window');
    Route::view('/services/create/create-new-advertiser', 'admin.services.create.create-new-advertiser');
});
/*End Routes Admin Advertiser*/

/*Routes Admin Advertiser Create*/