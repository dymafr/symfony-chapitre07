<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(ContainerInterface $container): Response
    {
        $mylog = $container->get('App\\Service\\MyLog');

        $mylog->writeLog("Première utilisation de votre service");
        return $this->json([]);
    }
}
