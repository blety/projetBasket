<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RencontreDomicile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Basket\DatabaseBundle\Entity\RencontreDomicileRepository")
 */
class RencontreDomicile extends Rencontre
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
     * @ORM\Column(name="convocation", type="time")
     */
    private $convocation;
    
    /**
     * @var \Salle
     * 
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Salle")
     */    
    private $salle;
    
    /**
     * @var \Personne
     * 
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne")
     */
    
    private $arbitreA;
    
    /**
     * @var \Personne
     * 
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne")
     */
    private $arbitreB;
    
    /**
     * @var \Personne
     * 
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne")
     */
    private $marqueurA;
    
    /**
     * @var \Personne
     * 
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne")
     */
    private $marqueurB;
    
    /**
     * @var \Personne
     * @ORM\Column(name="marqueurC", nullable=true)
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne")
     */
    private $marqueurC;
    
    /**
     * @var \Equipe
     * 
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Equipe")
     */
    private $equipeDom;
    
    /**
     * @var \Equipe
     * 
     * @ORM\ManyToOne(targetEntity="Basket\DatabaseBundle\Entity\Equipe")
     */
    private $equipeAdv;
        
    
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
     * Set convocation
     *
     * @param \DateTime $convocation
     * @return RencontreDomicile
     */
    public function setConvocation($convocation)
    {
        $this->convocation = $convocation;

        return $this;
    }

    /**
     * Get convocation
     *
     * @return \DateTime 
     */
    public function getConvocation()
    {
        return $this->convocation;
    }
   

    /**
     * Set arbitreA
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $arbitreA
     * @return RencontreDomicile
     */
    public function setArbitreA(\Basket\DatabaseBundle\Entity\Personne $arbitreA = null)
    {
        $this->arbitreA = $arbitreA;

        return $this;
    }

    /**
     * Get arbitreA
     *
     * @return \Basket\DatabaseBundle\Entity\Personne 
     */
    public function getArbitreA()
    {
        return $this->arbitreA;
    }

    /**
     * Set arbitreB
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $arbitreB
     * @return RencontreDomicile
     */
    public function setArbitreB(\Basket\DatabaseBundle\Entity\Personne $arbitreB = null)
    {
        $this->arbitreB = $arbitreB;

        return $this;
    }

    /**
     * Get arbitreB
     *
     * @return \Basket\DatabaseBundle\Entity\Personne 
     */
    public function getArbitreB()
    {
        return $this->arbitreB;
    }

    /**
     * Set marqueurC
     *
     * @param string $marqueurC
     * @return RencontreDomicile
     */
    public function setMarqueurC($marqueurC)
    {
        $this->marqueurC = $marqueurC;

        return $this;
    }

    /**
     * Get marqueurC
     *
     * @return string 
     */
    public function getMarqueurC()
    {
        return $this->marqueurC;
    }

    /**
     * Set marqueurA
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $marqueurA
     * @return RencontreDomicile
     */
    public function setMarqueurA(\Basket\DatabaseBundle\Entity\Personne $marqueurA = null)
    {
        $this->marqueurA = $marqueurA;

        return $this;
    }

    /**
     * Get marqueurA
     *
     * @return \Basket\DatabaseBundle\Entity\Personne 
     */
    public function getMarqueurA()
    {
        return $this->marqueurA;
    }

    /**
     * Set marqueurB
     *
     * @param \Basket\DatabaseBundle\Entity\Personne $marqueurB
     * @return RencontreDomicile
     */
    public function setMarqueurB(\Basket\DatabaseBundle\Entity\Personne $marqueurB = null)
    {
        $this->marqueurB = $marqueurB;

        return $this;
    }

    /**
     * Get marqueurB
     *
     * @return \Basket\DatabaseBundle\Entity\Personne 
     */
    public function getMarqueurB()
    {
        return $this->marqueurB;
    }

    /**
     * Set salle
     *
     * @param \Basket\DatabaseBundle\Entity\Salle $salle
     * @return RencontreDomicile
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
     * Set equipeDom
     *
     * @param \Basket\DatabaseBundle\Entity\Equipe $equipeDom
     * @return RencontreDomicile
     */
    public function setEquipeDom(\Basket\DatabaseBundle\Entity\Equipe $equipeDom = null)
    {
        $this->equipeDom = $equipeDom;

        return $this;
    }

    /**
     * Get equipeDom
     *
     * @return \Basket\DatabaseBundle\Entity\Equipe 
     */
    public function getEquipeDom()
    {
        return $this->equipeDom;
    }

    /**
     * Set equipeAdv
     *
     * @param \Basket\DatabaseBundle\Entity\Equipe $equipeAdv
     * @return RencontreDomicile
     */
    public function setEquipeAdv(\Basket\DatabaseBundle\Entity\Equipe $equipeAdv = null)
    {
        $this->equipeAdv = $equipeAdv;

        return $this;
    }

    /**
     * Get equipeAdv
     *
     * @return \Basket\DatabaseBundle\Entity\Equipe 
     */
    public function getEquipeAdv()
    {
        return $this->equipeAdv;
    }
}
