<?php

namespace Mitchdav\SNS;

use Laravel\Lumen\Routing\Router;

/**
 * Class LumenProvider
 * @package Mitchdav\SNS
 */
class LumenProvider extends Provider
{
	public function boot()
	{
		$this->app->singleton(\Illuminate\Broadcasting\BroadcastManager::class, function ($app, $config) {
			return new \Illuminate\Broadcasting\BroadcastManager($app);
		});

		$this->bootWithRouter($this->app[Router::class]);
	}
}