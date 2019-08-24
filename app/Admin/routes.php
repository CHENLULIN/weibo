<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
	$router->resource('movies', MoviesController::class);
	
	Route::group(['prefix'        =>  '/nmo-ms'], function(Router $router) {
		Route::group(['prefix'        =>  '/article'], function(Router $router) {
			
			//文章分类
			$router->resource('article-categories', ArticleCategoriesController::class);
			
			//文章
			$router->resource('articles', ArticlesController::class);
		});
	});
	

});
