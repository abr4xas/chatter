<?php

namespace DevDojo\Chatter\Tests;


use App\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
	/**
	 * The base URL to use while testing the application.
	 *
	 * @var string
	 */
	// protected $baseUrl = 'http://localhost';

	/**
	 * Creates the application.
	 *
	 * @return \Illuminate\Foundation\Application
	 */
	public function createApplication()
	{
		$app = require __DIR__ . '/../../../../bootstrap/app.php';

		$app->make(\App\Console\Kernel::class)->bootstrap();

		return $app;
	}
}