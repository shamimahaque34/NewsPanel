<?php

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

// Route::get('/', function () {
//     return view('');
// });

Route::get('/', [
    'uses' => 'App\Http\Controllers\Front\TvController@index',
    'as'   => '/'
]);


//Print News Paper Page Route
Route::get('/print-news-paper', [
    'uses' => 'App\Http\Controllers\Front\PrintNewsPaperController@index',
    'as'   => 'print-news-paper'
]);



Route::post('/print-news-paper-submit',[
    'uses' => '\App\Http\Controllers\Front\PrintNewsPaperController@printNewsPaperSubmit',
    'as' => 'print-news-paper-submit',
]);


Route::get('/get-version-name-by-institute-name', [
    'uses' => 'App\Http\Controllers\Front\PrintNewsPaperController@getVersionNameByInstituteName',
    'as'   => 'get-version-name-by-institute-name',
]);

Route::get('/get-page-name-by-version-name', [
    'uses' => 'App\Http\Controllers\Front\PrintNewsPaperController@getPageNameByVersionName',
    'as'   => 'get-page-name-by-version-name',
]);

Route::get('/get-price-by-page-name', [
    'uses' => 'App\Http\Controllers\Front\PrintNewsPaperController@getPriceByPageName',
    'as'   => 'get-price-by-page-name',
]);






//Online News Paper Page Route
Route::get('/online-news-paper', [
    'uses' => 'App\Http\Controllers\Front\OnlineNewsPaperController@index',
    'as'   => 'online-news-paper'
]);

Route::post('/online-news-paper-submit',[
    'uses' => '\App\Http\Controllers\Front\OnlineNewsPaperController@onlineNewsPaperSubmit',
    'as' => 'online-news-paper-submit',
]);


//Online News Paper Page Route
// Route::get('/tv', [
//     'uses' => 'App\Http\Controllers\Front\TvController@index',
//     'as'   => 'tv'
// ]);

