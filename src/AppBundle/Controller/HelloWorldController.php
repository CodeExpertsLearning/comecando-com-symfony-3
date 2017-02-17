<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldController extends Controller
{
    /**
     * @Route("/hello-world")
     */
    public function helloWorld()
    {
        return $this->render('hello_world/hello.html.twig', ['name' => "Nanderson Castro"]);
    }
}
