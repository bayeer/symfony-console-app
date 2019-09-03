<?php
namespace Tests\App\Command;

use Symfony\Component\Console\Tester\CommandTester;
use App\App;
use App\Command\GreetCommand;
use PHPUnit\Framework\TestCase;



class CreateDirectoryCommandTest extends TestCase
{
    public function testGreet()
    {
        $_SERVER['argv']['greet'] = 'greet';
        $_SERVER['argv']['name'] = 'Jim';

        $name = 'Ivan Pupkin';
        $conf = include(realpath(__DIR__ . '/..') . '/includes/conf.php');

        $app = new App($conf['app_name'], $conf['app_version']);
        $app->run();


        $command = $app->find('greet');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command' => $command->getName(),
            'name' => $name
        ));
        $display = $commandTester->getOutput();

        $this->assertTrue(strstr($display, 'Jiasdm') !== false, 'Could not create folder');

        $this->assertFalse(false, 'Test assert');
    }
}