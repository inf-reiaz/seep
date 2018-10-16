<?php

/*
|
|-----------------------------------------------------------------------------------
|  Seep Website ALl Public Pages
|-----------------------------------------------------------------------------------    
|
*/

Route::get('/','PublicPagesController@getIndex');

Route::get('/about-us','PublicPagesController@getAboutUs');
Route::get('/establishment','PublicPagesController@getEstablishment');
Route::get('/vision','PublicPagesController@getVision');
Route::get('/mission','PublicPagesController@getMission');
Route::get('/objectives','PublicPagesController@getObjectives');
Route::get('/statement','PublicPagesController@getStatement');
Route::get('/legal-status','PublicPagesController@getLegalStatus');
Route::get('/general-body','PublicPagesController@getGeneralBody');
Route::get('/executive-body','PublicPagesController@getExecutiveBody');
Route::get('/ongoing-projects','PublicPagesController@getOngoingProjects');
Route::get('/implemented-projects','PublicPagesController@getImplementedProjects');
Route::get('/Staff','PublicPagesController@getStaff');

Route::get('/PUBLICATIONS','PublicPagesController@getPUBLICATIONS');
Route::get('/annual-report','PublicPagesController@getAnnualReport');
Route::get('/SEEP-Grievance-Procedures','PublicPagesController@getGovProcedures');

Route::get('/contacts','PublicPagesController@getContacts');
Route::get('/corporate-office','PublicPagesController@getCorporateOffice');
Route::get('/project-office','PublicPagesController@getProjectOffice');


Route::get('/GALLERY','PublicPagesController@getGALLERY');

Route::get('/Organization','PublicPagesController@getOrganization');
Route::get('/project-gallery','PublicPagesController@getProjectGallery');


Route::get('/work-with-us','PublicPagesController@getWorkWithUs');

Route::get('/Volunteer','PublicPagesController@getVolunteer');

Route::get('/notice-bord','PublicPagesController@getNoticeBord');


Route::get('/accenture','PublicPagesController@getAccenture');
Route::get('/tvet','PublicPagesController@getTvet');



/*
|
|-----------------------------------------------------------------------------------
|User Login, Logout
|-----------------------------------------------------------------------------------    
|
|   3 sets of Routes:
|           - GET   - login landing page
|           - POST  - login form post route
|           - GET   - logout through get
|
|           - GET   - forgot password landing page
|           - POST  - forgot password form post route
|
|           - GET   - Signup landing page
|           - POST  - Signup form post route
|
*/


Route::group(['prefix'=>'auth'], function(){
    
    Route::get('signup', ['as'=>'signup', 'uses'=>  'AccessController@signup']);
    Route::post('signup',                           'AccessController@postSignup');
    
    Route::get('social/{name}',                 'AccessController@social');
    Route::get('login', ['as'=>'login','uses'=> 'AccessController@login']);
    Route::post('login',                        'AccessController@postLogin');
    
    Route::get('/logout', [
        'as'=>'logout',
        'uses'=> 'AccessController@logout'
    ]);
    
    Route::get('forgot-password',               'AccessController@forgotPassword');
    Route::post('forgot-password',              'AccessController@postForgotPassword');
    
});


// Route::group(['middleware' => ['auth','permission'], 'prefix'=>'admin'], function(){
Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function(){
    
    
    Route::get('/dashboard', [
        'as'=>'dashboard',
        'uses'=> 'DashboardController@getDashboard'
    ]);
    
    
    //  All Users route
    Route::get('/all-user', [
        'as'=>'alluser',
        'uses'=> 'UsersController@getAllUser'
    ]);
    
    Route::get('/block-user', [
        'as'=>'blockuser',
        'uses'=> 'UsersController@getBlockUser'
    ]);
    
    Route::get('/block-users/{id}', [
        'as'=>'blockusers',
        'uses'=> 'UsersController@getBlockUsers'
    ]);
    
    Route::get('/subscriber', [
        'as'=>'subscriber',
        'uses'=> 'UsersController@getSubscriber'
    ]);
    
    Route::get('/user-create', [
        'as'=>'usercreate',
        'uses'=> 'UsersController@getUserCreate'
    ]);
    
    Route::post('/user-create', [
        'as'=>'userstore',
        'uses'=> 'UsersController@storeuser'
    ]);
    
    Route::get('/role-to-permissions/{id}', [
        'as'=>'roletopermissions',
        'uses'=> 'UsersController@roleToPremissions'
    ]);
    
    Route::PUT('/role-to-permissions', [
        'as'=>'setpermissions',
        'uses'=> 'UsersController@postSetPremissions'
    ]);
    
    
    //  my profile route
    
    Route::get('/my-profile/edit/{id}', [
        'as'=>'myprofileedit',
        'uses'=> 'MyProfile@getEditProfile'
    ]);
    
    Route::get('/my-profile/{id}', [
        'as'=>'myprofile',
        'uses'=> 'MyProfile@getProfile'
    ]);
    
    Route::PUT('/my-profile/{id}', [
        'as'=>'myprofile',
        'uses'=> 'MyProfile@postProfileUpdate'
    ]);
    
    
    Route::get('/my-profile-change-password', [
        'as'=>'changepassword',
        'uses'=> 'MyProfile@changePassword'
    ]);
    
    Route::post('/my-profile-change-password', [
        'as'=>'changepassword',
        'uses'=> 'MyProfile@updatePassword'
    ]);
    
    //  my profile route
    
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RolesController', ['except' => 'destroy']);
    
    Route::resource('/settings', 'SettingsController',['except' => 'destroy']);
    Route::resource('/meta-tag', 'MetaSettingsController',['except' => 'destroy']);

});

