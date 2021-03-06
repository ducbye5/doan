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
Route::group(array('middleware'=>'customer'),function(){
	Route::get('/',function(){
		return redirect()->route('site.index');
	});

	Route::post('logincustomer',[
		'uses' => 'Site\CustomerController@login',
		'as' => 'customer.login'
	]);

	Route::post('regist',[
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
	Route::post('/postnewssell',[
			'uses'=>'Site\PostNewsController@registSell',
			'as'=>'PostNews.sell'
		]);
	Route::post('/postnewspurchase',[
			'uses'=>'Site\PostNewsController@registPurchare',
			'as'=>'PostNews.purchase'
		]);
	//buy coint
	Route::get('/coint',[
			'uses'=>'Site\CointController@index',
			'as'=>'coint.index'
		]);
	//properties
	Route::group(array('prefix'=>'properties'),function(){
		//sell
		Route::group(array('prefix'=>'sell'),function(){
			Route::get('dwelling_house', [
				'uses'=>'Site\PropertiesForSellController@getList_Dwelling_house',
				'as'=>'propertiesforsell.dwelling_house'
			]);
			Route::get('apartment', [
				'uses'=>'Site\PropertiesForSellController@getList_Apartment',
				'as'=>'propertiesforsell.apartment'
			]);
			Route::get('land',[
				'uses'=>'Site\PropertiesForSellController@getList_Land',
				'as'=>'propertiesforsell.land'
			]);
			Route::get('other_real_estate',[
				'uses'=>'Site\PropertiesForSellController@getList_Other_real_estate',
				'as'=>'propertiesforsell.other_real_estate'
			]);
		});
		//rental
		Route::group(array('prefix'=>'rental'),function(){
			Route::get('dwelling_house',[
				'uses'=>'Site\PropertiesForRentalController@getList_Dwelling_house',
				'as'=>'propertiesforrental.dwelling_house'
			]);
			Route::get('apartment',[
				'uses'=>'Site\PropertiesForRentalController@getList_Apartment',
				'as'=>'propertiesforrental.apartment'
			]);
			Route::get('land',[
				'uses'=>'Site\PropertiesForRentalController@getList_Land',
				'as'=>'propertiesforrental.land'
			]);
			Route::get('other_real_estate',[
				'uses'=>'Site\PropertiesForRentalController@getList_Other_real_estate',
				'as'=>'propertiesforrental.other_real_estate'
			]);
		});
		//purchase
		Route::group(array('prefix'=>'purchase'),function(){
			Route::get('dwelling_house',[
				'uses'=>'Site\PropertiesForPurchaseController@getList_Dwelling_house',
				'as'=>'propertiesforpurchase.dwelling_house'
			]);
			Route::get('apartment',[
				'uses'=>'Site\PropertiesForPurchaseController@getList_Apartment',
				'as'=>'propertiesforpurchase.apartment'
			]);
			Route::get('land',[
				'uses'=>'Site\PropertiesForPurchaseController@getList_Land',
				'as'=>'propertiesforpurchase.land'
			]);
			Route::get('other_real_estate',[
				'uses'=>'Site\PropertiesForPurchaseController@getList_Other_real_estate',
				'as'=>'propertiesforpurchase.other_real_estate'
			]);
		});
		//rent
		Route::group(array('prefix'=>'rent'),function(){
			Route::get('dwelling_house',[
				'uses'=>'Site\PropertiesForRentController@getList_Dwelling_house',
				'as'=>'propertiesforrent.dwelling_house'
			]);
			Route::get('apartment',[
				'uses'=>'Site\PropertiesForRentController@getList_Apartment',
				'as'=>'propertiesforrent.apartment'
			]);
			Route::get('land',[
				'uses'=>'Site\PropertiesForRentController@getList_Land',
				'as'=>'propertiesforrent.land'
			]);
			Route::get('other_real_estate',[
				'uses'=>'Site\PropertiesForRentController@getList_Other_real_estate',
				'as'=>'propertiesforrent.other_real_estate'
			]);
		});
	});
});

//agent
Route::get('/agent',[
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