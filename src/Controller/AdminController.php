<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller{
    /**
     * @Route("/admin", name="admin-page")
     */
    function showAdmin(){
        return $this->render("admin/admin.html.twig");
    }
    /**
     * @Route("/admin/{page}", name="admin-{page}")
     */
    public function showAdminPage($page){
        return $this->render("admin/$page.html.twig");
    }
    function addStore(){
        //
    }

}