<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    return View::make('Login');
});

//ユーザー情報登録
Route::post('registUser', 'RegistController@registUser');

//抽選結果登録
Route::post('registResult', 'RegistController@registResult');

//抽選結果一覧表示
Route::post('resultList', 'ResultListController@resultList');

//ログイン認証
Route::post('login', 'LoginController@login');

// csrf 対策用フィルタ
Route::when ( '*', 'csrf', 'post' );



