<?php

namespace Tests\Framwork;
use Framwork\App;
use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testRedirectTrainingSlash()
    {
      $app = new App();
      $request = new ServerRequest('GET', '/demoslash/');
      $response=  $app->run($request);
      $this->assertContains('/demoslash', $response->getHeader('location'));
      $this->assertEquals(301, $response->getStatusCode());

    }
    public function testBlog (){
        $app = new App();
        $request = new ServerRequest('GET','/blog');
        $response = $app->run($request);  
        $this->assertContains('<h1>Bienvenue sur le blog</h1>', $response->getBody());
        $this->assertEquals(200,$response->getStatusCode());
    }
}