<?php




Route::group(['middleware' => ['role:Agencia',  'auth', 'verified']], function () {
    Route::get('/home', function (){
        return 1;
    });
});




Route::get('sms', 'EmailController@sms');
Route::post('/send-panic', 'EmailController@sendSms')->name('panic.send');

Route::post('panic', 'EmailController@send');


Route::get('/getUsersAgency', 'OfferorController@getUsers')->name('offerors.getUsersAgency') ;
Route::get('/getUsersAgency2', 'OfferorController@getListDataTables')->name('offerors.afk') ;
// Route::get('offerors/get-list-data-tables', 'OfferorController@getListDataTables')->name('offerors.getUsersAgency');




Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/offerors/sw.js', function (){
    return redirect('home');
});
Route::get('/customers/sw.js', function (){
    return redirect('home');
});

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Example Routes
Route::get('/', 'Auth\LoginController@showLoginForm')->name('landing');
// Route::get('/', 'Auth\LoginController@test');
// Route::post('/validations/index/userdelete', 'Auth\LoginController@asasasa')->name('users.delete');
Route::post('/validations/index/userdelete', 'TestController@deleteUser')->name('users.delete');
Route::get('/frecuency','Auth\LoginController@frecuency');
Route::get('/terms_and_conditions','Auth\LoginController@terms_and_conditions');
Route::get('/privacy', 'Auth\LoginController@privacy');
Route::get('/declaration', 'Auth\LoginController@declaration');
Route::get('/about', 'Auth\LoginController@aboutLanguaje');

// Register Routes  
Route::get('customers/register', 'CustomerController@register')->name('customers.register');
Route::post('customers/registers', 'CustomerController@registers')->name('customers.registers');

Route::get('offerors/register', 'OfferorController@register')->name('offerors.register');
Route::post('offerors/register', 'OfferorController@store')->name('offerors.sign_up');

Route::get('agency/register', 'OfferorController@registerAgency')->name('agency.register');
Route::post('agency/register', 'OfferorController@storeAgency')->name('agency.sign_up');
Route::resource('offerors', 'OfferorController');



Route::group(['middleware' => ['role:Administrator', 'web', 'auth', 'verified']], function () {
    Route::get('time_units/get-list-data-tables', 'TimeUnitController@getListDataTables')->name('time_units.get_list_data_tables');
    Route::resource('time_units', 'TimeUnitController');

    Route::get('cities/get-list-data-tables', 'CityController@getListDataTables')->name('cities.get_list_data_tables');
    Route::resource('cities', 'CityController');

    Route::get('countries/get-list-data-tables', 'CountryController@getListDataTables')->name('countries.get_list_data_tables');
    Route::resource('countries', 'CountryController');

    Route::get('departments/get-list-data-tables', 'DepartmentController@getListDataTables')->name('departments.get_list_data_tables');
    Route::resource('departments', 'DepartmentController');

    Route::get('accessories/get-list-data-tables', 'AccessoryController@getListDataTables')->name('accessories.get_list_data_tables');
    Route::resource('accessories', 'AccessoryController');

    Route::get('currencies/get-list-data-tables', 'CurrencyController@getListDataTables')->name('currencies.get_list_data_tables');
    Route::resource('currencies', 'CurrencyController');

    //Bank routes
    Route::get('banks/get-list-data-tables', 'BankController@getListDataTables')->name('banks.get_list_data_tables');
    Route::resource('banks', 'BankController');

    Route::get('aptitudes/get-list-data-tables', 'AptitudeController@getListDataTables')->name('aptitudes.get_list_data_tables');
    Route::resource('aptitudes', 'AptitudeController');

    Route::get('model-levels/get-list-data-tables', 'ModelLevelController@getListDataTables')->name('model_levels.get_list_data_tables');
    Route::resource('model-levels', 'ModelLevelController');

    Route::get('hobbies/get-list-data-tables', 'HobbyController@getListDataTables')->name('hobbies.get_list_data_tables');
    Route::resource('hobbies', 'HobbyController');

    Route::get('document-validates/get-list-data-tables', 'DocumentValidateController@getListDataTables')->name('document_validates.get_list_data_tables');
    Route::resource('document-validates', 'DocumentValidateController');

    Route::get('users/get-list-data-tables', 'UserController@getListDataTables')->name('users.get_list_data_tables');
    Route::resource('users', 'UserController');
    

    

    Route::get('reports/offerors', 'ReportsController@offerors')->name('reports.offerors');
    Route::get('reports/customers', 'ReportsController@customers')->name('reports.customers');
    Route::get('reports/transactions', 'ReportsController@transactions')->name('reports.transactions');
    Route::get('reports/services', 'ReportsController@services')->name('reports.services');

    Route::get('reports/monetary-requests', 'ReportsController@monetaryRequests')->name('reports.monetary_requests');

    Route::get('blocks/get-list-data-tables', 'BlockController@getListDataTables')->name('blocks.get_list_data_tables');
    Route::resource('blocks', 'BlockController');

    Route::resource('accessories', 'AccessoryController');

    Route::get('services/get-list-data-tables', 'ServiceController@getListDataTables')->name('services.get_list_data_tables');
    Route::resource('services', 'ServiceController');

});



