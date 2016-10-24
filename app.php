<?php

require "bootstrap/autoload.php";

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new \App\Commands\RemoveDogsFromGroupCommand());
$application->run();