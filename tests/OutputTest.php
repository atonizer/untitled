<?php

class Command
{
    const VERSION = '0.0.1';
    public function  printVersion()
    {
        return 'Version is ' . self::VERSION;
    }
}

class OutputTest extends PHPUnit_Framework_TestCase
{
    public function testOutputsHello()
    {
        $this->expectOutputString('Version is 0.0.1');
        //ob_start();
        $command = new Command();
        print $command->printVersion();
        //$txt = ob_get_clean();
        //$this->assertEquals('Version is 0.0.1', $txt);
    }
//
//09-Fixtures.mov
}