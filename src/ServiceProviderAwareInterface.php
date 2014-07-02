<?php
namespace GMO\DependencyInjection;

interface ServiceProviderAwareInterface {

	/**
	 * Registers a service provider.
	 *
	 * @param \Silex\ServiceProviderInterface|ServiceProviderInterface $provider
	 * @param array $values
	 */
	function registerService($provider, array $values = array());
}
