<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrivatetoursController extends AbstractController
{
    /**
     * @Route("/privatetours", name="privatetours")
     */
    public function index()
    {
        return $this->render('privatetours/index.html.twig', [
            'controller_name' => 'PrivatetoursController',
        ]);
    }
}
