<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('get-featured-models', 'API\OfferorController@getFeatured')->name('getFeaturedModels');
Route::resource('cities', 'CityController');

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthenticationController@login');
    Route::post('signup-customer', 'AuthenticationController@signUpCustomer');
    Route::post('signup-offeror', 'AuthenticationController@signUpOfferor');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'AuthenticationController@logout');
        Route::get('user', 'AuthenticationController@user');
    });
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('get-notifications', 'API\NotificationController@getUserNotifications');
    Route::get('notifications/{notification}/read', 'API\NotificationController@getUserNotifications');
    Route::get('offerors/{offeror}', 'API\OfferorController@show');
    Route::get('offerors/{offeror}/get-services', 'API\OfferorController@getServices');
    Route::get('offerors/{offeror}/get-accessories', 'API\OfferorController@getAccessories');
    Route::get('offerors/{offeror}/get-financial-information', 'API\OfferorController@getFinancialInformation');
    Route::get('offerors/{user}/get-offeror', 'API\OfferorController@getOfferor');
    Route::get('offerors/{offeror}/get-monetary-request', 'API\OfferorController@getMonetaryRequest');
    //Albums
    Route::get('offerors/{offeror}/get-book', 'API\OfferorController@getBook');
    Route::get('offerors/{album}/get-album', 'API\OfferorController@getAlbum');
    Route::get('albums/get-list', 'API\AlbumController@index');
    Route::get('albums/{album}', 'API\AlbumController@show');
    Route::post('albums/upload-pictures', 'API\AlbumController@uploadPictures');

    //Profile
    Route::get('customers/{customer}', 'API\CustomerController@show');
    Route::put('customers/{customer}', 'API\CustomerController@update');
    Route::get('customers/{user}/user', 'API\CustomerController@showByUser');
    Route::put('customers/{user}/user', 'API\CustomerController@updateByUser');
    //Ratings
    Route::get('offerors/{offeror}/get-ratings', 'API\OfferorRatingController@index');
    Route::post('rate-offeror/{requestOfferor}', 'API\OfferorRatingController@store');

    //Ratings customer
    Route::get('customer/{customer}/get-ratings', 'API\CustomerRatingController@index');
    Route::post('rate-customer/{requestOfferor}', 'API\CustomerRatingController@store');

    //dashboard model
    Route::get('offerors/account/{offeror}', 'API\OfferorController@getAccount');
    //Activacion de cuenta
    Route::get('offeror/activate/{offeror}', 'API\OfferorController@activate');
    //Desactivacion de cuenta
    Route::get('offeror/deactivate/{offeror}', 'API\OfferorController@deactivate');

    //Stage
    Route::get('stage/get-stage', 'API\StageController@getCart');
    Route::post('stage/{service}/add-service', 'API\StageController@addService');
    Route::post('stage/{accessory}/add-accessory', 'API\StageController@addAccessory');
    Route::post('stage/{service}/remove-service', 'API\StageController@remove');
    //Search
    Route::get('search', 'API\SearchController@search');
    //Requests
    Route::get('requests/get-list', 'API\ServiceRequestController@index');
    Route::get('requests/{serviceRequest}/show', 'API\ServiceRequestController@show');
    Route::get('requests-offeror/{serviceRequestOfferor}/show', 'API\ServiceRequestController@showDetail');
    Route::post('requests/create', 'API\ServiceRequestController@create');
    Route::get('requests/confirm-realization/{serviceRequest}', 'API\ServiceRequestController@confirmRealization');
    Route::post('requests/confirm', 'API\ServiceRequestController@confirm');

    //Request Messages

    Route::get('requests-messages/{requestOfferor}', 'API\ServiceRequestMessageController@getMessages');
    Route::post('requests-messages/{requestOfferor}', 'API\ServiceRequestMessageController@store');

    //get lists offeror profile
    Route::get('offeror/get-profile-list', 'API\ListController@getOfferorProfileList');
    Route::get('misc/get-item-list/{item}', 'API\ListController@getItemList');
    Route::get('list/get-profile-list', 'API\ListController@getOfferorProfileList');
    Route::get('list/get-service-list', 'API\ListController@getOfferorServiceList');
    Route::get('list/get-accessory-list', 'API\ListController@getOfferorAccessoryList');
    Route::get('list/get-financial-information-list', 'API\ListController@getOfferorFinancialInformationList');
    Route::get('list/get-monetary-request-list', 'API\ListController@getOfferorMonetaryRequestList');

    Route::put('offeror/update/{offeror}', 'API\OfferorController@update');

    Route::get('offerors/{offeror}/get-experience', 'API\ExperienceController@index');

    Route::get('offerors/availability/{offeror}', 'API\OfferorController@getAvailability');

    Route::delete('crud/delete', 'API\CrudController@destroy');
    Route::get('crud/show', 'API\CrudController@show');
    Route::put('crud/update', 'API\CrudController@update');
    Route::post('crud/create', 'API\CrudController@store');

    //Validation

    Route::get('validation/get-list', 'API\ValidationController@getValidationList');
    Route::get('validation/get-customer-status', 'API\ValidationController@checkStatusCustomer');
    Route::get('validation/get-offeror-status', 'API\ValidationController@checkStatusOfferor');
    Route::get('validation/{validation}/show', 'API\ValidationController@show');
    Route::post('validation/upload-pictures', 'API\ValidationController@uploadPictures');
    Route::post('validation/upload-pictures-offeror', 'API\ValidationController@uploadPicturesOfferor');

    //Avatar

    Route::prefix('avatar')->group(function () {
        Route::put('', 'AvatarController@update')->name('user.avatar.update');
    });


    
    
    
});
Route::post('confirmationWompi', 'API\WompiController@confirmationWompi');


