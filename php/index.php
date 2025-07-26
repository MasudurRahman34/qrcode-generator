<?php

require 'vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;

header('Content-Type: image/png');

$result = Builder::create()
    ->data('Hello from Docker QR using Alpine!')
    ->build();

echo $result->getString();
