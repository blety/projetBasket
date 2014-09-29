<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Saison
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
     * @var boolean
     *
     * @ORM\Column(name="inscrit", type="boolean")
     */
    private $inscrit;
    
    /**
     * @ORM\Column(name="annee", type="datetime")
     */
    private $annee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paye", type="boolean")
     */
    private $paye;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dossierRendu", type="boolean")
     */
    private $dossierRendu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="licenceRecue", type="boolean")
     */
    private $licenceRecue;

    /**
     * @var string
     *
     * @ORM\Column(name="assurance", type="string", length=10)
     */
    private $assurance;

    /**
     * @var string
     *
     * @ORM\Column(name="surclassement", type="string", length=10)
     */
    private $surclassement;


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
     * Set inscrit
     *
     * @param boolean $inscrit
     * @return Saison
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
     * Set paye
     *
     * @param boolean $paye
     * @return Saison
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return boolean 
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set dossierRendu
     *
     * @param boolean $dossierRendu
     * @return Saison
     */
    public function setDossierRendu($dossierRendu)
    {
        $this->dossierRendu = $dossierRendu;

        return $this;
    }

    /**
     * Get dossierRendu
     *
     * @return boolean 
     */
    public function getDossierRendu()
    {
        return $this->dossierRendu;
    }

    /**
     * Set licenceRecue
     *
     * @param boolean $licenceRecue
     * @return Saison
     */
    public function setLicenceRecue($licenceRecue)
    {
        $this->licenceRecue = $licenceRecue;

        return $this;
    }

    /**
     * Get licenceRecue
     *
     * @return boolean 
     */
    public function getLicenceRecue()
    {
        return $this->licenceRecue;
    }

    /**
     * Set assurance
     *
     * @param string $assurance
     * @return Saison
     */
    public function setAssurance($assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return string 
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set surclassement
     *
     * @param string $surclassement
     * @return Saison
     */
    public function setSurclassement($surclassement)
    {
        $this->surclassement = $surclassement;

        return $this;
    }

    /**
     * Get surclassement
     *
     * @return string 
     */
    public function getSurclassement()
    {
        return $this->surclassement;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     * @return Saison
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
