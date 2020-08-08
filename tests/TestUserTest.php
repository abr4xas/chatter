<?php

namespace DevDojo\Chatter\Tests;

use Illuminate\Support\Facades\DB;

class TestUserTest extends \DevDojo\Chatter\Tests\TestCase
{

    /** @test */
    public function test_user_count_equals_one()
    {
        if (! DB::table('users')->find(1)) {
            DB::table('users')->insert([
                'id' => 1,
                'name' => 'Tony Lea',
                'email' => 'tony@hello.com',
                'password' => '$2y$10$9ED4Exe2raEeaeOzk.EW6uMBKn3Ib5Q.7kABWaf4QHagOgYHU8ca.',
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
                'created_at' => '2016-07-29 15:13:02',
                'updated_at' => '2016-08-18 14:33:50',
            ]);
        }

        $this->assertEquals(1, DB::table('users')->count());
    }
}
