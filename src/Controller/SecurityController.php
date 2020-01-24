<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
   /**
   *@Route("/delete/{id}", name="projet_delete", requirements={"id"="\d+"})
   */
   public function delete($id)
   {
      return $this->render('projet/index.html.twig', [
         'controller_name' => 'ProjetController',
      ]);
   }
}