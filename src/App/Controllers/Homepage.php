<?php
namespace App\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Homepage
{

    public function index(Request $request, Application $app)
    {
        return $app['twig']->render('index.html.twig', []);
    }
}