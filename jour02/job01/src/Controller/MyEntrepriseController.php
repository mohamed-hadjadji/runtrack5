<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Projets;

class MyEntrepriseController extends AbstractController
{
    /**
     * @Route("myEntreprise", name="my_entreprise")
     */
    public function index()
    {
    	$repo = $this->getDoctrine()->getRepository(Projets::class);
    	$projets = $repo->findAll();
        return $this->render('my_entreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
            'projets' => $projets
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
    	 return $this->render('my_entreprise/home.html.twig', [
            'controller_name' => 'MyEntrepriseController',

        ]);
    }
    /**
     * @Route("/myEntreprise/project/{id}", name="project_page")
     */
    public function projectPage()
    {
         return $this->render('my_entreprise/projectPage.html.twig', [
            'controller_name' => 'MyEntrepriseController',
        ]);
    }
}
