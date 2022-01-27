<?php

use GuzzleHttp\Psr7\ServerRequest;
use Psr\Http\Message\ServerRequestInterface;

require '../vendor/autoload.php';
$app = new \Framwork\App();


$response=$app ->run(GuzzleHttp\Psr7\ServerRequest::fromGlobals()); 