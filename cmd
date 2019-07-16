#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

use Symfony\Component\Console\Application;
use HocVT\Demo\Commands\CatCommand;

$application = new Application();

$application->add(new CatCommand());

$application->run();