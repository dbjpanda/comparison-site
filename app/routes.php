<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/admin/settings', array('as' => 'siteConfig', 'uses' => 'Site\Admin\Controllers\SettingsController@index'));
Route::get('/admin/subjects', array('as' => 'subjects', 'uses' => 'Site\Admin\Controllers\SubjectController@index'));
Route::get('/admin/subject/{id}', array('as' => 'editSubject', 'uses' => 'Site\Admin\Controllers\SubjectController@edit'));
Route::get('/admin/types', array('as' => 'types', 'uses' => 'Site\Admin\Controllers\TypeController@index'));
Route::get('/admin/attributes', array('as' => 'attributes', 'uses' => 'Site\Admin\Controllers\AttributeController@index'));