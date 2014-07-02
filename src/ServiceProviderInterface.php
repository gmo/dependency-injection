<?php
namespace GMO\DependencyInjection;

use Pimple;

interface ServiceProviderInterface {

	/**
	 * Registers services on the given application.
	 *
	 * This method should only be used to configure services and parameters.
	 * It should not get services.
	 *
	 * @param Pimple $container An Pimple instance
	 */
	public function register(Pimple $container);

	/**
	 * Bootstraps the application.
	 *
	 * This method is called after all services are registered
	 * and should be used for "dynamic" configuration (whenever
	 * a service must be requested).
	 * @param Pimple $container
	 */
	public function boot(Pimple $container);
}
