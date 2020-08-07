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

Route::get('/', function () {
    return view('welcome');
});

Route::get('reg','UserController@reg');    //注册视图
Route::post('reg','UserController@regDo');  //注册逻辑
Route::get('login','UserController@login');   //登陆视图
Route::post('login','UserController@loginDo');  //登陆逻辑

Route::get('index','NewController@index')->middleware('login');    //新闻列表
Route::get('create','NewController@create')->middleware('login');    //添加新闻视图
Route::post('create','NewController@createDo');    //添加新闻逻辑