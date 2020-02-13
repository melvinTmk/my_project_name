<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/security", name="security")
     */
    public function index()
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/enregistrement", name="registration")
     */
    public function registration()
    {
        return $this->render('security/registration.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/connexion", name="login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
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
