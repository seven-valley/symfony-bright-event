<?php
namespace App\Controller;

use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    
    /**
     * @Route("/", name="home")
     */
    public function home(PersonneRepository $repo):Response
    {
        $personnes = $repo->findAll();

        return $this->render("front/home.html.twig",['personnes'=>$personnes]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact():Response
    {
        return $this->render("front/contact.html.twig");
    }

    /**
     * @Route("/about-us-toto", name="about")
     */
    public function about():Response
    {
        return $this->render("front/about.html.twig");
    }
}