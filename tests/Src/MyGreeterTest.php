<?php

use PHPUnit\Framework\TestCase;
use Src\MyGreeter;

class MyGreeterTest extends TestCase
{
    private MyGreeter $greeter;

    public function setUp(): void
    {
        $this->greeter = new MyGreeter();
    }

    public function test_init()
    {
        $this->assertInstanceOf(
            MyGreeter::class,
            $this->greeter
        );
    }

    public function test_greeting()
    {
        $this->assertTrue(
            strlen($this->greeter->greeting()) > 0
        );
        //增加边界值和随机值的测试
        $this->assertEquals($this->greeter->greet_by_hour(6),"Good morning");
        $this->assertEquals($this->greeter->greet_by_hour(10),"Good morning");
        $this->assertEquals($this->greeter->greet_by_hour(12),"Good afternoon");
        $this->assertEquals($this->greeter->greet_by_hour(15),"Good afternoon");
        $this->assertEquals($this->greeter->greet_by_hour(18),"Good evening");
        $this->assertEquals($this->greeter->greet_by_hour(5),"Good evening");
        $this->assertEquals($this->greeter->greet_by_hour(0),"Error");
        $this->assertEquals($this->greeter->greet_by_hour(-10000),"Error");
        $this->assertEquals($this->greeter->greet_by_hour(3000),"Error");
        $this->assertEquals($this->greeter->greet_by_hour('ABCD'),"Error");
    }
}
