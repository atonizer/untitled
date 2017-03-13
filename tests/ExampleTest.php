<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */

 /*   public function testError()
    {
        new SomeClassThatDoesNotExistsInThatContext;
    }*/

    public function testWarning()
    {
        include 'some.file.which.dont.exist';
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Notice
     */

    public function testNotice()
    {
        $_GET[THAT_CONSTANT_IS_NOT_DEFINED];
    }
}

// 07-Testing-Output.mov