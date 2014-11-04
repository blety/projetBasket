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
     * @ORM\Column(name="annee", type="datetime")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="club", type="string", length=255)
     */
    private $club;

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
     * Set club
     *
     * @param string $club
     * @return Equipe
     */
    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return string 
     */
    public function getClub()
    {
        return $this->club;
    }
}
