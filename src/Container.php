<?php
namespace GMO\DependencyInjection;

class Container extends \Pimple implements ServiceProviderAwareInterface {

	protected $providers = array();

	/**
	 * Registers a service provider.
	 *
	 * @param ServiceProviderInterface $provider
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