Route::group(['middleware' => ['web', 'auth']], function () {
    Route::match(['get', 'post'], '/home', 'HomeController@index')->name('home');

    Route::patch('adm-notifications/{id}', 'AdmNotificationController@read')->name('adm_notifications.read');
    Route::resource('adm-notifications', 'AdmNotificationController');

    Route::patch('offeror-notifications/{id}', 'OfferorNotificationController@read')->name('offeror_notifications.read');
    Route::resource('offeror-notifications', 'OfferorNotificationController');

    Route::resource('offeror_ratings', 'OfferorRatingController');
    Route::resource('customer_ratings', 'CustomerRatingController');

    //Route for pictures uploads

    Route::get('/upload-pictures', 'UploadImagesController@create');
    Route::post('/images-save', 'UploadImagesController@sto re');
    Route::post('/images-delete', 'UploadImagesController@destroy');
    Route::get('/images-show/{album}', 'UploadImagesController@index');
    Route::get('gallery/create/{offeror}', 'AlbumController@create')->name('album.create');
    Route::get('gallery/{album}', 'AlbumController@show')->name('album.show');
    Route::post('gallery/store', 'AlbumController@store')->name('album.store');
    Route::get('gallery/{album}/edit', 'AlbumController@edit')->name('album.edit');
    Route::put('gallery/{album}', 'AlbumController@update')->name('album.update');
    Route::post('gallery/upload-pictures', 'AlbumController@uploadPictures')->name('album.uploadPictures');
    Route::delete('gallery/delete-picture/{media}', 'AlbumController@deletePicture')->name('album.deletePicture');

    Route::get('album/index/{id}', 'AlbumController@index')->name('album.index');
    Route::post('album/index/album/destroy', 'AlbumController@destroy')->name('album.destroy');

    Route::get('offeror_services/create/{id}', 'OfferorServiceController@create')->name('offeror_services.createService');
    Route::resource('offeror_services', 'OfferorServiceController');
    Route::get('offeror_services/index/{id}', 'OfferorServiceController@index')->name('offeror_services.index');
    Route::post('offeror_services/store_service', 'OfferorServiceController@storeService')->name('offeror_services.storeService');

    Route::get('offeror_accessories/create/{id}', 'OfferorAccessoryController@create')->name('offeror_accessories.createAccessory');
    Route::get('offeror_accessories/autocomplete', 'OfferorAccessoryController@autocomplete');
    Route::resource('offeror_accessories', 'OfferorAccessoryController');
    Route::get('offeror_accessories/index/{id}', 'OfferorAccessoryController@index')->name('offeror_accessories.index');

    Route::post('offeror_accessories/store_accessory', 'OfferorAccessoryController@storeAccessory')->name('offeror_accessories.storeAccessory');

    Route::get('examples/album/{id}', 'OfferorController@showAlbum')->name('example.album');

    Route::get('experiences/create/{offeror}', 'ExperienceController@create')->name('experiences.createExperience');
    Route::resource('experiences', 'ExperienceController');
    Route::get('experiences/index/{offeror}', 'ExperienceController@index')->name('experiences.index');

    Route::get('customers/get-list-data-tables', 'CustomerController@getListDataTables')->name('customers.get_list_data_tables');
    Route::resource('customers', 'CustomerController');

    Route::get('offerors/activate-account/{offeror}', 'OfferorController@activateAccount')->name('offerors.activate_account');
    Route::get('offerors/deactivate-account/{offeror}', 'OfferorController@deactivateAccount')->name('offerors.deactivate_account');
    Route::post('offerors/validation', 'OfferorController@validation')->name('offerors.validation');
    Route::get('offerors/home/{offeror}', 'OfferorController@home')->name('offerors.home');


    Route::get('offerors/get-list-data-tables', 'OfferorController@getListDataTables')->name('offerors.get_list_data_tables');
    // Route::resource('offerors', 'OfferorController');

    Route::get('offeror-availability/{schedule}/edit', 'OfferorAvailabilityController@edit')->name('offeror_availability.edit');
    Route::put('offeror-availability/{schedule}', 'OfferorAvailabilityController@update')->name('offeror_availability.update');
    Route::get('offeror-availability/index/{schedule}', 'OfferorAvailabilityController@index')->name('offeror_availability.index');

    Route::get('offeror-blocks-availability/get-list-data-tables', 'OfferorBlockAvailabilityController@getListDataTables')->name('offeror_blocks_availability.get_list_data_tables');
    Route::resource('offeror_blocks_availability', 'OfferorBlockAvailabilityController');


    // Route::get('search', 'SearchController@getListDataTables')->name('offerors.getListDataTables');


    Route::get('search', 'SearchController@search')->name('search.simple');
    Route::get('home-client', 'HomeController@client')->name('home.client');
    Route::get('home-model', 'HomeController@model')->name('home.model');

    //Service Request routes

    Route::get('service-request-offeror/show/{serviceRequestOfferor}', 'ServiceRequestOfferorController@show')->name('service_request_offeror.show');
    Route::get('service-request-offeror/index/{serviceRequestOfferor}', 'ServiceRequestOfferorController@index')->name('service_request_offeror.index');

    Route::get('service-request/pay/{serviceRequest}', 'ServiceRequestController@pay')->name('service_request.pay');
    Route::get('service-request/cancel/{serviceRequest}', 'ServiceRequestController@cancel')->name('service_request.cancel');
    Route::get('service-request/{serviceRequest}/show', 'ServiceRequestController@show')->name('service_request.show');
    Route::get('service-request/create', 'ServiceRequestController@create')->name('service_request.create');
    Route::post('service-request/create', 'ServiceRequestController@create')->name('service_request.create');
    Route::get('service-request/confirm-payment/{serviceRequest}', 'ServiceRequestController@confirmPayment')->name('service_request.confirm_payment');
    Route::get('service-request/confirm-realization/{serviceRequest}', 'ServiceRequestController@confirmRealization')->name('service_request.confirm_realization');
    Route::get('service-request/qualify/{serviceRequest}', 'ServiceRequestController@qualify')->name('service_request.qualify');
    Route::get('service-request/index/{serviceRequest}', 'ServiceRequestController@index')->name('service_request.index');
    Route::put('service-request/confirm', 'ServiceRequestController@confirm')->name('service_request.confirm');
    Route::resource('service-request-messages', 'ServiceRequestMessageController');

    //Stage routes

    Route::post('stage/service/{service}', 'StageController@addService')->name('stage.addService');
    Route::get('stage/accessory/{accessory}/{quantity}', 'StageController@addAccessory')->name('stage.addAccessory');
    Route::get('stages/{product}/remove', 'StageController@remove')->name('stage.remove');
    Route::get('stage/checkout', 'StageController@checkout')->name('stage.checkout');

    //Financial Information routes
    Route::get('financial-informations/my-financial', 'FinancialInformationController@my_financial')->name('financial_informations.my_financial');
    Route::get('financial-informations/create/{offeror}', 'FinancialInformationController@create')->name('financial_informations.create_financial');
    Route::get('financial-informations/index', 'FinancialInformationController@index')->name('financial_informations.index');
    Route::resource('financial-informations', 'FinancialInformationController');

    //Monetary Request routes
    Route::get('monetary-requests/create', 'MonetaryRequestController@create')->name('monetary_requests.create');
    Route::get('monetary-requests/create-request/{offeror}', 'MonetaryRequestController@create_request')->name('monetary_requests.create_request');
    Route::post('monetary_requests/store', 'MonetaryRequestController@store')->name('monetary_requests.store');
    Route::get('monetary-requests/get-list-data-tables-full', 'MonetaryRequestController@getListDataTablesFull')->name('monetary_requests.get_list_data_tables_full');
    Route::get('monetary-requests/get-list-data-tables', 'MonetaryRequestController@getListDataTables')->name('monetary_requests.get_list_data_tables');
    Route::get('monetary-requests/get-list-data-tables/{offeror}', 'MonetaryRequestController@getListDataTablesOfferor')->name('monetary_requests.get_list_data_tables_offeror');
    Route::get('monetary-requests', 'MonetaryRequestController@index')->name('monetary_requests.index');
    Route::get('monetary-requests-historic', 'MonetaryRequestController@historic')->name('monetary_requests.historic');
    Route::get('monetary-requests/{monetaryRequest}', 'MonetaryRequestController@show')->name('monetary_requests.show');
    Route::get('monetary-requests/{monetaryRequest}/edit', 'MonetaryRequestController@edit')->name('monetary_requests.edit');
    Route::put('monetary-requests/{monetaryRequest}', 'MonetaryRequestController@update')->name('monetary_requests.update');
    Route::get('places/get-list-data-tables', 'PlaceController@getListDataTables')->name('places.get_list_data_tables');
    Route::resource('places', 'PlaceController');

    Route::get('operations', 'OperationController@index')->name('operations.index');
    Route::get('operations/get-list-data-tables/{offeror}', 'OperationController@getListDataTablesOfferor')->name('operations.get_list_data_tables_offeror');

    Route::view('/offeror_availability', 'offeror_availability.edit');

    Route::get('validations/check', 'ValidationController@check')->name('validations.check');
    Route::get('validations/validated/{validation}', 'ValidationController@validated')->name('validations.validated');
    Route::put('validations/not-validated/{validation}', 'ValidationController@notValidated')->name('validations.not_validated');
    Route::get('validations/create/{document}', 'ValidationController@create')->name('validations.create');
    Route::get('validations/create-admin/{document}/{user}/{offerorOrCustomer}', 'ValidationController@createAdmin')->name('validations.create_admin');
    Route::get('validations/edit/{validation}', 'ValidationController@edit')->name('validations.edit');
    Route::get('validations/edit-admin/{validation}/{user}/{offerorOrCustomer}', 'ValidationController@editAdmin')->name('validations.edit_admin');
    Route::get('validations/index/{offeror}', 'ValidationController@index')->name('validations.index');
    Route::post('validations/store', 'ValidationController@store')->name('validations.store');
    Route::put('validations/update{validation}', 'ValidationController@update')->name('validations.update');
    Route::get('validations/show/{validation}', 'ValidationController@show')->name('validations.show');
    Route::get('validations/indexCustomer/{customer}', 'ValidationController@indexCustomer')->name('validations.index_customer');
    Route::get('validations/get-list-data-tables', 'ValidationController@getListDataTables')->name('validations.get_list_data_tables');
    

    //User related routes
    Route::get('change-password', 'UserController@showUpdatePasswordForm');
    Route::put('change-password', 'UserController@updatePassword')->name('change_password');


    Route::post('/save-videos', 'VideosController@store');
    Route::post('/delete-videos', 'VideosController@delete');




});






