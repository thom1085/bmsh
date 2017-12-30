<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller{
    /**
     * @Route("/admin", name="page-admin")
     */
    private function showAdmin(){
        // ne marche pas encore faut le formulaire
        if ( $_POST["password"] === "admin"){
            return $this->render("admin/admin.html.twig");
            }
        else{
            echo "TITS OR GTFO";
        }
    }
    private function addStore(){
        //
    }

}