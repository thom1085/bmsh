<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller{
    /**
     * @Route("/admin", name="page-admin")
     */
    public function showAdmin(){
        return $this->render("admin/admin.html.twig");
    }
}