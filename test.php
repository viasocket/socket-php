<?php
require __DIR__ . '/vendor/autoload.php';

use sokt\sokt;

$sokt = new sokt('PROJECT-NAME', 'AUTHKEY');

print_r($sokt->call('FLOW-IDENTIFIER', 'FLOW-NAME', ['num1' => 111, 'num2' => 2222, 'num5' => 2222, 'num6' => 1111]));

// print_r($sokt->call('FLOW-IDENTIFIER', 'msg91-amittest', '{"name":"rahul 3 4"}'));

// print_r($sokt->call('FLOW-IDENTIFIER', 'msg91-amittest', 'simple str'));

?>
