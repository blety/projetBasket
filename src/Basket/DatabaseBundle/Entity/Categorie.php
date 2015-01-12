<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    /**
     * @var string
     * @ORM\Column(name="annee", type="string", nullable=true)
     * @Assert\Regex("/^19[0-9]{2}$/")
     */
    private $annee;
    
    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     * @ORM\OneToMany(targetEntity="Basket\DatabaseBundle\Entity\Equipe", mappedBy="categorie")
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="sigle", type="string", length=10)
     */
    private $sigle;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    
    /**
     * 
     */
    public function __toString() {
      return $this->categorie;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set sigle
     *
     * @param string $sigle
     * @return Categorie
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Get sigle
     *
     * @return string 
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     * @return Categorie
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime 
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}
