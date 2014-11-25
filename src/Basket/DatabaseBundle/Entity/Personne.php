<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Personne
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Personne
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
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Equipe", inversedBy="numEquipe")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;
    
    /**
     * @var string
     * @ORM\Column(name="codepostal", type="string", length=10)
     * @Assert\Regex("/^[0-9]{5}$/")
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseParents", type="string", length=255)
     */
    private $adresseParents;

    /**
     * @var string
     * @Assert\Regex("/^0[1-68]([-. ]?[0-9]{2}){4}$/") 
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    private $mobile;

    /**
     * @var string
     * @Assert\Regex("/^0[1-68]([-. ]?[0-9]{2}){4}$/")
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     * @Assert\Regex("/^[A-Z]{2}[0-9]{6}$/")
     * @ORM\Column(name="license", type="string", length=255)
     */
    private $license;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $divers;
    
    /**
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\RefPersonne", inversedBy="type")
     */
    private $refPersonne;

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
     * Set nom
     *
     * @param string $nom
     * @return Personne
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
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Personne
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Personne
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set adresseParents
     *
     * @param string $adresseParents
     * @return Personne
     */
    public function setAdresseParents($adresseParents)
    {
        $this->adresseParents = $adresseParents;

        return $this;
    }

    /**
     * Get adresseParents
     *
     * @return string 
     */
    public function getAdresseParents()
    {
        return $this->adresseParents;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     * @return Personne
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return integer 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Personne
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set license
     *
     * @param integer $license
     * @return Personne
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * Get license
     *
     * @return integer 
     */
    public function getLicense()
    {
        return $this->license;
    }


    /**
     * Set divers
     *
     * @param string $divers
     * @return Personne
     */
    public function setDivers($divers)
    {
        $this->divers = $divers;

        return $this;
    }

    /**
     * Get divers
     *
     * @return string 
     */
    public function getDivers()
    {
        return $this->divers;
    }


    /**
     * Set refPersonne
     *
     * @param \Basket\DatabaseBundle\Entity\RefPersonne $refPersonne
     * @return Personne
     */
    public function setRefPersonne(\Basket\DatabaseBundle\Entity\RefPersonne $refPersonne = null)
    {
        $this->refPersonne = $refPersonne;

        return $this;
    }

    /**
     * Get refPersonne
     *
     * @return \Basket\DatabaseBundle\Entity\RefPersonne 
     */
    public function getRefPersonne()
    {
        return $this->refPersonne;
    }
    
    public function __toString(){
      return $this->nom;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Personne
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    
        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }
}