Auth::routes(['verify' => true]);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

Route::get('offerors/register', 'OfferorController@register')->name('offerors.register');

Route::prefix('avatar')->middleware('auth:web')->group(function () {
    Route::get('/edit', 'AvatarController@edit')->name('user.avatar.edit');
    Route::put('', 'AvatarController@update')->name('user.avatar.update');
});

Auth::routes();

Route::get('/set-locale/{locale}', 'UserController@setLocale')->name('setlocale');
Route::get('/set-currency/{currency}', 'UserController@setCurrency')->name('setcurrency');

//Social login

Route::get('login/handle/{origin}/{provider}', 'SocialController@handleSocialLogin')->name('handleSocialLogin');

Route::get('login/{provider}', 'SocialController@redirect')->name('socialLogin');

Route::get('login/{provider}/callback', 'SocialController@callback');
Route::get('login/twitter/callback', 'SocialController@twitterCallback');

//Payment responses
Route::get('payment-response', 'EpaycoPaymentController@index');
Route::get('payment-response-web', 'EpaycoPaymentController@indexWeb');
Route::post('payment-response-web', 'EpaycoPaymentController@indexWeb');
// Route::get('payment-confirmation', 'EpaycoPaymentController@processPayment');
Route::post('create_reference', 'EpaycoPaymentController@createReference');
Route::post('payment-confirmation', 'EpaycoPaymentController@processPayment');
Route::post('confirmation-wompi', 'EpaycoPaymentController@confirmationWompi');



Route::get('paywall/{serviceRequest}', 'EpaycoPaymentController@paywall');


Route::view('/security', 'about/security');
Route::view('/help', 'about/help');


