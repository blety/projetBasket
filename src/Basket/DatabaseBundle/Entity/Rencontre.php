<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Rencontre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Basket\DatabaseBundle\Entity\RencontreRepository")
 */
class Rencontre
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
     * @ORM\Column(name="score", type="string", length=255)
     * @Assert\Regex("/^[0-9]+-[0-9]+$/") 
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="divers", type="text", nullable=true)
     */
    private $divers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var \Time
     * 
     * @ORM\Column(name="heureMatch", type="time")
     */
    private $heureMatch;
    
    

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
     * Set score
     *
     * @param integer $score
     * @return Rencontre
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set divers
     *
     * @param string $divers
     * @return Rencontre
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
     * Set date
     *
     * @param \DateTime $date
     * @return Rencontre
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heureMatch
     *
     * @param \DateTime $heureMatch
     * @return Rencontre
     */
    public function setHeureMatch($heureMatch)
    {
        $this->heureMatch = $heureMatch;

        return $this;
    }

    /**
     * Get heureMatch
     *
     * @return \DateTime 
     */
    public function getHeureMatch()
    {
        return $this->heureMatch;
    }
    
}
