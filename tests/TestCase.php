<?php


namespace DevDojo\Chatter\Tests;

use DevDojo\Chatter\ChatterServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
	public function setUp(): void
	{
		parent::setUp();
		// additional setup
	}

	protected function getPackageProviders($app)
	{
		return [
			ChatterServiceProvider::class,
		];
	}

	protected function getEnvironmentSetUp($app)
	{
		// perform environment setup
	}
}