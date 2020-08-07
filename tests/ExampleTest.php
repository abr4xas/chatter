<?php

class ExampleTest extends \Tests\TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

		$response = $this->get('/forums');

		$response->assertSee('New Discussion');
    }
}
