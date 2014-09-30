<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrainement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Basket\DatabaseBundle\Entity\EntrainementRepository")
 */
class Entrainement
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
     * @ORM\Column(name="jour", type="datetime")
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="obligatoire", type="boolean")
     */
    private $obligatoire;
    
    /**
     * @var \Salle
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Salle", cascade={"persist"})
     */
    private $salle;
    
    /**
     * @var \Personne
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne", cascade={"persist"})
     */
    private $entraineur;
    
    
    /**
     * @var \Equipe
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Equipe", cascade={"persist"})
     */
    private $equipe;
    
    
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
     * Set jour
     *
     * @param \DateTime $jour
     * @return Entrainement
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     * @return Entrainement
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Entrainement
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set obligatoire
     *
     * @param boolean $obligatoire
     * @return Entrainement
     */
    public function setObligatoire($obligatoire)
    {
        $this->obligatoire = $obligatoire;

        return $this;
    }

    /**
     * Get obligatoire
     *
     * @return boolean 
     */
    public function getObligatoire()
    {
        return $this->obligatoire;
    }

    

    /**
     * Set salle
     *
     * @param \Basket\DatabaseBundle\Entity\Salle $salle
     * @return Entrainement
     */
    public function setSalle(\Basket\DatabaseBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \Basket\DatabaseBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set entraineur
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $entraineur
     * @return Entrainement
     */
    public function setEntraineur(\Basket\DatabaseBundle\Entity\Personne $entraineur = null)
    {
        $this->entraineur = $entraineur;

        return $this;
    }

    /**
     * Get entraineur
     *
     * @return \Basket\DatabaseBundle\Entity\Personne 
     */
    public function getEntraineur()
    {
        return $this->entraineur;
    }

    /**
     * Set equipe
     *
     * @param \Basket\DatabaseBundle\Entity\Equipe $equipe
     * @return Entrainement
     */
    public function setEquipe(\Basket\DatabaseBundle\Entity\Equipe $equipe = null)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return \Basket\DatabaseBundle\Entity\Equipe 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }
}
