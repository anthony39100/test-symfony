<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjetController extends AbstractController

{
    /**
    * @Route("/projet", name="projet")
    */ 
    public function default()
    {
        return new Response(
            '<html><body>Home</body></html>'
        );
    }
}