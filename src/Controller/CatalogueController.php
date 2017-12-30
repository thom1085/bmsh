<?php

// Controller concernant le catalogue
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogueController{
    public function addProduct($nom,$cat,$photo,$label,$actif,$desc){
        // Entity Manager c'est le truc qui sert à faire des choses dans la BDD sans rien connaître au langage SQL
        $em = $this->getDoctrine()->getManager();
        $product = new Produits();
        $product->setProduit($nom)->setCat($cat)->setPhoto($photo)->setLabel($label)->setActive($actif)->setDescription($desc);
        // une fois sur le throne, se concentre bien
        $em->persist($product);
        // tire la chasse
        $em->flush();
        return new Response("<strong>$product a été ajouté dans la base de donnée</strong>");
    }
    function hideProd($actif){
        $product = new Produits();
        $product->getActive($actif);
        if ($actif == 0){
            // ne pas afficher le produit
        }
    }
    public function updateProduct($id){
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);
        //

    }
    function showFullCatalogue(){
        $repository = $this->getDoctrine()->getRepository(Produits::class);
        $products = $repository->findAll();
    }
}