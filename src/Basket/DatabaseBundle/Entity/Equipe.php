<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * equipe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Equipe
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
     * @var \DateTime
     *
     * @ORM\Column(name="annee", type="datetime", nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var string
     * @ORM\Column(name="sigle", type="string", length=255)
     */
    private $sigle;
    
    /**
     * @var string
     * @ORM\Column(name="niveau", type="string", length=255, nullable=true)
     */
    private $niveau;
        
    /**
     * @var boolean
     *
     * @ORM\Column(name="genre", type="boolean")
     */
    private $genre;
    
    /**
     * @ORM\OneToMany(targetEntity="Basket\DatabaseBundle\Entity\Personne", mappedBy="nom")
     */
    private $joueur;
    
    /**
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Categorie", inversedBy="categorie")
     */
    private $categorie;
    
    /**
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne", cascade={"persist"})
     */
    private $responsableEquipe;
      
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
     * Set annee
     *
     * @param \DateTime $annee
     * @return equipe
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

    /**
     * Set genre
     *
     * @param boolean $genre
     * @return equipe
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return boolean 
     */
    public function getGenre()
    {
        return $this->genre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->joueur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add joueur
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $joueur
     * @return equipe
     */
    public function addJoueur(\Basket\DatabaseBundle\Entity\Personne $joueur)
    {
        $this->joueur[] = $joueur;

        return $this;
    }

    /**
     * Remove joueur
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $joueur
     */
    public function removeJoueur(\Basket\DatabaseBundle\Entity\Personne $joueur)
    {
        $this->joueur->removeElement($joueur);
    }

    /**
     * Get joueur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set categorie
     *
     * @param \Basket\DatabaseBundle\Entity\Categorie $categorie
     * @return Equipe
     */
    public function setCategorie(\Basket\DatabaseBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Basket\DatabaseBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * Set nom
     *
     * @param string $nom
     * @return Equipe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sigle
     *
     * @param string $sigle
     * @return Equipe
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
     * Set niveau
     *
     * @param string $niveau
     * @return Equipe
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set responsableEquipe
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $responsableEquipe
     * @return Equipe
     */
    public function setResponsableEquipe(\Basket\DatabaseBundle\Entity\Personne $responsableEquipe = null)
    {
        $this->responsableEquipe = $responsableEquipe;
    
        return $this;
    }

    /**
     * Get responsableEquipe
     *
     * @return \Basket\DatabaseBundle\Entity\Personne 
     */
    public function getResponsableEquipe()
    {
        return $this->responsableEquipe;
    }
}
