<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Personne
 
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\AttributeOverrides({
 *    @ORM\AttributeOverride(name="emailCanonical", column=@ORM\Column(unique=false, nullable=true)),
 *    @ORM\AttributeOverride(name="usernameCanonical", column=@ORM\Column(unique=false, nullable=true))
 * })
 */
class Personne extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;
   
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
     * @ORM\Column(name="codepostal", type="string", length=10, nullable=true)
     * @Assert\Regex("/^[0-9]{5}$/")
     */
    private $codepostal;
    
    /**
     * @var string
     * @ORM\Column(name="codepostalParents", type="string", length=10, nullable=true)
     * @Assert\Regex("/^[0-9]{5}$/")
     */
    private $codepostalParents;
    
    /**
     * @var string
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;
    
    /**
     * @var string
     * @ORM\Column(name="villeParents", type="string", length=255, nullable=true)
     */
    private $villeParents;
    
    
    /**
     * @var datetime
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;
    
    /**
     * @var string
     *
     * @ORM\Column(name="adresseParents", type="string", length=255, nullable=true)
     */
    private $adresseParents;
    
    /**
     * @var string
     * @Assert\Regex("/^0[1-678]([-. ]?[0-9]{2}){4}$/")
     * @ORM\Column(name="telParents", type="string", length=255, nullable=true)
     */
    private $telSecondaire;
    
     /**
     * @var string
     * @ORM\Column(name="emailParents", type="string", length=255, nullable=true)
     * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide.",
     *     checkMX = true
     * )
     */    
    private $emailParents;

    /**
     * @var string
     * @Assert\Regex("/^0[1-68]([-. ]?[0-9]{2}){4}$/") 
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    private $mobile;
    
    /**
     * @var string
     * @Assert\Regex("/^0[1-68]([-. ]?[0-9]{2}){4}$/") 
     * @ORM\Column(name="mobileSecondaire", type="string", length=255, nullable=true)
     */
    private $mobileSecondaire;

    /**
     * @var string
     * @Assert\Regex("/^0[1-678]([-. ]?[0-9]{2}){4}$/")
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
     * @ORM\Column(name="divers", type="text", nullable=true)
     */
    private $divers;
    
    /**
     * @var boolean
     * @ORM\Column(name="inscrit", type="boolean", nullable=true)
     */
    private $inscrit;
    
    /**
     * @var boolean
     * @ORM\Column(name="licensePayee", type="boolean", nullable=true)
     */
    private $licensePayee;
    
    /**
     * @var boolean
     * @ORM\Column(name="licenseRecue", type="boolean", nullable=true)
     */
    private $licenseRecue;
        
    /**
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\RefPersonne")
     */
    private $refPersonne;
    
    /**
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Equipe")
     */
    private $refEquipe;
    
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
      return $this->username;
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

    /**
     * Set ville
     *
     * @param string $ville
     * @return Personne
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
   

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Personne
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set refEquipe
     *
     * @param \Basket\DatabaseBundle\Entity\Equipe $refEquipe
     * @return Personne
     */
    public function setRefEquipe(\Basket\DatabaseBundle\Entity\Equipe $refEquipe = null)
    {
        $this->refEquipe = $refEquipe;
    
        return $this;
    }

    /**
     * Get refEquipe
     *
     * @return \Basket\DatabaseBundle\Entity\Equipe 
     */
    public function getRefEquipe()
    {
        return $this->refEquipe;
    }
    

    /**
     * Set emailParents
     *
     * @param string $emailParents
     * @return Personne
     */
    public function setEmailParents($emailParents)
    {
        $this->emailParents = $emailParents;
    
        return $this;
    }

    /**
     * Get emailParents
     *
     * @return string 
     */
    public function getEmailParents()
    {
        return $this->emailParents;
    }

    /**
     * Set inscrit
     *
     * @param boolean $inscrit
     * @return Personne
     */
    public function setInscrit($inscrit)
    {
        $this->inscrit = $inscrit;
    
        return $this;
    }

    /**
     * Get inscrit
     *
     * @return boolean 
     */
    public function getInscrit()
    {
        return $this->inscrit;
    }

    /**
     * Set licensePayee
     *
     * @param boolean $licensePayee
     * @return Personne
     */
    public function setLicensePayee($licensePayee)
    {
        $this->licensePayee = $licensePayee;
    
        return $this;
    }

    /**
     * Get licensePayee
     *
     * @return boolean 
     */
    public function getLicensePayee()
    {
        return $this->licensePayee;
    }

    /**
     * Set licenseRecue
     *
     * @param boolean $licenseRecue
     * @return Personne
     */
    public function setLicenseRecue($licenseRecue)
    {
        $this->licenseRecue = $licenseRecue;
    
        return $this;
    }

    /**
     * Get licenseRecue
     *
     * @return boolean 
     */
    public function getLicenseRecue()
    {
        return $this->licenseRecue;
    }

    /**
     * Set codepostalParents
     *
     * @param string $codepostalParents
     * @return Personne
     */
    public function setCodepostalParents($codepostalParents)
    {
        $this->codepostalParents = $codepostalParents;
    
        return $this;
    }

    /**
     * Get codepostalParents
     *
     * @return string 
     */
    public function getCodepostalParents()
    {
        return $this->codepostalParents;
    }

    /**
     * Set villeParents
     *
     * @param string $villeParents
     * @return Personne
     */
    public function setVilleParents($villeParents)
    {
        $this->villeParents = $villeParents;
    
        return $this;
    }

    /**
     * Get villeParents
     *
     * @return string 
     */
    public function getVilleParents()
    {
        return $this->villeParents;
    }

    /**
     * Set mobileSecondaire
     *
     * @param string $mobileSecondaire
     * @return Personne
     */
    public function setMobileSecondaire($mobileSecondaire)
    {
        $this->mobileSecondaire = $mobileSecondaire;
    
        return $this;
    }

    /**
     * Get mobileSecondaire
     *
     * @return string 
     */
    public function getMobileSecondaire()
    {
        return $this->mobileSecondaire;
    }

    /**
     * Set telSecondaire
     *
     * @param string $telSecondaire
     * @return Personne
     */
    public function setTelSecondaire($telSecondaire)
    {
        $this->telSecondaire = $telSecondaire;
    
        return $this;
    }

    /**
     * Get telSecondaire
     *
     * @return string 
     */
    public function getTelSecondaire()
    {
        return $this->telSecondaire;
    }
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Personne
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }
    
    /**
     * Constructor
     * On définit le compte d'un nouvel utilisateur comme par défaut actif
     */
    public function __construct() {
      parent::__construct();
      $this->setEnabled(true);
      //$this->setRoles(array("ROLE_USER"));
    }

}
