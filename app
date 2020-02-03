<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$app = new \Symfony\Component\Console\Application('git homework');
$app->add(new \App\StringRepeater());
$app->run();
