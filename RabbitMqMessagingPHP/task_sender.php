<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('Php queue', false, false, false, false);

$msg = new AMQPMessage('Hi I hope this finds you well!!');
$channel->basic_publish($msg, '', 'Php queue');

echo " [patrickongeche@gmail.com] Sent 'Hi I hope this finds you well!'\n";

$channel->close();
$connection->close();
?>