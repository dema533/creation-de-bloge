<?php

namespace Framwork;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


class App
{
    // utilisation des objets request et response pour representer requette et la reponse
    //soit empêcher les anti-slash à la fin des URLs
    // verifier l'url si elle fini par un slash faire un redirection
    
    public function run (ServerRequestInterface $request): ResponseInterface {
        $uri =$request->getUri()->getPath();
        if (!empty($uri) && $uri[-1] ==="/") {
            $response = new Response();
            $response = $response->withStatus(301);
            $response = $response->withHeader('location:', substr($uri,0,-1));
            return $response;
        }
        $response = new Response(); //Response une implementation de Guzzle
        $response->getBody()->write('Bonjour tout le monde ');
        return $response;
       
    }
}