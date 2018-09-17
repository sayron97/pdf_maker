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

Route::get('/',['uses'=>'TemplateController@show','as'=>'show_template']);//pdf
Route::post('/template_pdf_make',['uses'=>'TemplateController@template_pdf_make','as'=>'template_pdf_make']);