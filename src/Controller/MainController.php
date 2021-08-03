<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(ContainerBagInterface $c)
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/second", name="second")
     */
    public function second(ContainerBagInterface $c)
    {
        return $this->render('second.html.twig');
    }

}
