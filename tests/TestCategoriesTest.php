<?php

use Illuminate\Support\Facades\DB;

class TestCategoriesTest extends \DevDojo\Chatter\Tests\TestCase
{

    /** @test */
    public function test_categories_count_equals_eight()
    {
        $this->assertEquals(8, DB::table('chatter_categories')->count());
    }
}
