#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use App\App;



$conf = include(__DIR__ . '/includes/conf.php');

$app = new App($conf['app_name'], $conf['app_version']);
$app->run();
