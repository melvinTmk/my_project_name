<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;

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

    /**
     * @Route("/connexion", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // message erreur:
        $error = $authenticationUtils->getLastAuthenticationError();
        // récupérer du dernier username saisi:
        $lastUsername = $authenticationUtils->getLastUsername();
        dump($lastUsername);
        return $this->render('security/login.html.twig',[
            'last_username' => $lastUsername,
            'error' => $error
        ]);
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/page_ludi", name="ludi")
     */
    public function ludi()
    {
        return $this->render('security/pageLudi.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/page_melvin", name="melvin")
     */
    public function melvin()
    {
        return $this->render('security/pageMelvin.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/page_alex", name="alex")
     */
    public function alex()
    {
        return $this->render('security/pageAlex.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

}
