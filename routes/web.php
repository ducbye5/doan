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

Auth::routes();

									//Site
Route::group(array('middleware'=>['site']),function(){
	Route::group(array('middleware'=>['customer']),function(){
		Route::get('/',function(){
			return redirect()->route('site.index');
		});

		Route::post('logincustomer',[
			'uses' => 'Site\CustomerController@login',
			'as' => 'customer.login'
		]);

		Route::post('registcustomer',[
			'uses' => 'Site\CustomerController@regist',
			'as' => 'customer.regist'
		]);

		Route::get('logoutcustomer',[
			'uses' => 'Site\CustomerController@logout',
			'as' => 'customer.logout'
		]);

		//index
		Route::get('/index',[
				'uses'=>'SiteController@index',
				'as'=>'site.index'
			]);
		Route::get('/index-map',[
				'uses'=>'SiteController@indexMap',
				'as'=>'site.index-map'
			]);
		Route::post('/index', [
				'uses'=>'SiteController@searchProperties',
				'as'=>'index.searchProperties'
			]);

		//customers

		Route::group(array('prefix'=>'customer'),function(){
			//edit profile
			Route::get('editprofile',[
				'uses' => 'Site\CustomerController@edit',
				'as' => 'customer.editprofile'
			]);
		});

		//post news
		Route::get('/postnews',[
				'uses'=>'Site\PostNewsController@index',
				'as'=>'postnews.index'
			]);
		Route::post('/postnews',[
				'uses'=>'Site\PostNewsController@regist',
				'as'=>'postNews.regist'
			]);
		//buy coint
		Route::get('/coint',[
				'uses'=>'Site\CointController@index',
				'as'=>'coint.index'
			]);
		//properties
		Route::group(array('prefix'=>'properties'),function(){
			Route::get('/{type}', [
				'uses'=>'Site\PropertiesForSellController@index',
				'as'=>'properties.index'
			]);
			Route::post('/{type}', [
				'uses'=>'Site\PropertiesForSellController@searchProperties',
				'as'=>'properties.searchProperties'
			]);
			Route::get('/detail/{id}', [
				'uses'=>'Site\PropertiesForSellController@detail',
				'as'=>'properties.detail'
			]);
			//sell
		});
	});

	//agent
	Route::get('/agent/{id}',[
			'uses'=>'Site\AgentController@index',
			'as'=>'agent.index'
		]);

	//blog
	Route::get('/blog',[
			'uses'=>'Site\BlogController@index',
			'as'=>'blog.index'
		]);

	//contact us
	Route::get('/contact_us',[
			'uses'=>'Site\ContactUsController@index',
			'as'=>'contact_us.index'
		]);

	//page
	Route::group(array('prefix'=>'page'),function(){
		Route::get('/about_us',[
			'uses'=>'Site\AboutUsController@index',
			'as'=>'about_us.index'
		]);
		Route::get('/faq',[
			'uses'=>'Site\FaqController@index',
			'as'=>'faq.index'
		]);
	});
});




									//Error

Route::get('403',[
		'uses'=>'ErrorController@error403',
		'as'=>'error.403'
	]);
Route::get('404',[
		'uses'=>'ErrorController@error404',
		'as'=>'error.404'
	]);
Route::get('503',[
		'uses'=>'ErrorController@error503',
		'as'=>'error.503'
	]);

									//Admin

Route::group(array('prefix'=>'admin','middleware'=>['auth','admin']),function(){
	Route::get('home', [
		'uses'=>'HomeController@index',
		'as'=>'admin.home'
	]);

	Route::get('logout',[
		'uses'=>'HomeController@logout',
		'as'=>'admin.logout'
	]);



	//adminstrator

	Route::group(array('prefix'=>'user'),function(){
		Route::get('index',[
		'uses'=>'Admin\User\UserController@index',
		'as'=>'admin.user.list'
		]);

		Route::get('enableUser/{id}',[
			'uses'=>'Admin\User\UserController@enableUser',
			'as'=>'admin.user.enable'
		])->middleware(['isAdmin']);

		Route::get('disableUser/{id}',[
			'uses'=>'Admin\User\UserController@disableUser',
			'as'=>'admin.user.disable'
		])->middleware(['isAdmin']);

		Route::get('create',[
			'uses'=>'Admin\User\UserController@showViewCreate',
			'as'=>'admin.user.create'
		])->middleware(['isAdmin']);

		Route::post('regist',[
			'uses'=>'Admin\User\UserController@regist',
			'as'=>'admin.user.regist'
		])->middleware(['isAdmin']);

		Route::get('role',[
			'uses'=>'Admin\User\UserController@showViewRole',
			'as'=>'admin.user.role'
		])->middleware(['isAdmin']);

		Route::post('changerole',[
			'uses'=>'Admin\User\UserController@changeRole',
			'as'=>'admin.user.changerole'
		])->middleware(['isAdmin','changerole']);

		Route::post('edit/{id}',[
			'uses'=>'Admin\User\UserController@edit',
			'as'=>'admin.user.edit'
		])->middleware(['isMe']);

		Route::get('delete/{id}',[
			'uses'=>'Admin\User\UserController@delete',
			'as'=>'admin.user.delete'
		])->middleware(['isAdmin','delete']);

		Route::get('profile/{id}',[
			'uses'=>'Admin\User\UserController@getProfile',
			'as'=>'admin.user.profile'
		]);

		Route::get('notification/{id}',[
			'uses'=>'Admin\User\UserController@getNotification',
			'as'=>'admin.user.notification'
		]);

		Route::get('mail/{id}',[
			'uses'=>'Admin\User\UserController@getMail',
			'as'=>'admin.user.mail'
		]);
		
	});
});