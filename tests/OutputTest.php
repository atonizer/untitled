<?php

class Command
{
    const VERSION = '0.0.1';
    public function  printVersion()
    {
        print 'Version is ' . self::VERSION;
    }
}

class OutputTest extends PHPUnit_Framework_TestCase
{
    public function testOutputsHello()
    {
        ob_dtart();
        $command = new Command();
        $command->printVersion();
    }

}