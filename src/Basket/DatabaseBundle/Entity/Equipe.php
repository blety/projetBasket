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
     * @ORM\Column(name="annee1", type="datetime", nullable=true)
     */
    private $annee1;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee2", type="datetime", nullable=true)
     */
    private $annee2;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee3", type="datetime", nullable=true)
     */
    private $annee3;
    

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
     * @ORM\Column(name="genre", type="boolean", nullable=true)
     */
    private $genre;
    
    /**
     * @var integer
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;
    
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
     * @ORM\JoinColumn(name="responsableEquipe_id", referencedColumnName="id", nullable=true)
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

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Equipe
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set annee1
     *
     * @param \DateTime $annee1
     * @return Equipe
     */
    public function setAnnee1($annee1)
    {
        $this->annee1 = $annee1;
    
        return $this;
    }

    /**
     * Get annee1
     *
     * @return \DateTime 
     */
    public function getAnnee1()
    {
        return $this->annee1;
    }

    /**
     * Set annee2
     *
     * @param \DateTime $annee2
     * @return Equipe
     */
    public function setAnnee2($annee2)
    {
        $this->annee2 = $annee2;
    
        return $this;
    }

    /**
     * Get annee2
     *
     * @return \DateTime 
     */
    public function getAnnee2()
    {
        return $this->annee2;
    }

    /**
     * Set annee3
     *
     * @param \DateTime $annee3
     * @return Equipe
     */
    public function setAnnee3($annee3)
    {
        $this->annee3 = $annee3;
    
        return $this;
    }

    /**
     * Get annee3
     *
     * @return \DateTime 
     */
    public function getAnnee3()
    {
        return $this->annee3;
    }
}
