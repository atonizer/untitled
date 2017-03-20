<?php

class SomeClassTest extends PHPUnit_Framework_TestCase
{
    protected $data;

    public function setUp()
    {
        $this->data = array(1, 2, 3);
    }

    public function testPushingToArray()
    {
        //$data = array(1,2,3);
        array_push($data, 5);
        $this->assertCount(4, $data);
        $this->assertContains(1, $data);
        $this->assertContains(2, $data);
        $this->assertContains(3, $data);
        $this->assertContains(5, $data);
    }

    public function testPopFromArray()
    {
        //$data = array(1,2,3);
        array_pop($data);
        $this->assertCount(2, $data);
        $this->assertContains(1, $data);
        $this->assertContains(2, $data);
        $this->assertContains(3, $data);
    }

    public function testShiftFromArray()
    {
        //$data = array(1,2,3);
        array_shift($data);
        $this->assertCount(2, $data);
        $this->assertContains(1, $data);
        $this->assertContains(3, $data);
        $this->assertContains(1, $data);
    }
}