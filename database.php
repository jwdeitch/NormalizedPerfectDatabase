<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => 'denormalized/database.sqlite',
    'prefix' => ''
]);

$capsule->bootEloquent();