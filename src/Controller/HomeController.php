<?php

namespace App\Controller;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ManagerRegistry $mr): Response
    {
        $allclient= $mr->getRepository(User::class)->findAll();
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'allclient'=>$allclient

            
        ]);
    }

    
}
