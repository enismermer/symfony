<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function number(): Response
    {
        $number = random_int(0, 100);
        $name   = "enis";

        return $this->render('about/index.html.twig', [
            'number' => $number,
            'name'   => $name
        ]);
    }
}
