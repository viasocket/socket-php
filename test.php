<?php
require __DIR__ . '/vendor/autoload.php';

use SoktApi\SoktApiConnect;

$socket = new SoktApiConnect('MSG91', 'TZgjcP13rQfRRMJpPx');

print_r($socket->call('1uNJpNk8wxx61DWXf8c7', 'msg91-amittest', ['num1' => 11, 'num2' => 2]));


?>
