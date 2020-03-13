<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VineyardsController extends AbstractController
{
    /**
     * @Route("/vineyards", name="vineyards")
     */
    public function index()
    {
        return $this->render('vineyards/index.html.twig', [
            'controller_name' => 'VineyardsController',
        ]);
    }
}
