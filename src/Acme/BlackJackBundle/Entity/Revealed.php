<?php

namespace Acme\BlackJackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Revealed
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Revealed
{
    /**
     * @ORM\ManyToOne(targetEntity="Round", inversedBy="revealed")
     * @ORM\JoinColumn(name="round_id", referencedColumnName="id")
     **/
    protected $round;

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Revealed
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set round
     *
     * @param \Acme\BlackJackBundle\Entity\Round $round
     * @return Revealed
     */
    public function setRound(\Acme\BlackJackBundle\Entity\Round $round = null)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get round
     *
     * @return \Acme\BlackJackBundle\Entity\Round 
     */
    public function getRound()
    {
        return $this->round;
    }
}
