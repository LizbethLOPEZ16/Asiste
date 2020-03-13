<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookNowController extends AbstractController
{
    /**
     * @Route("/booknow", name="booknow")
     */
    public function index()
    {
        return $this->render('booknow/index.html.twig', [
            'controller_name' => 'BookNowController',
        ]);
    }
}
