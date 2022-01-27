<?php
use function Http\Response\send;

require '../vendor/autoload.php';
$app = new \Framwork\App();


$response=$app ->run(GuzzleHttp\Psr7\ServerRequest::fromGlobals()); 
Http\Response\send($response);
