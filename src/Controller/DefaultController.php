<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller{
    /**
     * @Route("/", name="index")
     */
    public function showIndex(){
        return $this->render("base/index.html.twig");
    }
    /**
     * @Route("/{page}", name="{page}")
     */
    public function showPage($page){
        return $this->render("base/$page.html.twig");
    }
    // public function getYear($year){
    //     return date("$year");
    // }
}