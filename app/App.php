<?php
namespace App;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Command\GreetCommand;


class App extends Application {

    public function __construct($app_name, $app_version)
    {
        parent::__construct($app_name, $app_version);
        $this->add(new GreetCommand());
    }

}