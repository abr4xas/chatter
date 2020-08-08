<?php


namespace DevDojo\Chatter\Tests;

use DevDojo\Chatter\ChatterServiceProvider;
use DevDojo\Chatter\Tests\database\seeds\ChatterTableSeeder;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ChatterServiceProvider::class,
        ];
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // $this->artisan('db:seed --class=ChatterTableSeeder');
        (new ChatterTableSeeder())->run();
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}
