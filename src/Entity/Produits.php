<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitsRepository")
 */
class Produits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $produit;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $cat;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $photo;

    /**
     * @ORM\Column(type="integer")
     */
     private $label;

     /**
     * @ORM\Column(type="integer")
     */
    private $active;

    // Getters
    public function getId()
    {
        return $this->id;
    }
    public function getProduit()
    {
        return $this->produit;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getCat()
    {
        return $this->cat;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function getActive()
    {
        return $this->active;
    }
    // Setters
    public function setId($id)
    {
        return $this->id;
    }
    public function setProduit($produit)
    {
        return $this->produit;
    }
    public function setDescription($description)
    {
        return $this->description;
    }
    public function setCat($cat)
    {
        return $this->cat;
    }
    public function setPhoto($photo)
    {
        return $this->photo;
    }
    public function setLabel($label)
    {
        return $this->label;
    }
    public function setActive($active)
    {
        return $this->active;
    }
}
