<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RencontreExterieur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Basket\DatabaseBundle\Entity\RencontreExterieurRepository")
 */
class RencontreExterieur extends Rencontre
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
     * @ORM\Column(name="heureDepart", type="time")
     */
    private $heureDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=255)
     */
    private $transport;
    
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
     * Set heureDepart
     *
     * @param \DateTime $heureDepart
     * @return RencontreExterieur
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    /**
     * Get heureDepart
     *
     * @return \DateTime 
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * Set transport
     *
     * @param string $transport
     * @return RencontreExterieur
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return string 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set equipeDom
     *
     * @param \Basket\DatabaseBundle\Entity\Equipe $equipeDom
     * @return RencontreExterieur
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
     * @return RencontreExterieur
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
