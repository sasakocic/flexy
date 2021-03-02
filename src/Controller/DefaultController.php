<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function index()
    {
        return $this->render('default/index.html.twig', ['greeting' => 'hello']);
    }

    /**
     * @Route("/api/hello/{name}")
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function apiExample(string $name)
    {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
        ]);
    }
}
