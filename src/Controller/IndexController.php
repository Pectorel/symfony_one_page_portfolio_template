<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    #[Route("/")]
    public function home(): Response{

        $text = "Hello World";

        return $this->render("index/home.html.twig", [
            "text" => $text
        ]);

    }

}