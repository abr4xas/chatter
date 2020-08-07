<?php

namespace DevDojo\Chatter\Tests;

use DevDojo\Chatter\Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {

		$response = $this->get('/forums');

		$response->assertSee('New Discussion', 'YOLO');
    }
}
