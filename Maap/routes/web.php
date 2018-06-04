<?php

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

Route::get('admin',[
    'as'=>'admin',
    'uses'=>'PageController@getadmin'
]);
Route::get('sign-in',[
    'as'=>'dangnhap',
    'uses'=>'PageController@getdangnhap'
]);
Route::post('sign-in',[
    'as'=>'dangnhap',
    'uses'=>'PageController@postdangnhap'
]);
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'PageController@getlogout'
]);
Route::resource('user','userController');
Route::get('deleteUser','userController@deleteItem');

// Route::resource('menu','menuController');
// Route::get('deletemenu','menuController@deleteItem');

Route::resource('map','mapController');

// Route::resource('hinhanh','hinhanhController');
// Route::get('deletehinhanh','hinhanhController@deleteItem');

Route::get('hinh-anh/edit',[
    'as'=>'edithinhanh',
    'uses'=>'PageController@getedithinhanh'
]);
Route::post('hinh-anh/edit',[
    'as'=>'edithinhanh',
    'uses'=>'PageController@postedithinhanh'
]);

Route::resource('answer','cautraloiController');
Route::get('deletecautraloi','cautraloiController@deleteItem');

Route::get('hinhanh/create/ajax/hinhanh/{qty}','AjaxController@gethinhanh');
Route::get('cautraloi/ajax/type/{type}','AjaxController@gettype');

Route::get('menu-img/{id}',[
    'as'=>'imgmenu',
    'uses'=>'PageController@getmenu'
]);
Route::get('menu-img/{id}/create',[
    'as'=>'createimg',
    'uses'=>'PageController@getcreateimg'
]);
Route::post('menu-img/{id}/create',[
    'as'=>'createimg',
    'uses'=>'PageController@postcreateimg'
]);

Route::get('seen','cautraloiController@editseen');

Route::get('lienhe',[
    'as'=>'lienhe',
    'uses'=>'PageController@getlienhe'
]);
Route::post('lienhe',[
    'as'=>'lienhe',
    'uses'=>'PageController@postlienhe'
]);
Route::get('/',[
    'as'=>'trangchu',
    'uses'=>'PageController@gettrangchu'
]);
Route::get('mel',[
    'as'=>'mel',
    'uses'=>'PageController@getmel'
]);
Route::get('maap',[
    'as'=>'maap',
    'uses'=>'PageController@getmaap'
]);
Route::get('about',[
    'as'=>'about',
    'uses'=>'PageController@getabout'
]);
Route::get('branding',[
    'as'=>'branding',
    'uses'=>'PageController@getbranding'
]);
Route::get('drafting',[
    'as'=>'drafting',
    'uses'=>'PageController@getdrafting'
]);
Route::get('getquote',[
    'as'=>'getquote',
    'uses'=>'PageController@getgetquote'
]);
Route::get('getstart',[
    'as'=>'getstart',
    'uses'=>'PageController@getgetstart'
]);
Route::get('loanprop',[
    'as'=>'loanprop',
    'uses'=>'PageController@getloanprop'
]);
Route::get('planning',[
    'as'=>'planning',
    'uses'=>'PageController@getplanning'
]);
Route::get('result',[
    'as'=>'result',
    'uses'=>'PageController@getresult'
]);
Route::post('result',[
    'as'=>'result',
    'uses'=>'PageController@postresult'
]);