<?php
require __DIR__ . '/vendor/autoload.php';

// Bootstrap the framework so Schema facade works
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;

echo "hasTable jobs: ";
var_export(Schema::hasTable('jobs'));
echo PHP_EOL;

if (Schema::hasTable('jobs')) {
    echo "columns: \n";
    print_r(Schema::getColumnListing('jobs'));
}
