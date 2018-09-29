<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $users = DB::table('users')->get();
        $this->assertEquals(1, count($users));
        $this->assertEquals('serima', $users[0]->name);
        $this->assertEquals('1990-01-01', $users[0]->birthday);
    }
}
