<?php

namespace App\Controller;

use PDO;
use App\Entity\Site;
use App\Model\Connection;
use App\Repository\SiteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'portfolio')]
    public function portfolio(SiteRepository $SiteRepository): Response
    {
        $projects = $SiteRepository->findAll();
        return $this->render('portfolio.html.twig', [
            'projects' => $projects,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig', [
            'controller_name' => 'HomeController',

        ]);
    }
}
