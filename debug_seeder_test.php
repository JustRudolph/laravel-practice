<?php
require __DIR__ . '/vendor/autoload.php';

echo "class_exists: ";
var_export(class_exists(\Database\Seeders\DatabaseSeeder::class));
echo PHP_EOL;

try {
    $obj = new \Database\Seeders\DatabaseSeeder();
    echo "instantiated: ";
    var_export($obj instanceof \Illuminate\Database\Seeder);
    echo PHP_EOL;
} catch (Throwable $e) {
    echo "exception: " . $e->getMessage() . PHP_EOL;
}
