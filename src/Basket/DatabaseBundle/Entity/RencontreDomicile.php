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
     * @ORM\Column(name="convocation", type="datetime")
     */
    private $convocation;
    
    /**
     * @var \Equipe
     * 
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Equipe", cascade={"persist"})
     */
    private $equipeDom;
    
    /**
     * @var \Equipe
     * 
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Equipe", cascade={"persist"})
     */
    private $equipeAdv;
    
    /**
     * @var \Personne
     * 
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne", cascade={"persist"})
     */
    private $arbitreA;
    
    /**
     * @var \Personne
     * 
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne", cascade={"persist"})
     */
    private $arbitreB;
    
    /**
     * @var \Personne
     * 
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne", cascade={"persist"})
     */
    private $marqueurA;
    
    /**
     * @var \Personne
     * 
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne", cascade={"persist"})
     */
    private $marqueurB;
    
    /**
     * @var \Personne
     * @ORM\Column(name="marqueurC", nullable=true)
     * @ORM\OneToOne(targetEntity="Basket\DatabaseBundle\Entity\Personne", cascade={"persist"})
     */
    private $marqueurC;
    
    
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
}
