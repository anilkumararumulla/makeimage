<?php namespace Anilkumar\Makeimage;

use Illuminate\Support\ServiceProvider;

class MakeimageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('anilkumar/makeimage');
		include __DIR__.'/../../routes.php';
		$this->app->register('Intervention\Image\ImageServiceProvider');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
    	$loader->alias('Image', 'Intervention\Image\Facades\Image');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
