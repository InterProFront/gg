<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@getIndex');
Route::post('/works/new', 'FrontController@getNewWorks');


Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',         'AdminController@getIndex');
    Route::get('/all',            'AdminController@getStatic');
    Route::get('/seo',            'AdminController@getSeo');
    Route::get('/hand-made',         'AdminController@getHandMade');
    Route::get('/about',         'AdminController@getAbout');
    Route::get('/how-work',         'AdminController@getHowWork');
    Route::get('/cooperation',         'AdminController@getCooperation');
    Route::get('/clients',         'AdminController@getClientsCallback');

    Route::get('/clients/{id}',         'AdminController@getClient');

    Route::get('/clients-logo',         'AdminController@getClientsLogo');
    Route::get('/works',         'AdminController@getWorks');


    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

