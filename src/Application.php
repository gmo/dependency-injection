<?php
namespace GMO\DependencyInjection;

use Silex\Application as ApplicationBase;

class Application extends ApplicationBase implements ServiceProviderAwareInterface {

	/**
	 * Registers a service provider.
	 *
	 * @param \Silex\ServiceProviderInterface|ServiceProviderInterface $provider
	 * @param array $values
	 * @return Application
	 */
	public function registerService($provider, array $values = array()) {
		$this->providers[] = $provider;

		$provider->register($this);

		foreach ($values as $key => $value) {
			$this[$key] = $value;
		}

		return $this;
	}
}