Route::post('/tv-submit',[
    'uses' => '\App\Http\Controllers\Front\TvController@tvSubmit',
    'as' => 'tv-submit',
]);



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','superAdmin'])->group(function () {
    Route::get('/dashboard', function () {return view('backend.home.dashboard'); })->name('dashboard');

    // Print News Paper Routes 
    Route::get('/manage-print-news-paper',[
        'uses' => '\App\Http\Controllers\Admin\PrintNewsPaperController@managePrintNewsPaper',
        'as'  => 'manage-print-news-paper'
    ]);


    Route::get('/update-print-news-paper-status/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PrintNewsPaperController@updateStatus',
        'as'   => 'print-news-paper.print-news-paper-status',
        
    ]);

    Route::get('/download/{fileName}', [
        'uses' => 'App\Http\Controllers\Admin\PrintNewsPaperController@download',
        'as'   => 'download',
       
    ]);

    Route::get('/print-news-paper-delete/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PrintNewsPaperController@delete',
        'as'   => 'print-news-paper.delete',
       
    ]);

   



    
    // Online News Paper Routes 
    Route::get('/manage-online-news-paper',[
        'uses' => '\App\Http\Controllers\Admin\OnlineNewsPaperController@manageOnlineNewsPaper',
        'as'  => 'manage-online-news-paper'
    ]);

    Route::get('/online-news-paper-delete/{id}', [
        'uses' => 'App\Http\Controllers\Admin\OnlineNewsPaperController@delete',
        'as'   => 'online-news-paper.delete',
       
    ]);

    Route::get('/update-online-news-paper-status/{id}', [
        'uses' => 'App\Http\Controllers\Admin\OnlineNewsPaperController@updateStatus',
        'as'   => 'online-news-paper.online-news-paper-status',
        
    ]);

    Route::get('/download/{fileName}', [
        'uses' => 'App\Http\Controllers\Admin\OnlinetNewsPaperController@download',
        'as'   => 'download',
       
    ]);

    
    // Tv News Paper Routes 
    Route::get('/manage-tv',[
        'uses' => '\App\Http\Controllers\Admin\TvController@manageTv',
        'as'  => 'manage-tv'
    ]);

    Route::get('/tv-delete/{id}', [
        'uses' => 'App\Http\Controllers\Admin\TvController@delete',
        'as'   => 'tv.delete',
       
    ]);

    Route::get('/update-tv-status/{id}', [
        'uses' => 'App\Http\Controllers\Admin\TvController@updateStatus',
        'as'   => 'tv.tv-status',
        
    ]);

    Route::get('/download/{fileName}', [
        'uses' => 'App\Http\Controllers\Admin\TvController@download',
        'as'   => 'download',
       
    ]);

    //Institute Type Name Route
    Route::get('/institute-type-name-info', [
        'uses' => 'App\Http\Controllers\Admin\InstituteTypeController@index',
        'as'   => 'institute-type-name-info.index',
    ]);

    Route::get('/institute-type-name-info-add', [
        'uses' => 'App\Http\Controllers\Admin\InstituteTypeController@create',
        'as'   => 'institute-type-name-info.create',
    ]);

    Route::post('/institute-type-name-info-create', [
        'uses' => 'App\Http\Controllers\Admin\InstituteTypeController@store',
        'as'   => 'institute-type-name-info.store',
    ]);

    Route::get('/institute-type-name-info-edit/{id}', [
        'uses' => 'App\Http\Controllers\Admin\InstituteTypeController@edit',
        'as'   => 'institute-type-name-info.edit',
    ]);

    Route::post('/institute-type-name-info-update/{id}', [
        'uses' => 'App\Http\Controllers\Admin\InstituteTypeController@update',
        'as'   => 'institute-type-name-info.update',
    ]);

    Route::get('/institute-type-name-info-destroy/{id}', [
        'uses' => 'App\Http\Controllers\Admin\InstituteTypeController@destroy',
        'as'   => 'institute-type-name-info.destroy',
    ]);


     //Institute Name Route
     Route::get('/institute-name-info', [
        'uses' => 'App\Http\Controllers\Admin\InstituteNameController@index',
        'as'   => 'institute-name-info.index',
    ]);

    Route::get('/institute-name-info-add', [
        'uses' => 'App\Http\Controllers\Admin\InstituteNameController@create',
        'as'   => 'institute-name-info.create',
    ]);

    Route::post('/institute-name-info-create', [
        'uses' => 'App\Http\Controllers\Admin\InstituteNameController@store',
        'as'   => 'institute-name-info.store',
    ]);

    Route::get('/institute-name-info-edit/{id}', [
        'uses' => 'App\Http\Controllers\Admin\InstituteNameController@edit',
        'as'   => 'institute-name-info.edit',
    ]);

    Route::post('/institute-name-info-update/{id}', [
        'uses' => 'App\Http\Controllers\Admin\InstituteNameController@update',
        'as'   => 'institute-name-info.update',
    ]);

    Route::get('/institute-name-info-destroy/{id}', [
        'uses' => 'App\Http\Controllers\Admin\InstituteNameController@destroy',
        'as'   => 'institute-name-info.destroy',
    ]);


    //Version Name Route
    Route::get('/version-name-info', [
        'uses' => 'App\Http\Controllers\Admin\VersionNameController@index',
        'as'   => 'version-name-info.index',
    ]);

    Route::get('/version-name-info-add', [
        'uses' => 'App\Http\Controllers\Admin\VersionNameController@create',
        'as'   => 'version-name-info.create',
    ]);

    Route::post('/version-name-info-create', [
        'uses' => 'App\Http\Controllers\Admin\VersionNameController@store',
        'as'   => 'version-name-info.store',
    ]);

    Route::get('/version-name-info-edit/{id}', [
        'uses' => 'App\Http\Controllers\Admin\VersionNameController@edit',
        'as'   => 'version-name-info.edit',
    ]);

    Route::post('/version-name-info-update/{id}', [
        'uses' => 'App\Http\Controllers\Admin\VersionNameController@update',
        'as'   => 'version-name-info.update',
    ]);

    Route::get('/version-name-info-destroy/{id}', [
        'uses' => 'App\Http\Controllers\Admin\VersionNameController@destroy',
        'as'   => 'version-name-info.destroy',
    ]);

    Route::get('/get-institute-name-by-institute-type', [
        'uses' => 'App\Http\Controllers\Admin\VersionNameController@getInstituteNameByInstituteType',
        'as'   => 'get-institute-name-by-institute-type',
    ]);



     // Page Name Route
     Route::get('/page-name-info', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@index',
        'as'   => 'page-name-info.index',
    ]);

    Route::get('/page-name-info-add', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@create',
        'as'   => 'page-name-info.create',
    ]);

    Route::post('/page-name-info-create', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@store',
        'as'   => 'page-name-info.store',
    ]);

    Route::get('/page-name-info-edit/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@edit',
        'as'   => 'page-name-info.edit',
    ]);

    Route::post('/page-name-info-update/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@update',
        'as'   => 'page-name-info.update',
    ]);

    Route::get('/page-name-info-destroy/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@destroy',
        'as'   => 'page-name-info.destroy',
    ]);

    Route::get('/get-institute-name-by-institute-type', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@getInstituteNameByInstituteType',
        'as'   => 'get-version-name-by-institute-name',
    ]);

    Route::get('/get-version-name-by-institute-name', [
        'uses' => 'App\Http\Controllers\Admin\PageNameController@getVersionNameByInstituteName',
        'as'   => 'get-version-name-by-institute-name',
    ]);



    // Price Route
    Route::get('/price-info', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@index',
        'as'   => 'price-info.index',
    ]);

    Route::get('/price-info-add', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@create',
        'as'   => 'price-info.create',
    ]);

    Route::post('/price-info-create', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@store',
        'as'   => 'price-info.store',
    ]);

    Route::get('/price-info-edit/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@edit',
        'as'   => 'price-info.edit',
    ]);

    Route::post('/price-info-update/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@update',
        'as'   => 'price-info.update',
    ]);

    Route::get('/price-info-destroy/{id}', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@destroy',
        'as'   => 'price-info.destroy',
    ]);

    Route::get('/get-institute-name-by-institute-type', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@getInstituteNameByInstituteType',
        'as'   => 'get-version-name-by-institute-name',
    ]);

    Route::get('/get-version-name-by-institute-name', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@getVersionNameByInstituteName',
        'as'   => 'get-version-name-by-institute-name',
    ]);


    Route::get('/get-page-name-by-version-name', [
        'uses' => 'App\Http\Controllers\Admin\PriceController@getPageNameByVersionName',
        'as'   => 'get-page-name-by-version-name',
    ]);



  
   


     
    



});
