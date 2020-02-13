<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AideController extends AbstractController
{
    // /**
    //  * @Route("/aide", name="aide")
    //  */
    // public function index()
    // {
    //     return $this->render('aide/index.html.twig', [
    //         'controller_name' => 'AideController',
    //     ]);
    // }

    /**
     * @Route("/", name="acceuil")
     */
    public function home()
    {
        return $this->render('aide/home.html.twig',[
            'controller_name' => 'AideController',
        ]);
    }

    /**
     * @Route("/infos_theoriques", name="theory")
     */
    public function theory()
    {
        return $this->render('aide/theory.html.twig',[
            'controller_name' => 'AideController',
        ]);
    }

}
