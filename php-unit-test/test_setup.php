<?php
require_once('../setup/Setup.php');
//require_once('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class SetupTest extends TestCase
{

    public function testStart(): void
    {
        $this->assertInstanceOf(
            Setup::class
        );
    }

    public function testLoadConfig(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Setup::loadConfig();
     }
	
}
