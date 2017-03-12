<?php

/**
 * Created by PhpStorm.
 * User: Stargazer
 * Date: 11.03.2017
 * Time: 11:56
 */
class AssertionsTest extends PHPUnit_Framework_TestCase
{
    public function testBasicAssertion()
    {
        //$this->assertEquals(1 + 5, 6);
        //$this->assertInstanceOf('DateTime', new DateTime());
        //$this->assertNotInstanceOf('DateTime', new DateTime());
 /*       $arr = array();
        $this->assertCount(0, $arr);
        $arr[] = 2;
        $this->assertCount(1, $arr);
        $this->assertContains(2, $arr);
        $arr[] = 12;
        $arr[] = 65;
        $this->assertCount(3, $arr);*/

        // Start 05-Exceptions.mov

    }

    /**
     * @expectedException LogicException
     * @expectedExceptionMessage Foos\
     * @expectedExceptionCode 1234
     *
     */
    public function testException()
    {
        throw new LogicException('Foo', 1234);

/*        try
        {
            throw new LogicException('Foo', 1234);
            $this->fail('We should not be here');

        }
        catch(LogicException $e)
        {
            $this->assertEquals($e->getMessage(), 'Foo');
            $this->assertEquals($e->getCode(), 1234);
        }*/

     //   06-Errors-Warnings-and-Notices

    }
}