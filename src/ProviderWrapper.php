<?php
namespace GMO\DependencyInjection;

use Silex;

/**
 * Wraps GMO service provider in a Silex interface
 */
class ProviderWrapper implements Silex\ServiceProviderInterface {

	/** @var ServiceProviderInterface */
	protected $provider;

	public function __construct(ServiceProviderInterface $provider) {
		$this->provider = $provider;
	}

	/**
	 * {@inheritdoc}
	 */
	public function register(Silex\Application $app) {
		$this->provider->register($app);
	}

	/**
	 * {@inheritdoc}
	 */
	public function boot(Silex\Application $app) {
		$this->provider->boot($app);
	}
}
