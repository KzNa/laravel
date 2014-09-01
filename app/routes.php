<?php

Route::get('/', array('as'=>'home', 'uses'=>'HomeController@home'));


/*
| Не авторизованные
*/
Route::group(array('before' => 'guest'), function(){

		
	

	Route::group(array('before' => 'csrf'), function(){

		Route::post('/account/create', array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

	});

	



	Route::get('/account/create', array(
			'as' => 'account-create',
			'uses' => 'AccountController@getCreate'
		));

	Route::get('/account/activate/{code}', array(
		'as' => 'account-activate',
		'uses' => 'AccountController@getActivate'	

		)
	);



});